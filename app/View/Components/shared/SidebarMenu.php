<?php

namespace App\View\Components\shared;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarMenu extends Component
{
    public string $elementId;
    public string $name;
    /**
     * Create a new component instance.
     */
    public function __construct(string $elementId, string $name)
    {
        $this->name = $name;
        $this->elementId = $elementId;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.shared.sidebar-menu');
    }
}
