<?php 
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SwitchAccountRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'ref_key' => ['required', 'exists:users,ref_key'],
        ];
    }

    /**
     */
    public function targetUser(): \App\Models\User
    {
        return $this->route()->hasParameter('target')
            ? $this->route('target')   
            : \App\Models\User::where('ref_key', $this->input('ref_key'))->firstOrFail();
    }
}
