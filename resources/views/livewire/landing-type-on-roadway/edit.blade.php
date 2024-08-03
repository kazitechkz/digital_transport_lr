<x-form-component
    :method="'put'"
    :route="'landing-type-on-roadway.update'"
    :parameters="$model->id"
    :element-id="'landing-type-on-roadway-update'"
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
            label="Начало*"
            wire:model.blur="start_m"
            name="start_m"
            placeholder="начало"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Конец*"
            wire:model.blur="end_m"
            name="end_m"
            placeholder="конец"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Ширина в начале*"
            wire:model.blur="width_start_m"
            name="width_start_m"
            placeholder="ширина в начале"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Ширина в конце*"
            wire:model.blur="width_end_m"
            name="width_end_m"
            placeholder="ширина в конце"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Площадь"
            wire:model.blur="square_m"
            name="square_m"
            placeholder="площадь"
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
            label="Выбрать тип посадки"
            placeholder="выберите тип посадки"
            icon="fas.road"
            :options="$landing_types"
            option-label="title_ru"
            wire:model.blur="landing_type_id"
            name="landing_type_id"
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
</x-form-component>
