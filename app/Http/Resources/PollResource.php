<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PollResource extends JsonResource
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
            'title' => $this->title,
            'url' => $this->url,
            'code' => $this->code,
            'category_id' => $this->category_id,
            'user_id' => $this->user_id,
            'poll_type_id' => $this->poll_type_id,
            'open_to_everyone' => $this->open_to_everyone,
            'question' => $this->question,
            'close_date' => $this->close_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
