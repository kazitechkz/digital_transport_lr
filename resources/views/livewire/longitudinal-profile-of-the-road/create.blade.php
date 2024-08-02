<x-form-component
    :method="'post'"
    :route="'longitudinal-profile-of-the-road.store'"
    :element-id="'longitudinal-profile-of-the-road-create'"
>
    <div class="form-group my-3">
        <x-select
            label="Улица"
            :options="$streets"
            option-value="id"
            option-label="title_ru"
            placeholder="Выберите улицу"
            wire:model="street_id"
            name="street_id"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Номер*"
            wire:model="order"
            name="order"
            class="numberInput"
            placeholder="Номер, 1,2,3"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Начало участка в км"
            wire:model="start_of_region_km"
            name="start_of_region_km"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Начало участка в м"
            wire:model="start_of_region_m"
            name="start_of_region_m"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Конец участка в км"
            wire:model="end_of_region_km"
            name="end_of_region_km"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Конец участка в м"
            wire:model="end_of_region_m"
            name="end_of_region_m"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Протяженность в м"
            wire:model="length_m"
            name="length_m"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Уклон в %"
            wire:model="slope"
            name="slope"
            class="floatInput"
        />
    </div>
</x-form-component>

