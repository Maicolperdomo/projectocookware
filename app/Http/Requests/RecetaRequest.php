<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecetaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'descripcion' => 'required',
            'ingredientes' => 'required',
            'cantidad_id',
            'unidad_id',
            'pasos' => 'required',
            'foto' => 'required|image|max:2048',
            'nivel_id',
            'tiempo_estimado' => 'required',
        ];
    }
    
}
