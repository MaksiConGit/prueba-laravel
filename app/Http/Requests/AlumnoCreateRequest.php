<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoCreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre'=> 'required|min:2|max:255',
            'apellido'=> 'required|min:2|max:255',
            'email'=> 'required|min:7|max:255|unique:alumnos',
            'password'=> 'required|min:8|max:255',
        ];
    }

    public function messages()
    {
        return[
            'nombre.required' => 'Por favor ingrese el :attribute'
        ];
    }

    public function attributes()
    {
        return[
            'nombre' => 'nombre del alumno'
        ];
    }
}
