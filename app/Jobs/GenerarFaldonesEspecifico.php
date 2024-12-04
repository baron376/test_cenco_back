<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\FormatoTipo;
use App\Models\PlantillaTipo;
use App\Models\CampanaFaldon;
use App\Models\ArchivosFaldones;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ArchivosFaldonesDataImport;
use App\Models\ArchivosFaldonesDataOriginal;
use App\Models\AlertaArchivosCampanasFaldones;
use App\Models\AlertaValidacionesArchivosCampanasFaldones;
use App\Models\MedioCampanaFaldones;
use App\Models\TipoMedioCampanaFaldones;
use App\Models\TipoVolanteCatalogoCampanaFaldones;
use App\Models\TipoPromoCampanaFaldones;
use App\Models\RechazosArchivosCampanasFaldones;
use App\Models\RechazosValidacionesArchivosCampanasFaldones;
use App\Models\ArchivosFaldonesData;
use App\Models\Cadenas;
use App\Models\Salas;
use App\Models\Secciones;
use App\Models\SalaTipoSala;
use App\Models\TipoSala;
use App\Models\ProductosRegistrados;
use Illuminate\Support\Facades\Auth;
use App\Models\CadenaPlantillaFormatoTipoPromoTexto;
use PDF;
use LynX39\LaraPdfMerger\Facades\PdfMerger;
use App\Models\User;
use App\Models\StockDataSala;
use App\Models\UsuarioSalas;
use App\Exports\StockExport;

class GenerarFaldonesEspecifico implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $signature = 'generar:faldones';
    protected $description = 'Crea pdf de campaña faldones';
    protected $idCampana = null;

    public function __construct($idCampana)
    {
         $this->idCampana = $idCampana;
    }

    public function handle()
    {
        $faldones = ArchivosFaldones::where('id_campana',$this->idCampana);
        foreach($faldones as $faldon){
            $url = $this->generar_faldones($faldon->id_campana);
            \Log::info($url);
            if($url != 'X') {
                $faldon->url_pdf = $url;
                $faldon->save();
            }
            else{
                $faldon->delete();
            }
        }
    }

    public function generar_faldones($idCampana)
    {
        set_time_limit(14200);
        $arrayRutas = [];
        $campana = CampanaFaldon::where('id', $idCampana)->first();
        $faldones = ArchivosFaldonesData::where('id_campana' , $idCampana)->get()->groupBy('id_tipo_promo');
        $faldonesDobleA = ArchivosFaldonesData::where('id_campana' , $idCampana)->get()->groupBy('nombre_generico_promocion');
        $arrayDefinitivo = [];

        if(!$campana){
            return "X";
        }

        foreach ($faldonesDobleA as $clavep => $itensNombrePromo) {
             
            switch ($campana->id_formato) {
                case 2:
                    $arrayDefinitivo [] =  $itensNombrePromo->first();
                    break;
                case 1:
                    if(count($itensNombrePromo) >= 1 && count($itensNombrePromo) <= 10 ){
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                    }elseif(count($itensNombrePromo) >10 && count($itensNombrePromo)<= 50){
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                    }else{
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                    }
                    break;
                case 3:
                    if(count($itensNombrePromo) >= 1 && count($itensNombrePromo) <= 10 ){
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                    }elseif(count($itensNombrePromo) >10 && count($itensNombrePromo)<= 50){
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                    }else{
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                    }
                    break;
                case 4:
                    if(count($itensNombrePromo) >= 1 && count($itensNombrePromo) <= 10 ){
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                    }elseif(count($itensNombrePromo) >10 && count($itensNombrePromo)<= 50){
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                    }else{
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                        $arrayDefinitivo [] = $itensNombrePromo->first();
                    }
                    break;
                case 5:
                    $arrayDefinitivo [] =  $itensNombrePromo->first();
                    break;
                default:
                break;
            }
                
        }

        $arrayDefinitivo = collect ($arrayDefinitivo)->groupBy('id_tipo_promo'); 
        try{
             
            foreach ($arrayDefinitivo as $clave => $productoFaldon) {
                $plantillaCorrecta = CadenaPlantillaFormatoTipoPromoTexto::
                where('id_cadena' ,  $productoFaldon[0]->id_cadena)
                ->where('id_plantilla' ,  $productoFaldon[0]->id_plantilla)
                ->where('id_formato' ,  $productoFaldon[0]->id_formato)
                ->where('id_tipo_promo' ,  $productoFaldon[0]->id_tipo_promo)
                // ->where('texto_largo' ,  $productoFaldon[0]->texto_largo)
                ->where('qr' ,  $productoFaldon[0]->qr)
                ->first();
                if($plantillaCorrecta){
                    \Log::info($plantillaCorrecta->plantilla_blade_pdf);
                    $plantillaPdf =  $plantillaCorrecta->plantilla_blade_pdf;
                    $data = ['product' => $productoFaldon];
                    $has = bin2hex(random_bytes(8));
                    $route = public_path().'/TmpFaldones/'.$has.'.pdf';
                    $arrayRutas[] =  $route;
                    $orientacion = $productoFaldon[0]->id_cadena == 2 && $productoFaldon[0]->id_formato == 1 ? 'portrait' : $plantillaCorrecta->formato->orientacion ;
                    $pdf = PDF::loadView($plantillaPdf, $data)->setPaper('A4', $orientacion )->save($route);
                }
                else{
                    \Log::info($productoFaldon);
                }
            }
            $hastt = bin2hex(random_bytes(16));

            //$pathForTheMergedPdf = public_path().'/'.$hastt.'.pdf';
            $pathForTheMergedPdf = public_path()."/FaldonesPdf/".$hastt.'.pdf';

            
          
            $fileArray= $arrayRutas;
            $datadir = public_path()."/TmpFaldones/";
            $outputName = $pathForTheMergedPdf;

            $cmd = "gs -q -dNOPAUSE -dBATCH -sDEVICE=pdfwrite -sOutputFile=$outputName ";
            foreach($fileArray as $file) {
                $cmd .= $file." ";
            }
            $result = Shell_exec($cmd);

            $encode = base64_encode(file_get_contents($pathForTheMergedPdf));
            $dataReturn=[
                'nombre_archivo'=> $campana->nombre,
                'content'=>$encode
            ];

            return "FaldonesPdf/".$hastt.'.pdf';
        }catch (\Exception $e){
            return null;
        }
    }
}