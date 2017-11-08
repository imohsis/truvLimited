<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MemberActivateMail extends Mailable
{
    use Queueable, SerializesModels;
    private $email;
    private $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $name)
    {
        $this->email = $email;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("account@truevlimited.com")->subject("True V Limited --Your account has been activated")->view("emails.activate")
            ->with('email', $this->email)
            ->with('name', $this->name);
    }
}
