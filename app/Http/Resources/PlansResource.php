<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlansResource extends JsonResource
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
            'slug' => $this->slug,
            'name' => $this->name,
            'description' => $this->description,
            'is_active' => $this->is_active,
            'price' => $this->price,
            'signup_fee' => $this->signup_fee,
            'currency' => $this->currency,
            'trial_period' => $this->trial_period,
            'trial_interval' => $this->trial_interval,
            'invoice_period' => $this->invoice_period,
            'invoice_interval' => $this->invoice_interval,
            'grace_period' => $this->grace_period,
            'grace_interval' => $this->grace_interval,
            'prorate_day' => $this->prorate_day,
            'prorate_period' => $this->prorate_period,
            'prorate_extend_due' => $this->prorate_extend_due,
            'active_subscribers_limit' => $this->active_subscribers_limit,
            'sort_order' => $this->sort_order,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at
        ];
    }
}
