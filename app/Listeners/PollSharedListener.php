<?php

namespace App\Listeners;

use App\Events\PollShared;
use App\Http\Requests\API\SharePolls;
use App\Mail\SharePoll;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class PollSharedListener
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
     * @param PollShared $event
     * @return void
     */
    public function handle(PollShared $event)
    {
        $emails = $event->emails;
        $poll = $event->poll;
        try {
            Mail::to($emails->toArray())->send(new SharePoll($poll));
        } catch (\Exception $exception) {
           // dd($exception->getMessage());
        }
    }
}
