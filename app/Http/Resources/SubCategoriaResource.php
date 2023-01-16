<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubCategoriaResource extends JsonResource
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
            'sc_id' => $this->sc_id,
            'categoria_id' => $this->categoria_id,
            'sc_nombre' => $this->sc_nombre,
            'sc_descripcion' => $this->sc_descripcion,
        ];
    }
}
