@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Создать Ведомость Ширины Проезжей Части'"
                :routes="['width-roadway-on-highway.index']"
                :breadcrumbs="['Список Ведомостей Ширины Проезжей Части','Создать Ведомость Ширины Проезжей Части']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Создать Ведомость Ширины Проезжей Части
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:width-roadway-on-highway.create/>
                </div>
            </div>
        </div>
    </div>
@endsection
