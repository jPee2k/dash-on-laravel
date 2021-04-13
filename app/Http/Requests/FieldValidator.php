<?php

namespace App\Http\Requests;

use App\Services\BasicHelper;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class FieldValidator extends FormRequest
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
        $helper = new BasicHelper();
        $id = isset($this->field->id) ? $this->field->id : '';

        return [
            'name' => 'required|string|max:191|min:3',
            'prefix' => 'string|nullable|max:191|unique:fields,prefix,' . $id,
            'type' => [Rule::in($helper->getCustomFieldKeys()), 'required'],
            'template_id' => 'required|numeric|between:1,99999999',
        ];
    }
}
