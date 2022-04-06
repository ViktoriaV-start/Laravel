<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CreateRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            'title' => [
                'required',
                'string',
                'min:5',
                'max:45'
            ],
            'slug' => 'required|min:5|max:15'
            ];
    }
    public function messages() // должен быть
    {
        return[];
    }

    public function attributes()
    {
        return [
            'title' => 'Название категории',
            'slug' => 'Slug'
        ];
    }
}
