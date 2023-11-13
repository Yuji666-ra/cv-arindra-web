<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from('admin@gmail.com')
        ->subject('')->view('emails.contact')->with([
            'name' => '',
            'email' => '',
            'subject' => '',
            'message' => ''
        ]);
    }
}

