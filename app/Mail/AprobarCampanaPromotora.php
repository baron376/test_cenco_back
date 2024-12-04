<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PDF;
use App\Models\Promotoras;

class AprobarCampanaPromotora extends Mailable
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
        $campanaPromotora = Promotoras::where('id' ,$this->campana->id)->first();
            $urlQrcode = $this->urlFront.'/DowloadPdfCampanaPromotora-'.$campanaPromotora->id;
            $data = [
                'campana' => $campanaPromotora,
                'urlQrcode'=>$urlQrcode
            ];
            $has = bin2hex(random_bytes(8));
            $nombreCampana = $campanaPromotora->id.'_'.str_replace(' ' , '_' , $campanaPromotora->nombre).'_'.$has.'_.pdf';
            $route = public_path().'/TmpCampanaPromotoras/'.$nombreCampana;
            $pdf = PDF::loadView('Pdf.Campana.detallecampanapromotora', $data)->setPaper('letter', 'portrait');
            //$pdf = PDF::loadView('Pdf.testatach');

       // $pdf = PDF::loadView('Pdf.Campana.aprobarcampanaproveedor', $this->detalle_pdf);
        return $this->subject('Campaña promotora : '.$this->campana->nombre.' APROBADA')->view('Mail.Campana.aprobarcampanapromotora')->with('detalle' ,$this->campana)->attachData($pdf->output(), $this->campana->nombre.".pdf");
    }
}
