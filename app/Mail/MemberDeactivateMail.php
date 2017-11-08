<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MemberDeactivateMail extends Mailable
{
    use Queueable, SerializesModels;
    private $email;
    private $name;
    private $reason;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $name, $reason)
    {
        $this->email = $email;
        $this->name = $name;
        $this->reason = $reason;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("account@truevlimited.com")->subject("True V Limited --Your Account has been Deactivated")->view("emails.deactivate")
            ->with('email', $this->email)
            ->with('reason', $this->reason)
            ->with('name', $this->name);
    }
}
