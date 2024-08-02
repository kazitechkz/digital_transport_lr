@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Создать Ведомость пересечений и примыканий на автомобильной дороге'"
                :routes="['ij-on-roadway.index']"
                :breadcrumbs="['Список Ведомостей пересечений и примыканий на автомобильной дороге','Создать Ведомость пересечений и примыканий на автомобильной дороге']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Создать Ведомость пересечений и примыканий на автомобильной дороге
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:intersection-and-junction-on-roadway.create/>
                </div>
            </div>
        </div>
    </div>


@endsection
