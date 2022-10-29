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
           /* 'name' => 'required|min:8',
            'email' => 'required|min:3',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'*/
            'names' => 'required||min:4',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'fecha' => 'required||min:10',
            'apellidos' => 'required||min:4',
            'genero' => 'required||min:4',
            'telefono' => 'required||min:9'
                ];
    }
}