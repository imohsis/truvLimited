<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MemberDisapprovalMail extends Mailable
{
    use Queueable, SerializesModels;
    private $email;
    private $reason;
    private $name;
    private $scheme;
    private $startingClass;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $name, $reason, $scheme, $startingClass)
    {
        $this->email = $email;
        $this->reason = $reason;

        $this->name = $name;
        $this->scheme = $scheme;
        $this->startingClass = $startingClass;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("account@truevlimited.com")->subject("True V Limited --Your registration has been Disapproved")->view("emails.disapproval")
            ->with('email', $this->email)
            ->with('reason', $this->reason)
            ->with('scheme', $this->scheme)
            ->with('startingClass', $this->startingClass)
            ->with('name', $this->name);
    }
}
