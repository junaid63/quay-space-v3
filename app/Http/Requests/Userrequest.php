<?php 

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Userrequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $userId = $this->route('id');
        return [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email:rfc,dns',
                'max:255',
                Rule::unique('users', 'email')->ignore($userId),
                ],
            'password' => 'required|string|min:8|max:255|confirmed',
        ];
    }

    public function messages(): array   
    {
        return [
            'name.required' => 'Please enter a name for the user.',
            'name.string' => 'The name must be valid text.',
            'name.max' => 'The name must not exceed 255 characters.',

            'email.required' => 'Please enter an email address.',
            'email.string' => 'The email must be valid text.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'The email must not exceed 255 characters.',
            'email.unique' => 'This email is already registered.',

            'password.required' => 'Please enter a password.',
            'password.string' => 'The password must be valid text.',
            'password.min' => 'The password must be at least 8 characters.',
            'password.max' => 'The password must not exceed 255 characters.',
            'password.confirmed' => 'The password confirmation does not match.',
        ];
    }
}
