<?php

namespace App\Mail;

use App\Models\Company;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InviteSuccessful extends Mailable
{
    use Queueable, SerializesModels;

    public $company;
    public $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Company $company, User $user)
    {
        $this->company = $company;
        $this->user = $user;
    }



    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.invite-success')
            ->with([
                'company' => $this->company,
                'user' => $this->user,
            ])
            ->subject(config('app.name') . " Welcome to " . $this->company->name);
    }
}
