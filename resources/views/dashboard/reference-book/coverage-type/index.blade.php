@extends("layout.dashboard")
@section("content")
    <div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6 px-4">
        <div class="col-span-12 lg:col-span-8 xl:col-span-9">
            <x-reference-book.greeting-card
                :image-src="asset('assets/images/card-images/coverage-type.webp')"
                :title="'Дорожное покрытие'"
                :sub-title="'Дорожное покрытия полотна, н-р Асфальтобетон, дорожный бетон и тд'"
                :link-title="'Создать новое полотно'"
                :route="'coverage-type.create'"
            />
            <div class="mt-4 sm:mt-5 lg:mt-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                        Список Дорожного Покрытия
                    </h2>
                </div>
                <div class="card mt-3 p-3">
                    <div class="is-scrollbar-hidden min-w-full">
                        <livewire:coverage-type.coverage-type-table/>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-4 xl:col-span-3">

        </div>
    </div>
@endsection
