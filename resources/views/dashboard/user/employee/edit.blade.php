@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Редактировать сотрудника'"
                :routes="['employee.index']"
                :breadcrumbs="['Список всех сотрудников','Редактировать сотрудника']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Редактировать сотрудника
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:user.edit :user="$user" />
                </div>
            </div>
        </div>
    </div>
@endsection
