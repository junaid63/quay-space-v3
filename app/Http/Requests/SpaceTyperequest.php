<?php 

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SpaceTyperequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string|',
        ];
    }


    public function messages(): array   
    {
        return [
            'name.required' =>'Please enter Sace Type Name.',
            'name.string' =>'The Sace Type Name must be valid text.',
            'name.max' =>'The Sace Type Name must not exceed 255 characters.',

            'description.required' =>'Please enter Description.',
            'description.string' => 'The Description Number must be valid text.',
            'description.max' => 'The Description Number must not exceed 100 characters.',
        ];
    }
}
