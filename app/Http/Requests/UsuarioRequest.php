<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */    

    public function rules(): array
    {
        return [
            'nombreUsuario' => ['required', 'string', 'min:5', 'max:20','unique:usuario,nombreUsuario'],
            'cedulaPersonal' => ['required', 'string'],
            'idRol' => ['required', 'integer'],
            'estadoUsuario' => ['required', 'boolean']
        ];
    }

    public function messages(): array
    {
        return [
            'nombreUsuario.unique' => 'El nombre de usuario ya está en uso.',
        ];
    }

}
