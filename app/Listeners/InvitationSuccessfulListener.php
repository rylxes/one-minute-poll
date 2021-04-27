<?php

namespace App\Listeners;

use App\Events\InviteSuccessfulEvent;
use App\Mail\InviteSuccessful;
use App\Mail\InviteUsers;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class InvitationSuccessfulListener
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
     * @param InviteSuccessfulEvent $event
     * @return void
     */
    public function handle(InviteSuccessfulEvent $event)
    {
        $user = $event->user;
        $company = $event->company;
        try {
            Mail::to($user->getEmailForVerification())->send(new InviteSuccessful($company, $user));
        } catch (\Exception $exception) {
            //dd($exception->getMessage());
        }
    }
}
