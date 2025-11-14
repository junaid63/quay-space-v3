<?php 

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Servicerequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'image' => 'required|file|mimes:jpg,jpeg,png,webp|max:2048',
            'icon'  => 'required|file|mimes:jpg,jpeg,png,webp,svg|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Please enter Service title.',
            'image.required' => 'Please upload a service image.',
            'image.mimes'    => 'Only JPG, PNG, or WEBP images are allowed for the service image.',
            'icon.required'  => 'Please upload a service icon.',
            'icon.mimes'     => 'Only JPG, PNG, WEBP, or SVG icons are allowed.',
        ];
    }


}
