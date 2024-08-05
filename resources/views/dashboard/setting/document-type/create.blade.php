@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">

        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Создать новый тип документа
                </p>
                <div class="mt-4 space-y-4">
                    <x-form-component
                        :method="'post'"
                        :route="'document-type.store'"
                        :element-id="'document-type-create'"
                    >
                        <div class="form-group my-3">
                            <x-input
                                label="Наименование *"
                                name="title"
                                placeholder="Наименование"
                            />
                        </div>
                        <div class="form-group my-3">
                            <x-input
                                label="Расширение документа *"
                                name="extension"
                                placeholder="(pdf, docx, csv, dwg и т.д)"
                            />
                        </div>

                    </x-form-component>
                </div>
            </div>
        </div>
    </div>


@endsection
