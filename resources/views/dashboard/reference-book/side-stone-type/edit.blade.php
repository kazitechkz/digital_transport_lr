@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Изменить тип бортовых камней:' . $sideStoneType->title_ru"
                :routes="['side-stone-type.index']"
                :breadcrumbs="['Список типов бортовых камней','Изменить тип бортовых камней']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Изменить тип бортовых камней {{$sideStoneType->title_ru}}
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:side-stone-type.edit :side-stone-type="$sideStoneType"/>
                </div>
            </div>
        </div>
    </div>


@endsection
