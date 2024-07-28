<div class="w-full">
    <h1
        class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
    >
        Вход в платформу
    </h1>
        <x-form method="post" action="{{route('auth')}}">
            @csrf
            <div class="my-2">
                <x-input
                    class="w-full"
                    type="email"
                    label="Почта"
                    wire:model="email"
                    name="email"
                    placeholder="example@example.com"
                    icon="c-envelope"
                    hint="Введите вашу почту"
                />
            </div>
            <div class="my-2">
                <x-input
                    class="w-full"
                    label="Пароль"
                    wire:model="password"
                    name="password"
                    icon="o-eye"
                    type="password"
                />
            </div>
            <div class="mt-5">
                <x-button type="submit" class="btn-primary w-full text-white">
                    Вход
                </x-button>
            </div>
        </x-form>
</div>
