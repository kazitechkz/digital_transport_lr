@extends("layout.dashboard")
@section("content")
    <div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6 px-4">
        <div class="col-span-12">
            <x-reference-book.greeting-card
                :image-src="asset('assets/images/card-images/category-of-highway.webp')"
                :title="'Категории проезжей части'"
                :sub-title="'Категории проезжей части, н-р Примыкание, Съезд'"
                :link-title="'Создать Категорию проезжей части'"
                :route="'category-of-highway.create'"
            />
            <div class="mt-4 sm:mt-5 lg:mt-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                        Список категорий проезжей части
                    </h2>
                </div>
                <div class="card mt-3 p-3">
                    <div class="is-scrollbar-hidden min-w-full">
                        <livewire:category-of-highway.category-of-highway-table/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
