<?php

namespace App\View\Components\shared;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Component;

class RouteMenu extends Component
{
    public string $name;
    public array $routes;
    /**
     * Create a new component instance.
     */
    public function __construct(string $name, array $routes)
    {
        $this->name = $name;
        $this->routes = $routes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.shared.route-menu');
    }
}
