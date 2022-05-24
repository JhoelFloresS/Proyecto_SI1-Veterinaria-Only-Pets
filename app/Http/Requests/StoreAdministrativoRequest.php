<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdministrativoRequest extends FormRequest
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
            'nombre' => 'string|required|max:20|min:3',
            'apellido_paterno' => 'string|required|max:20|min:3',
            'apellido_materno' => 'string|required|max:20|min:3',
            'email' => 'email|max:40|unique:personas,email',

            'profesion' => 'string|min:3',

            'nombre_usuario' => 'string|required|max:20|min:3|unique:usuarios,nombre_usuario',
            'password' => 'string|required|max:100|min:3|confirmed',
            'id_rol' => '',
        ];
    }
}
