@extends('layout.lp')
@push('css')
    <link rel="stylesheet" href="{{asset('lp/map.css')}}">
@endpush
@section('lp-content')
    <div class="row">
        <div class="col-md-3">
            <div class="jumbotron">
                <label for="street_id">Выберите улицу</label>
                <select class="width-full" id="street_id">
                    <option>Улица Сарайшык</option>
                </select>
                <table class="table">

                    <tbody>
                        <tr>
                            <th scope="row">Протяженность</th>
                            <td>978</td>
                        </tr>
                        <tr>
                            <th scope="row">Ширина</th>
                            <td>12,5 м</td>
                        </tr>
                        <tr>
                            <th scope="row">Уклон</th>
                            <td>(-28 - 54) %</td>
                        </tr>
                        <tr>
                            <th scope="row">Кол-во пересечений и примыканий</th>
                            <td><p>слева - 5</p><p>справа - 14</p></td>
                        </tr>
                        <tr>
                            <th scope="row">Наличия коммуникаций</th>
                            <td>
                                <p>Решеток - 1</p>
                                <p>Люков - 2</p>
                                <p>Линий связи - 0</p>
                                <p>Ж/Д пути - 0</p>
                                <p>Высоковольтная ЛЭП - 0</p>
                                <p>Низковольтная ЛЭП - 3</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Наличия дорожных знаков</th>
                            <td>
                                <p>Слева - 11</p>
                                <p>Справа - 9</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Тип покрытия</th>
                            <td>Асфальтобетон</td>
                        </tr>
                        <tr>
                            <th scope="row">Наличия пешеходных переходов</th>
                            <td>наземный в одном уровне (есть)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-9">
            <div id="map"></div>
        </div>
    </div>

@endsection
@push('js')
    <script crossorigin src="https://cdn.jsdelivr.net/npm/@babel/standalone@7/babel.min.js"></script>
    <script src="https://api-maps.yandex.ru/v3/?apikey=cab8733e-b874-40c2-afa4-8f41a1ba0f31&lang=ru_RU"></script>
    <script
        data-plugins="transform-modules-umd"
        data-presets="env"
        type="text/babel"
        src="{{asset('lp/js/common.js')}}"
    ></script>
    <script data-plugins="transform-modules-umd" data-presets="env" type="text/babel">
        import { LOCATION, LINES_PROPS, LINE_PR, LUK_MARKER, LINE_TR, LUK_SF } from '{{asset('lp/js/common.js')}}';

        window.map = null;

        main();
        async function main() {
            // Wait for all API elements to be loaded
            await ymaps3.ready;

            // Create a custom control class for a hint window
            class HintWindow extends ymaps3.YMapComplexEntity {
                constructor() {
                    super();
                    this._element = null;
                    this._detachDom = null;
                    this._unwatchSearchContext = null;
                }

                // Method to create a DOM control element
                _createElement() {
                    const windowElement = document.createElement('div');
                    windowElement.className = 'hintWindow';
                    return windowElement;
                }

                // Callback method triggered on hint context change, responsible for updating the text in the hint window
                _searchContextListener() {
                    const context = this._consumeContext(YMapHintContext);
                    if (context && context.hint) {
                        this._element.innerHTML = context.hint;
                    }
                }

                // Method for attaching the control to the map
                _onAttach() {
                    this._element = this._createElement();
                    this._unwatchSearchContext = this._watchContext(YMapHintContext, this._searchContextListener.bind(this));
                    this._detachDom = ymaps3.useDomContext(this, this._element, this._element);
                }

                // Method for detaching the control from the map
                _onDetach() {
                    if (this._unwatchSearchContext) {
                        this._unwatchSearchContext();
                    }
                    if (this._detachDom) {
                        this._detachDom();
                    }
                }
            }

            const { YMap, YMapDefaultSchemeLayer, YMapDefaultFeaturesLayer, YMapFeature } = ymaps3;

            // Load the package with the hint, extract the class to create the hint object and the hint context
            const { YMapHint, YMapHintContext } = await ymaps3.import('@yandex/ymaps3-hint@0.0.1');
            // Load the package with the default marker, extract the class to create the default marker object
            const { YMapDefaultMarker } = await ymaps3.import('@yandex/ymaps3-markers@0.0.1');

            // Initialize the map
            map = new YMap(
                // Pass the link to the HTMLElement of the container
                document.getElementById('map'),
                // Pass the map initialization parameters
                { location: LOCATION },
                [
                    // Add a map scheme layer
                    new YMapDefaultSchemeLayer({}),
                    // Add a layer of geo objects
                    new YMapDefaultFeaturesLayer({}),
                ]
            );

            /* Create a hint object and add it to the map
               As parameters, provide a function that returns the hint message of your geo object */
            const hint = new YMapHint({ hint: (object) => object?.properties?.hint });
            map.addChild(hint);

            // Add your custom hint window to the hint, which will be displayed when you hover over the geo object
            hint.addChild(new HintWindow({}));

            // Create and add lines to the map with a hint message (properties.hint)
            LINES_PROPS.forEach((lineProps) => {
                map.addChild(new YMapFeature({ ...lineProps, style: { stroke: [{ color: '#006efc', width: 10 }] } }));
            });
            // Create and add lines to the map with a hint message (properties.hint)
            LINE_PR.forEach((lineProps) => {
                map.addChild(new YMapFeature({ ...lineProps, style: { stroke: [{ color: '#ff0101', width: 6 }] } }));
            });
            // Create and add lines to the map with a hint message (properties.hint)
            LINE_TR.forEach((lineProps) => {
                map.addChild(new YMapFeature({ ...lineProps, style: { stroke: [{ color: '#6dfa47', width: 6 }] } }));
            });
            LUK_MARKER.forEach((markerProps) => {
                map.addChild(new YMapDefaultMarker({...markerProps, color: '#fdd000'}));
            });
            LUK_SF.forEach((markerProps) => {
                map.addChild(new YMapDefaultMarker({...markerProps, color: '#04e6fc'}));
            });
        }
    </script>
@endpush
