@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Создать Ведомость ЖД переездов на автомобильной дороге'"
                :routes="['railway-transfer-on-roadway.index']"
                :breadcrumbs="['Список Ведомостей ЖД переездов на автомобильной дороге','Создать Ведомость ЖД переездов на автомобильной дороге']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Создать Ведомость ЖД переездов на автомобильной дороге
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:railway-transfer-on-roadway.create/>
                </div>
            </div>
        </div>
    </div>


@endsection
