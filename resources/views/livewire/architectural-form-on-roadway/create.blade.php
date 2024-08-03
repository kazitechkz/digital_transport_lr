<x-form-component
    :method="'post'"
    :route="'architectural-form-on-roadway.store'"
    :element-id="'architectural-form-on-roadway-create'"
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
        <x-input
            label="Периметр"
            wire:model.blur="perim_m"
            name="perim_m"
            placeholder="периметр"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Feature"
            wire:model.blur="feature"
            name="feature"
            placeholder="feature"
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
            label="Выбрать архитектурную форму"
            placeholder="выберите архитектурную форму"
            icon="fas.road"
            :options="$architectural_forms"
            option-label="title_ru"
            wire:model.blur="architectural_form_id"
            name="architectural_form_id"
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
