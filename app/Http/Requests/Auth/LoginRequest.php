<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Always allow this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|string',
            'password' => 'required|string|min:6',
        ];
    }


    public function messages(): array
    {
        return [
            'email.required' => 'Please enter an email address.',
            'email.string' => 'The email must be a valid string.',

            'password.required' => 'Please enter a password.',
            'password.string' => 'The password must be a valid string.',
            'password.min' => 'The password must be at least 6 characters.',
        ];
    }
}
