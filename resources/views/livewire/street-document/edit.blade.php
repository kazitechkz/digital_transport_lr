<form wire:submit.prevent="save">
    <div class="form-group my-3">
        <x-textarea
            label="Краткое описание документа (необязательно)"
            wire:model.blur="description"
            name="description"
            placeholder="описание..."
        />
    </div>
    <div class="form-group my-3">
        <x-select
            label="Выбрать тип документа"
            placeholder="выберите тип документа"
            icon="o-lifebuoy"
            :options="$document_types"
            option-label="title"
            wire:model.blur="document_type_id"
            name="document_type_id"
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
        <x-file
            wire:model.blur="file"
            label="Чертеж"

        />
    </div>
    <input type="hidden" wire:model="file_id" name="file_id">
    <div class="col-md-12 text-right my-2">
        <button type="submit"
                class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
            <span>Отправить</span>
        </button>
    </div>
</form>
