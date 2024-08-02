<x-form-component
    :method="'post'"
    :route="'spillway-infrastructure.store'"
    :element-id="'spillway-infrastructure-create'"
>
    <div class="form-group my-3">
        <x-input
            label="Номер*"
            wire:model.blur="order"
            name="order"
            placeholder="номер"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="По оси*"
            wire:model.blur="on_axis_m"
            name="on_axis_m"
            placeholder="от"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="От оси*"
            wire:model.blur="from_axis_m"
            name="from_axis_m"
            placeholder="до"
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
            :options="$well_types"
            option-label="title_ru"
            wire:model.blur="well_type_id"
            name="well_type_id"
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
        <x-toggle
            label="Да"
            hint="На проезжей части"
            wire:model.blur="is_on_the_roadway"
            name="is_on_the_roadway"
        />
    </div>
    <div class="form-group my-3">
        <x-toggle
            label="Да"
            hint="На тротуаре"
            wire:model.blur="is_on_the_sidewalk"
            name="is_on_the_sidewalk"
        />
    </div>
    <div class="form-group my-3">
        <x-toggle
            label="Да"
            wire:model.blur="is_on_the_lawn"
            name="is_on_the_lawn"
            hint="На газоне"
        />
    </div>
    <div class="form-group my-3">
        <x-textarea
            label="Примечание"
            wire:model.blur="note"
            name="note"
            placeholder="если есть ..."
            hint="Max 1000 символов"
            rows="5"
            inline />
    </div>
</x-form-component>
