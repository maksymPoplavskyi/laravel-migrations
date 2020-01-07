<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryPost extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|alpha|unique:smell_categories,name|min:3|max:10'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'заполни поле',
            'name.alpha' => 'только латинские буквы',
            'name.unique' => 'неуникальное имя',
            'name.min' => 'минимальное значение :min',
            'name.max' => 'максимальное значение :max'
        ];
    }
}
