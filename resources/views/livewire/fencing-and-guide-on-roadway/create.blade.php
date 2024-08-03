<x-form-component
    :method="'post'"
    :route="'fencing-and-guide-on-roadway.store'"
    :element-id="'fencing-and-guide-on-roadway-create'"
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
            label="От*"
            wire:model.blur="start_m"
            name="start_m"
            placeholder="от"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="До*"
            wire:model.blur="end_m"
            name="end_m"
            placeholder="до"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Кол*во"
            wire:model.blur="qty"
            name="qty"
            placeholder="количество"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-select
            label="Выбрать единицу измерения"
            placeholder="выберите единицу измерения"
            icon="fas.road"
            :options="$units"
            wire:model.blur="unit_id"
            name="unit_id"
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
            label="Выбрать тип устройства"
            placeholder="выберите тип устройства"
            icon="fas.road"
            :options="$fencing_guide_types"
            option-label="title_ru"
            wire:model.blur="fencing_guide_type_id"
            name="fencing_guide_type_id"
        />
    </div>
</x-form-component>
