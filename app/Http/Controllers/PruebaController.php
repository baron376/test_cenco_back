<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Prueba;
use App\Models\Salas;
use App\Models\Secciones;
use App\Models\SalasSesiones;
use App\Models\Cadenas;
use App\Models\User;
use App\Models\Comunas;
use App\Models\Modulos;
use App\Models\Permisos;
use App\Models\Provincias;
use App\Models\Regiones;
use App\Models\UsuarioSalas;
use App\Models\SubMenu;
use App\Models\Roles;
use App\Models\CampanaProveedor;
use App\Models\Zona;
use App\Models\CampanaFaldon;
use App\Models\Sesiones;
use DB;
use App\Models\ArchivosFaldonesDataOriginal;
use App\Models\AlertaArchivosCampanasFaldones;
use App\Models\AlertaValidacionesArchivosCampanasFaldones;
use App\Models\ArchivosFaldones;
use App\Models\MedioCampanaFaldones;
use App\Models\TipoMedioCampanaFaldones;
use App\Models\TipoVolanteCatalogoCampanaFaldones;
use App\Models\TipoPromoCampanaFaldones;
use App\Models\RechazosArchivosCampanasFaldones;
use App\Models\RechazosValidacionesArchivosCampanasFaldones;
use App\Models\ArchivosFaldonesData;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ArchivosFaldonesDataImport;
use App\Models\CadenaPlantillaFormatoTipoPromoTexto;
use PDF;
use App\Mail\TestEmail;
use Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\App;
use App\Models\VerifyLoginToken;
use App\Jobs\GenerarFaldones;
use App\Jobs\GenerarFaldonesEspecifico;

class PruebaController extends Controller
{
    protected $urlFront = '';
    function __construct() {
        $this->urlFront = config('app.front');
    }

    public function testArq(){
        /*phpinfo();*/
        dispatch(new GenerarFaldones());
    }
    /*public function testArq2($idCampana){
        dispatch(new GenerarFaldonesEspecifico($idCampana));
    }*/

    public function testArq2($idCampana)
    {
        //$faldones = ArchivosFaldones::where('url_pdf' , null)->where('id_estados_archivos_faldones' , 5)->orderBy('id', 'DESC')->get()->take(5);
        $faldones = ArchivosFaldones::where('id_campana' , $idCampana)->get();
        \Log::info($faldones);
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
        return $url;
    }

    public function generar_faldones($idCampana)
    {
        set_time_limit(1420000);
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
                    \Log::info('plantillas involucradas ' .$plantillaCorrecta->plantilla_blade_pdf);
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
            \Log::info('error' . $e);
        }
    }

    public function checkSecion(Request $request){
        dd( Auth::check());
    }

    public function CargaInicialSalaSessiones()
    {
        $sala = Salas::all();
        foreach ($sala as $key => $value) {
        	$secciones = Secciones::all();
        	foreach ($secciones as $key2 => $value1) {
        		$sala_ses = new SalasSesiones();
        		$sala_ses->id_sala = $value->id;
				$sala_ses->id_sesion = $value1->id ;
				$sala_ses->id_usuario_crear = 1;
				$sala_ses->id_usuario_modifica = NULL;
				$sala_ses->created_at = NOW();
				$sala_ses->updated_at = NULL;
				$sala_ses->deleted_at = NULL;
				$sala_ses->save();
        	}
        }

        return "OK";
    }

    public function hola(){
        //dd('logueo');
        $key = hex2bin(env('KEYENCRIPT'));
        $iv =  hex2bin(env('IVENCRIPT'));
        $encript = openssl_encrypt(Auth::user()->email, 'AES-128-CBC', $key, OPENSSL_ZERO_PADDING, $iv);
        $nowFive = Carbon::now()->addMinutes(7);
        $nowMenusFive = Carbon::now()->subMinute(5);
        $cookieApp = request()->cookie('mzzo_session');
        $cookieUser = request()->cookie('fulanodetalpalbackTK');

        $queryToverify0  = VerifyLoginToken::where('hast_email' , Auth::user()->email)
        ->whereIn('type_register' , [0])
        ->whereBetween('created_at', [$nowMenusFive, $nowFive])
        ->first();

        $queryToverify1  = VerifyLoginToken::where('hast_email' , Auth::user()->email)
        ->whereIn('type_register' , [1])
        ->whereBetween('created_at', [$nowMenusFive, $nowFive])
        ->first();
        
        if ($queryToverify0 && $queryToverify1){
            return Redirect::to($this->urlFront.'/Init');
        }else{
            return redirect()->route('saml2_logout', 'mzzo');
        }
       // dd($queryToverify);
        
        
    }
    public function hola2(){
        Auth::guard()->logout();
        //return Redirect::to($this->urlFront.'/');
        return Redirect::to('https://www.cencocheck.com'.'/LoginInt');
    }
    public function hola3(Request $request){
    //dd('error');
        return Redirect::to('https://www.cencocheck.com'.'/');
    }

    public function hola444(Request $request){
       $user = User::where('id',1)->first();
       $user->id_proveedor = 1;
       $user->save();
        return $user;
    }
    public function logoutP(){
       return Redirect::to('https://api.cencocheck.com/saml2/mzzo/logout/'.Auth::user()->email.'/'.Auth::user()->url_imagen);
      //redirect()->route('saml2_logout', ['mzzo',Auth::user()->email, Auth::user()->url_imagen]);
    }
}