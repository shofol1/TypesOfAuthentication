<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class websiteMail extends Mailable
{
    use Queueable, SerializesModels;

   public $subject;
   public $body;
    public function __construct($subject,$body)
    {
        $this->subject=$subject;
        $this->body=$body;
    }
    public function build()
    {
        return $this->view('email')->with([
            'subject'=>$this->subject
        ]);
    }
}
