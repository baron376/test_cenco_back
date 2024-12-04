<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PDF;
use App\Models\CampanaProveedorNew;
use App\Models\CampanaComentarioNew;
use DB;

class AprobarCampanaProveedor extends Mailable
{
    use Queueable, SerializesModels;
    /*public $detalle_mail;
    public $detalle_pdf;*/
    public $campana;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($campana)
    {
        $this->campana = $campana;
        $this->urlFront = config('app.front');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
            $campanaProveedor = CampanaProveedorNew::where('id' , $this->campana->id)->first();
            $urlQrcode = $this->urlFront.'/DowloadPdfCampanaProveedorNew-'.$campanaProveedor->id;
            $ultimoComentario = CampanaComentarioNew::select(DB::raw("
                campana_comentario_new.id_campana as id_camapana,
                campana_comentario_new.comentario,
                CONCAT(u.nombre, ' ', u.apellido) as usuario,
                DATE_FORMAT(campana_comentario_new.created_at,'%d-%m-%Y %H:%i') as fecha
            "))
            ->join('usuarios as u','campana_comentario_new.id_usuario_crear','u.id')
            ->where('id_campana',$campanaProveedor->id)
            ->orderBy('campana_comentario_new.created_at', 'desc')
            ->first();

            $data = [
                'campana' => $campanaProveedor,
                'urlQrcode'=>$urlQrcode,
                'comentario' =>$ultimoComentario
            ];
            $has = bin2hex(random_bytes(8));
            $nombreCampana = $campanaProveedor->id.'_'.str_replace(' ' , '_' , $campanaProveedor->nombre).'_'.$has.'_.pdf';
            $route = public_path().'/TmpCampanaProveedor/'.$nombreCampana;
            //\Log::info('detalles correo pre' , $data);
            $pdf = PDF::loadView('Pdf.Campana.detallecampanaproveedornew', $data)->setPaper('letter', 'portrait');
            //$pdf = PDF::loadView('Pdf.testatach');

       // $pdf = PDF::loadView('Pdf.Campana.aprobarcampanaproveedor', $this->detalle_pdf);
        return $this->subject('Campaña proveedor : '.$this->campana->nombre.' APROBADA')->view('Mail.Campana.aprobarcampanaproveedor')->with('detalle' ,$this->campana)->attachData($pdf->output(), $this->campana->nombre.".pdf");
    }
}
