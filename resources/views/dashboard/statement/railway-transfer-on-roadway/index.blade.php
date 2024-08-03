@extends("layout.dashboard")
@section("content")
    <div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6 px-4">
        <div class="col-span-12">
            <x-reference-book.greeting-card
                :image-src="asset('assets/images/card-images/railway-transfer-on-roadway.webp')"
                :title="'Ведомость ЖД переездов на автомобильной дороге'"
                :sub-title="'Ведомость ЖД переездов на автомобильной дороге'"
                :link-title="'Создать Ведомость ЖД переездов на автомобильной дороге'"
                :route="'railway-transfer-on-roadway.create'"
            />
            <div class="mt-4 sm:mt-5 lg:mt-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                        Список Ведомостей ЖД переездов на автомобильной дороге
                    </h2>
                </div>
                <div class="card mt-3 p-3">
                    <div class="is-scrollbar-hidden min-w-full">
                        <livewire:railway-transfer-on-roadway.railway-transfer-on-roadway-table/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
