<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user' => $this->user,
            'product_id' => $this->product_id,
            'rating' => $this->rating,
            'body' => $this->body,
            'created_at' => $this->created_at,
        ];
    }
}
