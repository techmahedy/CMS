<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\Subscriber;

class JoinNotify extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    
    public function __construct()
    {
        //
    }

    
    public function build()
    {
        return $this->view('frontend.email.subscriber');
    }
}
