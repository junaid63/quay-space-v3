<?php 

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Proceedingrequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Please enter a title for the proceeding.',
            'title.string' => 'The title must be valid text.',
            'title.max' => 'The title must not exceed 255 characters.',
        ];
    }
}
