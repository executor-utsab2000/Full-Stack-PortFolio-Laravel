<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class progressBar extends Component
{
    public $progressPercentage;
    public $languageName;
    public function __construct($progressPercentage, $languageName)
    {
        $this->progressPercentage = $progressPercentage;
        $this->languageName = $languageName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.progress-bar');
    }
}
