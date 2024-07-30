<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BreadcrumbsComponent extends Component
{
    public $headerTitle;

    public $routes;
    public $breadcrumbs;

    public function __construct($headerTitle,$routes,$breadcrumbs)
    {
        $this->headerTitle = $headerTitle;
        $this->breadcrumbs = $breadcrumbs;
        $this->routes = $routes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.breadcrumbs-component');
    }
}
