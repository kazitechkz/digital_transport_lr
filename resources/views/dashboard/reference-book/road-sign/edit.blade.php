@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Изменить Дорожный Знак:' . $roadSign->title_ru"
                :routes="['road-sign.index']"
                :breadcrumbs="['Список Дорожных Знаков','Изменить Дорожный Знак']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Изменить Дорожный Знак {{$roadSign->title_ru}}
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:road-sign.edit :road-sign="$roadSign"/>
                </div>
            </div>
        </div>
    </div>


@endsection
