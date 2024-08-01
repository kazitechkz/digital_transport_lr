@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Создать тип бортовых камней'"
                :routes="['side-stone-type.index']"
                :breadcrumbs="['Список типов бортовых камней','Создать тип бортовых камней']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Создать тип бортовых камней
                </p>
                <div class="mt-4 space-y-4">
                <livewire:side-stone-type.create/>
                </div>
            </div>
        </div>
    </div>


@endsection
