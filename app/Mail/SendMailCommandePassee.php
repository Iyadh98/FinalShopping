<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailCommandePassee extends Mailable
{
    use Queueable, SerializesModels;
    public $date;
    public $total;
    public $adresse;
    public $codePostal;
    public $user;
    public $contenu;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($date, $total, $adresse, $codePostal, $user, $contenu)
    {
        $this->date=$date;
        $this->total=$total;
        $this->adresse=$adresse;
        $this->user=$user;
        $this->contenu=$contenu;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emailCommandePassee');
    }
}
