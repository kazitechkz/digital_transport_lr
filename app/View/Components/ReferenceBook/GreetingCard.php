<?php

namespace App\View\Components\ReferenceBook;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GreetingCard extends Component
{
    public string $imageSrc;
    public string $title;
    public string $subTitle;
    public string $linkTitle;
    public string $route;

    public function __construct( string $imageSrc, string $title, string $subTitle, string $linkTitle, string $route)
    {
        $this->imageSrc = $imageSrc;
        $this->title = $title;
        $this->subTitle = $subTitle;
        $this->linkTitle = $linkTitle;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.reference-book.greeting-card');
    }
}
