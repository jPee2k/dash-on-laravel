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
        return Auth::check() && Auth::user()->role === 'admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:255', 'min:3', 'unique:pages'],
            'status' => [Rule::in(['publish', 'draft']), 'required'],
            'title' => ['required', 'min:3', 'max:255', 'unique:meta_tags'],
            'url' => ['required', 'min:3', 'max:255', 'url'],
            'description' => ['nullable', 'min:3', 'max:8000'],
            'image' => ['image', 'nullable','max:512'],
            'keywords' => ['nullable', 'min:3', 'max:8000']
        ];
    }
}
