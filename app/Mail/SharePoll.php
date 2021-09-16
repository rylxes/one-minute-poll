<?php

namespace App\Mail;

use App\Models\Company;
use App\Models\Poll;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class SharePoll extends Mailable
{
    use Queueable, SerializesModels;

    public $poll;


    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Poll $poll)
    {
        $this->poll = $poll;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->markdown('emails.share-poll')
            ->with([
                'poll' => $this->poll,
                'url' => URL::full()
            ])
            ->subject(config('app.name') . " Poll Shared ! ");

    }
}
