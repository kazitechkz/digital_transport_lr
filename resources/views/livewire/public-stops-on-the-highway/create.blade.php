<x-form-component
    :method="'post'"
    :route="'public-stops-on-the-highway.store'"
    :element-id="'public-stops-on-the-highway-create'"
>
    <div class="form-group my-3">
        <x-input
            label="Название остановки*"
            wire:model.blur="bus_stop"
            name="bus_stop"
            placeholder="адресная привязка"
        />
    </div>
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
            label="Начало, м*"
            wire:model.blur="start_m"
            name="start_m"
            placeholder="начало"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Конец, м*"
            wire:model.blur="end_m"
            name="end_m"
            placeholder="конец"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Кол-во повильонов"
            wire:model.blur="pavilion_qty"
            name="pavilion_qty"
            placeholder="кол-во повильонов"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Расстояние от кромки проезжей части до фасада павильона"
            wire:model.blur="distance_to_the_roadway_m"
            name="distance_to_the_roadway_m"
            placeholder="расстояние в метрах"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Площадь посадочной площадки"
            wire:model.blur="boarding_square_m"
            name="boarding_square_m"
            placeholder="площадь посадочной площадки"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Площадь уширения (кармана)"
            wire:model.blur="extension_square_m"
            name="extension_square_m"
            placeholder="площадь уширения (кармана)"
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
        <x-toggle
            label="Да"
            hint="наличие маршрутов"
            wire:model.blur="have_route"
            name="have_route"
        />
    </div>
</x-form-component>
