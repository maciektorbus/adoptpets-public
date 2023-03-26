<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PetResource extends JsonResource
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
        'name' => $this->name,
        'age' => $this->age,
        'created_at' => (string) $this->created_at,
        'updated_at' => (string) $this->updated_at,
        'sex' => $this->sex,
        'short_description' => $this->short_description,
				'type' => $this->type,
      ];
    }
}
