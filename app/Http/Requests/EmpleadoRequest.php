<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoRequest extends FormRequest
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
			'nombre' => 'required|string',
			'apellido' => 'required|string',
			'departamento_id' => 'required',
			'cargo' => 'required|string',
			'estado' => 'required',
			'fecha_ingreso' => 'required',
        ];
    }
    public function messages(): array
{
    return [
        'nombre.required' => 'El nombre es obligatorio.',
        'nombre.string' => 'El nombre debe ser una cadena de texto.',
        'apellido.required' => 'El apellido es obligatorio.',
        'apellido.string' => 'El apellido debe ser una cadena de texto.',
        'departamento_id.required' => 'El departamento es obligatorio.',
        'cargo.required' => 'El cargo es obligatorio.',
        'cargo.string' => 'El cargo debe ser una cadena de texto.',
        'estado.required' => 'El estado es obligatorio.',
        'fecha_ingreso.required' => 'La fecha de ingreso es obligatoria.',
    ];
}

}
