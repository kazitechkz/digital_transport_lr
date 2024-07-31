@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Изменить Состояние Посадки:' . $landscapingCondition->title_ru"
                :routes="['landscaping-condition.index']"
                :breadcrumbs="['Список Состояний Посадок','Изменить Состояние Посадки']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Изменить Состояние Посадки {{$landscapingCondition->title_ru}}
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:landscaping-condition.edit :landscaping-condition="$landscapingCondition"/>
                </div>
            </div>
        </div>
    </div>


@endsection
