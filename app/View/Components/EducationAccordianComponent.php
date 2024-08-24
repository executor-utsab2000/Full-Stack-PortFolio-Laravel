<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EducationAccordianComponent extends Component
{

    public $dataBsTarget;
    public $educationStage;
    public $educationYear;
    public $educationGrade;
    public $educationInstitute;
    public $educationHeadInstitute;

    public function __construct(
        $dataBsTarget,
        $educationStage,
        $educationYear,
        $educationGrade,
        $educationInstitute,
        $educationHeadInstitute,
    ) {
        $this->dataBsTarget = $dataBsTarget;
        $this->educationStage = $educationStage;
        $this->educationYear = $educationYear;
        $this->educationGrade = $educationGrade;
        $this->educationInstitute = $educationInstitute;
        $this->educationHeadInstitute = $educationHeadInstitute;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.education-accordian-component');
    }
}
