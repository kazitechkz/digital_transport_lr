@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Создать дорожный знак'"
                :routes="['road-sign.index']"
                :breadcrumbs="['Список дорожных знаков','Создать дорожных знаков']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Создать дорожный знак
                </p>
                <div class="mt-4 space-y-4">
                <livewire:road-sign.create/>
                </div>
            </div>
        </div>
    </div>


@endsection
