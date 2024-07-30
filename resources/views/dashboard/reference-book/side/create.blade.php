@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Создать сторону дорожного движения'"
                :routes="['side.index']"
                :breadcrumbs="['Список сторон дорожного движения','Создать сторону']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Создать сторону дорожного движения
                </p>
                <div class="mt-4 space-y-4">
                <livewire:side.create/>
                </div>
            </div>
        </div>
    </div>


@endsection
