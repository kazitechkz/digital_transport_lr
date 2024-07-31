@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Изменить марку бортовых камней:' . $sideStoneStamp->title_ru"
                :routes="['side-stone-stamp.index']"
                :breadcrumbs="['Список марок бортовых камней','Изменить марку бортовых камней']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Изменить марку бортовых камней {{$sideStoneStamp->title_ru}}
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:side-stone-stamp.edit :side-stone-stamp="$sideStoneStamp"/>
                </div>
            </div>
        </div>
    </div>


@endsection
