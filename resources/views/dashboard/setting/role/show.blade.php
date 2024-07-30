@extends("layout.dashboard")
@push('css')
    <style>
        label {
            display: initial!important;
        }
    </style>
@endpush
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Список разрешений для роли {{$role->name}}
                </p>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <livewire:role.change-permission :role="$role"/>
            </div>
        </div>
    </div>
@endsection
