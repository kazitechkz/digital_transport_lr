<x-form-component
    :method="'put'"
    :route="'road-sign-on-roadway.update'"
    :parameters="['road_sign_on_roadway'=>$roadSignOnRoadway]"
    :element-id="'road-sign-on-roadway-update'"
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
            label="Дорожный знак"
            :options="$road_signs"
            option-value="id"
            option-label="title_ru"
            placeholder="Выберите дорожный знак"
            wire:model="road_sign_id"
            name="road_sign_id"
        />
    </div>
    <div class="form-group my-3">
        <x-select
            label="Состояние дорожного знака"
            :options="$road_sign_conditions"
            option-value="id"
            option-label="title_ru"
            placeholder="Выберите состояние дорожного знака"
            wire:model="road_sign_condition_id"
            name="road_sign_condition_id"
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
        <x-checkbox
            label="Расположение знака слева по ходу движения на примыкании"
            wire:model="has_left_adjunctions_location"
            name="has_left_adjunctions_location"
        />
    </div>
    <div class="form-group my-3">
        <x-checkbox
            label="Расположение знака слева по ходу движения на прямом"
            wire:model="has_left_direct_location"
            name="has_left_direct_location"
        />
    </div>
    <div class="form-group my-3">
        <x-checkbox
            label="Расположение знака слева по ходу движения на обратном"
            wire:model="has_left_reverse_location"
            name="has_left_reverse_location"
        />
    </div>
    <div class="form-group my-3">
        <x-checkbox
            label="Расположение знака справа по ходу движения на примыкании"
            wire:model="has_right_adjunctions_location"
            name="has_right_adjunctions_location"
        />
    </div>
    <div class="form-group my-3">
        <x-checkbox
            label="Расположение знака справа по ходу движения на прямом"
            wire:model="has_right_direct_location"
            name="has_right_direct_location"
        />
    </div>
    <div class="form-group my-3">
        <x-checkbox
            label="Расположение знака справа по ходу движения на обратном"
            wire:model="has_right_reverse_location"
            name="has_right_reverse_location"
        />
    </div>
    <div class="form-group my-3">
        <x-checkbox
            label="Есть ли берма"
            wire:model="has_right_reverse_location"
            name="has_berm"
        />
    </div>
</x-form-component>
