<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MuestraRequest extends FormRequest
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
			'paciente_id' => 'required',
			'codigo_muestra' => 'required|string',
			'fecha_toma' => 'required',
			'tipo_muestra' => 'required|string',
			'observaciones' => 'string',
        ];
    }
}
