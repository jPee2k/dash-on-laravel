<?php

namespace App\Http\Requests;

use App\Models\Dash\Template;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Services\BasicHelper;

class PageValidator extends FormRequest
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
        $templates = Template::all()->pluck('id')->prepend(0);

        return [
            'name' => ['required', 'string', 'max:191', 'min:3'],
            'status' => [Rule::in($helper->getStatusKeys()), 'required'],
            'description' => ['nullable', 'min:3', 'max:8000'],
            'image_name' => ['image', 'nullable', 'max:512'],
            'keywords' => ['nullable', 'max:1024'],
            'content_title' => ['required', 'string', 'min:3', 'max:191'],
            'content_data' => ['string', 'nullable', 'max:16000'],

            // Model Route
            'slug' => ['string', 'nullable', 'max:191'],

            // Template
            'template_id' => ['required', 'numeric', 'between:0,999999999', Rule::in($templates)],
        ];
    }
}
