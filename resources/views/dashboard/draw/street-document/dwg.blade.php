@extends("layout.dashboard")
@push('css')
    <style>
        iframe {
            width: 100%!important;
            height: 70vh;
        }
    </style>
@endpush
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Просмотр документа'"
                :routes="['street-document.index']"
                :breadcrumbs="['Список документов','Просмотр документа']"
            />
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Страница просмотра документа
                </p>
                <div class="mt-4 space-y-4">
                    <iframe src="https://sharecad.org/cadframe/load?url={{ $path }}" ></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
