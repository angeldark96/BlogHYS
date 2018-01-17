<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class storeUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:150|min:4|regex:/^[(a-zA-Z\s)]+$/u',
            'apellido' => 'required|max:150|min:3|regex:/^[(a-zA-Z\s)]+$/u',
            'email' =>  [ 'required'],
            'dni' => 'required|min:8|numeric',
            'edad' => 'required|numeric',
            'password' => 'required|max:100|min:8|alpha_dash',
            'imginame' => 'required|image|mimes:png',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre del usuario es requerido',
            'name.max' => 'El nombre no debe de tener mas de 1000 caracteres',
            'name.min' => 'El nombre debe de tener por lo minimo 3 carateres',
            'name.regex' => 'El nombre solo debe de tener letras ',


            'apellido.required' => 'El apellido del usuario es requerido',
            'apellido.max' => 'El apellido no debe de tener mas de 1000 caracteres',
            'apellido.min' => 'El apellido no debe de tener mas de 3 caracteres',
            'apellido.regex' => 'El apellido solo debe de tener letras ',


            'email.required' => 'El email  es requerido',

            'dni.required' => 'El DNI es requerido',
            'dni.min' => 'El DNI debe de tener por lo minimo 8 digitos númerico',
            'dni.unique' => 'El DNI debe de ser unico ',

            'edad.required' => 'La edad del usuario es requerido',
            'edad.numeric' => 'La edad debe de ser numerico',


            'password.required' => 'El password es requerido',
            'password.max' => 'El password es requerido',
            'password.min' => 'El password debe de tener por lo minimo 8 digitos',
            'password.alpha_dash' => 'El password debe de tener letras numeros ',


            'imginame.unique' => 'La imagen es requerida',
            'imginame.image' => 'La imagen debe conteneder solo imágenes ',
            'imginame.mimes' => 'La imagen debe de estar en formato .PNG',

        ];
    }
}
