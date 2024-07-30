@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Изменить Тип Колодца:' . $wellType->title_ru"
                :routes="['well-type.index']"
                :breadcrumbs="['Список Типов Колодца','Изменить тип колодца']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Изменить тип колодца {{$wellType->title_ru}}
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:well-type.edit :well-type="$wellType"/>
                </div>
            </div>
        </div>
    </div>


@endsection
