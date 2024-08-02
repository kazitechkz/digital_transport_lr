<form wire:submit.prevent="submit">
    <div class="form-group my-3">
        <x-input
            label="Имя*"
            wire:model.blur="name"
            icon="fas.user"
            placeholder="имя"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            x-mask="+7(999) 999-9999"
            label="Номер телефона"
            icon="fas.phone"
            wire:model.lazy="phone"
            placeholder="+7 (777) 777-77-77"
        />
    </div>
    <div class="form-group my-3">
        <x-datetime
            label="Дата рождения"
            wire:model.blur="birthday"
            icon="o-calendar"
        />
    </div>
    <div class="form-group my-3">
        <x-select
            label="Выбрать пол"
            placeholder="выберите пол"
            icon="fas.mars-and-venus"
            :options="$genders"
            wire:model.blur="gender"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Email*"
            wire:model.blur="email"
            icon="o-envelope"
            placeholder="john@example.com"
            type="email"
        />
    </div>
    <div class="form-group my-3">
        <x-input
            label="Пароль*"
            wire:model.blur="password"
            icon="fas.lock"
            placeholder="пароль"
            type="password"
        />
    </div>
    <div class="form-group my-3">
        <x-choices
            label="Выбрать роль"
            wire:model="role_ids"
            :options="$roles"
            option-value="name"
        />
    </div>
    <div class="form-group my-3">
        <x-select
            label="Выбрать департамент"
            placeholder="выберите отдел"
            icon="fas.building"
            :options="$departments"
            option-label="title_ru"
            wire:model.blur="department_id"
        />
    </div>
    <div class="form-group my-3">
        @if ($photo)
            @if(gettype($photo) == 'string')
                <div class="bg-center bg-contain bg-no-repeat w-56 h-56 rounded-full" style='background-image: url("{{ $user->getFile('avatar') }}")'></div>
            @else
                <div class="bg-center bg-contain bg-no-repeat w-56 h-56 rounded-full" style='background-image: url("{{ $photo->temporaryUrl() }}")'></div>
            @endif
        @endif
        <x-file wire:model="photo" label="Ава" accept="image/*" />
    </div>
    <div class="col-md-12 text-right my-2">
        <button type="submit"
                class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
            <span>Отправить</span>
        </button>
    </div>
</form>
