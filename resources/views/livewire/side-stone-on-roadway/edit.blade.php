<x-form-component
    :method="'put'"
    :route="'side-stone-on-roadway.update'"
    :parameters="$model->id"
    :element-id="'side-stone-on-roadway-update'"
>
    <div class="form-group my-3">
        <x-input
            label="Номер*"
            wire:model.blur="order"
            name="order"
            type="number"
            placeholder="номер"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Начало, м*"
            wire:model.blur="start_m"
            name="start_m"
            placeholder="начало, м"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Конец, м*"
            wire:model.blur="end_m"
            name="end_m"
            placeholder="конец, м"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Длина, м"
            wire:model.blur="length_m"
            name="length_m"
            placeholder="длина, м"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-select
            label="Выбрать улицу"
            placeholder="выберите улицу"
            icon="fas.road"
            :options="$streets"
            option-label="title_ru"
            wire:model.blur="street_id"
            name="street_id"
        />
    </div>
    <div class="form-group my-3">
        <x-select
            label="Выбрать марку"
            placeholder="выберите марку"
            icon="fas.road"
            :options="$side_stone_stamps"
            option-label="title_ru"
            wire:model.blur="side_stone_stamp_id"
            name="side_stone_stamp_id"
        />
    </div>
    <div class="form-group my-3">
        <x-select
            label="Выбрать сторону"
            placeholder="выберите сторону"
            icon="fas.road"
            :options="$sides"
            option-label="title_ru"
            wire:model.blur="side_id"
            name="side_id"
        />
    </div>
    <div class="form-group my-3">
        <x-select
            label="Выбрать тип"
            placeholder="выберите тип"
            icon="fas.road"
            :options="$side_stone_types"
            option-label="title_ru"
            wire:model.blur="side_stone_type_id"
            name="side_stone_type_id"
        />
    </div>
</x-form-component>
