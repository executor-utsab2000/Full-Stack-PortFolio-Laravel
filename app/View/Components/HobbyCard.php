<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HobbyCard extends Component
{
    public $hobbyImage;
    public $caption;
  
    public function __construct($hobbyImage , $caption)
    {
        $this->hobbyImage = $hobbyImage;
        $this->caption = $caption;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('User.components.hobby-card');
    }
}
