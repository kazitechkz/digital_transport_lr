<?php

namespace App\Providers;

use App\View\Components\ReferenceBook\GreetingCard;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Используем composer для определенного представления
        View::composer('components.layout.sidebar-menu', function ($view) {
            // Получение содержимого JSON файла
            $routesJson = Storage::disk('public')->get('routes.json');

            // Преобразование JSON в массив
            $routes = json_decode($routesJson, true);

            // Проверка на успешное декодирование JSON
            if ($routes === null) {
                $routes = []; // Установите пустой массив, если декодирование не удалось
            }

            // Передача переменной в представление
            $view->with('routes', $routes);
        });
    }
}
