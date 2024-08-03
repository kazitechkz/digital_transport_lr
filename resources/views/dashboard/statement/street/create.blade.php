@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Создать улицу'"
                :routes="['street.index']"
                :breadcrumbs="['Список улиц','Создать улицу']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Создать Улицу
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:street.create/>
                </div>
            </div>
        </div>
    </div>


@endsection

@push("js")
    <script src="{{asset("assets/js/street.js")}}"></script>
@endpush
