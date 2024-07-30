@extends("layout.dashboard")
@section("content")
    <div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6 px-4">
        <div class="col-span-12">
            <x-reference-book.greeting-card
                :image-src="asset('assets/images/card-images/road-marking.webp')"
                :title="'Материалы Дорожной Разметки'"
                :sub-title="'Материалы Дорожной Разметки'"
                :link-title="'Создать новый материал дорожной разметки'"
                :route="'road-marking-material.create'"
            />
            <div class="mt-4 sm:mt-5 lg:mt-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                        Список Материалов Дорожных Разметок
                    </h2>
                </div>
                <div class="card mt-3 p-3">
                    <div class="is-scrollbar-hidden min-w-full">
                        <livewire:road-marking-material.road-marking-material-table/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
