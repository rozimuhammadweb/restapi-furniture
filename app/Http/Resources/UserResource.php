<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id' => $this->id,
            "firstName" => $this->firstName,
            "lastName" => $this->lastName,
            "firstName" => $this->firstName,
            "fullName" => $this->firstName . " " . $this->lastName,
            "email" => $this->email,
            "phone" => $this->phone,
            "created_at" => $this->created_at,
        ];
    }
}
