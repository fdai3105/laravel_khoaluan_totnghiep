<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @param $request
     * @return array
     */
    public function toArray($request): array {
        return [
            'id' => $this->id,
            'comment' => $this->comment,
            'user' => new UserResource($this->user),
        ];
    }
}
