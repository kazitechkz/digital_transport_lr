@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Создать департамент'"
                :routes="['coverage-type.index']"
                :breadcrumbs="['Список всех департаментов','Создать новый департамент']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Создать новый департамент
                </p>
                <div class="mt-4 space-y-4">
                    <x-form-component
                        :method="'post'"
                        :route="'department.store'"
                        :element-id="'department-create'"
                    >
                        <div class="form-group my-3">
                            <x-input
                                label="Наименование на казахском*"
                                name="title_kk"
                                placeholder="Наименование на казахском"
                            />
                        </div>
                        <div class="form-group my-3">
                            <x-input
                                label="Наименование на русском*"
                                name="title_ru"
                                placeholder="Наименование на русском"
                            />
                        </div>
                    </x-form-component>
                </div>
            </div>
        </div>
    </div>


@endsection
