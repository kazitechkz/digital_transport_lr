@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Изменить Тип Установки Светофорных Объектов:' . $typeTrafficLight->title_ru"
                :routes="['side.index']"
                :breadcrumbs="['Список  Типов Установок Светофорных Объектов','Изменить Тип Установки Светофорных Объектов']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Изменить Тип Установки Светофорных Объектов {{$typeTrafficLight->title_ru}}
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:type-traffic-light.edit :type-traffic-light="$typeTrafficLight"/>
                </div>
            </div>
        </div>
    </div>


@endsection
