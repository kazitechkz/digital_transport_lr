@extends("layout.dashboard")
@section("content")
    <div class="grid grid-cols-12 p-3">
        <div class="col-span-12">
            <x-breadcrumbs-component
                :header-title="'Создать вид шлагбаума'"
                :routes="['barrier-type.index']"
                :breadcrumbs="['Список видов шлагбаума','Создать вид шлагбаума']"
            />
        </div>
        <div class="col-span-12">
            <div class="card p-4 sm:p-5">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Создать вид шлагбаума
                </p>
                <div class="mt-4 space-y-4">
                <livewire:barrier-type.create/>
                </div>
            </div>
        </div>
    </div>


@endsection
