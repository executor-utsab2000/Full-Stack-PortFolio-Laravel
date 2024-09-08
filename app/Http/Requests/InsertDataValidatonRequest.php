<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertDataValidatonRequest extends FormRequest
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
            'projectName' => 'required',
            'monthsUsed' => 'required | numeric',
            'daysUsed' => 'required | numeric',
            'projectCategory' => 'required',
            'projectDescription' => 'required',
            'projectMoto' => 'required',
            'projectBgImage' => 'required | mimes:png,jpg,jpeg|max:5120',
            'projectImage' => 'required | mimes:png,jpg,jpeg|max:5120',
            'githubLink' => 'required | url',
            'liveLink' => 'required | url',
            'languages' => 'required'
        ];
    }


    public function messages()
    {
        return [
            'projectName.required' => 'Enter Project Name',

            'monthsUsed.required' => 'Enter Months USed',
            'monthsUsed.numeric' => 'Month must be number ',

            'daysUsed.required' => 'Enter Days USed',
            'daysUsed.numeric' => 'Day must be number ',

            'projectCategory.required' => 'Enter Project Category',
            'projectDescription.required' => 'Enter Project Description',
            'projectMoto.required' => 'Enter Project Moto',

            'projectBgImage.required' => 'Enter Project Background Image',
            'projectBgImage.mimes' => 'Project Background Image must be : png , jpg , jpeg',

            'projectImage.required' => 'Enter Project  Image',
            'projectImage.mimes' => 'Project  Image must be : png , jpg , jpeg',

            'language.required' => 'Select Languages',

            'githubLink.required' => 'Enter Github Repository Link',
            'githubLink.url' => 'Github Repository Link must be type of URL',

            'liveLink.required' => 'Enter Live Preview Link',
            'liveLink.url' => 'Live Preview Link must be type of URL',

        ];
    }
}
