@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Добавить нового сотрудника'"
                :routes="['employee.index']"
                :breadcrumbs="['Список сотрудников','Добавить сотрудника']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Добавить нового сотрудника
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:user.create />
                </div>
            </div>
        </div>
    </div>
@endsection
