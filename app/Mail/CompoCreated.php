<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CompoCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $compo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($compo)
    {
        $this->compo = $compo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.compo-created');
    }
}
