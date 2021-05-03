<?php

namespace App\Listeners;

use App\Events\InviteEvent;
use App\Mail\InviteUsers;
use App\Models\User;
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


        $is_user = false;
        $isUser = User::where('email', $email)->get();
        if(!empty($isUser)){
            $is_user = true;
        }

        try {
            Mail::to($email)->send(new InviteUsers($company , $is_user));
        } catch (\Exception $exception) {
            //dd($exception->getMessage());
        }
    }
}
