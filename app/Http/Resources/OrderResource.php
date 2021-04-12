<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request) {
        return [
            "id" => $this->id,
            "status" => $this->status,
            "total" => $this->total,
            "note" => $this->note,
            "address" => new AddressResource($this->address),
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
