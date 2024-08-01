@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Изменить тип устройств направляющих и ограждающих:' . $fencingAndGuideType->title_ru"
                :routes="['fencing-and-guide-type.index']"
                :breadcrumbs="['Список типов устройств направляющих и ограждающих','Изменить тип устройств направляющих и ограждающих']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Изменить дорожное полотно {{$fencingAndGuideType->title_ru}}
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:fencing-and-guide-type.edit :fencing-and-guide-type="$fencingAndGuideType"/>
                </div>
            </div>
        </div>
    </div>


@endsection
