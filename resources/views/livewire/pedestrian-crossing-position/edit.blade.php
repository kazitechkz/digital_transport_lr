<x-form-component
    :method="'put'"
    :route="'pedestrian-crossing-position.update'"
    :parameters="['pedestrian_crossing_position'=>$pedestrianCrossingPosition]"
    :element-id="'pedestrian-crossing-position-update'"
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


</x-form-component>
