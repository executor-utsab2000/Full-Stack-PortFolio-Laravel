<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'projectDescription' => 'required',
            'projectMoto' => 'required',
            'monthsUsed' => 'required | numeric | between:0,12',
            'daysUsed' => 'required | numeric',
            'languages' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'monthsUsed.required' => 'Enter Months USed',
            'monthsUsed.numeric' => 'Month must be number ',

            'daysUsed.required' => 'Enter Days USed',
            'daysUsed.numeric' => 'Day must be number ',

            'projectCategory.required' => 'Enter Project Category',
            'projectDescription.required' => 'Enter Project Description',
            'projectMoto.required' => 'Enter Project Moto',

            'language.required' => 'Select Languages',

        ];
    }
}
