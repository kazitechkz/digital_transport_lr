@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Изменить категорию проезжей части:' . $categoryOfHighway->title_ru"
                :routes="['category-of-highway.index']"
                :breadcrumbs="['Список категорий проезжей части','Изменить категорию проезжей части']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Изменить дорожное полотно {{$categoryOfHighway->title_ru}}
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:category-of-highway.edit :category-of-highway="$categoryOfHighway"/>
                </div>
            </div>
        </div>
    </div>


@endsection
