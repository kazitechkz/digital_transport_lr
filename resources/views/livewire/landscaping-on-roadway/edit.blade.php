<x-form-component
    :method="'put'"
    :route="'landscaping-on-roadway.update'"
    :parameters="['landscaping_on_roadway'=>$landscapingOnRoadway]"
    :element-id="'landscaping-on-roadway-update'"
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
            label="Состояние посадок"
            :options="$landscapingConditions"
            option-value="id"
            option-label="title_ru"
            placeholder="Выберите состояние посадок"
            wire:model="landscaping_condition_id"
            name="landscaping_condition_id"
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
            label="Местоположение справа. Начало в км"
            wire:model="start_location_right_km"
            name="start_location_right_km"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Местоположение справа. Начало в м"
            wire:model="start_location_right_m"
            name="start_location_right_m"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Местоположение справа. Конец в км"
            wire:model="end_location_right_km"
            name="end_location_right_km"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Местоположение справа. Конец в м"
            wire:model="end_location_right_m"
            name="end_location_right_m"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Местоположение слева. Начало в км"
            wire:model="start_location_left_km"
            name="start_location_left_km"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Местоположение слева. Начало в м"
            wire:model="start_location_left_m"
            name="start_location_left_m"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Местоположение слева. Конец в км"
            wire:model="end_location_left_km"
            name="end_location_left_km"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Местоположение слева. Конец в м"
            wire:model="end_location_left_m"
            name="end_location_left_m"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="2х-рядные в м"
            wire:model="two_row_m"
            name="two_row_m"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="3х-рядные в м"
            wire:model="three_row_m"
            name="three_row_m"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="4х-рядные в м"
            wire:model="four_row_m"
            name="four_row_m"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="5-рядные в м"
            wire:model="five_row_m"
            name="five_row_m"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="6-рядные в м"
            wire:model="six_row_m"
            name="six_row_m"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="8-рядные в м"
            wire:model="eight_row_m"
            name="eight_row_m"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Всего протяженость в м"
            wire:model="total_length_m"
            name="total_length_m"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Декоративные в м"
            wire:model="decorative_length_km"
            name="decorative_length_km"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Расстояние от кромки в м"
            wire:model="length_to_edge_m"
            name="length_to_edge_m"
            class="floatInput"
        />
    </div>

</x-form-component>
