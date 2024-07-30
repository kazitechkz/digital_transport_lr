@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">

        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Создать новое право
                </p>
                <div class="mt-4 space-y-4">
                    <x-form-component
                        :method="'post'"
                        :route="'permission.store'"
                        :element-id="'permission-create'"
                    >
                        <div class="form-group my-3">
                            <x-input
                                label="Наименование *"
                                name="name"
                                placeholder="Наименование"
                            />
                        </div>
                        <div class="form-group my-3">
                            <x-checkbox label="CRUD" name="crud" hint="(create, read, update, delete)" />
                        </div>

                    </x-form-component>
                </div>
            </div>
        </div>
    </div>


@endsection
