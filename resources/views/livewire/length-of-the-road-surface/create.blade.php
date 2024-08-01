<x-form-component
    :method="'post'"
    :route="'length-of-the-road-surface.store'"
    :element-id="'length-of-the-road-surface-create'"
>
    <div class="form-group my-3">
        <x-input
            label="Номер*"
            wire.model.blur="order"
            name="order"
            placeholder="номер"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="От*"
            wire.model.blur="start"
            name="start"
            placeholder="от"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="До*"
            wire.model.blur="end"
            name="end"
            placeholder="до"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Протяженность*"
            wire.model.blur="total_length"
            name="total_length"
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
            wire.model.blur="street_id"
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
            wire.model.blur="coverage_type_id"
            name="coverage_type_id"
        />
    </div>
</x-form-component>
