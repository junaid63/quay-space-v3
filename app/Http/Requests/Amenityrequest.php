<?php 

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Amenityrequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
        ];
    }


    public function messages(): array   
    {
        return [
            'name.required' =>'Please enter Amenity Name.',
            'name.string' =>'The Amenity Name must be valid text.',
            'name.max' =>'The Floor Name must not exceed 255 characters.',
        ];
    }
}
