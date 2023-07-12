<?php

namespace App\View\Components\Layout\button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class delete extends Component
{
    /**
     * Create a new component instance.
     */
    public $url;
    public $id;
    public function __construct($url,$id)
    {
        $this->url = $url;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.button.delete');
    }
}
