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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:students,email',
            'password' => 'required|min:8',
            'contact' => 'required|digits:10|numeric',
            'semester' => 'required',
            'hobby' => 'required',
            'dob' => 'required|date',
            'url' => 'required',
            'photo' => 'required|mimes:ico,jpg,png'
        ];
    }
}
