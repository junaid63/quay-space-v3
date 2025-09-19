<?php 

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Clientrequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:12',
            'email' => 'required|string|email|max:255',
            'address' => 'required|string|max:255',
            'company_id' => 'required|exists:companies,id',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please enter the client\'s name.',
            'name.string' => 'The name must be a valid string.',
            'name.max' => 'The name must not exceed 255 characters.',

            'phone.required' => 'Please provide a phone number.',
            'phone.string' => 'The phone number must be valid text.',
            'phone.max' => 'The phone number must not exceed 12 characters.',

            'email.required' => 'Please enter an email address.',
            'email.string' => 'The email must be valid text.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'The email must not exceed 255 characters.',

            'address.required' => 'Please enter an address.',
            'address.string' => 'The address must be valid text.',
            'address.max' => 'The address must not exceed 255 characters.',

            'company_id.required' => 'Please select a company.',
            'company_id.exists' => 'The selected company does not exist.',
        ];
    }
}
