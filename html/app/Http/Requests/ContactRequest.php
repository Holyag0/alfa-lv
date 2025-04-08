<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'contact' => 'required|regex:/^\d{9}$/', 
            'email' => 'required|email|max:255',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'contact.required' => 'The contact field is required.',
            'contact.regex' => 'The contact must be exactly 9 digits.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
        ];
    }
}
