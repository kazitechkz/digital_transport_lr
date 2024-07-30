<?php

namespace App\View\Components\ReferenceBook;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RFAppCard extends Component
{
    public string $icon;
    public string $bg_icon;
    public string $app_name;
    public string $app_description;
    public string $route;
    public string $route_name;

    public function __construct($icon, $bg_icon, $app_name,$app_description,$route,$route_name)
    {
        $this->icon = $icon;
        $this->bg_icon = $bg_icon;
        $this->app_name = $app_name;
        $this->app_description = $app_description;
        $this->route = $route;
        $this->route_name = $route_name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.reference-book.r-f-app-card');
    }
}
