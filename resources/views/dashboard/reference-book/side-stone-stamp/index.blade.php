@extends("layout.dashboard")
@section("content")
    <div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6 px-4">
        <div class="col-span-12">
            <x-reference-book.greeting-card
                :image-src="asset('assets/images/card-images/side-stone-stamp.png')"
                :title="'Список марок бортовых камней'"
                :sub-title="'Марка бортовых камней.'"
                :link-title="'Создать марку бортовых камней'"
                :route="'side-stone-stamp.create'"
            />
            <div class="mt-4 sm:mt-5 lg:mt-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                        Список марок бортовых камней
                    </h2>
                </div>
                <div class="card mt-3 p-3">
                    <div class="is-scrollbar-hidden min-w-full">
                        <livewire:side-stone-stamp.side-stone-stamp-table/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
