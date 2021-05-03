<?php

namespace App\Mail;

use App\Models\Company;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InviteUsers extends Mailable
{
    use Queueable, SerializesModels;

    public $company;
    public $is_user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Company $company, $is_user)
    {
        $this->company = $company;
        $this->is_user = $is_user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $url = url('join') . '?' . http_build_query(['company' => $this->company->id, 'is_user' => $this->is_user]);
        return $this->markdown('emails.invite-users')
            ->with([
                'company' => $this->company,
                'url' => $url
            ])
            ->subject(config('app.name') . " Invitation from " . $this->company->name);

    }
}
