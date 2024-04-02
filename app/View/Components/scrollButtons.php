<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class scrollButtons extends Component
{
    public $section_scroll_value, $section_scroll_id_name;
    /**
     * Create a new component instance.
     */
    public function __construct($scrollValue=333, $idName)
    {
        $this->section_scroll_value = $scrollValue;
        $this->section_scroll_id_name = $idName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.scroll-buttons');
    }
}
