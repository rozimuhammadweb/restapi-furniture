<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    
    public function toArray($request)
    {
        return [
        'id' => $this->id,
        'commet' => $this->commet,
        'sum' => $this->sum,
        'user' => $this->user,
        
        ];
    }
}
