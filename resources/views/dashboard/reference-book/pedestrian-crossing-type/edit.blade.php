@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Изменить вид пешеходного перехода:' . $pedestrianCrossingType->title_ru"
                :routes="['pedestrian-crossing-type.index']"
                :breadcrumbs="['Список вид пешеходного перехода','Изменить вид пешеходного перехода']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Изменить вид пешеходного перехода {{$pedestrianCrossingType->title_ru}}
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:pedestrian-crossing-type.edit :pedestrian-crossing-type="$pedestrianCrossingType"/>
                </div>
            </div>
        </div>
    </div>


@endsection
