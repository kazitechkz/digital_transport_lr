<x-form-component
    :method="'post'"
    :route="'roadway.store'"
    :element-id="'roadway-create'"
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
            label="Выбрать категорию"
            placeholder="выберите категорию"
            icon="fas.road"
            :options="$category_of_highways"
            option-label="title_ru"
            wire:model.blur="category_of_highway_id"
            name="category_of_highway_id"
        />
    </div>
</x-form-component>
