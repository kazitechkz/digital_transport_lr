<x-form-component
    :method="'put'"
    :route="'lighting-on-roadway.update'"
    :parameters="$model->id"
    :element-id="'lighting-on-roadway-update'"
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
            label="По оси, м*"
            wire:model.blur="on_axis_m"
            name="on_axis_m"
            placeholder="по оси, м"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-textarea
            label="Назначение опор*"
            wire:model.blur="lighting_target"
            name="lighting_target"
            placeholder="назначение опор"
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
            label="Выбрать тип опор"
            placeholder="выберите тип опор"
            icon="fas.road"
            :options="$lighting_types"
            option-label="title_ru"
            wire:model.blur="lighting_type_id"
            name="lighting_type_id"
        />
    </div>
</x-form-component>
