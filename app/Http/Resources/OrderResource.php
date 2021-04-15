<?php

namespace App\Http\Resources;

use App\Models\OrderDetail;
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
            "item" => count($this->orderDetail),
            "address" => new AddressResource($this->address),
            "order_detail"=> OrderDetailResource::collection($this->orderDetail),
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
