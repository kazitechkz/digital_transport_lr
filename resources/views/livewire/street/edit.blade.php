<x-form-component
    :method="'put'"
    :route="'street.update'"
    :parameters="['street'=>$street]"
    :element-id="'street-update'"
>
    <div class="form-group my-3">
        <x-input
            label="Наименование на русском*"
            wire:model.blur="title_ru"
            name="title_ru"
            placeholder="Наименование на русском"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Наименование на казахском*"
            wire:model.blur="title_kk"
            name="title_kk"
            placeholder="Наименование на казахском"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Наименование на английском"
            wire:model="title_en"
            name="title_en"
            placeholder="Наименование на английском"
        />
    </div>
    <div class="form-group my-3">
        <x-colorpicker
            id="geo_color"
            value="{{$geo_color}}"
            wire:model="geo_color"
            name="geo_color"
            label="Выберите цвет"
            hint="Цвет полигонов улицы"
            icon="o-swatch" />
    </div>
    <div class="form-group my-3" wire:ignore>
        <div id="map" class="w-full min-h-[500px]"></div>
        <input type="hidden" wire:model="geo_position" id="geo_map" name="geo_position" value="{{$geo_position}}" />
    </div>
    <div class="form-group my-3">
        <x-checkbox
            label="Активен"
            wire:model="is_active"
            name="is_active"
            hint="Улица доступна"/>

    </div>

</x-form-component>

