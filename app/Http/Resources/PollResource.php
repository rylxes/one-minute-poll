<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class PollResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        try {
            return [
                'id' => $this->id,
                'counters' => @$this->counters->first()->pivot,
                'pollCounters' => @$this->pollOptionsWithCounter,
                'title' => $this->title,
                'user' => $this->user,
                'UserUuid' => $this->uuidUser,
                'pollOptions' => $this->pollOptions,
                'votes' => $this->votes,
                'pollValue' => @$this->votes->pollValue,
                'pollType' => @$this->pollType,
                'valueVote' => @$this->pollType->valueVote,
                'url' => $this->url,
                'code' => $this->code,
                'category' => $this->category,
                'user_id' => $this->user_id,
                'poll_type_id' => $this->poll_type_id,
                'open_to_everyone' => $this->open_to_everyone,
                'question' => $this->question,
                'close_date' => $this->close_date,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ];
        } catch (\Throwable $exception) {
            dd($exception->getMessage());
            return [];
        }

        // dd($userCheck);

    }
}
