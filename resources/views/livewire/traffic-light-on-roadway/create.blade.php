<x-form-component
    :method="'post'"
    :route="'traffic-light-on-roadway.store'"
    :element-id="'traffic-light-on-roadway-create'"
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
            wire:model.blur="on_axis"
            name="on_axis"
            placeholder="по оси"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Кол-во транспортных светофоров*"
            wire:model.blur="traffic_light_qty"
            name="traffic_light_qty"
            placeholder="кол-во транспортных светофоров"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Кол-во пешеходных светофоров"
            wire:model.blur="pedestrian_traffic_light_qty"
            name="pedestrian_traffic_light_qty"
            placeholder="кол-во пешеходных светофоров"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Кол-во поворотных секций"
            wire:model.blur="rotary_section_qty"
            name="rotary_section_qty"
            placeholder="кол-во поворотных секций"
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
            label="Выбрать тип установки"
            placeholder="выберите тип установки"
            icon="fas.road"
            :options="$traffic_light_types"
            option-label="title_ru"
            wire:model.blur="traffic_light_type_id"
            name="traffic_light_type_id"
        />
    </div>
    <div class="form-group my-3">
        <x-toggle
            label="Да"
            hint="контроллер"
            wire:model.blur="have_controller"
            name="have_controller"
        />
    </div>
    <div class="form-group my-3">
        <x-toggle
            label="Да"
            hint="колонка"
            wire:model.blur="have_column"
            name="have_column"
        />
    </div>
</x-form-component>
