<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSmellPost extends FormRequest
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
            'name' => 'required|min:3|max:10',
            'slug' => 'required|alpha|unique:smells,slug|min:3|max:10',
            'description' => 'required|min:10',
            'small_icon' => 'required|file|image',
            'big_icon' => 'required|file|image'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'необходимо указать имя',
            'name.min' => 'минимальное количество символов :min',
            'name.max' => 'максимальное количество символов :max',
            'slug.required' => 'необходимо указать слизня',
            'slug.alpha' => 'слизень должен быть латинскими буквами',
            'slug.unique' => 'данное имя уже занято',
            'slug.min' => 'минимальное количество символов :min',
            'slug.max' => 'максимальное количество символов :max',
            'description.required' => 'необходимо указать описание',
            'description.min' => 'минимальное количество символов :min',
            'small_icon.required' => 'необходимо отправить малый файл',
            'big_icon.required' => 'необходимо отправить большей файл',
        ];
    }
}
