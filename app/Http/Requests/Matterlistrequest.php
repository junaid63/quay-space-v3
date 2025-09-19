<?php 

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Matterlistrequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'client_id' => 'required|exists:clients,id',
            'matter_id' => 'required|string|max:255',
            'funding_id' => 'required|exists:fundings,id',
            'proceeding_id' => 'required|exists:proceedings,id',
        ];
    }

    public function messages(): array
    {
        return [
            'client_id.required' => 'Please select a client.',
            'client_id.exists' => 'The selected client does not exist in the system.',

            'matter_id.required' => 'Please enter a matter ID.',
            'matter_id.string' => 'The matter ID must be a valid text.',
            'matter_id.max' => 'The matter ID must not exceed 255 characters.',

            'funding_id.required' => 'Please select a funding type.',
            'funding_id.exists' => 'The selected funding type is invalid or missing.',

            'proceeding_id.required' => 'Please select a proceeding type.',
            'proceeding_id.exists' => 'The selected proceeding type is invalid or missing.',
        ];
    }
}
