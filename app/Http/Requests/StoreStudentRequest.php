<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            "doc" => 'required|digits:10|unique:students',
            "name" => 'required|min:10|max:100',
            "grade" => 'required|alpha_num|min:2|max:2',
            "nivel" => 'required',
            "correo" => 'required|email'
        ];
    }
}
