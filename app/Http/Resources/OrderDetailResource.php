<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderDetailResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request) {
        return [
            'id' => $this->id,
            'quantity' => $this->quantity,
            'total' => $this->total,
            'product' => new ProductResource($this->product),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
