<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailSubscribers extends Mailable
{
    use Queueable, SerializesModels;
    public $submessage;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($submessage)
    {
        $this->submessage=$submessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('subscriberMessage');
    }
}
