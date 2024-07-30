@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Изменить Дорожную Разметку:' . $roadMarking->title_ru"
                :routes="['road-marking.index']"
                :breadcrumbs="['Список Дорожных Разметок','Изменить Дорожную Разметку']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Изменить дорожную Разметку {{$roadMarking->title_ru}}
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:road-marking.edit :road-marking="$roadMarking"/>
                </div>
            </div>
        </div>
    </div>


@endsection
