<x-form-component
    :method="'put'"
    :route="'pedestrian-crossing-on-roadway.update'"
    :parameters="$model->id"
    :element-id="'pedestrian-crossing-on-roadway-update'"
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
            label="Адрес (км + м)*"
            wire:model.blur="address_length_m"
            name="address_length_m"
            placeholder="адрес"
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
            label="Выбрать вид перехода"
            placeholder="выберите вид перехода"
            icon="fas.road"
            :options="$types"
            option-label="title_ru"
            wire:model.blur="pc_type_id"
            name="pc_type_id"
        />
    </div>
    <div class="form-group my-3">
        <x-select
            label="Выбрать расположение"
            placeholder="выберите расположение"
            icon="fas.road"
            :options="$positions"
            option-label="title_ru"
            wire:model.blur="pc_position_id"
            name="pc_position_id"
        />
    </div>
    <div class="form-group my-3">
        <x-toggle
            label="Да"
            hint="наличие пешеходных дорожек от места остановки общественного транспорта до пешеходных переходов "
            wire:model.blur="bus_stop_has_pedestrian"
            name="bus_stop_has_pedestrian"
        />
    </div>
</x-form-component>
