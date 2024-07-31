<x-form-component
    :method="'post'"
    :route="'unit.store'"
    :element-id="'unit-create'"
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
