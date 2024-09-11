<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationRequest extends FormRequest
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
            'userName' => 'required',
            'email' => 'required | email | unique:contact_form,contact_user_email',
            'contactNumber' => 'required | numeric | digits:10 | unique:contact_form,contact_user_phone',
            'residence' => 'required ',
            'query' => 'required |string | max:100',
        ];
    }

    public function messages()
    {
        return [
            'userName.required' => 'Enter Your Name',

            'email.required' => 'Enter Your Email',
            'email.email' => 'Enter valid Email',
            'email.unique' => 'Email Already Exists',

            'contactNumber.required' => 'Enter Contact Number',
            'contactNumber.numeric' => 'Enter valid Format',
            'contactNumber.digits' => 'Enter 10 digits',
            'contactNumber.unique' => 'Contact Number already exists',

            'residence.required' => 'Residence is required',

            'query.required' => 'Enter Your Query',
            'query.max' => 'Maximum 100 Characters allowed'
        ];
    }
}
