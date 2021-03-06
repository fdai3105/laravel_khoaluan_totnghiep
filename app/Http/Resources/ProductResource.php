<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @param $request
     * @return array
     */
    public function toArray($request): array {
        return [
            'id' => $this->id,
            'name' => $this->name,
            "price" => $this->price,
            "desc" => $this->desc,
            "sort_desc" => $this->sort_desc,
            "stock" => $this->stock,
            "bought" => $this->bought,
            "warranty" => $this->warranty,
            "discount" => $this->discount,
            "rating" => count($this->ratings),
            "rating_averaged" => $this->calculationRating(),
            "brand" => $this->brand,
            "category" => $this->category,
            "images" => $this->images,
            'attributes' => ProductAttributeResource::collection($this->attributes),
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
