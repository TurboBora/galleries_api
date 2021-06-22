<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'confirmed|min:8|regex:/[0-9]/|regex:/[a-z]/',
            'password_confirmation' => 'same:password',
            'term' => 'accepted',
        ];
    }

    public function messages()
    {
        return [
            'password.regex' => 'The password must have at least one digit!'
        ];
    }
}
