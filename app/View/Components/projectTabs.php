<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class projectTabs extends Component
{
    public $projectData;
    public $categoryName;
    public $count;
    public function __construct($projectData, $categoryName , $count)
    {
        $this->categoryName = $categoryName;
        $this->projectData = $projectData;
        $this->count = $count;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.project-tabs');
    }
}
