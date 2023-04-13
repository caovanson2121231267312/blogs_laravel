<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class JobsRequest extends FormRequest
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
            'title' => 'required|min:2|max:1000',
            'description' => 'required|min:2|max:10000',
            'skill' => 'required|min:2|max:4000',
            'time_limit' => 'required',
            'work_type' => 'required',
            'pay_type' => 'required',
            'min_price' => 'required',
            'max_price' => 'required',
            'field_id' => 'required',
        ];
    }
}