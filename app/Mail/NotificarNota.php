<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificarNota extends Mailable
{
    use Queueable, SerializesModels;

    private $nota = 0;
    private $materia = "";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nota, $materia)
    {
        $this->nota=$nota;
        $this->materia=$materia;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.sendNota',["materia" => $this->materia, "nota" => $this->nota])->from("mcallister2696@gmail.com");
    }
}
