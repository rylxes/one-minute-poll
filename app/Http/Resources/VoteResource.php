<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'poll_id' => $this->poll_id,
            'unique_id' => $this->unique_id,
            'poll_value_id' => $this->poll_value_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
