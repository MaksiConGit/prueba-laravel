<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'name' => 'required|min:5|max:10',
            'beneficios' => 'required',
            'slug' => 'required|unique:categories',
            'fecha_rara' => 'required'
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'Nombre requerido pa'
        ];
    }
}

