<?php

namespace App\Listeners;

use App\Events\PollCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class PollCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param PollCreated $event
     * @return void
     */
    public function handle(PollCreated $event)
    {
        $poll = $event->poll;
        try {
            $emails = @$event->poll->user->email;
            if (!empty($emails)) {
                Mail::to($emails)->send(new \App\Mail\PollCreatedMail($poll));
            }
        } catch (\Exception $exception) {
            //dd($exception->getMessage());
        }
    }
}
