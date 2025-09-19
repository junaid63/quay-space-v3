<?php 

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Matterstatusrequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'class' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Please enter a title for the matter status.',
            'title.string' => 'The title must be valid text.',
            'title.max' => 'The title must not exceed 255 characters.',

            'class.required' => 'Please enter a class name or identifier.',
            'class.string' => 'The class must be valid text.',
            'class.max' => 'The class must not exceed 255 characters.',
        ];
    }
}
