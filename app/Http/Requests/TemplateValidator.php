<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class TemplateValidator extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check() && Auth::user()->is_admin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = isset($this->template->id) ? $this->template->id : '';

        return [
            'name' => 'required|string|min:3|max:191',
            'prefix' => 'string|nullable|max:191|unique:templates,prefix,' . $id,
        ];
    }
}
