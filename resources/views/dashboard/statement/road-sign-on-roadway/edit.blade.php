@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Изменить Ведомость Наличия и технического состояния дорожных знаков на автомобильной дороге:'"
                :routes="['road-sign-on-roadway.index']"
                :breadcrumbs="['Список Ведомостей Наличия и технического состояния дорожных знаков на автомобильной дороге','Изменить Ведомость Наличия и технического состояния дорожных знаков на автомобильной дороге']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Изменить Ведомость Наличия и технического состояния дорожных знаков на автомобильной дороге
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:road-sign-on-roadway.edit :road-sign-on-roadway="$roadSignOnRoadway"/>
                </div>
            </div>
        </div>
    </div>


@endsection
