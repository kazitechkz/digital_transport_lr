<x-form-component
    :method="'put'"
    :route="'ij-on-roadway.update'"
    :parameters="['intersection_and_junction_on_roadway'=>$intersectionAndJunctionOnRoadway]"
    :element-id="'ij-on-roadway-update'"
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
            label="Тип покрытия"
            :options="$coverageTypes"
            option-value="id"
            option-label="title_ru"
            placeholder="Выберите тип покрытия"
            wire:model="coverage_type_id"
            name="coverage_type_id"
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
            label="Местоположение справа в км"
            wire:model="location_right_km"
            name="location_right_km"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Местоположение справа в м"
            wire:model="location_right_m"
            name="location_right_m"
            class="floatInput"
        />
    </div>

    <div class="form-group my-3">
        <x-input
            label="Местоположение слева в км"
            wire:model="location_left_km"
            name="location_left_km"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Местоположение слева в м"
            wire:model="location_left_m"
            name="location_left_m"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-checkbox
            label="Имеются ли переходно-скоростные линии"
            wire:model="has_transiotional_high_speed_lanes"
            name="has_transiotional_high_speed_lanes"
            hint="Имеются ли переходно-скоростные линии"/>
    </div>
    <div class="form-group my-3">
        <x-checkbox
            label="Имеются ли знаки"
            wire:model="has_road_sign"
            name="has_road_sign"
            hint="Имеются ли знаки"/>
    </div>
    <div class="form-group my-3">
        <x-checkbox
            label="Имеются ли трубы"
            wire:model="has_tube"
            name="has_tube"
            hint="Имеются ли трубы"/>
    </div>
    <div class="form-group my-3">
        <x-checkbox
            label="Имеются ли сигнальные столбы"
            wire:model="has_signal_pole"
            name="has_signal_pole"
            hint="Имеются ли сигнальные столбы"/>
    </div>
    <div class="form-group my-3">
        <x-checkbox
            label="Имеются ли безопасные островки"
            wire:model="has_safety_island"
            name="has_safety_island"
            hint="Имеются ли безопасные островки"/>
    </div>
</x-form-component>
