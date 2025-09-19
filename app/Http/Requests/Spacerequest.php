<?php 

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Spacerequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'floor_id' => 'required|integer|',
            'space_type_id' => 'required|integer|',
            'amenities_id' => 'required|array|min:1',
            'capacity' => 'required|integer|min:1|max:100',
            'price_per_day' => 'required|integer',
            'description' => 'required|string|max:100',
        ];
    }



    public function messages(): array
    {
        return [
            'name.required' => 'Please enter Space Name.',
            'name.string' => 'The Space Type Name must be valid text.',
            'name.max' => 'The Space Type Name must not exceed 255 characters.',

            'floor_id.required' => 'Please select Floor Type.',
            'floor_id.integer' => 'Floor Type must be a valid selection.',

            'space_type_id.required' => 'Please select Space Type.',
            'space_type_id.integer' => 'Space Type must be a valid selection.',

            'amenities_id.required' => 'Please select Amenities Type.',
            'amenities_id.array' => 'The selected amenities must be valid.',
            'amenities_id.min' => 'Please select at least one Amenity.',

            'capacity.required' => 'Please enter Capacity.',
            'capacity.min' => 'The capacity must be at least 1 person.',
            'capacity.max' => 'The capacity must not exceed 100 persons.',
            'capacity.integer' => 'The capacity must be a valid number.',

            'price_per_day.required' => 'Please enter Price Per Day.',
            'price_per_day.integer' => 'The Price Per Day must be a valid number.',

            'description.required' => 'Please enter Description.',
            'description.string' => 'The Description must be valid text.',
            'description.max' => 'The Description must not exceed 100 characters.',
        ];
    }


}
