<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;


class StorePost extends FormRequest
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
            'title'=> 'required|min:3',
            'content'=>'required|min:5',
            'category_id'=>'required',
//            'category_id'=>'required',
        ];
    }

    public function messages()
    {
        return[
            'title.required' => "El campo titulo es requerido",
            'title.min' => "El campo del contenido debe de tener 3 caracteres por lo minimo",
            'content.required' => "El campo del contenido  es requerido",
            'content.min' => "El campo del contenido debe de tener 3 caracteres por lo minimo",
            'category_id.required' => "El campo de la categoria es requerido",

        ];
    }
}
