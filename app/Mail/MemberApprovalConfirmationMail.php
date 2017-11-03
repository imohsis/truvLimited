<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MemberApprovalConfirmationMail extends Mailable {

    use Queueable,
        SerializesModels;

    private $email;
    private $password;
    private $name;
    private $scheme;
    private $startingClass;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $password, $name, $scheme, $startingClass) {
        //
        $this->email = $email;
        $this->password = $password;

        $this->name = $name;
        $this->scheme = $scheme;
        $this->startingClass = $startingClass;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->from("account@truevlimited.com")->subject("True V Limited --Your registration has been approved")->view("emails.approval")
                        ->with('email', $this->email)
                        ->with('password', $this->password)
                         ->with('scheme', $this->scheme)
                         ->with('startingClass', $this->startingClass)
                        ->with('name', $this->name);
    }

}
