@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Изменить Наличия коммуникаций в пределах полосы отвода на автомобильной дороге'"
                :routes="['cwb-on-roadway.index']"
                :breadcrumbs="['Список Ведомостей Наличия коммуникаций в пределах полосы отвода на автомобильной дороге','Изменить Ведомость Наличия коммуникаций в пределах полосы отвода на автомобильной дороге']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Изменить Ведомость Наличия коммуникаций в пределах полосы отвода на автомобильной дороге
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:communication-within-the-band-on-roadway.edit :communication-within-the-band-on-roadway="$communicationWithinTheBandOnRoadway"/>
                </div>
            </div>
        </div>
    </div>


@endsection

