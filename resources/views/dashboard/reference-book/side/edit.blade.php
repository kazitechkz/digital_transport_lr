@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Изменить Сторону дорожного полотна:' . $side->title_ru"
                :routes="['side.index']"
                :breadcrumbs="['Список Сторон Дорожного полотна','Изменить сторону дорожного полотна']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Изменить дорожное полотно {{$side->title_ru}}
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:side.edit :side="$side"/>
                </div>
            </div>
        </div>
    </div>


@endsection
