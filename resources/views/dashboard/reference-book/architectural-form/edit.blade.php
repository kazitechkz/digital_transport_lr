@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Изменить Архитектурную Форму:' . $architecturalForm->title_ru"
                :routes="['architectural-form.index']"
                :breadcrumbs="['Список Архитекутрных Форм','Изменить Архитектурную Форму']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Изменить Архитектурную Форму {{$architecturalForm->title_ru}}
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:architectural-form.edit :architectural-form="$architecturalForm"/>
                </div>
            </div>
        </div>
    </div>


@endsection
