<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class test extends Component
{
    public $z;
    /**
     * Create a new component instance.
     */
    public function __construct($b=1)
    {
        $this->z = $b;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.test');
    }
}
