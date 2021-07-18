<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PollOptionResource extends JsonResource
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
            'name' => $this->name,
            'value' => $this->value,
            'count' => $this->count,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
