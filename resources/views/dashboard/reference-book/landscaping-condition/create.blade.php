@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Создать состояние посадки'"
                :routes="['landscaping-condition.index']"
                :breadcrumbs="['Список состояний посадок','Создать состояние посадки']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Создать состояние посадки
                </p>
                <div class="mt-4 space-y-4">
                <livewire:landscaping-condition.create/>
                </div>
            </div>
        </div>
    </div>


@endsection
