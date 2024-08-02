@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Изменить Ведомость технического состояния и озеленения на автомобильной дороге'"
                :routes="['landscaping-on-roadway.index']"
                :breadcrumbs="['Список Ведомостей технического состояния и озеленения на автомобильной дороге','Изменить Ведомость технического состояния и озеленения на автомобильной дороге']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Изменить Ведомость ЖД переездов на автомобильной дороге
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:landscaping-on-roadway.edit :landscaping-on-roadway="$landscapingOnRoadway"/>
                </div>
            </div>
        </div>
    </div>


@endsection

