<?php

namespace App\Listeners;

use App\Events\AccountInvitation;
use App\Mail\InviteUsers;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class AccountInvitationListener
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
     * @param AccountInvitation $event
     * @return void
     */
    public function handle(AccountInvitation $event)
    {
        $emails = $event->emails;
        try {
            Mail::to($emails->toArray())->send(new InviteUsers());
        } catch (\Exception $exception) {
           // dd($exception->getMessage());
        }

    }
}
