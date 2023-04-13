<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:2',
            'description' => 'required|min:2',
            'keywords' => 'required|min:2',
            'video' => 'required|min:2',
            'type' => 'required',
            'link' => 'required',
            'price' => 'required',
            // 'hot' => 'required',
            'commit' => 'required',
            'detail' => 'required',
            'tutorial' => 'required',
            'code_id' => 'required',
            // 'user_id' => 'required',
        ];
    }
}