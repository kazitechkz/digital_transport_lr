@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Изменить Ведомость продольного профиля на автомобильной дороге:'"
                :routes="['longitudinal-profile-of-the-road.index']"
                :breadcrumbs="['Список Ведомостей продольного профиля на автомобильной дороге','Изменить Ведомость продольного профиля на автомобильной дороге']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Изменить Ведомость продольного профиля на автомобильной дороге
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:longitudinal-profile-of-the-road.edit :longitudinal-profile-of-the-road="$longitudinalProfileOfTheRoad"/>
                </div>
            </div>
        </div>
    </div>


@endsection
