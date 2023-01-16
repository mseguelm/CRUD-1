<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'categoria_id' => ['required'],
            'producto_nombre' => ['required'],
            'producto_descripcion' => ['required'],
            'producto_stock' => ['required'],
            'producto_valor' => ['required'],
            'producto_alto' => ['required'],
            'producto_ancho' => ['required'],
            'producto_profundidad' => ['required'],
            'producto_peso' => ['required'],
        ];
    }
}
