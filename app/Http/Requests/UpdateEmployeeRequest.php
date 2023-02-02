<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
            'password' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'type' => 'required',
            'color' => 'required',
            'hobby' => 'required',
            'address' => 'required',
            'experience' => 'required',
            'dob' => 'required',
            'time' => 'required',
            'url' => 'required',
        ];
    }
}