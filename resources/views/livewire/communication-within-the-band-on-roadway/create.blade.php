<x-form-component
    :method="'post'"
    :route="'cwb-on-roadway.store'"
    :element-id="'communication-within-the-band-on-roadway-create'"
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
        <x-select
            label="Тип коммуникаций"
            :options="$communication_types"
            option-value="id"
            option-label="title_ru"
            placeholder="Выберите Тип коммуникаций"
            wire:model="ctype_id"
            name="ctype_id"
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
            label="Местоположение начало в км"
            wire:model="location_start_km"
            name="location_start_km"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Местоположение начало в м"
            wire:model="location_start_m"
            name="location_start_m"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Местоположение конец в км"
            wire:model="location_end_km"
            name="location_end_km"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Местоположение конец в м"
            wire:model="location_end_m"
            name="location_end_m"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Расстояние от кромки до опоры слева в м"
            wire:model="distance_edge_left_m"
            name="distance_edge_left_m"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Расстояние от кромки до опоры справа в м"
            wire:model="distance_edge_right_m"
            name="distance_edge_right_m"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Место пересечения в км"
            wire:model="place_of_intersection_km"
            name="place_of_intersection_km"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Место пересечения в м"
            wire:model="place_of_intersection_m"
            name="place_of_intersection_m"
            class="floatInput"
        />
    </div>
</x-form-component>

