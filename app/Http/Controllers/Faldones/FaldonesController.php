<?php
namespace App\Http\Controllers\Faldones;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\GeneralObetenerController;
use App\Models\FormatoTipo;
use App\Models\PlantillaTipo;
use App\Models\CampanaFaldon;
use App\Models\ArchivosFaldones;
use App\Models\FaldonRobot;
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
use DB;
//use Webklex\PDFMerger\Facades\PDFMergerFacade as PDFMerger;
//use PDFMerger;
use LynX39\LaraPdfMerger\Facades\PdfMerger;
use App\Models\User;
use App\Models\StockDataSala;

use App\Models\UsuarioSalas;
use App\Exports\StockExport;



class FaldonesController extends Controller
{
    public function get_formato_faldones(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,401)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
				$formato = FormatoTipo::get();
				return response()->json($formato, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}

        }else{
			return  $valida;
		}
    }

    public function get_plantilla_faldones(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,401)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
				$formato = PlantillaTipo::with('formatos')->get();
				return response()->json($formato, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }

    public function get_edit_campana_faldones(Request $request , $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
//                if(!$validar->validar_permiso(Auth::user()->id,401)){
  //                  return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    //            }
				$formato = CampanaFaldon::with('sala_campana')->with('cadena_campana')->with('campana_tipo')->with('formato_campana')
                ->with('plantilla_campana')->with('usuario_crea_campana')->with('usuario_modifica_campana')->with('campana_estado')->where('id',$id)->first();
				return response()->json($formato, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }

    public function get_edit_campana_faldones_ultimo_archivo(Request $request , $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
         //       if(!$validar->validar_permiso(Auth::user()->id,401)){
           //         return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
             //   }
                $maxId = ArchivosFaldones::where('id_campana',$id)->max('id');
				$formato = ArchivosFaldones::where('id',$maxId)->first();
                $fileUb = public_path($formato->url);
                $doc = base64_encode(file_get_contents($fileUb));
                $formato->file_64 =  $doc;
				return response()->json($formato, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }

    public function store_campana_faldones (Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            if(!$validar->validar_permiso(Auth::user()->id,402)){
                return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
            $request->validate(
                [
                    'id_cadena'    => 'required',
                    'id_campana_tipo' => 'required',
                    'nombre' => 'required|string',
                    'desde' => 'required|date',
                    'hasta' => 'required|date',
                    'id_formato' => 'required',
                    'id_plantilla' => 'required',
                    'archivo_64' => 'required',
                ]
            );
            $idSala = null;
            $allSalas = false;
            $salaInto = null;
            $doForeach = false;
            $cadenaSelect  = $request->id_cadena['id'];
            $userCadena = User::where('id',Auth::user()->id)->first();
            $userCadena = $userCadena->cadenas;
            $userCadena = $userCadena->firstWhere('id' , $cadenaSelect);
            $salasUser = UsuarioSalas::where('id_usuario' , Auth::user()->id)->whereHas('salas', function ($query) use ($userCadena) {
                $query->where('id_cadena',$userCadena->id);
            })->get();
            $countSalasUser = count($salasUser);

            $cadenaSelect = Cadenas::where('id' , $cadenaSelect)->first();
            $salaCadena = $cadenaSelect->salas_cadena;
            $countSalasCadenas = count($salaCadena);

            if($countSalasUser == $countSalasCadenas){
                $idSala = null;
                $allSalas = true;
            }
           
            $salaRequest = $request->salas['id'];
            //return $salaRequest;
            if($salaRequest == 0 && $allSalas){
                $salaInto = null;
            }
            if($salaRequest == 0 && !$allSalas){
                $doForeach = true;
            }
            if($salaRequest != 0){
                $salaInto = $request->salas['id'];
                $doForeach = false;
            }

            $archivo = ['name_archivo'=>$request->name_archivo,'fileType'=>$request->fileType,'archivo_64'=>$request->archivo_64 , 'archivo_64_sin_cabecera'=>$request->archivo_64_sin_cabecera  ,'fileSize'=>$request->fileSize];
            
            if(!$validar->validar_extencion_archivo($archivo,true)){
                throw new \Exception("Invalid File");
            }

            try{
                if(!$doForeach){
                    $campana = new CampanaFaldon();
                    $campana->id_cadena = $request->id_cadena['id'];
                    $campana->id_sala = $salaInto;
                    $campana->id_campana_tipo = $request->id_campana_tipo;
                    $campana->nombre = $request->nombre;
                    $campana->desde = $request->desde;
                    $campana->hasta = $request->hasta;
                    $campana->id_formato = $request->id_formato['id'];
                    $campana->id_plantilla = $request->id_plantilla['id'];
                    $campana->qr = $request->selectedOptionQr*1;
                    $campana->id_estado_campana = 1;
                    $campana->id_usuario_crear = $request->user()->id;
                    $campana->created_at = now();
                    $campana->save();
                    $archivo_pdf = $this->save_archivo_faldon($campana, $archivo);
                    $responseInsert = Excel::import(new ArchivosFaldonesDataImport($archivo_pdf->id , $request->user()->id),public_path($archivo_pdf->url));
                    $responseValidate = $this->validate_preload_data($archivo_pdf->id ,  $campana->id);
                }else{

                    foreach ($salasUser as $keyy => $valuee) {
                        $campana = new CampanaFaldon();
                        $campana->id_cadena = $request->id_cadena['id'];
                        $campana->id_sala = $valuee->id_sala;
                        $campana->id_campana_tipo = $request->id_campana_tipo;
                        $campana->nombre = $request->nombre;
                        $campana->desde = $request->desde;
                        $campana->hasta = $request->hasta;
                        $campana->id_formato = $request->id_formato['id'];
                        $campana->id_plantilla = $request->id_plantilla['id'];
                        $campana->qr = $request->selectedOptionQr*1;
                        $campana->id_estado_campana = 1;
                        $campana->id_usuario_crear = $request->user()->id;
                        $campana->created_at = now();
                        $campana->save();
                        $archivo_pdf = $this->save_archivo_faldon($campana, $archivo);
                        $responseInsert = Excel::import(new ArchivosFaldonesDataImport($archivo_pdf->id , $request->user()->id),public_path($archivo_pdf->url));
                        $responseValidate = $this->validate_preload_data($archivo_pdf->id ,  $campana->id);
                    }

                }


            }catch (\Exception $e){
                \Log::info('error guardar faldones' . $e);
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $responseValidate;
		}
    }

    public function update_campana_faldones (Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            if(!$validar->validar_permiso(Auth::user()->id,404)){
                return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
            $request->validate(
                [
                    'id_cadena'    => 'required',
                    'id_campana_tipo' => 'required',
                    'nombre' => 'required|string',
                    'desde' => 'required|date',
                    'hasta' => 'required|date',
                    'id_formato' => 'required',
                    'id_plantilla' => 'required',
                    'archivo_64' => 'required',
                ]
            );
            
            try{
                $id_campana = $id;
                $campana = CampanaFaldon::find($id_campana);
                $campana->nombre = $request->nombre;
                $campana->id_cadena = $request->id_cadena['id'];
                $campana->id_sala = $request->salas['id'];
                $campana->desde = $request->desde;
                $campana->hasta = $request->hasta;
                $campana->id_campana_tipo = $request->id_campana_tipo;
                $campana->id_formato = $request->id_formato['id'];
                $campana->id_plantilla = $request->id_plantilla['id'];
                $campana->qr = $request->selectedOptionQr*1;
                $campana->id_estado_campana = 1;
                $campana->id_usuario_crear = $request->user()->id;
                $campana->save();
                $archivo = ['name_archivo'=>$request->name_archivo,'fileType'=>$request->fileType,'archivo_64'=>$request->archivo_64 , 'archivo_64_sin_cabecera'=>$request->archivo_64_sin_cabecera  ,'fileSize'=>$request->fileSize];
                $archivo_pdf = $this->save_archivo_faldon($campana, $archivo);
                $responseInsert = Excel::import(new ArchivosFaldonesDataImport($archivo_pdf->id , $request->user()->id),public_path($archivo_pdf->url));
                $responseValidate = $this->validate_preload_data($archivo_pdf->id ,  $campana->id);
            }catch (\Exception $e){
                \Log::info('error actualizar faldones' . $e);
                return $e;
				//return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $responseInsert;
		}
    }

    public function save_archivo_faldon($campana, $archivo){
        
        $ext = pathinfo($archivo['name_archivo'], PATHINFO_EXTENSION);
        $name = uniqid().".".$ext;
        $date_faldon = now()->format('Y_m_d');

        if($campana['id_campana_tipo'] == 1){
            $tipo_campaña = 'global';
            if(!is_dir("Faldones/"))
                mkdir("Faldones/", 0777);
            if(!is_dir("Faldones/$tipo_campaña"))
                mkdir("Faldones/$tipo_campaña", 0777);
            if(!is_dir("Faldones/$tipo_campaña/$date_faldon"))
                mkdir("Faldones/$tipo_campaña/$date_faldon", 0777);
            $destinationPath = 'Faldones/'.$tipo_campaña.'/'.$date_faldon.'/';
        }elseif($campana['id_campana_tipo'] == 2){
            $tipo_campaña = 'interna';
            $id_sala = $campana['id_sala'];
            if(!is_dir("Faldones/"))
                mkdir("Faldones/", 0777);
            if(!is_dir("Faldones/$tipo_campaña"))
                mkdir("Faldones/$tipo_campaña", 0777);
            if(!is_dir("Faldones/$tipo_campaña/$date_faldon"))
                mkdir("Faldones/$tipo_campaña/$date_faldon", 0777);
            if(!is_dir("Faldones/$tipo_campaña/$date_faldon/$id_sala"))
                mkdir("Faldones/$tipo_campaña/$date_faldon/$id_sala", 0777);
            
            $destinationPath = 'Faldones/'.$tipo_campaña.'/'.$date_faldon.'/'.$id_sala.'/';
        }else{
            return response()->json("NO SE GUARDO EL ARCHIVO NO SE RECONOCE", 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        }
        
        try{           
            $filename2 = $name;
            $url=$destinationPath.$filename2;
            $content = $archivo['archivo_64_sin_cabecera'];
            $file_path = public_path($url);
            file_put_contents($file_path, base64_decode($content));

            $doc_faldon = new ArchivosFaldones();
            $doc_faldon->nombre = $name;
            $doc_faldon->extension = $archivo['fileType'];
            $doc_faldon->tamano = $archivo['fileSize'];
            $doc_faldon->id_campana = $campana['id'];
            $doc_faldon->url = $url;
            $doc_faldon->id_estados_archivos_faldones = 1;
            $doc_faldon->id_estatus_archivos_faldones = 1;
            $doc_faldon->id_usuario_crear = $campana['id_usuario_crear'];
            $doc_faldon->id_usuario_modifica = $campana['id_usuario_modifica'];
            $doc_faldon->created_at = now();            
            $doc_faldon->save();

            return $doc_faldon;                            
        }catch(Exception $e){ 
            return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            return $archivo;
        }
    }

    public function validate_preload_data($idArchivo, $idCampana)
    { 
        try{
            $archivo = ArchivosFaldones::where('id' ,  $idArchivo)->first();
            $campana = CampanaFaldon::where('id' , $idCampana)->first();
            $numberFaldonRobot = FaldonRobot::first();
            $rezadado = false;
            $observado = false;
            $preLoadData = ArchivosFaldonesDataOriginal::where('id_archivo' , $idArchivo)->where('estatus_registro' , 'REGISTRADO')->get();
            $userId = Auth::user()->id;
            foreach ($preLoadData as $key => $reg) {
                /*asignacion de variables para aplicar formulas registradas en alertas */
                $numeroFila = $reg->numero_fila;
                $cadena = $reg->cadena;
                $locales = $reg->locales;
                $medio = $reg->medio;
                $tipoMedio = $reg->tipo_medio;
                $tipoVolanteCatalogo = $reg->tipo_volante_catalogo;
                $nPromocion = $reg->n_promocion;
                $seccion =  $reg->seccion;
                $NombreGenericoPromocion =  $reg->nombre_generico_promocion;
                $sap =  $reg->sap;
                $CodBarra =  $reg->cod_barra;
                $umb =  $reg->umb;
                $descripcion =  $reg->descripcion;
                $precioReferenciaModa =  $reg->precio_referencia_moda;
                $tipoPromo =  $reg->tipo_promo;
                $combinacion =  $reg->combinacion;
                $tmp =  $reg->tmp;
                $tc =  $reg->tc;

                $cuotas =  $reg->cuotas;
                $valorCuota =  $reg->valor_cuota;
                $costoTotal =  $reg->costo_total;
                $cae =  $reg->cae;
                $puntosCencoSud =  $reg->puntos_cencosud;
                $puntosOtrosMedios =  $reg->puntos_otros_medios;

                $fechaInicioPromo =  $reg->fecha_inicio_promo;
                $fechaInicioPromoFormarter =  $fechaInicioPromo?Carbon::parse($fechaInicioPromo.'23:59:59') : null;
                $fechaTerminoPromo =  $reg->fecha_termino_promo;
                $fechaTerminoPromoFormater  = $fechaTerminoPromo?Carbon::parse($reg->fecha_termino_promo.'23:59:59') : null;
                $hoy = Carbon::now();
                $idUsuarioCrear =  $reg->id_usuario_crear;
                $idUsuarioModifica =  $reg->id_usuario_modifica;
                $createdAt =  $reg->created_at;
                $updatedAt =  $reg->updated_at;
                $deltedAt=  $reg->deleted_at;
                $reg->estatus_registro = 'VALIDO';
                /* fin asignacion*/
                /* Inicio de Validaciones Alertas para los archivos*/
                $validacionesAlertas = AlertaArchivosCampanasFaldones::get();
                foreach ($validacionesAlertas as $ky => $validac) {
            
                    if ($validac->cod_alerta === 1 &&  $validac->estatus === 1){
                        if(!gettype($numeroFila) ===  'integer'){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columna numero de fila del registro no es un numero';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'numero_fila';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;

                        }
                    }
                    if ($validac->cod_alerta === 2 &&  $validac->estatus === 1){
                        if(!$numeroFila){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columna numero de fila del registro se encuentra en blanco';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'numero_fila';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if ($validac->cod_alerta === 3 &&  $validac->estatus === 1){
                        if(!$cadena){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columnna cadena del registro no se encuentra registrada en el sistema';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'cadena';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if ($validac->cod_alerta === 4 &&  $validac->estatus === 1){
                        if($cadena){
                            $existsCadena = Cadenas::where('nombre','like' ,"%$cadena%")->first();
                            if(!$existsCadena){
                                $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                                $newAlert->id_archivo = $idArchivo;
                                $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                                $newAlert->descripcion = 'La columnna cadena del registro no se encuentra registrada en el sistema';
                                $newAlert->numero_fila = $numeroFila;
                                $newAlert->campo_asociado = 'cadena';
                                $newAlert->save();
                                $reg->estatus_registro = 'OBSERVADO';
                                $observado = true;
                            }
                        }
                    }
                    if ($validac->cod_alerta === 5 &&  $validac->estatus === 1){
                        if(!gettype($cadena) ===  'string'){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columna cadena del registro no es una palabra valida';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'cadena';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if($archivo->campana->campana_tipo->nombre === 'Interna'){
                            if ($validac->cod_alerta === 6 &&  $validac->estatus === 1){
                                if(!$locales){
                                    $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                                    $newAlert->id_archivo = $idArchivo;
                                    $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                                    $newAlert->descripcion = 'La columna local del registro se encuentra en blanco';
                                    $newAlert->numero_fila = $numeroFila;
                                    $newAlert->campo_asociado = 'locales';
                                    $newAlert->save();
                                    $reg->estatus_registro = 'OBSERVADO';
                                    $observado = true;
                                }
                            }
                            if ($validac->cod_alerta === 7 &&  $validac->estatus === 1){
                                if($locales){
                                    $existsLocal = Salas::where('cdg_local','like' ,"%$locales%")->first();
                                    if(!$existsLocal){
                                        $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                                        $newAlert->id_archivo = $idArchivo;
                                        $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                                        $newAlert->descripcion = 'La columnna local del registro no se encuentra registrada en el sistema';
                                        $newAlert->numero_fila = $numeroFila;
                                        $newAlert->campo_asociado = 'locales';
                                        $newAlert->save();
                                        $reg->estatus_registro = 'OBSERVADO';
                                        $observado = true;
                                    }
                                }
                            }
                    }
                    if ($validac->cod_alerta === 8 &&  $validac->estatus === 1){
                        if(!$medio){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columnna medio del registro se encuentra en blanco';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'medio';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if ($validac->cod_alerta === 9 &&  $validac->estatus === 1){
                        if($medio){
                            $existsMedio = MedioCampanaFaldones::where('nombre','like' ,"%$medio%")->first();
                            if(!$existsMedio){
                                $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                                $newAlert->id_archivo = $idArchivo;
                                $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                                $newAlert->descripcion = 'La columnna medio del registro no se encuentra registrada en el sistema';
                                $newAlert->numero_fila = $numeroFila;
                                $newAlert->campo_asociado = 'medio';
                                $newAlert->save();
                                $reg->estatus_registro = 'OBSERVADO';
                                $observado = true;
                            }
                        }
                    }
                    if ($validac->cod_alerta === 10 &&  $validac->estatus === 1){
                        if(!$tipoMedio){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columnna tipo medio del registro se encuentra en blanco';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'tipo_medio';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if ($validac->cod_alerta === 11 &&  $validac->estatus === 1){
                        if($tipoMedio){
                            $existsTipoMedio = TipoMedioCampanaFaldones::where('nombre','like' ,"%$tipoMedio%")->first();
                            if(!$existsTipoMedio){
                                $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                                $newAlert->id_archivo = $idArchivo;
                                $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                                $newAlert->descripcion = 'La columnna tipo medio del registro no se encuentra registrada en el sistema';
                                $newAlert->numero_fila = $numeroFila;
                                $newAlert->campo_asociado = 'tipo_medio';
                                $newAlert->save();
                                $reg->estatus_registro = 'OBSERVADO';
                                $observado = true;
                            }
                        }
                    }
                    if ($validac->cod_alerta === 12 &&  $validac->estatus === 1){
                        if(!$tipoVolanteCatalogo){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columnna tipo volante catalogo del registro se encuentra en blanco';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'tipo_volante_catalogo';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if ($validac->cod_alerta === 13 &&  $validac->estatus === 1){
                        if($tipoVolanteCatalogo){
                            $existsTipoVolanteCatalogo = TipoVolanteCatalogoCampanaFaldones::where('nombre','like' ,"%$tipoVolanteCatalogo%")->first();
                            if(!$existsTipoVolanteCatalogo){
                                $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                                $newAlert->id_archivo = $idArchivo;
                                $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                                $newAlert->descripcion = 'La columnna tipo volante catalogo del registro no se encuentra registrada en el sistema';
                                $newAlert->numero_fila = $numeroFila;
                                $newAlert->campo_asociado = 'tipo_volante_catalogo';
                                $newAlert->save();
                                $reg->estatus_registro = 'OBSERVADO';
                                $observado = true;
                            }
                        }
                    }
                    if ($validac->cod_alerta === 14 &&  $validac->estatus === 1){
                        if(!is_numeric($nPromocion)){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columna numero de promocion del registro no es un numero';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'n_promocion';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if ($validac->cod_alerta === 15 &&  $validac->estatus === 1){
                        if(!$nPromocion){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columnna numero de promocion del registro se encuentra en blanco';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'n_promocion';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if ($validac->cod_alerta === 16 &&  $validac->estatus === 1){
                        if(!$seccion){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columnna seccion del registro se encuentra en blanco';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'seccion';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if ($validac->cod_alerta === 17 &&  $validac->estatus === 1){
                        if($seccion){
                            $existsSeccion = Secciones::where('numero',$seccion)->first();
                            if(!$existsSeccion){
                                $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                                $newAlert->id_archivo = $idArchivo;
                                $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                                $newAlert->descripcion = 'La columnna seccion del registro no se encuentra registrada en el sistema';
                                $newAlert->numero_fila = $numeroFila;
                                $newAlert->campo_asociado = 'seccion';
                                $newAlert->save();
                                $reg->estatus_registro = 'OBSERVADO';
                                $observado = true;
                            }
                        }
                    }
                    if ($validac->cod_alerta === 18 &&  $validac->estatus === 1){
                        if(!$NombreGenericoPromocion){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columnna nombre generico de la promocion  del registro se encuentra en blanco';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'nombre_generico_promocion';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if ($validac->cod_alerta === 19 &&  $validac->estatus === 1){
                        if(!$sap){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columnna sap  del registro se encuentra en blanco';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'sap';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if ($validac->cod_alerta === 20 &&  $validac->estatus === 1){
                        if(!is_numeric($sap)){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columna sap del registro no es un numero';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'sap';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if ($validac->cod_alerta === 21 &&  $validac->estatus === 1){
                        if(!$CodBarra){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columnna codigo de barra  del registro se encuentra en blanco';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'sap';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if ($validac->cod_alerta === 22 &&  $validac->estatus === 1){
                        if(!is_numeric($CodBarra)){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columna codigo de barra del registro no es un numero';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'sap';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if ($validac->cod_alerta === 23 &&  $validac->estatus === 1){
                        if(!$umb){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columnna umb del registro se encuentra en blanco';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'umb';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if ($validac->cod_alerta === 24 &&  $validac->estatus === 1){
                        if(!$descripcion){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columnna descripcion del registro se encuentra en blanco';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'descripcion';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if ($validac->cod_alerta === 25 &&  $validac->estatus === 1){
                        if(!$precioReferenciaModa){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columnna precio_referencia_moda del registro se encuentra en blanco';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'precio_referencia_moda';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if ($validac->cod_alerta === 26 &&  $validac->estatus === 1){
                        if(!is_numeric($precioReferenciaModa)){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columnna precio_referencia_moda no es un numero valido';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'precio_referencia_moda';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if ($validac->cod_alerta === 27 &&  $validac->estatus === 1){
                        if(!$tipoPromo){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columnna tipo_promo del registro se encuentra en blanco';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'tipo_promo';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if ($validac->cod_alerta === 28 &&  $validac->estatus === 1){
                        if($tipoPromo){
                            $existsTipoPromo= TipoPromoCampanaFaldones::where('nombre','like' ,"%$tipoPromo%")->first();
                            if(!$existsTipoPromo){
                                $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                                $newAlert->id_archivo = $idArchivo;
                                $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                                $newAlert->descripcion = 'La columnna tipo_promo del registro no se encuentra registrada en el sistema';
                                $newAlert->numero_fila = $numeroFila;
                                $newAlert->campo_asociado = 'tipo_promo';
                                $newAlert->save();
                                $reg->estatus_registro = 'OBSERVADO';
                                $observado = true;
                            }
                        }
                    }
                    if ($validac->cod_alerta === 29 &&  $validac->estatus === 1){
                        if($tipoPromo==='PACK'){
                            if(!$combinacion){
                                $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                                $newAlert->id_archivo = $idArchivo;
                                $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                                $newAlert->descripcion = 'La columnna combinacion del registro se encuentra en blanco';
                                $newAlert->numero_fila = $numeroFila;
                                $newAlert->campo_asociado = 'combinacion';
                                $newAlert->save();
                                $reg->estatus_registro = 'OBSERVADO';
                                $observado = true;
                            }
                        }
                    }
                    if ($validac->cod_alerta === 30 &&  $validac->estatus === 1){
                            if(!$tmp){
                                $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                                $newAlert->id_archivo = $idArchivo;
                                $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                                $newAlert->descripcion = 'La columnna TMP del registro se encuentra en blanco';
                                $newAlert->numero_fila = $numeroFila;
                                $newAlert->campo_asociado = 'tmp';
                                $newAlert->save();
                                $reg->estatus_registro = 'OBSERVADO';
                                $observado = true;
                            }
                    }
                    if ($validac->cod_alerta === 31 &&  $validac->estatus === 1){
                        if(!$tc){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columnna TC del registro se encuentra en blanco';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'TC';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if ($validac->cod_alerta === 32 &&  $validac->estatus === 1){
                        if(!$fechaInicioPromo){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columnna fecha_inicio_promo del registro se encuentra en blanco';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'fecha_inicio_promo';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    if ($validac->cod_alerta === 33 &&  $validac->estatus === 1){
                        if(!$fechaTerminoPromo){
                            $newAlert = new AlertaValidacionesArchivosCampanasFaldones();
                            $newAlert->id_archivo = $idArchivo;
                            $newAlert->id_alerta_archivos_campana_faldones = $validac->id;
                            $newAlert->descripcion = 'La columnna fecha_termino_promo del registro se encuentra en blanco';
                            $newAlert->numero_fila = $numeroFila;
                            $newAlert->campo_asociado = 'fecha_termino_promo';
                            $newAlert->save();
                            $reg->estatus_registro = 'OBSERVADO';
                            $observado = true;
                        }
                    }
                    $reg->save();
                }
                    /* fin de Validaciones Alertas para los archivos*/ 
                    

                    /**/
                    /*Inicio motivos de rechazo */
                    $rechazosArchivos = RechazosArchivosCampanasFaldones::get();
                    foreach ($rechazosArchivos as $keey => $rechaz) {
                        if ($rechaz->cod_rechazo === 301 &&  $rechaz->estatus === 1){
                            if(!$tipoPromo){
                                $rezadado = true;
                                $newAlert = new RechazosValidacionesArchivosCampanasFaldones();
                                $newAlert->id_archivo = $idArchivo;
                                $newAlert->id_rechazos_archivos_campanas_faldones = $rechaz->id;
                                $newAlert->descripcion = 'La columnna tipo_promo del registro se encuentra en blanco';
                                $newAlert->numero_fila = $numeroFila;
                                $newAlert->campo_asociado = 'tipo_promo';
                                $newAlert->save();
                                $reg->estatus_registro = 'RECHAZADO';

                            }
                        }
                        if ($rechaz->cod_rechazo === 302 &&  $rechaz->estatus === 1){
                            if(!$fechaInicioPromo){
                                $rezadado = true;
                                $newAlert = new RechazosValidacionesArchivosCampanasFaldones();
                                $newAlert->id_archivo = $idArchivo;
                                $newAlert->id_rechazos_archivos_campanas_faldones = $rechaz->id;
                                $newAlert->descripcion = 'La columnna fecha_inicio_promo del registro se encuentra en blanco';
                                $newAlert->numero_fila = $numeroFila;
                                $newAlert->campo_asociado = 'fecha_inicio_promo';
                                $newAlert->save();
                                $reg->estatus_registro = 'RECHAZADO';
                            }
                        }
                        if ($rechaz->cod_rechazo === 303 &&  $rechaz->estatus === 1){
                            if(!$fechaTerminoPromo){
                                $rezadado = true;
                                $newAlert = new RechazosValidacionesArchivosCampanasFaldones();
                                $newAlert->id_archivo = $idArchivo;
                                $newAlert->id_rechazos_archivos_campanas_faldones = $rechaz->id;
                                $newAlert->descripcion = 'La columnna fecha_termino_promo del registro se encuentra en blanco';
                                $newAlert->numero_fila = $numeroFila;
                                $newAlert->campo_asociado = 'fecha_termino_promo';
                                $newAlert->save();
                                $reg->estatus_registro = 'RECHAZADO';
                            }
                        }
                        if ($rechaz->cod_rechazo === 304 &&  $rechaz->estatus === 1){
                            if($fechaInicioPromoFormarter<$hoy){
                                $rezadado = true;
                                $newAlert = new RechazosValidacionesArchivosCampanasFaldones();
                                $newAlert->id_archivo = $idArchivo;
                                $newAlert->id_rechazos_archivos_campanas_faldones = $rechaz->id;
                                $newAlert->descripcion = 'La columnna fecha_inicio_promo del registro es menor a la fecha actual';
                                $newAlert->numero_fila = $numeroFila;
                                $newAlert->campo_asociado = 'fecha_inicio_promo';
                                $newAlert->save();
                                $reg->estatus_registro = 'RECHAZADO';
                            }
                        }
                        if ($rechaz->cod_rechazo === 305 &&  $rechaz->estatus === 1){
                            if($fechaInicioPromoFormarter>$fechaTerminoPromoFormater){
                                $rezadado = true;
                                $newAlert = new RechazosValidacionesArchivosCampanasFaldones();
                                $newAlert->id_archivo = $idArchivo;
                                $newAlert->id_rechazos_archivos_campanas_faldones = $rechaz->id;
                                $newAlert->descripcion = 'La columnna fecha_inicio_promo del registro es mayor a la columna fecha_termino_promo';
                                $newAlert->numero_fila = $numeroFila;
                                $newAlert->campo_asociado = 'fecha_inicio_promo';
                                $newAlert->save();
                                $reg->estatus_registro = 'RECHAZADO';
                            }
                        }
                        if ($rechaz->cod_rechazo === 307 &&  $rechaz->estatus === 1){
                            if(!$NombreGenericoPromocion){
                                $rezadado = true;
                                $newAlert = new RechazosValidacionesArchivosCampanasFaldones();
                                $newAlert->id_archivo = $idArchivo;
                                $newAlert->id_rechazos_archivos_campanas_faldones = $rechaz->id;
                                $newAlert->descripcion = 'La columnna nombre_generico_promocion del registro se encuentra en blanco';
                                $newAlert->numero_fila = $numeroFila;
                                $newAlert->campo_asociado = 'nombre_generico_promocion';
                                $newAlert->save();
                                $reg->estatus_registro = 'RECHAZADO';

                            }
                        }
                        if ($rechaz->cod_rechazo === 308 &&  $rechaz->estatus === 1){
                            if(!$sap){
                                $rezadado = true;
                                $newAlert = new RechazosValidacionesArchivosCampanasFaldones();
                                $newAlert->id_archivo = $idArchivo;
                                $newAlert->id_rechazos_archivos_campanas_faldones = $rechaz->id;
                                $newAlert->descripcion = 'La columnna sap del registro se encuentra en blanco';
                                $newAlert->numero_fila = $numeroFila;
                                $newAlert->campo_asociado = 'sap';
                                $newAlert->save();
                                $reg->estatus_registro = 'RECHAZADO';

                            }
                        }
                        if ($rechaz->cod_rechazo === 309 &&  $rechaz->estatus === 1){
                            if(!$CodBarra){
                                $rezadado = true;
                                $newAlert = new RechazosValidacionesArchivosCampanasFaldones();
                                $newAlert->id_archivo = $idArchivo;
                                $newAlert->id_rechazos_archivos_campanas_faldones = $rechaz->id;
                                $newAlert->descripcion = 'La columnna cod_barra del registro se encuentra en blanco';
                                $newAlert->numero_fila = $numeroFila;
                                $newAlert->campo_asociado = 'cod_barra';
                                $newAlert->save();
                                $reg->estatus_registro = 'RECHAZADO';
                            }
                        }
                        if ($rechaz->cod_rechazo === 310 &&  $rechaz->estatus === 1){
                            if($cuotas){
                                if(!is_numeric($cuotas)){
                                    $rezadado = true;
                                    $newAlert = new RechazosValidacionesArchivosCampanasFaldones();
                                    $newAlert->id_archivo = $idArchivo;
                                    $newAlert->id_rechazos_archivos_campanas_faldones = $rechaz->id;
                                    $newAlert->descripcion = 'La columnna cuotas del registro no contiene un dato numerico';
                                    $newAlert->numero_fila = $numeroFila;
                                    $newAlert->campo_asociado = 'cuotas';
                                    $newAlert->save();
                                    $reg->estatus_registro = 'RECHAZADO';
                                }
                            }
                        }
                        if ($rechaz->cod_rechazo === 311 &&  $rechaz->estatus === 1){
                            if($valorCuota){
                                if(!is_numeric($valorCuota)){
                                    $rezadado = true;
                                    $newAlert = new RechazosValidacionesArchivosCampanasFaldones();
                                    $newAlert->id_archivo = $idArchivo;
                                    $newAlert->id_rechazos_archivos_campanas_faldones = $rechaz->id;
                                    $newAlert->descripcion = 'La columnna valor Cuotas del registro no contiene un dato numerico';
                                    $newAlert->numero_fila = $numeroFila;
                                    $newAlert->campo_asociado = 'valor_cuotas';
                                    $newAlert->save();
                                    $reg->estatus_registro = 'RECHAZADO';
                                }
                            }
                        }
                        if ($rechaz->cod_rechazo === 312 &&  $rechaz->estatus === 1){
                            if($costoTotal){
                                if(!is_numeric($costoTotal)){
                                    $rezadado = true;
                                    $newAlert = new RechazosValidacionesArchivosCampanasFaldones();
                                    $newAlert->id_archivo = $idArchivo;
                                    $newAlert->id_rechazos_archivos_campanas_faldones = $rechaz->id;
                                    $newAlert->descripcion = 'La columnna costo total del registro no contiene un dato numerico';
                                    $newAlert->numero_fila = $numeroFila;
                                    $newAlert->campo_asociado = 'costo_total';
                                    $newAlert->save();
                                    $reg->estatus_registro = 'RECHAZADO';
                                }
                            }
                        }
                        if ($rechaz->cod_rechazo === 313 &&  $rechaz->estatus === 1){
                            if($cae){
                                if(!is_numeric($cae)){
                                    $rezadado = true;
                                    $newAlert = new RechazosValidacionesArchivosCampanasFaldones();
                                    $newAlert->id_archivo = $idArchivo;
                                    $newAlert->id_rechazos_archivos_campanas_faldones = $rechaz->id;
                                    $newAlert->descripcion = 'La columnna CAE del registro no contiene un dato numerico';
                                    $newAlert->numero_fila = $numeroFila;
                                    $newAlert->campo_asociado = 'cae';
                                    $newAlert->save();
                                    $reg->estatus_registro = 'RECHAZADO';
                                }
                            }
                        }
                        if ($rechaz->cod_rechazo === 314 &&  $rechaz->estatus === 1){
                            if($puntosCencoSud){
                                if(!is_numeric($puntosCencoSud)){
                                    $rezadado = true;
                                    $newAlert = new RechazosValidacionesArchivosCampanasFaldones();
                                    $newAlert->id_archivo = $idArchivo;
                                    $newAlert->id_rechazos_archivos_campanas_faldones = $rechaz->id;
                                    $newAlert->descripcion = 'La columnna puntos cencosud del registro no contiene un dato numerico';
                                    $newAlert->numero_fila = $numeroFila;
                                    $newAlert->campo_asociado = 'puntos_cencosud';
                                    $newAlert->save();
                                    $reg->estatus_registro = 'RECHAZADO';
                                }
                            }
                        }
                        if ($rechaz->cod_rechazo === 315 &&  $rechaz->estatus === 1){
                            if($puntosOtrosMedios){
                                if(!is_numeric($puntosOtrosMedios)){
                                    $rezadado = true;
                                    $newAlert = new RechazosValidacionesArchivosCampanasFaldones();
                                    $newAlert->id_archivo = $idArchivo;
                                    $newAlert->id_rechazos_archivos_campanas_faldones = $rechaz->id;
                                    $newAlert->descripcion = 'La columnna puntos otros medios de pago del registro no contiene un dato numerico';
                                    $newAlert->numero_fila = $numeroFila;
                                    $newAlert->campo_asociado = 'puntos_otros_medios';
                                    $newAlert->save();
                                    $reg->estatus_registro = 'RECHAZADO';
                                }
                            }
                        }
                        if ($validac->cod_rechazo === 316 &&  $rechaz->estatus === 1){
                            if(!$tipoPromo){
                                $rezadado = true;
                                $newAlert = new RechazosValidacionesArchivosCampanasFaldones();
                                $newAlert->id_archivo = $idArchivo;
                                $newAlert->id_rechazos_archivos_campanas_faldones = $rechaz->id;
                                $newAlert->descripcion = 'La columnna tipo_promo del registro se encuentra en blanco';
                                $newAlert->numero_fila = $numeroFila;
                                $newAlert->campo_asociado = 'tipo_promo';
                                $newAlert->save();
                                $reg->estatus_registro = 'RECHAZADO';
                                $observado = true;
                            }
                        }
                        if ($validac->cod_rechazo === 317 &&  $rechaz->estatus === 1){
                            if($tipoPromo){
                                $existsTipoPromo= TipoPromoCampanaFaldones::where('nombre','like' ,"%$tipoPromo%")->first();
                                if(!$existsTipoPromo){
                                    $newAlert = new RechazosValidacionesArchivosCampanasFaldones();
                                    $newAlert->id_archivo = $idArchivo;
                                    $newAlert->id_rechazos_archivos_campanas_faldones = $rechaz->id;
                                    $newAlert->descripcion = 'La columnna tipo_promo del registro no se encuentra registrada en el sistema';
                                    $newAlert->numero_fila = $numeroFila;
                                    $newAlert->campo_asociado = 'tipo_promo';
                                    $newAlert->save();
                                    $reg->estatus_registro = 'RECHAZADO';
                                    $observado = true;
                                }
                            }
                        }
                    }
                    /*Fin motivos de rechazo */
                    $reg->save();
            }
            $rechazosEstructura = RechazosValidacionesArchivosCampanasFaldones::where('id_archivo' , $idArchivo)->get();
            if(!$rezadado && $rechazosEstructura->count()==0){
                $dataValidate = ArchivosFaldonesDataOriginal::where('id_archivo' , $idArchivo)->get();
                foreach ($dataValidate as $key => $reg) {
                    $numeroFila = $reg->numero_fila;
                    $cadena = $reg->cadena;
                    $locales = $reg->locales;
                    $medio = $reg->medio;
                    $tipoMedio = $reg->tipo_medio;
                    $tipoVolanteCatalogo = $reg->tipo_volante_catalogo;
                    $nPromocion = $reg->n_promocion;
                    $seccion =  $reg->seccion;
                    $NombreGenericoPromocion =  $reg->nombre_generico_promocion;
                    $sap =  $reg->sap;
                    $CodBarra =  $reg->cod_barra;
                    $umb =  $reg->umb;
                    $descripcion =  $reg->descripcion;
                    $precioReferenciaModa =  $reg->precio_referencia_moda;
                    $tipoPromo =  $reg->tipo_promo;
                    \Log::info($tipoPromo);
                    $idTipoPRomo = TipoPromoCampanaFaldones::where('nombre','like' ,"%$tipoPromo%")->first()->id;
                    $combinacion =  $reg->combinacion;
                    $tmp =  $reg->tmp;
                    $tc =  $reg->tc;
                    $fechaInicioPromo =  $reg->fecha_inicio_promo;
                    $fechaInicioPromoFormarter =  $fechaInicioPromo?Carbon::parse($fechaInicioPromo) : null;
                    $fechaTerminoPromo =  $reg->fecha_termino_promo;
                    $fechaTerminoPromoFormater  = $fechaTerminoPromo?Carbon::parse($reg->fecha_termino_promo) : null;
                    $hoy = Carbon::now();
                    $idUsuarioCrear =  $reg->id_usuario_crear;
                    $idUsuarioModifica =  $reg->id_usuario_modifica;
                    $estatus = $reg->estatus_registro;
                    $createdAt =  $reg->created_at;
                    $updatedAt =  $reg->updated_at;
                    $deltedAt=  $reg->deleted_at;

                    $cuotas =  $reg->cuotas;
                    $valorCuota =  $reg->valor_cuota;
                    $costoTotal =  $reg->costo_total;
                    $cae =  $reg->cae;
                    $puntosCencoSud =  $reg->puntos_cencosud;
                    $puntosOtrosMedios =  $reg->puntos_otros_medios;

                    if(strpos($tmp, 'x') !== false || strpos($tmp, 'X') !== false || strpos($tc, 'x') !== false ||   strpos($tc, 'X') !== false){
                        $idTipoPRomo = 8;
                    }

                    $regArchivoDataTransformada = new ArchivosFaldonesData();
                    $regArchivoDataTransformada->id_archivo = $idArchivo;
                    $regArchivoDataTransformada->cadena =  $cadena;
                    $regArchivoDataTransformada->locales =   $locales;
                    $regArchivoDataTransformada->medio =   $medio;
                    $regArchivoDataTransformada->tipo_medio = $tipoMedio;
                    $regArchivoDataTransformada->tipo_volante_catalogo = $tipoVolanteCatalogo;
                    $regArchivoDataTransformada->n_promocion =  $nPromocion;
                    $regArchivoDataTransformada->seccion =  $seccion;
                    $regArchivoDataTransformada->nombre_generico_promocion =  $NombreGenericoPromocion;
                    $regArchivoDataTransformada->sap = $sap;
                    $regArchivoDataTransformada->cod_barra = trim($CodBarra);
                    $regArchivoDataTransformada->umb = $umb; 
                    $regArchivoDataTransformada->descripcion = $descripcion;
                    $regArchivoDataTransformada->precio_referencia_moda =  $precioReferenciaModa;
                    $regArchivoDataTransformada->tipo_promo =  $tipoPromo;
                    $regArchivoDataTransformada->combinacion = $combinacion;


                    switch ($tipoPromo) {
                        case 'DESCTO':
                            $tmp < 1 && is_numeric($tmp) ? $tmp = ($tmp*100) : $tmp;
                            $tc < 1 && is_numeric($tc) ? $tc = ($tc*100) :  $tc;
                            break;
                        case 'DESCTO 2DA U':
                            $tmp < 1 && is_numeric($tmp) ? $tmp = ($tmp*100) : $tmp;
                            $tc < 1 && is_numeric($tc) ? $tc = ($tc*100) :  $tc;
                            break;
                        case 'DESCTO 2DA UN':
                            $tmp < 1 && is_numeric($tmp) ? $tmp = ($tmp*100) : $tmp;
                            $tc < 1 && is_numeric($tc) ? $tc = ($tc*100) :  $tc;
                            break;
                        default:
                            $tmp = $tmp;
                            $tc = $tc;
                    }
                
                    $regArchivoDataTransformada->tmp =  $tmp;
                    $regArchivoDataTransformada->tc =  $tc;
                    
                    $regArchivoDataTransformada->cuotas =  $cuotas;
                    $regArchivoDataTransformada->valor_cuota = $valorCuota? round($valorCuota, 0) :null;
                    $regArchivoDataTransformada->costo_total = $costoTotal?round($costoTotal, 0) : null;  
                    $regArchivoDataTransformada->cae = $cae? (round($cae, 4)*100) : null;  
                    $regArchivoDataTransformada->puntos_cencosud =  $puntosCencoSud;
                    $regArchivoDataTransformada->puntos_otros_medios =  $puntosOtrosMedios;
                    $regArchivoDataTransformada->id_campana =  $campana->id;
                    $regArchivoDataTransformada->id_cadena =  $campana->id_cadena;
                    $regArchivoDataTransformada->id_plantilla =  $campana->id_plantilla;
                    $regArchivoDataTransformada->id_formato =  $campana->id_formato;
                    $regArchivoDataTransformada->id_tipo_promo =  $idTipoPRomo;
                    $regArchivoDataTransformada->qr =  $campana->qr;

                    $regArchivoDataTransformada->fecha_inicio_promo =  $fechaInicioPromoFormarter;
                    $regArchivoDataTransformada->fecha_termino_promo = $fechaTerminoPromoFormater;
                    $regArchivoDataTransformada->id_usuario_crear =  $userId;
                    $regArchivoDataTransformada->estatus_registro =  $estatus;
                    $regArchivoDataTransformada->texto_largo = strlen($NombreGenericoPromocion)>60?1:0;

                    //$ultimoRegistro = ArchivosFaldonesData::select("count_robot")->latest()->first();
                    if($campana->qr){
                        $ultimoIdConRobot = ArchivosFaldonesData::where('count_robot', '<>', '0')->orderBy('id', 'desc')->first();
                        \Log::info('ultimo registro');  
                        \Log::info($ultimoIdConRobot);  
                        \Log::info('ultimo registro');  
                        if (empty($ultimoIdConRobot) || $ultimoIdConRobot->count_robot === 0) {
                            $count_robot = 1;
                        } elseif ($ultimoIdConRobot->count_robot >= $numberFaldonRobot->number_max) {
                            $count_robot = 1;
                        } else {
                            $count_robot = $ultimoIdConRobot->count_robot + 1;
                        }
    
                        $regArchivoDataTransformada->count_robot = $count_robot;
                    }


                    $regArchivoDataTransformada->save();

                    if ($campana->id_sala){
                        
                        $stockDataSalaNew =  new StockDataSala();
                        $stockDataSalaNew->id_cadena = $campana->id_cadena;
                        $stockDataSalaNew->id_campana_faldon = $campana->id;
                        $stockDataSalaNew->id_sala = $campana->id_sala;
                        $stockDataSalaNew->id_archivos_faldones_data = $regArchivoDataTransformada->id;
                        $stockDataSalaNew->stock = 1;
                        $stockDataSalaNew->id_usuario_crear = $userId;
                        $stockDataSalaNew->save();

                    }else{
                        $cadenaSelect = Cadenas::where('id' , $campana->id_cadena)->first();
                        $salasDeCadena = $cadenaSelect->salas_cadena;
                        
                        foreach ($salasDeCadena as $keeey => $valueee) {
                            $stockDataSalaNew =  new StockDataSala();
                            $stockDataSalaNew->id_cadena = $campana->id_cadena;
                            $stockDataSalaNew->id_campana_faldon = $campana->id;
                            $stockDataSalaNew->id_sala = $valueee->id;
                            $stockDataSalaNew->id_archivos_faldones_data = $regArchivoDataTransformada->id;
                            $stockDataSalaNew->stock = 1;
                            $stockDataSalaNew->id_usuario_crear = $userId;
                            $stockDataSalaNew->save();
                        }
                    }
                    
                    $productoRegistrado = ProductosRegistrados::where('sap' , $sap)->first();
                    if(!$productoRegistrado){
                        $producnew = new ProductosRegistrados();
                        $producnew->id_seccion = $existsSeccion = Secciones::where('numero',$seccion)->first()->id;
                        $producnew->cod_seccion = $seccion;
                        $producnew->nombre_generico_promocion = $NombreGenericoPromocion;
                        $producnew->sap =  $sap;
                        $producnew->cod_barra = trim($CodBarra);
                        $producnew->umb = $umb; 
                        $producnew->descripcion = $descripcion;
                        $producnew->precio_referencia_moda = $precioReferenciaModa;
                        $producnew->id_usuario_crear =  $userId;  
                        $producnew->save();
                    } 
                }
                $archivo->id_estados_archivos_faldones = 5;
                $archivo->save();
                $campana->id_estado_campana = 5;
                $campana->save();
                return 5;
            }else{
                $archivo->id_estados_archivos_faldones = 6;
                $archivo->save();
                $campana->id_estado_campana = 6;
                $campana->save();
                return 6;
            }
        }
        catch (\Exception $e){
            report($e);
            \Log::info($e->getMessage());
            $archivo->id_estados_archivos_faldones = 6;
            $archivo->save();
            $campana->id_estado_campana = 6;
            $campana->save();
            return $e;
        }

    }

    public function get_campana_faldones(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,401)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $usuario = User::withTrashed()->where('id',Auth::user()->id)->with('cadenas')->first();
                $cadenas = $usuario->cadenas->pluck('id');
                $campana_faldones =  DB::table('campana_faldon')
                            ->join('cadenas', 'cadenas.id', '=', 'campana_faldon.id_cadena')
                            ->join('campana_estado', 'campana_estado.id', '=', 'campana_faldon.id_estado_campana')
                            ->leftjoin('salas', 'salas.id', '=', 'campana_faldon.id_sala')
                            ->leftjoin('archivos_faldones', 'archivos_faldones.id_campana', '=', 'campana_faldon.id')
                            ->select(DB::raw("campana_faldon.id,campana_faldon.id_estado_campana,campana_faldon.nombre,cadenas.nombre AS cadena_nombre, CONCAT(DATE_FORMAT(campana_faldon.desde,'%d-%m-%Y'),' - ',DATE_FORMAT(campana_faldon.hasta,'%d-%m-%Y')) AS vigencia ,campana_estado.nombre AS estado_nombre,salas.display_nombre_sap AS sala_nombre,archivos_faldones.url,archivos_faldones.url_pdf"))
                            ->whereIn('campana_faldon.id_cadena' , $cadenas)->whereNull('campana_faldon.deleted_at')->orderBy('id', 'desc')->get();
                            
                
				return response()->json($campana_faldones, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
                return $e;
				return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }

    public function get_campana_faldones_dashboard(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,0)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
				$formato =  CampanaFaldon::Where('id_estado_campana','5')->count();
				return response()->json($formato, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
                return $e;
				return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }

    public function get_campana_faldones_deleted(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,401)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $usuario = User::withTrashed()->where('id',Auth::user()->id)->with('cadenas')->first();
                $cadenas = $usuario->cadenas->pluck('id');
                $campana_faldones =  DB::table('campana_faldon')
                            ->join('cadenas', 'cadenas.id', '=', 'campana_faldon.id_cadena')
                            ->join('campana_estado', 'campana_estado.id', '=', 'campana_faldon.id_estado_campana')
                            ->leftjoin('salas', 'salas.id', '=', 'campana_faldon.id_sala')
                            ->leftjoin('archivos_faldones', 'archivos_faldones.id_campana', '=', 'campana_faldon.id')
                            ->select(DB::raw("campana_faldon.id,campana_faldon.id_estado_campana,campana_faldon.deleted_at,campana_faldon.nombre,cadenas.nombre AS cadena_nombre, CONCAT(DATE_FORMAT(campana_faldon.desde,'%d-%m-%Y'),' - ',DATE_FORMAT(campana_faldon.hasta,'%d-%m-%Y')) AS vigencia ,campana_estado.nombre AS estado_nombre,salas.display_nombre_sap AS sala_nombre,archivos_faldones.url,archivos_faldones.url_pdf"))
                            ->whereIn('campana_faldon.id_cadena' , $cadenas)->whereNotNull('campana_faldon.deleted_at')->get();
				return response()->json($campana_faldones, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }

    public function get_campana_faldones_espera(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,401)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
				$formato =  CampanaFaldon::with('salas_campana')->with('cadena_campana')->with('campana_tipo')->with('formato_campana')
                ->with('plantilla_campana')->with('usuario_crea_campana')->with('usuario_modifica_campana')->where('id_estado_campana',1)->get();
				return response()->json($formato, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }

    public function get_campana_faldones_vigente(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,401)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
				$formato =  CampanaFaldon::with('salas_campana')->with('cadena_campana')->with('campana_tipo')->with('formato_campana')
                ->with('plantilla_campana')->with('usuario_crea_campana')->with('usuario_modifica_campana')->where('id_estado_campana',2)->get();
				return response()->json($formato, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }

    public function get_campana_faldones_vencida(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,401)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
				$formato =  CampanaFaldon::with('salas_campana')->with('cadena_campana')->with('campana_tipo')->with('formato_campana')
                ->with('plantilla_campana')->with('usuario_crea_campana')->with('usuario_modifica_campana')->where('id_estado_campana',3)->get();
				return response()->json($formato, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }

    public function get_campana_faldones_inactiva(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,401)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
				$formato =  CampanaFaldon::with('salas_campana')->with('cadena_campana')->with('campana_tipo')->with('formato_campana')
                ->with('plantilla_campana')->with('usuario_crea_campana')->with('usuario_modifica_campana')->where('id_estado_campana',4)->get();
				return response()->json($formato, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }

    public function delete_campana(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,407)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $campana = CampanaFaldon::where('id',$request->id)->delete();
                $mensaje ="OK";
                return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }

    public function generar_faldon(Request $request , $idFaldonExpress)
    {
        set_time_limit(14200);
        try{
            $productoFaldonaux = ArchivosFaldonesData::where('id' ,$idFaldonExpress)->first();
            $productoFaldon= ArchivosFaldonesData::where('id_campana', $productoFaldonaux->id_campana)->where('nombre_generico_promocion', $productoFaldonaux->nombre_generico_promocion)->first();
                $plantillaCorrecta = CadenaPlantillaFormatoTipoPromoTexto::
                                    where('id_cadena' ,  $productoFaldon->id_cadena)
                                    ->where('id_plantilla' ,  $productoFaldon->id_plantilla)
                                    ->where('id_formato' ,  $productoFaldon->id_formato)
                                    ->where('id_tipo_promo' ,  $productoFaldon->id_tipo_promo)
                                    ->where('texto_largo' ,  $productoFaldon->texto_largo)
                                    ->where('qr' ,  $productoFaldon->qr)
                                    ->first();
            $plantillaPdf =  $plantillaCorrecta->plantilla_blade_pdf;

            $data = [
                'product' => collect([$productoFaldon])
            ];
            $has = bin2hex(random_bytes(8));
            $route = public_path().'/TmpFaldones/'.$productoFaldon->nombre_generico_promocion.'_'.$has.'_'.'.pdf';
            $pdf = PDF::loadView($plantillaPdf, $data)->setPaper('A4', 'portrait')->save($route);
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

    public function generar_faldones(Request $request , $idCampana)
    {
        set_time_limit(14200);
        set_time_limit(600);

        $arrayRutas = [];
        $campana = CampanaFaldon::where('id', $idCampana)->first();
        $faldones = ArchivosFaldonesData::where('id_campana' , $idCampana)->get()->groupBy('id_tipo_promo');
        $faldonesDobleA = ArchivosFaldonesData::where('id_campana' , $idCampana)->get()->groupBy('nombre_generico_promocion');
        $arrayDefinitivo = [];

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
            $pathForTheMergedPdf = public_path().'/'.$hastt.'.pdf';
          
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
            return response()->json($dataReturn, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
           // return $cmd;
        }catch (\Exception $e){
            return $e;
        }
    }

    public function stock_productos(Request $request , $idCampana , $idSala)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        \Log::info($idCampana.'-'.$idSala);
        
    	if($valida == 'OK'){
            try{

                $stock = StockDataSala::Select(DB::raw("stock_data_sala.*,archivos_faldones_data.count_robot"))
                ->where('id_campana_faldon', $idCampana)
                ->where('id_sala' , $idSala)
                ->leftJoin('archivos_faldones_data', 'id_archivos_faldones_data','archivos_faldones_data.id')
                ->get();

                return response()->json($stock, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return $e;
            } 
        }else{
            return $valida;
        }
    }

    public function download_stock_campana(Request $request , $idCampana , $idSala){
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                $stock = StockDataSala::Select(DB::raw("stock_data_sala.*,archivos_faldones_data.count_robot"))
                ->where('id_campana_faldon', $idCampana)
                ->where('id_sala' , $idSala)
                ->leftJoin('archivos_faldones_data', 'id_archivos_faldones_data','archivos_faldones_data.id')
                ->get();
                $sala = Salas::where('id' , $idSala)->first();
                $has = bin2hex(random_bytes(8));
                $nombreArchivo = $sala->nombre_sap.'_'.$has.'.xlsx';
                $guardarDo =  Excel::store(new StockExport($stock),  $nombreArchivo , 'stock');
                $path = public_path('Faldones/stock/').$nombreArchivo;
                $encode = base64_encode(file_get_contents($path));
                $dataReturn=[
                    'nombre_archivo'=> $nombreArchivo,
                    'content'=>$encode
                ];
                return response()->json($dataReturn, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return $e;
            } 
        }else{
            return $valida;
        }
    }

    public function desactivate_stock_campana_sala(Request $request , $idStock){
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                $stockDesactivate = StockDataSala::where('id', $idStock)->first();
                if($stockDesactivate->stock == 1){
                    $stockDesactivate->stock = 0;
                }else{
                    $stockDesactivate->stock = 1;
                }
                $stockDesactivate->save();
                return response()->json($stockDesactivate, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return $e;
            } 
        }else{
            return $valida;
        }
    }
}
