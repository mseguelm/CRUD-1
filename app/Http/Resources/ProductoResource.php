<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'producto_id' => $this->producto_id,
            'categoria_id' => $this->categoria_id,
            'producto_nombre' => $this->producto_nombre,
            'producto_descripcion' => $this->producto_descripcion,
            'producto_stock' => $this->producto_stock,
            'producto_valor' => $this->producto_valor,
            'producto_alto' => $this->producto_alto,
            'producto_ancho' => $this->producto_ancho,
            'producto_profundidad' => $this->producto_profundidad,
            'producto_peso' => $this->producto_peso,
        ];
    }
}
