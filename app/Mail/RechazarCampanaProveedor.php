<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PDF;

class RechazarCampanaProveedor extends Mailable
{
    use Queueable, SerializesModels;
    public $campana;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($campana)
    {
        $this->campana = $campana;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
   /* public function build()
    {
        
        return $this->subject($this->detalle_mail['nombre_campana'])->view('Mail.Campana.storecampanaproveedor');
    }*/

    public function build()
    {
       return $this->subject('Campaña proveedor : '.$this->campana->nombre." RECHAZADA")->view('Mail.Campana.rechazarcampanaproveedor')->with('detalle' ,$this->campana);
    }
}
