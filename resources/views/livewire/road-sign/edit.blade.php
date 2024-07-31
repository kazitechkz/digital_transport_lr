<x-form-component
    :method="'put'"
    :route="'road-sign.update'"
    :parameters="['road_sign'=>$roadSign]"
    :element-id="'road-sign-update'"
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
            label="Нормативный Документ"
            wire:model="normative_act"
            name="normative_act"
            placeholder="Нормативный Документ"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Номер знака"
            wire:model="sign_number"
            name="sign_number"
            placeholder="Номер знака"
        />
    </div>
    <div class="form-group my-3">
        <x-checkbox
            label="Активен"
            wire:model="is_active"
            name="is_active"
            hint="Знак доступен"/>

    </div>


</x-form-component>
