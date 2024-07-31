@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Создать марку бортовых камней'"
                :routes="['side-stone-stamp.index']"
                :breadcrumbs="['Список марок бортовых камней','Создать марку бортовых камней']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Создать марку бортовых камней
                </p>
                <div class="mt-4 space-y-4">
                <livewire:side-stone-stamp.create/>
                </div>
            </div>
        </div>
    </div>


@endsection
