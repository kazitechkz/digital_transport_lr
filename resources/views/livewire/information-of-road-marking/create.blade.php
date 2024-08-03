<x-form-component
    :method="'post'"
    :route="'information-of-road-marking.store'"
    :element-id="'information-of-road-marking-create'"
>
    <div class="form-group my-3">
        <x-input
            label="Ширина линии*"
            wire:model.blur="road_width_sm"
            name="road_width_sm"
            placeholder="ширина линии"
            type="number"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Протяженность линии*"
            wire:model.blur="road_length_m"
            name="road_length_m"
            placeholder="протяженность линии"
            type="number"
            min="0"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Площадь линии, м2*"
            wire:model.blur="road_square_m"
            name="road_square_m"
            placeholder="площадь линии"
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
            label="Выбрать дорожную разметку"
            placeholder="выберите дорожную разметку"
            icon="fas.road"
            :options="$road_markings"
            option-label="title_ru"
            wire:model.blur="road_marking_id"
            name="road_marking_id"
        />
    </div>
    <div class="form-group my-3">
        <x-select
            label="Выбрать тип материала"
            placeholder="выберите тип материала"
            icon="fas.road"
            :options="$road_marking_materials"
            option-label="title_ru"
            wire:model.blur="road_marking_material_id"
            name="road_marking_material_id"
        />
    </div>
</x-form-component>
