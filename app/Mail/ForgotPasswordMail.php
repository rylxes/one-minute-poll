<?php

namespace App\Mail;

use App\Models\Company;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgotPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $token;
    public $user;
    public $base_url;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($base_url, $token, User $user)
    {
        $this->token = $token;
        $this->user = $user;
        $this->base_url = $base_url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = $this->base_url . '?' . http_build_query([
                'token' => $this->token,
            ]);
       // $url = '';
        //dd($url, $this->token , $this->user);
        return $this->markdown('emails.forgot-password')
            ->with([
                'token' => $this->token,
                'url' => $url,
                // 'user' => $this->user,
            ])
            ->subject(config('app.name') . " Reset Password Notification ");
    }
}
