<x-form-component
    :method="'put'"
    :route="'length-of-the-road-surface.update'"
    :parameters="$model->id"
    :element-id="'length-of-the-road-surface-update'"
>
    <div class="form-group my-3">
        <x-input
            label="Номер*"
            name="order"
            wire:model.blur="order"
            placeholder="номер"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="От*"
            name="start"
            wire:model.blur="start"
            placeholder="от"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="До*"
            name="end"
            wire:model.blur="end"
            placeholder="до"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Протяженность*"
            name="total_length"
            wire:model.blur="total_length"
            placeholder="протяженность"
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
            name="street_id"
            wire:model.blur="street_id"
        />
    </div>
    <div class="form-group my-3">
        <x-select
            label="Выбрать тип покрытия"
            placeholder="выберите тип покрытия"
            icon="fas.road"
            :options="$coverage_types"
            option-label="title_ru"
            name="coverage_type_id"
            wire:model.blur="coverage_type_id"
        />
    </div>
</x-form-component>
