<?php

namespace App\Mail;

use App\Models\Poll;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PollCreatedMail extends Mailable
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
        return $this->markdown('emails.poll-created')
            ->with([
                'poll' => $this->poll
            ])->
            subject('Your Poll Has been created');
    }
}
