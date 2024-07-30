<?php

namespace App\View\Components\shared;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MainMenu extends Component
{
    public string $name;
    public string $icon;
    public string $link;
    /**
     * Create a new component instance.
     */
    public function __construct(string $name, string $icon, string $link)
    {
        $this->name = $name;
        $this->icon = $icon;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.shared.main-menu');
    }
}
