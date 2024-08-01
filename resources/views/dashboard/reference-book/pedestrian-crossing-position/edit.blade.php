@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Изменить позицию пешеходного перехода:' . $pedestrianCrossingPosition->title_ru"
                :routes="['pedestrian-crossing-position.index']"
                :breadcrumbs="['Список позиций пешеходных переходов','Изменить позицию пешеходного перехода']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Изменить позицию пешеходного перехода {{$pedestrianCrossingPosition->title_ru}}
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:pedestrian-crossing-position.edit :pedestrian-crossing-position="$pedestrianCrossingPosition"/>
                </div>
            </div>
        </div>
    </div>


@endsection
