@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Создать Тип Установки Светофорных Объектов'"
                :routes="['type-traffic-light.index']"
                :breadcrumbs="['Список Типов Установок Светофорных Объектов','Создать Тип Установки Светофорных Объектов']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Создать Тип Установки Светофорных Объектов
                </p>
                <div class="mt-4 space-y-4">
                <livewire:type-traffic-light.create/>
                </div>
            </div>
        </div>
    </div>


@endsection
