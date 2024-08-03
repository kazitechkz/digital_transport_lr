<x-form-component
    :method="'put'"
    :route="'sidewalk-on-roadway.update'"
    :parameters="$model->id"
    :element-id="'sidewalk-on-roadway-update'"
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
            placeholder="Конец, м"
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
        <x-input
            label="Площадь, м2"
            wire:model.blur="square_m"
            name="square_m"
            placeholder="площадь, м2"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Ширина в начале, м"
            wire:model.blur="width_start_m"
            name="width_start_m"
            placeholder="Ширина в начале, м"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Ширина в конце, м"
            wire:model.blur="width_end_m"
            name="width_end_m"
            placeholder="Ширина в конце, м"
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
            label="Выбрать тип покрытия"
            placeholder="выберите тип покрытия"
            icon="fas.road"
            :options="$coverage_types"
            option-label="title_ru"
            wire:model.blur="coverage_type_id"
            name="coverage_type_id"
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
            label="Выбрать расположение"
            placeholder="выберите расположение"
            icon="fas.road"
            :options="$positions"
            option-label="title_ru"
            wire:model.blur="position_id"
            name="position_id"
        />
    </div>
</x-form-component>
