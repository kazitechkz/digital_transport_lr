@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Создать новый вид перехода'"
                :routes="['pedestrian-crossing-type.index']"
                :breadcrumbs="['Список видов перехода','Создать вид перехода']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Создать вид перехода
                </p>
                <div class="mt-4 space-y-4">
                <livewire:pedestrian-crossing-type.create/>
                </div>
            </div>
        </div>
    </div>


@endsection
