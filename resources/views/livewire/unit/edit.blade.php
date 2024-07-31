<x-form-component
    :method="'put'"
    :route="'unit.update'"
    :parameters="['unit'=>$unit]"
    :element-id="'unit-update'"
>
    <div class="form-group my-3">
        <x-input
            label="Наименование*"
            wire:model.blur="name"
            name="name"
            placeholder="Наименование"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Символ*"
            wire:model.blur="symbol"
            name="symbol"
            placeholder="Символ"
        />
    </div>
</x-form-component>
