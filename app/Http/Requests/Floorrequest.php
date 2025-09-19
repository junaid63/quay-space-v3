<?php 

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Floorrequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'number' => 'required|integer|',
            
        ];
    }


    public function messages(): array   
    {
        return [
            'name.required' =>'Please enter Floor Name.',
            'name.string' =>'The Floor Name must be valid text.',
            'name.max' =>'The Floor Name must not exceed 255 characters.',

            'number.required' =>'Please enter Floor Number.',
            'number.string' => 'The Floor Number must be valid text.',
            'number.max' => 'The Floor Number must not exceed 100 characters.',
        ];
    }
}
