@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Изменить Вид Шлагбаума:' . $barrierType->title_ru"
                :routes="['barrier-type.index']"
                :breadcrumbs="['Список Видов Шлагбаума','Изменить вид шлагбаума']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Изменить Вид Шлагбаума {{$barrierType->title_ru}}
                </p>
                <div class="mt-4 space-y-4">
                    <livewire:barrier-type.edit :barrier-type="$barrierType"/>
                </div>
            </div>
        </div>
    </div>


@endsection
