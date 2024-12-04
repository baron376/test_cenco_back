<?php
namespace App\Http\Controllers\Faldones;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\GeneralObetenerController;
use App\Models\FaldonExpress;
use App\Models\Cadenas;
use App\Models\Salas;
use App\Models\TipoMedioCampanaFaldones;
use App\Models\MedioCampanaFaldones;
use App\Models\TipoVolanteCatalogoCampanaFaldones;
use App\Models\FormatoTipo;
use App\Models\PlantillaTipo;
use App\Models\Secciones;
use App\Models\UmbFaldones;
use App\Models\TipoPromoCampanaFaldones;
use App\Models\CombinacionCampanaFaldones;
use App\Models\CadenaPlantillaFormatoTipoPromoTexto;
use Carbon\Carbon;
use PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;



class FaldonesExpressController extends Controller
{
    public function get_faldones_express(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                
                //$formato = FaldonExpress::with('seccion_faldon')->with('estado_faldon')->get();

                $formato = FaldonExpress::select(DB::raw("
                    faldon_express.*,
                    campana_estado.nombre as estado_faldon
                "))
                ->leftJoin('campana_estado', 'campana_estado.id', '=', 'faldon_express.id_campana_estado')
                ->orderByDesc('id')
                ->get()
                ->groupBy('uid')
                ->map(function ($group) {
                    return $group->first();
                })->values()->toArray();
               
				return response()->json($formato, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
 
        }else{
			return  $valida;
		}
    }
    public function get_faldones_express_dashboard(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
				$formato = FaldonExpress::Where('id_campana_estado','5')->count();
				return response()->json($formato, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}

        }else{
			return  $valida;
		}
    }
    public function get_faldones_express_deleted(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
				//$formato = FaldonExpress::with('seccion_faldon')->with('estado_faldon')->onlyTrashed()->get();
                $formato = FaldonExpress::select(DB::raw("
                    faldon_express.*,
                    campana_estado.nombre as estado_faldon
                "))
                ->leftJoin('campana_estado', 'campana_estado.id', '=', 'faldon_express.id_campana_estado')
                ->onlyTrashed()
                ->get()
                ->groupBy('uid')
                ->map(function ($group) {
                    return $group->first();
                })->values()->toArray();
				return response()->json($formato, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}

        }else{
			return  $valida;
		}
    }
    public function store_faldones_express(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if ($valida == 'OK') {
            try {

                $uuid = uniqid();

                $faldonesArray = $request->faldonesarray;
                if ($faldonesArray && is_array($faldonesArray)) {
                    foreach ($faldonesArray as $faldonData) {
                        $campana = new FaldonExpress();
    
                        $campana->id_cadena = $request->id_cadena ? $request->id_cadena[0]['id'] : null;
                        $campana->id_plantilla = $request->id_plantilla ? $request->id_plantilla['id'] : null;
                        $campana->cadena = $request->id_cadena ? Cadenas::where('id', $request->id_cadena[0]['id'])->first()->nombre : null;
                        $campana->plantilla = $request->id_plantilla ? PlantillaTipo::where('id', $request->id_plantilla['id'])->first()->descripcion : null;
    
                        $campana->id_formato = $request->id_formato['id'];
                        $campana->formato = $request->id_formato ? FormatoTipo::where('id',$request->id_formato['id'])->first()->nombre : null;

                        $campana->cuotas =  $faldonData['cuotas'] != '' ? $faldonData['cuotas'] : null;
                        $campana->costo_total =  $faldonData['costo_total'] != '' ? $faldonData['costo_total'] : null;
                        $campana->valor_cuota = $faldonData['valor_cuota'] != '' ? $faldonData['valor_cuota'] : null;
                        $campana->cae =  $faldonData['cae'] != '' ? $faldonData['cae'] : null;
                        $campana->combinacion =  $faldonData['combinacion'] != '' ? $faldonData['combinacion'] : null;

                        // $campana->id_formato = $faldonData['formato']['id'];
                        // $campana->formato = $request->id_formato ? FormatoTipo::where('id', $faldonData['formato']['id'])->first()->nombre : null;
    
                        $campana->id_umb_faldones = $faldonData['umb']['id'] ? $faldonData['umb']['id'] : null;
                        $campana->umb = $faldonData['umb'] ? UmbFaldones::where('id', $faldonData['umb']['id'])->first()->nombre : null;
                        $campana->nombre_generico_promocion  = $faldonData['name'];
                        $campana->cod_barra  = $faldonData['cod_barra'];
                        $campana->sap  = $faldonData['cod_barra'];
                        $campana->tc  = $faldonData['tc'] != '' ? $faldonData['tc'] : null;
                        $campana->tmp  = $faldonData['tmp'] != '' ? $faldonData['tmp'] : null;
    
                        $campana->precio_referencia_moda  = $faldonData['precio_referencia_moda'] != '' ? $faldonData['precio_referencia_moda'] : null;
                        $campana->id_usuario_crear = $request->user()->id;
    
                        $campana->texto_largo = strlen($faldonData['name']) > 32 ? 1 : 0;
    
                        $campana->tipo_promo = $faldonData['tipos_promo'] ? TipoPromoCampanaFaldones::where('id', $faldonData['tipos_promo']['id'])->first()->nombre : null;
                        $campana->id_tipo_promo = $faldonData['tipos_promo'] ? $faldonData['tipos_promo']['id'] : null;
                        $campana->id_campana_estado  = 5;
                        $campana->fecha_inicio_promo = Carbon::parse($faldonData['dateFrom'])->format('Y-m-d');
                        $campana->fecha_termino_promo = Carbon::parse($faldonData["dateTo"])->format('Y-m-d');
                        $campana->uid = $uuid;
                        $campana->qr = 2;
                        $campana->save();
                    }
                }
                return response()->json(['message' => 'Faldones Express guardados correctamente'], 200);
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 500);
            }
        } else {
            return response()->json(['error' => 'Error de autenticación'], 401);
        }
    }

    public function update_faldon_express (Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                $id_campana = $id;
                $campana = FaldonExpress::where('id',$id_campana)->first();
                $campana->id_cadena =  $request->id_cadena ? $request->id_cadena['id'] : null;
                $campana->cadena = $request->id_cadena ? Cadenas::where('id' ,$request->id_cadena['id'])->first()->nombre : null;
                $campana->id_sala = $request->id_sala ? $request->id_sala['id'] : null;
                $campana->locales = $request->id_sala ? Salas::where('id' ,$request->id_sala['id'])->first()->nombre_sap : null;
                $campana->id_medio_campana_faldones =  $request->id_medio? $request->id_medio['id'] : null;
                $campana->medio = $request->id_medio? MedioCampanaFaldones::where('id' ,$request->id_medio['id'])->first()->nombre : null;
                //$campana->id_tipo_medio_campana_faldones = $request->id_tipo_medio ? $request->id_tipo_medio['id'] : null;
                //$campana->tipo_medio = $request->id_tipo_medio ? TipoMedioCampanaFaldones::where('id',$request->id_tipo_medio['id'])->first()->nombre : null;
                $campana->tipo_medio = $request->tipo_medio;
                //$campana->id_tipo_volante_catalogo_campana_faldones = $request->id_tipo_volante ? $request->id_tipo_volante['id'] : null;
                //$campana->tipo_volante_catalogo = $request->id_tipo_volante ? TipoVolanteCatalogoCampanaFaldones::where('id',$request->id_tipo_volante['id'])->first()->nombre : null;
                $campana->tipo_volante_catalogo = $request->tipo_volante_catalogo;
                $campana->id_formato = $request->id_formato['id'];
                $campana->formato = $request->id_formato ? FormatoTipo::where('id',$request->id_formato['id'])->first()->nombre : null;
                $campana->id_plantilla = $request->id_plantilla? $request->id_plantilla['id'] : null;
                $campana->plantilla = $request->id_plantilla ? PlantillaTipo::where('id',$request->id_plantilla['id'])->first()->descripcion : null;
                $campana->id_umb_faldones = $request->id_umb_faldones? $request->id_umb_faldones['id'] : null;
                $campana->umb = $request->id_umb_faldones? UmbFaldones::where('id',$request->id_umb_faldones['id'])->first()->nombre : null;

                $campana->cuotas = $request->cuotas;
                $campana->valor_cuota = $request->valor_cuota;
                $campana->costo_total = $request->costo_total;
                $campana->cae = $request->cae;
                $campana->nombre_generico_promocion  =  $request->nombre;
                $campana->seccion = $request->id_seccion ? Secciones::where('id',$request->id_seccion['id'])->first()->nombre : null;
                $campana->id_seccion = $request->id_seccion ? $request->id_seccion['id'] : null;
             //   $campana->umb  =  $request->umb;
                $campana->sap  =  $request->sap;
                $campana->cod_barra  =  $request->cod_barra;
                $campana->qr = $request->selectedOptionQr*1;
                $campana->descripcion  =  $request->descripcion != '' ? $request->descripcion : null;
                $campana->tc  =  $request->tc != '' ? $request->tc : null;
                $campana->tmp  =  $request->tmp != '' ? $request->tmp : null;
                $campana->precio_referencia_moda  =  $request->precio_referencia_moda != '' ? $request->precio_referencia_moda : null;
                $campana->id_usuario_crear = $request->user()->id;
                $campana->texto_largo = strlen($request->nombre) >32 ? 1 : 0 ;

                $campana->tipo_promo = $request->id_tipo_promo ? TipoPromoCampanaFaldones::where('id',$request->id_tipo_promo['id'])->first()->nombre : null;
                $campana->id_tipo_promo = $request->id_tipo_promo ? $request->id_tipo_promo['id'] : null;

                /*$campana->combinacion = $request->id_combinacion ? CombinacionCampanaFaldones::where('id',$request->id_combinacion['id'])->first()->nombre : null;
                $campana->id_combinacion = $request->id_combinacion ? $request->id_combinacion['id'] : null;*/
                $campana->combinacion = $request->combinacion ? $request->combinacion : null; 

                $campana->id_campana_estado  =  5;
                $campana->fecha_inicio_promo = $request->desde;
                $campana->fecha_termino_promo = $request->hasta;
                $campana->save();
                
            }catch (\Exception $e){
                return $e;
				//return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }
    public function get_details_faldon_express(Request $request , $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
				$faldon = FaldonExpress::withTrashed()
                ->with('sala_faldon')
                ->with('cadena_faldon')
                ->with('seccion_faldon')
                ->with('estado_faldon')
                ->with('medio_faldon')
                ->with('tipo_medio_faldon')
                ->with('tipo_volante_catalogo_faldon')
                ->with('tipo_promo_faldon')
                ->with('combinacion_faldon')
                ->with('formato_faldon')
                ->with('plantilla_faldon')
                ->with('usuario_crea_faldon')
                ->with('usuario_modifica_faldon')
                ->with('umb_faldon') 
                ->where('uid',$id)->get();
				return response()->json($faldon, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }
    public function delete_faldon(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                $campana = FaldonExpress::where('uid',$request->id)->delete();
                $mensaje ="OK";
                return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }
    public function generar_faldon2(Request $request , $idFaldonExpress)
    {
        set_time_limit(14200);
        try{
            $productoFaldon = FaldonExpress::where('uid' , $idFaldonExpress)->first();
            //return $productoFaldon->id_formato;
            $plantillaCorrecta = CadenaPlantillaFormatoTipoPromoTexto::
                                where('id_cadena' ,  $productoFaldon->id_cadena)
                                ->where('id_plantilla' ,  $productoFaldon->id_plantilla)
                                ->where('id_formato' ,  $productoFaldon->id_formato)
                                ->where('id_tipo_promo' ,  $productoFaldon->id_tipo_promo)
                                ->where('texto_largo' ,  $productoFaldon->texto_largo)
                                //->where('qr' ,  2)
                                ->where(function($query) use ($productoFaldon) {
                                    if ($productoFaldon->qr == null) {
                                        $query->where('qr', 2);
                                    } else {
                                        $query->where('qr', 1);
                                    }
                                })
                                ->first();
            //return $plantillaCorrecta;
            $plantillaPdf =  $plantillaCorrecta->plantilla_blade_pdf;
            
            $data = [
                'product' => collect([$productoFaldon])
            ];
            $has = bin2hex(random_bytes(8));
            $route = public_path()."/TmpFaldones/".$productoFaldon->id.'_'.$has.'_'.'.pdf';
            $pdf = PDF::loadView($plantillaPdf, $data)->setPaper('A4', $productoFaldon->formato_faldon->orientacion)->save($route);
            $encode = base64_encode(file_get_contents($route));
            $dataReturn=[
                'nombre_archivo'=> $productoFaldon->nombre_generico_promocion.'.pdf',
                'content'=>$encode
            ];
            return response()->json($dataReturn, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        }catch (\Exception $e){
            return $e;
        }
    }

    public function generar_faldon(Request $request , $idFaldonExpress)
    {
        Artisan::call('CrearFaldonesExpress', ['uid' => $idFaldonExpress]);
        $resultado = Artisan::output();
        
        return $resultado;
	    ini_set('memory_limit', '4096M'); /* aumento de memoria */

        set_time_limit(1420000);
        $arrayRutas = [];
        $campana = FaldonExpress::where('uid', $idFaldonExpress)->first();
        $faldones = FaldonExpress::where('uid' , $idFaldonExpress)->get()->groupBy('id_tipo_promo');
        $faldonesDobleA = FaldonExpress::where('uid' , $idFaldonExpress)->get()->groupBy('nombre_generico_promocion');
        $arrayDefinitivo = [];
        

        if(!$campana){
            return "X";
        }

        foreach ($faldonesDobleA as $clavep => $itensNombrePromo) {
            
           
            switch ($itensNombrePromo[0]->id_formato) {
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
                //->where('qr' ,  $productoFaldon[0]->qr)
                ->first();
               
                if($plantillaCorrecta){ 
                    //return "holaaa";
                    \Log::info($plantillaCorrecta->plantilla_blade_pdf);
                    $plantillaPdf =  $plantillaCorrecta->plantilla_blade_pdf;
                    $data = ['product' => $productoFaldon];
                    $has = bin2hex(random_bytes(8));
                    $route = public_path().'/TmpFaldones/'.$has.'.pdf';
                    //return $plantillaCorrecta;
                    $arrayRutas[] =  $route;
                    $orientacion = $productoFaldon[0]->id_cadena == 2 && $productoFaldon[0]->id_formato == 1 ? 'portrait' : $plantillaCorrecta->formato->orientacion ;
                    $pdf = PDF::loadView($plantillaPdf, $data)->setPaper('A4', $orientacion )->save($route);
                    //return $route;
                }
                else{
                    \Log::info($productoFaldon);
                }
            }
            //return $arrayRutas;
            $hastt = bin2hex(random_bytes(16));

            //$pathForTheMergedPdf = public_path().'/'.$hastt.'.pdf';
            $pathForTheMergedPdf = public_path()."/FaldonesPdf/".$hastt.'.pdf';

            
            /*GENERA Y UNE PDF*/
            $fileArray= $arrayRutas;
            $datadir = public_path()."/TmpFaldones/";
            $outputName = $pathForTheMergedPdf;
            //return $arrayRutas;
            $cmd = "gs -q -dNOPAUSE -dBATCH -sDEVICE=pdfwrite -sOutputFile=$outputName ";
            foreach($fileArray as $file) {
                $cmd .= $file." ";
            }
            $result = Shell_exec($cmd);

            $encode = base64_encode(file_get_contents($pathForTheMergedPdf));
            $dataReturn=[
                'nombre_archivo'=> $campana->nombre_generico_promocion,
                'content'=>$encode,
                'url' => "FaldonesPdf/".$hastt.'.pdf',
            ]; 
            return response()->json($dataReturn, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            return "FaldonesPdf/".$hastt.'.pdf';
            /*FIN DE PDF*/
        }catch (\Exception $e){
            \Log::info('error' . $e);
        }
    }

    public function get_umb_faldones(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
				$umbs = UmbFaldones::get();
				return response()->json($umbs, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}

        }else{
			return  $valida;
		}
    }
}