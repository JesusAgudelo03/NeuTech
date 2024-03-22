<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
			'descripcion' => 'required|string',
			'precio' => 'required',
			'cantidad_stock' => 'required',
			'modelo' => 'required|string',
			'especificaciones_tecnicas' => 'required|string',
			'imagen' => 'required|string',
			'marca_id' => 'required',
			'categoria_id' => 'required',
        ];
    }
}
