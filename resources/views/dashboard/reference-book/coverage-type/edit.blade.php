@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Изменить дорожное полотно:' . $coverageType->title_ru"
                :routes="['coverage-type.index']"
                :breadcrumbs="['Список дорожного полотна','Изменить дорожное полотно']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Изменить дорожное полотно {{$coverageType->title_ru}}
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:coverage-type.edit :coverageType="$coverageType"/>
                </div>
            </div>
        </div>
    </div>


@endsection
