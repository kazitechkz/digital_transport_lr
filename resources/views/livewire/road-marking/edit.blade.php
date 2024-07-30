<x-form-component
    :method="'put'"
    :route="'road-marking.update'"
    :parameters="['road_marking'=>$roadMarking]"
    :element-id="'road-marking-update'"
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
        <x-input
            label="Номер линии по нормативу*"
            wire:model.blur="line_of_number"
            name="line_of_number"
            placeholder="Номер линии по нормативу"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Нормативный документ*"
            wire:model.blur="normative_document"
            name="normative_document"
            placeholder="Нормативный документ"
        />
    </div>
</x-form-component>
