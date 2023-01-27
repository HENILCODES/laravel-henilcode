<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidation extends FormRequest
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
            'contact' => 'required|min:10|numeric',
            'semester' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'url' => 'required',
            'photo' => 'required|mimes:ico,jpg,png'
        ];
    }
    // public function messages()
    // {
    //     return [
    //         'name.required' => 'Enter Name'
    //     ];
    // }
}
