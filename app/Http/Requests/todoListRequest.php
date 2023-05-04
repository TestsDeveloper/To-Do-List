<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class todoListRequest extends FormRequest
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
            'category' => 'required|min:4|unique:todo_lists,category',
            'title' => 'required|min:5',
            'description' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'category.required' => "You need to fill the category",
            'title.required' => "You need to fill the title",
            'description' => "You need to fill the description"
        ];
    }
}
