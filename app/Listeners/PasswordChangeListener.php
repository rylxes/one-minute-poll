<?php

namespace App\Listeners;

use App\Events\PasswordChangeEvent;
use App\Mail\InviteSuccessful;
use App\Mail\PasswordChangeSuccessful;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class PasswordChangeListener
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
     * @param  PasswordChangeEvent  $event
     * @return void
     */
    public function handle(PasswordChangeEvent $event)
    {
        $user = $event->user;
        try {
            Mail::to($user->getEmailForVerification())->send(new PasswordChangeSuccessful($user));
        } catch (\Exception $exception) {
            //dd($exception->getMessage());
        }
    }
}
