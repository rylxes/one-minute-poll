<?php

namespace App\Events;

use App\Models\Company;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class InviteEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $company;
    public $email;
    public $base_url;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Company $company, $email, $base_url)
    {
        $this->company = $company;
        $this->email = $email;
        $this->base_url = $base_url;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
