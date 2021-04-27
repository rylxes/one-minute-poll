<?php

namespace App\Listeners;

use App\Events\InviteEvent;
use App\Mail\InviteUsers;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class InvitationListener
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
     * @param InviteEvent $event
     * @return void
     */
    public function handle(InviteEvent $event)
    {
        $email = $event->email;
        $company = $event->company;
        try {
            Mail::to($email)->send(new InviteUsers($company));
        } catch (\Exception $exception) {
            //dd($exception->getMessage());
        }
    }
}
