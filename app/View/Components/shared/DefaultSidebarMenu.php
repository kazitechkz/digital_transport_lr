<?php

namespace App\View\Components\shared;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DefaultSidebarMenu extends Component
{
    public string $link;
    public string $name;
    /**
     * Create a new component instance.
     */
    public function __construct(string $link, string $name)
    {
        $this->name = $name;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.shared.default-sidebar-menu');
    }
}
