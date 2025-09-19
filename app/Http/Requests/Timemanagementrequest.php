<?php 

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Timemanagementrequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'date' => 'required|string|max:255',
            'activity_id' => 'required|exists:activities,id',
            'matter_id' => 'required|exists:matters,id',
            'description' => 'required|string|max:255',
            'units' => 'required|integer|',
            'amount' => 'required|numeric',
            'user_id' => 'required|exists:users,id'
        ];
    }

    public function messages(): array
    {
        return [
            'date.required' => 'The date field is required.',
            'date.string' => 'The date must be a valid string.',
            'date.max' => 'The date cannot be longer than 255 characters.',
            
            'activity_id.required' => 'The activity field is required.',
            'activity_id.exists' => 'The selected activity does not exist.',
            
            'matter_id.required' => 'The matter field is required.',
            'matter_id.exists' => 'The selected matter does not exist.',
            
            'description.required' => 'The description field is required.',
            'description.string' => 'The description must be a valid string.',
            'description.max' => 'The description cannot be longer than 255 characters.',
            
            'units.required' => 'The units field is required.',
            'units.integer' => 'The units must be an integer.',
            
            'amount.required' => 'The amount field is required.',
            'amount.numeric' => 'The amount must be a valid number.',
            
            'user_id.required' => 'The user field is required.',
            'user_id.exists' => 'The selected user does not exist.'
        ];
    }

}
