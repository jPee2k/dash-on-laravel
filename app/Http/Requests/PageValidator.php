<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

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
        return [
            'name' => ['required', 'string', 'max:191', 'min:3'],
            'status' => [Rule::in(['publish', 'draft']), 'required'],
            'description' => ['nullable', 'min:3', 'max:8000'],
            'image_name' => ['image', 'nullable', 'max:512'],
            'keywords' => ['nullable', 'min:3', 'max:8000'],
            'content_title' => ['required', 'string', 'min:3', 'max:191'],
            'content_data' => ['string', 'nullable', 'max:16000'],

            // Model Route
            'slug' => ['string', 'nullable', 'max:191'],
        ];
    }
}
