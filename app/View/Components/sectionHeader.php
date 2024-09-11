<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class sectionHeader extends Component
{
    public $heading;
    public $subHeading;
    public $icon;

    public function __construct($heading = '', $subHeading = '', $icon = '')
    {
        $this->heading = $heading;
        $this->subHeading = $subHeading;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('User.components.section-header');
    }
}
