<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PDF;

class AprobarMantencion extends Mailable
{
    use Queueable, SerializesModels;
    public $detalle_mail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($detalle_mail)
    {
        $this->detalle_mail = $detalle_mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->detalle_mail['nombre_mantencion'])->view('Mail.Mantencion.aprobarmantencion');
    }
}
