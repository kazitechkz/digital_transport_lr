@extends('layout.lp')
@push('css')
    <style>
        #map {
            margin-top: 100px;
            width: 100%;
            height: 70vh;
        }
    </style>

@endpush
@section('lp-content')
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-9">
            <div id="map"></div>
        </div>
    </div>

@endsection
@push('js')
    <script src="https://api-maps.yandex.ru/v3/?apikey=cab8733e-b874-40c2-afa4-8f41a1ba0f31&lang=ru_RU"></script>
    <script>

        initMap();

        async function initMap() {
            // Промис `ymaps3.ready` будет зарезолвлен, когда загрузятся все компоненты основного модуля API
            await ymaps3.ready;
            const {
                YMap,
                YMapDefaultSchemeLayer,
                YMapDefaultFeaturesLayer,
                YMapFeature,
                YMapControls
            } = ymaps3;
            const {YMapZoomControl} = await ymaps3.import('@yandex/ymaps3-controls@0.0.1');
            // Иницилиазируем карту
            const map = new YMap(
                document.getElementById('map'),
                {
                    location: {
                        center: [71.426837, 51.134660],
                        zoom: 12
                    }
                },
                [
                    new YMapDefaultSchemeLayer({}),
                    new YMapDefaultFeaturesLayer({})
                ]
            );
            // Using YMapControls you can change the position of the control.
            map.addChild(
                // Here we place the control on the right
                new YMapControls({position: 'right'})
                    // Add the first zoom control to the map
                    .addChild(new YMapZoomControl({}))
            );

            let INITIAL_LINE_COORDINATES = [
                {
                    geometry: {
                        type: 'LineString',
                        coordinates: [
                            [71.416048, 51.136416],
                            [71.426665, 51.134588],
                            [71.437553, 51.132666],
                        ]
                    },
                    properties: {
                        hint: `<b>The Thames River</b>, flowing through London, is a historic <br> waterway famed for iconic landmarks like the Tower Bridge. <br> It's the cleanest metropolitan river, supporting diverse marine life.`
                    }
                }
            ];
            INITIAL_LINE_COORDINATES.forEach((lineProps) => {
                map.addChild(new YMapFeature({...lineProps, style: {stroke: [{color: 'rgba(255,0,0,0.9)', width: 8}]}}));
            });
        }
    </script>
@endpush
