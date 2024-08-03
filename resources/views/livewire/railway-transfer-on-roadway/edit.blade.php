<x-form-component
    :method="'put'"
    :route="'railway-transfer-on-roadway.update'"
    :parameters="['railway_transfer_on_roadway'=>$railwayTransferOnRoadway]"
    :element-id="'railway-transfer-on-roadway-update'"
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
            label="Местоположение в км"
            wire:model="location_km"
            name="location_km"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Местоположение в м"
            wire:model="location_m"
            name="location_m"
            class="floatInput"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Количество путей"
            wire:model="path_qty"
            name="path_qty"
            class="numberInput"
        />
    </div>
    <div class="form-group my-3">
        <x-checkbox
            label="Есть ли ограждение"
            wire:model="has_barrier"
            name="has_barrier"
            hint="Есть ли ограждение"/>
    </div>
    <div class="form-group my-3">
        <x-select
            label="Тип ограждения"
            :options="$barrierTypes"
            option-value="id"
            option-label="title_ru"
            placeholder="Выберите ограждение"
            wire:model="barrier_type_id"
            name="barrier_type_id"
        />
    </div>
    <div class="form-group my-3">
        <x-checkbox
            label="Есть ли дорожные знаки"
            wire:model="has_road_sign"
            name="has_road_sign"
            hint="Есть ли дорожные знаки"/>
    </div>
    <div class="form-group my-3">
        <x-checkbox
            label="Есть ли сигнальные столбики"
            wire:model="has_alarm_sign"
            name="has_alarm_sign"
            hint="Есть ли сигнальные столбики"/>
    </div>
    <div class="form-group my-3">
        <x-checkbox
            label="Наличие перильного ограждения"
            wire:model="has_fence"
            name="has_fence"
            hint="Наличие перильного ограждения"/>
    </div>
    <div class="form-group my-3">
        <x-checkbox
            label="Наличие транспортных светофоров"
            wire:model="has_traffic_light"
            name="has_traffic_light"
            hint="Наличие транспортных светофоров"/>
    </div>
    <div class="form-group my-3">
        <x-select
            label="Состояние настила"
            :options="$floorConditions"
            option-value="id"
            option-label="title_ru"
            placeholder="Выберите состояние настила"
            wire:model="floor_condition_id"
            name="floor_condition_id"
        />
    </div>
    <div class="form-group my-3">
        <x-checkbox
            label="Наличие охраны"
            wire:model="has_security"
            name="has_security"
            hint="Наличие охраны"/>
    </div>
    <div class="form-group my-3">
        <x-input
            label="Расстояние видимости"
            wire:model="visible_distance_length"
            name="visible_distance_length"
            class="numberInput"
        />
    </div>
</x-form-component>

