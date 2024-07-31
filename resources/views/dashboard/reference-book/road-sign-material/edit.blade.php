@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Изменить Материал Дорожного знака:' . $roadSignMaterial->title_ru"
                :routes="['road-marking-material.index']"
                :breadcrumbs="['Список Материалов Дорожных Знаков','Изменить Материалов Дорожных Знаков']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Изменить Материал Дорожного знака {{$roadSignMaterial->title_ru}}
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:road-sign-material.edit :road-sign-material="$roadSignMaterial"/>
                </div>
            </div>
        </div>
    </div>


@endsection
