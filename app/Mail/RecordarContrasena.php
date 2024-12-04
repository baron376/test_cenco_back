<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RecordarContrasena extends Mailable
{
    use Queueable, SerializesModels;
    public $usuario;
   
    public function __construct($usuario)
    {
        $this->usuario = $usuario;
    }
        
        
    public function build()
    {
        $this->subject('CencoCheck Recordar Contraseña '.$this->usuario->nombre)->view('Mail.Seguridad.recordarcontrasena')->with('usuario' ,$this->usuario);
    }
}