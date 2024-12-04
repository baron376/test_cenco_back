<?php

namespace App\Http\Controllers\CampanaProveedor;

use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CampanaProveedorExport;
use Illuminate\Http\Request;
use App\Http\Controllers\GeneralObetenerController;
use App\Models\CampanaProveedorNew;
use App\Models\CampanaSalasNew;
use App\Models\CampanaZonasNew;
use App\Models\CampanaFormatoNew;
use App\Models\CampanaElementos;
use App\Models\CampanaProveedor;
use App\Models\Proveedores;
use App\Models\CampanaSalas;
use App\Models\CampanaZonas;
use App\Models\User;
use App\Models\CampanaFechas;
use App\Models\UsuarioSalas;
use App\Models\CampanaMaterialNew;
use App\Models\CampanaComentarioNew;
use App\Models\TpElementosCampana;
use App\Models\Salas;
use App\Models\Zona;
use App\Models\SalaElementoCupo;
use Illuminate\Support\Facades\Mail;
use App\Mail\StoreCampanaProveedor;
use App\Mail\AprobarCampanaProveedor;
use App\Mail\RechazarCampanaProveedor;
///use App\Models\Salas;
use DB;
use Illuminate\Support\Facades\Auth;
use PDF;
use setasign\Fpdi\Fpdi;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\Log;
class CampanaProveedorNewController extends Controller
{
    protected $urlFront = '';
    function __construct() {
        $this->urlFront = config('app.front');
    }
    public function get_campana_proveedor(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
           //     if(!$validar->validar_permiso(Auth::user()->id,515)){
             //       return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
               // }
                $usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $validar->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
                $campanas = CampanaProveedorNew::getCampanasProveedor($admin, $salas_usuario, $request);
            
				return response()->json($campanas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
                return $e;
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}

        }else{
			return  $valida;
		}
    }

    public function campana_proveedor_dashboard(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
            //    if(!$validar->validar_permiso(Auth::user()->id,0)){
              //      return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
               // }
                $campanas = CampanaProveedorNew::count();
				return response()->json($campanas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
                return $e;
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}

        }else{
			return  $valida;
		}
    }

    public function get_campana_proveedor_elimninadas(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                //if(!$validar->validar_permiso(Auth::user()->id,515)){
                  //  return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                //}
                $usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $validar->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
                $campanas = CampanaProveedorNew::getCampanasProveedor($admin, $salas_usuario, $request, true);
                return response()->json($campanas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}

        }else{
			return  $valida;
		}
    }

    public function edit_campana_proveedor(Request $request, $id)
    {
        //return "Hola";
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){

            try{
            //    if(!$validar->validar_permiso(Auth::user()->id,515)){
            //        return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            //    }sub_sesion
            //$campanas = CampanaProveedor::withTrashed()->with('cadena')->with('proveedor')->with('sesion')->with('zona')->with('zona_exhibicion')->with('user_crea')->with('user_modifica')->with('salas')->with('materiales')->with('espacio_exhibicion')->with('campana_estado')->with('campana_etapa')->with('zona')->with('zonas')->with('comentarios')->where('id',$id)->first();
                $campanas = CampanaProveedorNew::withTrashed()->with('sub_sesion')->with('cadena')->with('proveedor')
                ->with('salas')->with('zonas')->with('tpCampana')->with('visibilidad')
                ->with(['sesion' => function ($query) {
                    $query->withTrashed();
                }])->with('espacio')->with('campana_estado')->with('campana_etapa')->with('formato')->with('material')->with('vigencias')
                ->where('id',$id)->first();
                //$salasDisponibles = $campanas->salasDisponibles();
                $campanas->elementos = $campanas->elementosgroupBy();
                $campanas->salas_disponibles =  $campanas->salasDisponibles();
                //return $campanas;
                return response()->json($campanas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function store_campana_proveedor(Request $request)
    {   
        
        set_time_limit(14200);
        //return $request;
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
    	if($valida == 'OK'){
            try{

                if(!$validar->validar_permiso(Auth::user()->id,300)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $twoHoursAgo = Carbon::now()->subMinutes(15);
                $campaignsToDelete = CampanaProveedorNew::where('id_estado_campana', 7)->where('updated_at', '<', $twoHoursAgo)->get();

                foreach ($campaignsToDelete as $campaign) {
                    CampanaElementos::where('id_campana', $campaign->id)->delete();
                    $campaign->delete();
                }
                
                $id_salas_con_cupo = [];
                $id_salas_sin_cupo = [];
                $id_cadenas = $request->cadena[0]['id'];
                $id_espacio = $request->espacio[0]['id'];
                $id_formato = $request->formato[0]['id'];
                $id_seccion = $request->seccion[0]['id'];
                $id_tpCampana = $request->tpCampana[0]['id'];
                $id_visibilidadCampana = $request->visibilidadCampana[0]['id'];
                $id_zona = $request->zona[0]['id'];
                $id_sub_seccion=$request->id_sub_seccion[0]['id'];
                $salas = $request->salas;
                $fechasarray = $request->fechasarray;

                if ($request->has('idCampana')) {
                    $id_camapana = $request->idCampana;
                    CampanaElementos::where('id_campana', $id_camapana)->delete();
                    //return $id_camapana;
                    $campana_proveedor = CampanaProveedorNew::where('id', $id_camapana)->first();
                    //$campana_proveedor = CampanaProveedorNew::withTrashed()->where('id', $id_camapana)->first();
                    //return "holaa --- ".$campana_proveedor;
                    $campana_proveedor->id_cadena = $request->cadena[0]['id'];
                    $campana_proveedor->id_sesion = $request->seccion[0]['id'];
                    $campana_proveedor->id_sub_seccion = $request->id_sub_seccion[0]['id'];
                    $campana_proveedor->id_tipo_campana = $request->tpCampana[0]['id'];
                    $campana_proveedor->id_visibilidad_campana = $request->visibilidadCampana[0]['id'];
                    $campana_proveedor->id_estado_campana = 7;
                    $campana_proveedor->id_status_campana = 1;
                    $campana_proveedor->id_formato = $id_formato;
                    $campana_proveedor->id_gerencia = $id_espacio;
                    $campana_proveedor->id_etapa = 1;
                    $campana_proveedor->id_usuario_crear = Auth::user()->id;
                    $campana_proveedor->created_at = now();
                    $campana_proveedor->save();
                   
                }else{
                    $campana_proveedor = new CampanaProveedorNew();
                    $campana_proveedor->id_cadena = $request->cadena[0]['id'];
                    $campana_proveedor->id_sesion = $request->seccion[0]['id'];
                    $campana_proveedor->id_sub_seccion = $request->id_sub_seccion[0]['id'];
                    $campana_proveedor->id_tipo_campana = $request->tpCampana[0]['id'];
                    $campana_proveedor->id_visibilidad_campana = $request->visibilidadCampana[0]['id'];
                    $campana_proveedor->id_estado_campana = 7;
                    $campana_proveedor->id_status_campana = 1;
                    $campana_proveedor->id_formato = $id_formato;
                    $campana_proveedor->id_gerencia = $id_espacio;
                    $campana_proveedor->id_etapa = 1;
                    $campana_proveedor->id_usuario_crear = Auth::user()->id;
                    $campana_proveedor->created_at = now();
                    $campana_proveedor->save();
                }
                
                $zonas_id =[];

                foreach ($request->zona as $key => $z) {
                    $zonas_id[$key] = $z['id'];
                }

                foreach ($fechasarray as $key => $elemento) {
                    foreach($elemento['selectedValues'] as $el){
                        $id_elemento = $el['id'];
                        $desde = $elemento['dateRange'][0];
                        $hasta = $elemento['dateRange'][1];
                        $desde = Carbon::parse($desde)->format('Y-m-d');
                        $hasta = Carbon::parse($hasta)->format('Y-m-d');
                        $period = CarbonPeriod::create($desde, $hasta);
                        foreach($salas as $sala){
                            $id_sala= $sala['id'];//$id_sub_seccion
                            $consulta_cupo = SalaElementoCupo::where('id_sub_seccion',$id_sub_seccion)->where('id_elemento', $id_elemento)->where('id_sala', $id_sala)->where('id_seccion', $id_seccion)->first();
                            if ($consulta_cupo) {
                                $cupos_disponibles = $consulta_cupo->n_cupos;
                            } else {
                                $cupos_disponibles = 1;
                            }

                            

                            foreach ($period as $date) {
                                $desde2 = $date->format('Y-m-d');


                                $consulta_cupo = CampanaElementos::where('id_sub_seccion',$id_sub_seccion)->where('id_elementos', $id_elemento)->where('id_sala', $id_sala)->where('fecha', $desde2)->where('id_seccion', $id_seccion)->where('cupo', 1)->count();
                                
                                if($id_tpCampana == 1){
                                    $consulta_cupo = CampanaElementos::where('id_sub_seccion',$id_sub_seccion)->where('id_elementos', $id_elemento)->where('id_sala', $id_sala)->where('fecha', $desde2)->where('id_seccion', $id_seccion)->where('cupo', 1)->where('id_tp_camapana', $id_tpCampana)->count();
                                    $cupos_disponibles = 15;
                                }

                                if ($cupos_disponibles > $consulta_cupo) {
                                    $cupo = 1;
                                } else {
                                    $cupo = 0;
                                }

                                

                                $campana_elemento = new CampanaElementos();
                                $campana_elemento->id_campana = $campana_proveedor->id;
                                $campana_elemento->id_elementos = $id_elemento;
                                $campana_elemento->desde = $desde;
                                $campana_elemento->id_sub_seccion = $id_sub_seccion;
                                $campana_elemento->hasta = $hasta;
                                $campana_elemento->fecha = $desde2;
                                $campana_elemento->id_seccion = $id_seccion;
                                $campana_elemento->id_sala = $id_sala;
                                $campana_elemento->cupo = $cupo;
                                $campana_elemento->id_tp_camapana = $id_tpCampana;
                                $campana_elemento->id_usuario_crear = Auth::user()->id;
                                $campana_elemento->created_at = now();
                                $campana_elemento->save();
                                
                            }                      
                        }
                    }
                }
                
                $idElementosUnicos = CampanaElementos::select('id_elementos', 'desde', 'hasta')
                ->where('id_campana', $campana_proveedor->id)
                ->distinct()
                ->get();
                $elementos_definitivos = [];
                foreach ($idElementosUnicos as $key => $idElemento) {
                    $elemento= TpElementosCampana::where('id', $idElemento->id_elementos)->first();
                    $campana_elementos = CampanaElementos::with(['salas'])->where('id_campana', $campana_proveedor->id)->where('id_elementos',$idElemento->id_elementos)->where('desde',$idElemento->desde)->where('hasta',$idElemento->hasta)->first();
                    $campana_elementos_cupos = CampanaElementos::select(DB::raw("id_sala"))->where('id_campana', $campana_proveedor->id)->where('id_elementos',$idElemento->id_elementos)->where('desde',$idElemento->desde)->where('hasta',$idElemento->hasta)->where('cupo',1)->get()->toArray();
                    $campana_elementos_sin_cupos = CampanaElementos::select(DB::raw("id_sala"))->where('id_campana', $campana_proveedor->id)->where('id_elementos',$idElemento->id_elementos)->where('desde',$idElemento->desde)->where('hasta',$idElemento->hasta)->where('cupo',0)->get()->toArray();
                    $salas_con_cupo = Salas::whereIn('id',$campana_elementos_cupos)->get();
                    $salas_sin_cupo = Salas::whereIn('id',$campana_elementos_sin_cupos)->get();
                    $zonascon_cupo = Zona::with(['salas' => function ($query) use ($campana_elementos_cupos) {
                        $query->whereIn('id', $campana_elementos_cupos);
                    }])->whereIn('id', $zonas_id)->get();

                    $zonassin_cupo = Zona::with(['salas' => function ($query) use ($campana_elementos_sin_cupos) {
                        $query->whereIn('id', $campana_elementos_sin_cupos);
                    }])->whereIn('id', $zonas_id)->get();

                    $elementos_definitivos[$key] = ['id' =>$elemento->id,'name' =>$elemento->name, 'campana_elementos' => $campana_elementos, 'salas_con_cupo' => $salas_con_cupo,'salas_sin_cupo' => $salas_sin_cupo,'zonascon_cupo'=>$zonascon_cupo,'zonassin_cupo' => $zonassin_cupo];
                    
                }

                $zona_sin_cups = [];
                $zona_cups = [];
                
                foreach ($request->zona as $key => $zona) {
                    $campana_zona = new CampanaZonasNew();
                    $campana_zona->id_campana = $campana_proveedor->id;
                    $campana_zona->id_zona = $zona['id'];
                    $campana_zona->id_usuario_crear = Auth::user()->id;
                    $campana_zona->created_at = now();
                    $campana_zona->save();

                    $salas_sin_cupo = Salas::where('id_zona', $zona['id'])
                    ->whereHas('campanaElementos', function($query) use ($campana_proveedor) {
                        $query->where('id_campana', $campana_proveedor->id)
                            ->where('cupo', 0);
                    })
                    ->with(['campanaElementos' => function($query) use ($campana_proveedor) {
                        $query->where('id_campana', $campana_proveedor->id)
                            ->where('cupo', 0)->with('elementos');
                    }])
                    ->get();

                    $salas_sin_cupo_ids = $salas_sin_cupo->pluck('id');

                    /*$campana_cupos = CampanaElementos::where('id_campana', $campana_proveedor->id)
                    ->where('cupo',1)
                    ->get()->pluck('id_sala');*/

                    $salas_cupo = Salas::where('id_zona', $zona['id'])
                    ->whereNotIn('id', $salas_sin_cupo_ids)
                    ->whereHas('campanaElementos', function($query) use ($campana_proveedor) {
                        $query->where('id_campana', $campana_proveedor->id)
                            ->where('cupo', 1);
                    })
                    ->with(['campanaElementos' => function($query) use ($campana_proveedor) {
                        $query->where('id_campana', $campana_proveedor->id)
                            ->where('cupo', 1)->with('elementos');
                    }])
                    ->get();

                    $zona_sin_cups[$key] = ['id_zona' =>$zona['id'], 'nombre_zona'=> $zona['nombre'], 'salas' =>$salas_sin_cupo];
                    $zona_cups[$key] = ['id_zona' =>$zona['id'], 'nombre_zona'=> $zona['nombre'], 'salas' =>$salas_cupo];
                }

                foreach($request->formato as $formato){
                    $campana_formato = new CampanaFormatoNew();
                    $campana_formato->id_campana = $campana_proveedor->id;
                    $campana_formato->id_formato = $formato['id'];
                    $campana_formato->id_usuario_crear = Auth::user()->id;
                    $campana_formato->created_at = now();
                    $campana_formato->save();
                }
                
                $campanas_provedor_consulta =  CampanaProveedorNew::with(['cadena','formato','tpCampana','visibilidad','sesion','espacio'])->where('id',$campana_proveedor->id)->first();

                return ['zonas' => $request->zona,'elementos' =>$elementos_definitivos,'zonas2' => $zonas_id, 'campana' => $campanas_provedor_consulta,'formato' =>$request->formato, 'zona_sin_cups' =>$zona_sin_cups, 'zona_cups' => $zona_cups];
                                
                \Log::info('end mail');

                return response()->json($campana_proveedor, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                \Log::info($e->getMessage());
                return response()->json($e->getMessage(), 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }  
        }
    }


    public function store2_campana_proveedor(Request $request)
    {   
        //return $request->all();
        //return $request->all();
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        //return $request->proveedor[0]['id'];
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,300)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $id_salas_con_cupo = [];
                $id_salas_sin_cupo = [];
                $id_cadenas = $request->cadena[0]['id'];
                $id_espacio = $request->espacio[0]['id'];
                $id_formato = $request->formato[0]['id'];
                $id_seccion = $request->seccion[0]['id'];
                $id_tpCampana = $request->tpCampana[0]['id'];
                $id_visibilidadCampana = $request->visibilidadCampana[0]['id'];
                $id_zona = $request->zona[0]['id'];
                $salas = $request->salas;
                $fechasarray = $request->fechasarray;
                $campana_proveedor = new CampanaProveedorNew();
                $campana_proveedor->id_cadena = $request->cadena[0]['id'];
                $campana_proveedor->id_sesion = $request->seccion[0]['id'];
                $campana_proveedor->id_tipo_campana = $request->tpCampana[0]['id'];
                $campana_proveedor->id_visibilidad_campana = $request->visibilidadCampana[0]['id'];
                $campana_proveedor->id_estado_campana = 7;
                $campana_proveedor->id_status_campana = 1;
                $campana_proveedor->id_etapa = 1;
                $campana_proveedor->id_usuario_crear = Auth::user()->id;
                $campana_proveedor->created_at = now();
                $campana_proveedor->save();
                $zonas_id =[];
                foreach ($request->zona as $key => $z) {
                    $zonas_id[$key] = $z['id'];
                }

                foreach ($fechasarray as $key => $elemento) {
                    //return $elemento;
                    foreach($elemento['selectedValues'] as $el){
                        //return $el;
                        $id_elemento = $el['id'];
                        $desde = $elemento['dateRange'][0];
                        $hasta = $elemento['dateRange'][1];
                        $desde = Carbon::parse($desde)->format('Y-m-d');
                        $hasta = Carbon::parse($hasta)->format('Y-m-d');
                        foreach($salas as $sala){
                            $id_sala= $sala['id'];

                            $consulta_cupo = SalaElementoCupo::where('id_elemento', $id_elemento)->where('id_sala', $id_sala)->first();
                            if ($consulta_cupo) {
                                $cupos_disponibles = $consulta_cupo->n_cupos;
                            } else {
                                $cupos_disponibles = 1; // Si no hay registro, se asume que hay cupo disponible
                            }


                            $consulta_cupo = CampanaElementos::where('id_elementos', $id_elemento)
                                ->where(function ($query) use ($desde, $hasta) {
                                    $query->whereBetween('desde', [$desde, $hasta])
                                        ->orWhereBetween('hasta', [$desde, $hasta])
                                        ->orWhere(function ($q) use ($desde, $hasta) {
                                            $q->where('desde', '<=', $desde)
                                                ->where('hasta', '>=', $hasta);
                                        });
                                })
                                ->where('id_sala', $id_sala)
                            ->count();

                            if ($cupos_disponibles > $consulta_cupo) {
                                $cupo = 1;
                            } else {
                                $cupo = 0;
                            }
                            $campana_elemento = new CampanaElementos();
                            $campana_elemento->id_campana = $campana_proveedor->id;
                            $campana_elemento->id_elementos = $id_elemento;
                            $campana_elemento->desde = $desde;
                            $campana_elemento->hasta = $hasta;
                            $campana_elemento->id_elementos = $id_elemento;
                            $campana_elemento->id_sala = $id_sala;
                            $campana_elemento->cupo = $cupo;
                            $campana_elemento->id_usuario_crear = Auth::user()->id;
                            $campana_elemento->created_at = now();
                            $campana_elemento->save();                      
                        }
                    }
                }
                
                //$elementos = CampanaElementos::with('salas')->with('elementos')->where('id_campana',$campana_proveedor->id)->get();
                //$elementos = CampanaElementos::with(['salas', 'elementos'])->where('id_campana', $campana_proveedor->id)->get();//->groupBy('desde','hasta','id_elementos');

                // Agrupar los datos
                /*$elementos = $elementos->groupBy(function ($item) {
                    return $item->id . '-' . $item->desde . '-' . $item->hasta;
                });*/
                //return $elementos ;
                //$campana_elementos = CampanaElementos::where('id_campana', $campana_proveedor->id)->get()->groupBy('id_elementos');
                $idElementosUnicos = CampanaElementos::select('id_elementos', 'desde', 'hasta')
                ->where('id_campana', $campana_proveedor->id)
                ->distinct()
                ->get();
                //return $idElementosUnicos;
                $elementos_definitivos = [];
                foreach ($idElementosUnicos as $key => $idElemento) {
                    $elemento= TpElementosCampana::where('id', $idElemento->id_elementos)->first();
                    $campana_elementos = CampanaElementos::with(['salas'])->where('id_campana', $campana_proveedor->id)->where('id_elementos',$idElemento->id_elementos)->where('desde',$idElemento->desde)->where('hasta',$idElemento->hasta)->first();
                    $campana_elementos_cupos = CampanaElementos::select(DB::raw("id_sala"))->where('id_campana', $campana_proveedor->id)->where('id_elementos',$idElemento->id_elementos)->where('desde',$idElemento->desde)->where('hasta',$idElemento->hasta)->where('desde',$idElemento->desde)->where('cupo',1)->get()->toArray();
                    $campana_elementos_sin_cupos = CampanaElementos::select(DB::raw("id_sala"))->where('id_campana', $campana_proveedor->id)->where('id_elementos',$idElemento->id_elementos)->where('desde',$idElemento->desde)->where('hasta',$idElemento->hasta)->where('desde',$idElemento->desde)->where('cupo',0)->get()->toArray();
                    $salas_con_cupo = Salas::whereIn('id',$campana_elementos_cupos)->get();
                    $salas_sin_cupo = Salas::whereIn('id',$campana_elementos_sin_cupos)->get();
                    //$salas_sin_cupo = '';
                    $zonascon_cupo = Zona::with(['salas' => function ($query) use ($campana_elementos_cupos) {
                        $query->whereIn('id', $campana_elementos_cupos);
                    }])->whereIn('id', $zonas_id)->get();

                    /*$zonascon_cupo = $zonascon_cupo->filter(function ($zona) {
                        return $zona->salas->isNotEmpty();
                    });*/

                    $zonassin_cupo = Zona::with(['salas' => function ($query) use ($campana_elementos_sin_cupos) {
                        $query->whereIn('id', $campana_elementos_sin_cupos);
                    }])->whereIn('id', $zonas_id)->get();

                    /*$zonassin_cupo = $zonassin_cupo->filter(function ($zona) {
                        return $zona->salas->isNotEmpty();
                    });*/
                    
                    $elementos_definitivos[$key] = ['id' =>$elemento->id,'name' =>$elemento->name, 'campana_elementos' => $campana_elementos, 'salas_con_cupo' => $salas_con_cupo,'salas_sin_cupo' => $salas_sin_cupo,'zonascon_cupo'=>$zonascon_cupo,'zonassin_cupo' => $zonassin_cupo];
                    
                }
                //return $elementos_definitivos;
                //return $campana_elementos;
                return ['zonas' => $request->zona,'elementos' =>$elementos_definitivos,'zonas2' => $zonas_id, 'campana' => $campana_proveedor];
                
                /*if(!empty($request->fileAreaComercial)){
                    $ext_fileAreaComercial = pathinfo($request->filenameareacomercialok, PATHINFO_EXTENSION);
                    $name_fileAreaComercial = uniqid().".".$ext_fileAreaComercial;
                    $fileNameAreaComercial = $name_fileAreaComercial; //$name;
                    $urlAreaComercial='campana_proveedor/'.$fileNameAreaComercial;
                    $contentAreaComercial = $request->fileAreaComercial;
                    $file_path_comercial = public_path($urlAreaComercial);
                    //$envio = Storage::disk('public')->put($url, $content);
                    file_put_contents($file_path_comercial, base64_decode($contentAreaComercial));
                }

                if(!empty($request->fileBasesLegales)){
                    $ext_fileBasesLegales = pathinfo($request->filenamebaselegal, PATHINFO_EXTENSION);
                    $name_fileNameBaseLegal = uniqid().".".$ext_fileBasesLegales;
                    $fileNameBaseLegal = $name_fileNameBaseLegal; //$name;
                    $urlBaseLegal='campana_proveedor/'.$fileNameBaseLegal;
                    $contentBaseLegal = $request->fileBasesLegales;
                    $file_path_legal = public_path($urlBaseLegal);
                    //$envio = Storage::disk('public')->put($url, $content);
                    file_put_contents($file_path_legal, base64_decode($contentBaseLegal));
                }

                if(!empty($request->fileOrdenCompra)){
                    $ext_fileNameOrdenCompra = pathinfo($request->filenameordencompra, PATHINFO_EXTENSION);
                    $name_fileNameOrdenCompra = uniqid().".".$ext_fileNameOrdenCompra;

                    $fileNameOrdenCompra = $name_fileNameOrdenCompra; //$name;
                    $urlOrdenCompra='campana_proveedor/'.$fileNameOrdenCompra;
                    $contentOrdenCompra = $request->fileOrdenCompra;
                    $file_path_legal = public_path($urlOrdenCompra);
                    //$envio = Storage::disk('public')->put($url, $content);
                    file_put_contents($file_path_legal, base64_decode($contentOrdenCompra));
                }

                $campana_proveedor = new CampanaProveedorNew();
                $campana_proveedor->id_cadena = $request->cadena[0]['id'];//Cadena
                $campana_proveedor->nombre = $request->name;//Nombre Campaña
                $campana_proveedor->desde = $request->desde;//desde
                $campana_proveedor->hasta = $request->hasta;//hasta
                $campana_proveedor->id_proveedor = $request->proveedor[0]['id'];//Proveedor
                //$campana_proveedor->id_formato = $request->formato[0]['id'];//Formato
                $campana_proveedor->id_gerencia = $request->espacio[0]['id'];//Gerencia
                $campana_proveedor->id_sesion = $request->seccion[0]['id'];//Sección
                $campana_proveedor->id_tipo_campana = $request->tpCampana[0]['id'];//Tipo de Campana
                $campana_proveedor->id_visibilidad_campana = $request->visibilidadCampana[0]['id'];//Visibilidad de Campana
                //$campana_proveedor->id_elemento_campana = $request->elementoCampana[0]['id'];//Elementos de Campana
                if(!empty($request->fileAreaComercial)){
                    $campana_proveedor->url_area_comercial = $urlAreaComercial;
                }
                if(!empty($request->fileBasesLegales)){
                    $campana_proveedor->url_bases_legales = $urlBaseLegal;
                }
                if(!empty($request->fileOrdenCompra)){
                    $campana_proveedor->url_orden_compra = $urlOrdenCompra;
                }
                $campana_proveedor->id_estado_campana = 1;
                $campana_proveedor->id_status_campana = 1;
                $campana_proveedor->id_etapa = 1;
                $campana_proveedor->id_usuario_crear = Auth::user()->id;
                $campana_proveedor->created_at = now();
                $campana_proveedor->save();

                foreach($request->fechasarray as $fecha){
                    
                    $campana_sala = new CampanaFechas();
                    $campana_sala->id_campana = $campana_proveedor->id;
                    $campana_sala->desde = Carbon::parse($fecha["dateFrom"])->format('Y-m-d');
                    $campana_sala->hasta = Carbon::parse($fecha["dateTo"])->format('Y-m-d');
                    $campana_sala->id_usuario_crear = Auth::user()->id;
                    $campana_sala->created_at = now();;
                    $campana_sala->save();
                }


                foreach($request->salas as $sala){
                    $campana_sala = new CampanaSalasNew();
                    $campana_sala->id_campana = $campana_proveedor->id;
                    $campana_sala->id_sala = $sala['id'];
                    $campana_sala->id_usuario_crear = Auth::user()->id;
                    $campana_sala->created_at = now();
                    $campana_sala->save();
                }


                foreach($request->zona as $zona){
                    $campana_zona = new CampanaZonasNew();
                    $campana_zona->id_campana = $campana_proveedor->id;
                    $campana_zona->id_zona = $zona['id'];
                    $campana_zona->id_usuario_crear = Auth::user()->id;
                    $campana_zona->created_at = now();
                    $campana_zona->save();
                }

                foreach($request->formato as $formato){
                    $campana_formato = new CampanaFormatoNew();
                    $campana_formato->id_campana = $campana_proveedor->id;
                    $campana_formato->id_formato = $formato['id'];
                    $campana_formato->id_usuario_crear = Auth::user()->id;
                    $campana_formato->created_at = now();
                    $campana_formato->save();
                }

                foreach($request->elementoCampana as $elemento){
                    $campana_elemento = new CampanaElementos();
                    $campana_elemento->id_campana = $campana_proveedor->id;
                    $campana_elemento->id_elementos = $elemento['id'];
                    $campana_elemento->id_usuario_crear = Auth::user()->id;
                    $campana_elemento->created_at = now();
                    $campana_elemento->save();
                }

                if($request->comentario_gestion <> ''){
                    $campanas_comentario = new CampanaComentarioNew();
                    $campanas_comentario->id_campana = $campana_proveedor->id;
                    $campanas_comentario->comentario = $request->comentario_gestion;
                    $campanas_comentario->id_usuario_crear = Auth::user()->id;
                    $campanas_comentario->created_at = now();
                    $campanas_comentario->save();
                }
                */
                \Log::info('init mail');
                $detalle_mail = [
                    'nombre_campana' => strtoupper($request->name),
                    'nombre_proveedor' => $request->proveedor[0]['nombre'],
                    'fecha' => date('d-M-Y'),
                    'link' => 'test.campaña'
                ];
                //$this->enviar_email_campana_proveedor($campana_proveedor);
               // $this->enviar_email_campana_proveedor($request->proveedor[0]['email'],$detalle_mail);
                $usuario_proveedor = User::where('id_proveedor',$request->proveedor[0]['id'])->get();
                foreach($usuario_proveedor as $usuario) {
                    $this->enviar_email_campana_proveedor($usuario->email,$detalle_mail);
                }
                \Log::info('end mail');

                return response()->json($campana_proveedor, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                \Log::info($e->getMessage());
                return response()->json($e->getMessage(), 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }  
        }
    }

    public function update_campana_proveedor(Request $request,$id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        //return $request->all();
    	if($valida == 'OK'){
            try{
                $urlAreaComercial ='';
                $urlBaseLegal ='';
                $urlOrdenCompra ='';

                if(!$validar->validar_permiso(Auth::user()->id,301)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }

                if(!empty($request->fileAreaComercial)){
                    $ext_fileAreaComercial = pathinfo($request->filenameareacomercialok, PATHINFO_EXTENSION);
                    $name_fileNameBaseLegal = uniqid().".".$ext_fileAreaComercial;
                    $fileNameAreaComercial = $name_fileNameBaseLegal;
                    $urlAreaComercial='campana_proveedor/'.$fileNameAreaComercial;
                    $contentAreaComercial = $request->fileAreaComercial;
                    $file_path_comercial = public_path($urlAreaComercial);
                    //$envio = Storage::disk('public')->put($url, $content);
                    file_put_contents($file_path_comercial, base64_decode($contentAreaComercial));
                }

                if(!empty($request->fileBasesLegales)){
                    $ext_fileBasesLegales = pathinfo($request->filenamebaselegal, PATHINFO_EXTENSION);
                    $name_fileBasesLegales = uniqid().".".$ext_fileBasesLegales;
                    $fileNameBaseLegal = $name_fileBasesLegales; //$name;
                    $urlBaseLegal='campana_proveedor/'.$fileNameBaseLegal;
                    $contentBaseLegal = $request->fileBasesLegales;
                    $file_path_legal = public_path($urlBaseLegal);
                    //$envio = Storage::disk('public')->put($url, $content);
                    file_put_contents($file_path_legal, base64_decode($contentBaseLegal));
                }

                if(!empty($request->fileOrdenCompra)){
                    $ext_fileOrdenCompra = pathinfo($request->filenameordencompra, PATHINFO_EXTENSION);
                    $name_fileOrdenCompra = uniqid().".".$ext_fileOrdenCompra;
                    $fileNameOrdenCompra = $name_fileOrdenCompra; //$name;
                    $urlOrdenCompra='campana_proveedor/'.$fileNameOrdenCompra;
                    $contentOrdenCompra = $request->fileOrdenCompra;
                    $file_path_legal = public_path($urlOrdenCompra);
                    //$envio = Storage::disk('public')->put($url, $content);
                    file_put_contents($file_path_legal, base64_decode($contentOrdenCompra));
                }

                $campana_proveedor = CampanaProveedorNew::find($id);
                $campana_proveedor->id_cadena = $request->cadena[0]['id'];//Cadena
                $campana_proveedor->nombre = $request->name;//Nombre Campaña
                //$campana_proveedor->desde = $request->desde;//desde
                //$campana_proveedor->hasta = $request->hasta;//hasta
                $campana_proveedor->id_proveedor = $request->proveedor[0]['id'];//Proveedor
                //$campana_proveedor->id_gerencia = $request->espacio[0]['id'];//Gerencia
                //$campana_proveedor->id_sesion = $request->seccion[0]['id'];//Sección
                //$campana_proveedor->id_tipo_campana = $request->tpCampana[0]['id'];//Tipo de Campana
                //$campana_proveedor->id_visibilidad_campana = $request->visibilidadCampana[0]['id'];//Visibilidad de Campana
                //$campana_proveedor->id_elemento_campana = $request->elementoCampana[0]['id'];//Elementos de Campana
                if(!empty($request->fileAreaComercial)){
                    $campana_proveedor->url_area_comercial = $urlAreaComercial;
                }
                if(!empty($request->fileBasesLegales)){
                    $campana_proveedor->url_bases_legales = $urlBaseLegal;
                }
                if(!empty($request->fileOrdenCompra)){
                    $campana_proveedor->url_orden_compra = $urlOrdenCompra;
                }
                $campana_proveedor->id_usuario_modifica = Auth::user()->id;
                $campana_proveedor->created_at = now();
                $campana_proveedor->save();

    
                // $deleteFechas = CampanaFechas::where('id_campana',$id)->delete();
                // foreach($request->fechasarray as $fecha){
                //     $campana_sala = new CampanaFechas();
                //     $campana_sala->id_campana = $campana_proveedor->id;
                //     $campana_sala->desde = Carbon::parse($fecha["dateFrom"])->format('Y-m-d');
                //     $campana_sala->hasta = Carbon::parse($fecha["dateTo"])->format('Y-m-d');
                //     $campana_sala->id_usuario_crear = Auth::user()->id;
                //     $campana_sala->created_at = now();;
                //     $campana_sala->save();
                // }


                // $deleteSalas = CampanaSalasNew::where('id_campana',$id)->delete();
                // foreach($request->salas as $sala){
                //         $campana_sala = new CampanaSalasNew();
                //         $campana_sala->id_campana = $campana_proveedor->id;
                //         $campana_sala->id_sala = $sala['id'];
                //         $campana_sala->id_usuario_crear = Auth::user()->id;
                //         $campana_sala->created_at = now();
                //         $campana_sala->save();
                    
                // }

                // $deleteZonas = CampanaZonasNew::where('id_campana',$id)->delete();
                // foreach($request->zona as $zona){
                //         $campana_zona = new CampanaZonasNew();
                //         $campana_zona->id_campana = $campana_proveedor->id;
                //         $campana_zona->id_zona = $zona['id'];
                //         $campana_zona->id_usuario_modifica = Auth::user()->id;
                //         $campana_zona->created_at = now();
                //         $campana_zona->save();
                    
                // }

                // $deleteFormatos = CampanaFormatoNew::where('id_campana',$id)->delete();
                // foreach($request->formato as $formato){
                //     $campana_formato = new CampanaFormatoNew();
                //     $campana_formato->id_campana = $campana_proveedor->id;
                //     $campana_formato->id_formato = $formato['id'];
                //     $campana_formato->id_usuario_crear = Auth::user()->id;
                //     $campana_formato->created_at = now();
                //     $campana_formato->save();
                // }

                // $deleteElemento = CampanaElementos::where('id_campana',$id)->delete();
                // foreach($request->elementoCampana as $elemento){
                //     $campana_elemento = new CampanaElementos();
                //     $campana_elemento->id_campana = $campana_proveedor->id;
                //     $campana_elemento->id_elementos = $elemento['id'];
                //     $campana_elemento->id_usuario_crear = Auth::user()->id;
                //     $campana_elemento->created_at = now();
                //     $campana_elemento->save();
                // }

                // if($request->comentario_gestion <> ''){
                //     $campanas_comentario = new CampanaComentarioNew();
                //     $campanas_comentario->id_campana = $campana_proveedor->id;
                //     $campanas_comentario->comentario = $request->comentario_gestion;
                //     $campanas_comentario->id_usuario_crear = Auth::user()->id;
                //     $campanas_comentario->created_at = now();
                //     $campanas_comentario->save();
                // }

                return response()->json($campana_proveedor, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }  
        }
    }

    public function delete_campana_proveedor(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,305)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $user_update = CampanaProveedorNew::where('id',$request->id)->delete();
                $mensaje ="OK";
                return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }

    public function campana_proveedor_activate(Request $request, $id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,306)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $campana = CampanaProveedorNew::find($id);
                $campana->id_estatus_roles = 1;
                $campana->id_usuario_modifica = Auth::user()->id;
                $campana->save();
                return response()->json($campana, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }            
        }else{
            return $valida;
        }
    }

    public function campana_proveedor_desactivate(Request $request, $id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,306)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $campana = CampanaProveedorNew::find($id);
                $campana->id_estatus_roles = 2;
                $campana->id_usuario_modifica = Auth::user()->id;
                $campana->save();
                return response()->json($campana, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }            
        }else{
            return $valida;
        }
    }

    public function campana_proveedor_pendiente(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
         //       if(!$validar->validar_permiso(Auth::user()->id,515)){
           //         return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
             //   }
                $usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $validar->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
                $campanas = CampanaProveedorNew::getCampanasProveedor($admin, $salas_usuario, $request, false, 1);
                return response()->json($campanas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }

        }else{
            return  $valida;
        }
    }

    public function campana_proveedor_up(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                //if(!$validar->validar_permiso(Auth::user()->id,515)){
                  //  return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                //}
                $usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $validar->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
                $campanas = CampanaProveedorNew::getCampanasProveedor($admin, $salas_usuario, $request, false, 2);
                
                return response()->json($campanas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }

        }else{
            return  $valida;
        }
    }

    public function up_campana_proveedor(Request $request,$id)
    {   
        //return $request->all();
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,505)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }

                    

                if(!empty($request->fileNameMaterial)){
                    $user_update = CampanaMaterialNew::where('id_campana',$id)->delete();
                    /*$ext_Material = pathinfo($request->filenamematerial, PATHINFO_EXTENSION);
                    $name_Material = uniqid().".".$ext_Material;
                    $fileNameMaterial = $name_Material;


                    //$fileNameMaterial = $request->filenamematerial; //$name;
                    $urlMaterial='campana_proveedor/'.$fileNameMaterial;
                    $contentMaterial = $request->fileMaterial;
                    $file_path_material = public_path($urlMaterial);
                    //$envio = Storage::disk('public')->put($url, $content);
                    file_put_contents($file_path_material, base64_decode($contentMaterial));*/
                    $ext_filenamematerial = pathinfo($request->filenamematerial, PATHINFO_EXTENSION);
		    if (strtolower($ext_filenamematerial) != 'pdf') {
                    	return response()->json([
                        	'errorInfo' => 'El formato del archivo solo puede ser .pdf.',
                    	], 420);
		    }
                    $name_filenamematerial = uniqid().".".$ext_filenamematerial;
                    $fileNameMaterial = $name_filenamematerial; //$name;
                    $urlMaterial='campana_proveedor/'.$fileNameMaterial;
                    $contentMaterial = $request->fileNameMaterial;
                    $file_path_material = public_path($urlMaterial);
                    //$envio = Storage::disk('public')->put($url, $content);
                    file_put_contents($file_path_material, base64_decode($contentMaterial));

                    $campanas_material = new CampanaMaterialNew();
                    $campanas_material->id_campana = $id;
                    $campanas_material->nombre = $fileNameMaterial;
                    $campanas_material->name_archivo = $fileNameMaterial;
                    $campanas_material->url = $urlMaterial;
                    $campanas_material->id_usuario_crear = Auth::user()->id;
                    $campanas_material->created_at = now();
                    $campanas_material->medida   = null;
                    $campanas_material->save();


                    if($request->comentario <> ''){
                        $campanas_comentario = new CampanaComentarioNew();
                        $campanas_comentario->id_campana = $id;
                        $campanas_comentario->comentario = $request->comentario;
                        $campanas_comentario->id_usuario_crear = Auth::user()->id;
                        $campanas_comentario->created_at = now();
                        $campanas_comentario->save();
                    }
                        $campana_update = CampanaProveedorNew::where('id',$id)->update(array('id_etapa' => 2));
                        return response()->json($campana_update, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }else{
                    return response()->json(["errorInfo" => "NO SE GUARDO EL ARCHIVO NO SE RECONOCE"], 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                
            }catch (\Exception $e){
                //return $e;
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }  
        }
    }

    public function get_materiales_campanas(Request $request,$id){
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
               // if(!$validar->validar_permiso(Auth::user()->id,515)){
                 //   return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
               // }
                $campana = CampanaMaterial::where('id_campana',$id)->get();

                $materiales = [];

                foreach ($campana as $key => $value) {

                    $file_url = public_path($value->url);
                    $doc = base64_encode(file_get_contents($file_url));
                    
                    $materiales[$key] = ['doc_64' => $doc, 'name' => $value->nombre, 'medida' => $value->medida, 'name_archivo'=> $value->name_archivo , 'url'=>$value->url];
                }

                return response()->json($materiales, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }

        return "NO";
    }

    public function get_comentarios_campanas(Request $request,$id){
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
                //if(!$validar->validar_permiso(Auth::user()->id,515)){
                  //  return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                //}
                $campana = CampanaComentarioNew::select(DB::raw("
                    campana_comentario_new.id_campana as id_camapana,
                    campana_comentario_new.comentario,
                    CONCAT(u.nombre, ' ', u.apellido) as usuario,
                    DATE_FORMAT(campana_comentario_new.created_at,'%d-%m-%Y %H:%i') as fecha
                "))
                ->join('usuarios as u','campana_comentario_new.id_usuario_crear','u.id')
                ->where('id_campana',$id)->orderBy('campana_comentario_new.created_at', 'desc')->get();

                

                return response()->json($campana, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }

        return "NO";
    }

    public function aprobar_campana(Request $request)
    {
        //return $request;
        $id = $request->id;
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
                $campana_aprobe = CampanaProveedorNew::where('id',$id)->update(array('id_etapa' => 3,'id_usuario_modifica'=> Auth::user()->id));

                if(!$validar->validar_permiso(Auth::user()->id,302)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                if($request->comentario_gestion <> ''){
                    $campanas_comentario = new CampanaComentarioNew();
                    $campanas_comentario->id_campana = $id;
                    $campanas_comentario->comentario = $request->comentario_gestion;
                    $campanas_comentario->id_usuario_crear = Auth::user()->id;
                    $campanas_comentario->created_at = now();
                    $campanas_comentario->save();
                }
                   \Log::info(' paralelepipedo 0' . $request->user()->nombre);
                $campanas_comentario = new CampanaComentarioNew();
                $campanas_comentario->id_campana = $id;
                $campanas_comentario->comentario = strtoupper($request->user()->nombre).' '.strtoupper($request->user()->apellido).' Aprobo la campaña.';
                $campanas_comentario->id_usuario_crear = 1;
                $campanas_comentario->created_at = now();
                $campanas_comentario->save();

        //        \Log::info('mail aprobar');
                $campana  = CampanaProveedorNew::where('id',$id)->first();

                $campana_pdf = CampanaProveedorNew::with('cadena')->with('proveedor')->with('salas')->with('zonas')->with('tpCampana')->with('elementos')->with('visibilidad')->with('sesion')->with('espacio')->with('campana_estado')->with('campana_etapa')->with('formato')->with('material')->where('id',$id)->first();
                $campana_pdf->salas_disponibles =  $campana_pdf->salasDisponibles();
                $proveedor = Proveedores::where('id', $campana->id_proveedor)->first();
                \Log::info($campana_pdf);
               // \Log::info('detalles para el mail instanciando nombre');
                \Log::info(' paralelepipedo 1' .$campana->nombre);
                $detalle_mail = [
                    'nombre_campana' => strtoupper($campana->nombre),
                    'nombre_proveedor' => $proveedor->nombre,
                    'fecha' => date('d-M-Y'),
                    'link' => 'test.campaña.aprueba'
                ];
                // \Log::info('detalles correo pre' , $detalle_mail);
                //\Log::info('antes de enviar antes de dedatlle');
                /*$detalle_pdf = [
                    'nombre' => strtoupper($campana->nombre),
                    'estado' => $campana_pdf->campana_estado->nombre,
                    'etapa' => $campana_pdf->campana_etapa->nombre,
                    'cadena' => $campana_pdf->cadena->nombre,
                    'vigencia' => $campana_pdf->desde." al ".$campana_pdf->hasta,
                    'proveedor' => $campana_pdf->proveedor->nombre,
                    'seccion' => $campana_pdf->sesion->cdg_int."-".$campana_pdf->sesion->nombre,
                    'zona' => $campana_pdf->zona->nombre,
                    'sala' => $campana_pdf->salas[0]->nombre_sap,
                    'descripcion' => $campana_pdf->descripcion,
                    'espacio_exhibicion' => $campana_pdf->espacio_exhibicion->nombre
                ];*/


                $this->enviar_email_aprobar_campana_proveedor($campana_pdf);

                return response()->json($campana_aprobe, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                \Log::info('error ' . $e->getMessage());
                return response()->json($e->getMessage(), 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }

        return "NO";
    }

    public function rechazar_campana(Request $request)
    {
        //return $request;
        $id = $request->id;
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,302)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $campana_aprobe = CampanaProveedorNew::where('id',$id)->update(array('id_etapa' => 4,'id_usuario_modifica'=> Auth::user()->id));

                if($request->comentario_gestion <> ''){
                    $campanas_comentario = new CampanaComentarioNew();
                    $campanas_comentario->id_campana = $id;
                    $campanas_comentario->comentario = $request->comentario_gestion;
                    $campanas_comentario->id_usuario_crear = Auth::user()->id;
                    $campanas_comentario->created_at = now();
                    $campanas_comentario->save();
                }

                $campanas_comentario = new CampanaComentarioNew();
                $campanas_comentario->id_campana = $id;
                $campanas_comentario->comentario = strtoupper($request->user()->nombre).' '.strtoupper($request->user()->apellido).' Rechazo la campaña.';
                $campanas_comentario->id_usuario_crear = 1;
                $campanas_comentario->created_at = now();
                $campanas_comentario->save();

                \Log::info('mail rechazo');
                $campana  = CampanaProveedorNew::where('id',$id)->first();
                $proveedor = Proveedores::where('id',$campana->id_proveedor)->first();
                $detalle_mail = [
                    'nombre_campana' => strtoupper($campana->nombre),
                    'nombre_proveedor' => $proveedor->nombre,
                    'fecha' => date('d-M-Y'),
                    'link' => 'test.campaña.rechaza'
                ];
                $campana->comentario_gestion = $request->comentario_gestion;
                $this->enviar_email_rechazar_campana_proveedor($campana);

                return response()->json($campana_aprobe, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                \Log::info($e->getMessage());
                dd($e);
                return response()->json($e->getMessage(), 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }

        return "NO";
    }

    private function enviar_email_campana_proveedor($campana)
    {
        //return $campana;
        //$campana = CampanaProveedorNew::where('id',$campana->id)->first();
        $UserProveedorr = User::where('id_proveedor' , $campana->id_proveedor)->get();
        foreach ($UserProveedorr as $key => $value) {
            Mail::to($value->email)->send(new StoreCampanaProveedor($campana));
        }
        $userCreaCampana =  $UserProveedorr = User::where('id' , $campana->id_usuario_crear)->first();
        Mail::to($userCreaCampana->email)->send(new StoreCampanaProveedor($campana));
    }

    private function enviar_email_aprobar_campana_proveedor($campana)
    {
        
        $UserProveedorr = User::where('id_proveedor' , $campana->id_proveedor)->get();
        foreach ($UserProveedorr as $key => $value) {
            Mail::to($value->email)->send(new AprobarCampanaProveedor($campana));
        }
        $usuarioActualSecion = User::where('id' , Auth::user()->id)->first(); 
        Mail::to($usuarioActualSecion->email)->send(new AprobarCampanaProveedor($campana));

        $userCreaCampana =  $UserProveedorr = User::where('id' , $campana->id_usuario_crear)->first();
        Mail::to($userCreaCampana->email)->send(new AprobarCampanaProveedor($campana));
    }

    private function enviar_email_rechazar_campana_proveedor($campana)
    {
        $UserProveedorr = User::where('id_proveedor' , $campana->id_proveedor)->get();
        foreach ($UserProveedorr as $key => $value) {
            Mail::to($value->email)->send(new RechazarCampanaProveedor($campana));
        }
        $usuarioActualSecion = User::where('id' , Auth::user()->id)->first(); 
        Mail::to($usuarioActualSecion->email)->send(new RechazarCampanaProveedor($campana));

        $userCreaCampana =  $UserProveedorr = User::where('id' , $campana->id_usuario_crear)->first();
        Mail::to($userCreaCampana->email)->send(new RechazarCampanaProveedor($campana));
    }
   
    public function generar_campana_proveedor_pdf(Request $request , $idCampanaProveedor) 
    {
        //return "Hola";
        set_time_limit(14200);
        try {
            $campanaProveedor = CampanaProveedorNew::with('elementos')->with(['sesion' => function ($query) {
                $query->withTrashed();
            }])->where('id', $idCampanaProveedor)->first();
            $campanaProveedor->salas_disponibles =  $campanaProveedor->salasDisponibles();
            $campanas_material = CampanaMaterialNew::where('id_campana',$campanaProveedor->id)->first();
            $salas = Salas::where('id_cadena',$campanaProveedor->id_cadena)->get();
            $urlQrcode = $this->urlFront.'/DowloadPdfCampanaProveedorNew-'.$campanaProveedor->id;
            //return $campanaProveedor;
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
                'urlQrcode' => $urlQrcode,
                'comentario' =>$ultimoComentario,
                'salas' =>$salas
            ];
            $has = bin2hex(random_bytes(8));
            if (!is_dir("TmpCampanaProveedorNew/")) {
                mkdir("TmpCampanaProveedorNew/", 0777);
            }
            
    
            $nombreCampana = $campanaProveedor->id.'_'.str_replace(' ', '_', $campanaProveedor->nombre).'_'.$has.'_.pdf';
            $route = public_path().'/TmpCampanaProveedorNew/'.$nombreCampana;
            
            // Genera el PDF principal con dompdf
            $pdf = PDF::loadView('Pdf.Campana.detallecampanaproveedornew', $data)
                        ->setPaper('letter', 'portrait')
                        ->save($route);
                        
            if (!empty($campanas_material->url)) {
            // Ubicación del PDF adicional que deseas agregar
            $documentoAdicional = public_path(). '/'.  $campanas_material->url;
            
            //return $documentoAdicional;
            // Inicializa FPDI
            $pdfMain = new FPDI();
            $pdfMain->AddPage();
            $pdfMain->setSourceFile($route);
            $tplIdx = $pdfMain->importPage(1);
            $pdfMain->useTemplate($tplIdx);

            // Agrega las páginas del PDF principal antes de la página en la que deseas insertar el documento adicional
            for ($pageNumber = 2; $pageNumber <= min(3, $pdfMain->setSourceFile($route)); $pageNumber++) {
                $pdfMain->AddPage();
                $tplIdx = $pdfMain->importPage($pageNumber);
                $pdfMain->useTemplate($tplIdx);
            }

            // Agrega el documento adicional después de la tercera página
            $pages = $pdfMain->setSourceFile($documentoAdicional);
            for ($i = 1; $i <= $pages; $i++) {
                $pdfMain->AddPage();
                $tplIdx = $pdfMain->importPage($i);
                $pdfMain->useTemplate($tplIdx);
            }

            // Agrega las páginas restantes del PDF principal
            for ($pageNumber = 4; $pageNumber <= $pdfMain->setSourceFile($route); $pageNumber++) {
                $pdfMain->AddPage();
                $tplIdx = $pdfMain->importPage($pageNumber);
                $pdfMain->useTemplate($tplIdx);
            }

            // Guarda el PDF combinado
            $pdfMain->Output($route, 'F');
            }
            // Retorna el PDF combinado
            $encode = base64_encode(file_get_contents($route));
            $dataReturn=[
                'nombre_archivo'=> $nombreCampana,
                'content'=>$encode
            ];

            return response()->json($dataReturn, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);

        }catch (\Exception $e) {
            //dd($e);
            return response()->json(['error' => $e->getMessage()], 500);
            return response()->json(['error' => 'Ocurrió un error al generar el PDF.'], 500);
        }
    }
    
	public function campana_proveedor_aprobada(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
               
                $usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $validar->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
                $campanas = CampanaProveedorNew::getCampanasProveedor($admin, $salas_usuario, $request, false, 3);
                return response()->json($campanas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }

        }else{
            return  $valida;
        }
    }

	public function campana_proveedor_rechazada(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
               
                $usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $validar->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
                $campanas = CampanaProveedorNew::getCampanasProveedor($admin, $salas_usuario, $request, false, 4);
                return response()->json($campanas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }

        }else{
            return  $valida;
        }
    }
    public function campana_proveedor_update_cupo(Request $request)
    {
        return $request->all(); 
    }


    public function store_new_campana_proveedor(Request $request)
    { 
        //return $request->all(); 
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        $campanaData = json_decode($request->campana);
        //return $campanaData->id;
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,300)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }

                $salas_id = [];
                $count1 = 0;
                foreach ($request->zonasSeleccionadas as $key => $z) {
                    foreach ($z['salas'] as $key2 => $z2) {
                        //return $z2;
                        $salas_id[$count1] = $z2['idSala'];
                        $count1++;
                    }
                }
                CampanaElementos::updateCupo($campanaData->id, $salas_id);
                //return $salas_id;

                $id_salas_con_cupo = [];
                $id_salas_sin_cupo = [];
                $campana_proveedor = CampanaProveedorNew::where('id',$campanaData->id)->first();
                $id_proveedor = $request->proveedoresSeleccionados[0]['id'];
                $campana_proveedor->id_estado_campana = 1;
                $campana_proveedor->nombre = $request->nombreCampaña;
                $campana_proveedor->id_proveedor = $id_proveedor;
                $campana_proveedor->id_status_campana = 1;
                

                if(!empty($request->fileAreaComercial)){
                    $ext_fileAreaComercial = pathinfo($request->filenameAreaComercial, PATHINFO_EXTENSION);
                    $name_fileAreaComercial = uniqid().".".$ext_fileAreaComercial;
                    $fileNameAreaComercial = $name_fileAreaComercial; //$name;
                    $urlAreaComercial='campana_proveedor/'.$fileNameAreaComercial;
                    $contentAreaComercial = $request->fileAreaComercial;
                    $file_path_comercial = public_path($urlAreaComercial);
                    //$envio = Storage::disk('public')->put($url, $content);
                    file_put_contents($file_path_comercial, base64_decode($contentAreaComercial));
                }

                if(!empty($request->fileBasesLegales)){
                    $ext_fileBasesLegales = pathinfo($request->filenameBasesLegales, PATHINFO_EXTENSION);
                    $name_fileNameBaseLegal = uniqid().".".$ext_fileBasesLegales;
                    $fileNameBaseLegal = $name_fileNameBaseLegal; //$name;
                    $urlBaseLegal='campana_proveedor/'.$fileNameBaseLegal;
                    $contentBaseLegal = $request->fileBasesLegales;
                    $file_path_legal = public_path($urlBaseLegal);
                    //$envio = Storage::disk('public')->put($url, $content);
                    file_put_contents($file_path_legal, base64_decode($contentBaseLegal));
                }

                /*if(!empty($request->fileOrdenCompra)){
                    $ext_fileNameOrdenCompra = pathinfo($request->filenameOrdenCompra, PATHINFO_EXTENSION);
                    $name_fileNameOrdenCompra = uniqid().".".$ext_fileNameOrdenCompra;
                    $fileNameOrdenCompra = $name_fileNameOrdenCompra; //$name;
                    $urlOrdenCompra='campana_proveedor/'.$fileNameOrdenCompra;
                    $contentOrdenCompra = $request->fileOrdenCompra;
                    $file_path_legal = public_path($urlOrdenCompra);
                    //$envio = Storage::disk('public')->put($url, $content);
                    file_put_contents($file_path_legal, base64_decode($contentOrdenCompra));
                }*/
                if(!empty($request->fileOrdenCompra)){
                    $ext_fileNameOrdenCompra = pathinfo($request->filenameOrdenCompra, PATHINFO_EXTENSION);
                    $name_fileNameOrdenCompra = uniqid().".".$ext_fileNameOrdenCompra;

                    $fileNameOrdenCompra = $name_fileNameOrdenCompra; //$name;
                    $urlOrdenCompra='campana_proveedor/'.$name_fileNameOrdenCompra;
                    $contentOrdenCompra = $request->fileOrdenCompra;
                    $file_path_legal = public_path($urlOrdenCompra);
                    //$envio = Storage::disk('public')->put($url, $content);
                    file_put_contents($file_path_legal, base64_decode($contentOrdenCompra));
                }

                if(!empty($request->fileAreaComercial)){
                    $campana_proveedor->url_area_comercial = $urlAreaComercial;
                }

                if(!empty($request->fileBasesLegales)){
                    $campana_proveedor->url_bases_legales = $urlBaseLegal;
                }

                if(!empty($request->fileOrdenCompra)){
                    $campana_proveedor->url_orden_compra = $urlOrdenCompra;
                }

                $campana_proveedor->id_etapa = 1;
                $campana_proveedor->id_usuario_crear = Auth::user()->id;
                $campana_proveedor->created_at = now();
                $campana_proveedor->save();

                if($request->comentarios <> ''){
                    $campanas_comentario = new CampanaComentarioNew();
                    $campanas_comentario->id_campana = $campana_proveedor->id;
                    $campanas_comentario->comentario = $request->comentarios;
                    $campanas_comentario->id_usuario_crear = Auth::user()->id;
                    $campanas_comentario->created_at = now();
                    $campanas_comentario->save();
                }
            
                $detalle_mail = [
                    'nombre_campana' => strtoupper($campana_proveedor->nombre),
                    'nombre_proveedor' => $request->proveedoresSeleccionados[0]['nombre'],
                    'fecha' => date('d-M-Y'),
                    'link' => 'test.campaña'
                ];
                
                $this->enviar_email_campana_proveedor($campana_proveedor);
                
                //$this->enviar_email_campana_proveedor($request->proveedoresSeleccionados[0]['email'],$detalle_mail);
                //return $request->proveedoresSeleccionados[0]['id'];
                /*$usuario_proveedor = User::where('id_proveedor',$request->proveedoresSeleccionados[0]['id'])->get();

                foreach($usuario_proveedor as $usuario) {
                    $this->enviar_email_campana_proveedor($usuario->email,$detalle_mail);
                }*/
                \Log::info('end mail');

                return response()->json($campana_proveedor, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return $e;
                \Log::info($e->getMessage());
                return response()->json($e->getMessage(), 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }  
        }
    }

    public function generar_campana_excel(Request $request, $idCampana) 
    {
        try {
            $salas_sin_cupo = Salas::whereHas('campanaElementos', function($query) use ($idCampana) {
                $query->where('id_campana', $idCampana)
                    ->where('cupo', 0);
            })
            ->with(['campanaElementos' => function($query) use ($idCampana) {
                $query->where('id_campana', $idCampana)
                    ->where('cupo', 0)->with('elementos');
            }])
            ->get();

            $salas_sin_cupo_ids = $salas_sin_cupo->pluck('id');
            $campana = CampanaElementos::select(DB::raw("
                salas.cdg_local,
                salas.nombre_sap,
                tp_elementos_campana.name as elemento,
                campana_elementos_new.desde,
                campana_elementos_new.hasta
            "))
            ->leftjoin('salas','campana_elementos_new.id_sala','salas.id')
            ->leftjoin('tp_elementos_campana','campana_elementos_new.id_elementos','tp_elementos_campana.id')
            ->where('id_campana', $idCampana)
            ->whereNotIn('id_sala',$salas_sin_cupo_ids)
            ->where('cupo',1)
            ->groupBy('salas.cdg_local','salas.nombre_sap','tp_elementos_campana.name','campana_elementos_new.desde','campana_elementos_new.hasta')->get();
            //dd($campana);
            //Log::info('Iniciando exportación de campana: ' . $campana->id);
    
            // Exporta la campaña encontrada a un archivo Excel
            return Excel::download(new CampanaProveedorExport($campana), 'campana_' . $idCampana. '.xlsx');
        } catch (\Exception $e) {
            // Manejo de errores: puedes logear el error, retornar un mensaje de error, etc.
            Log::error('Error al exportar la campaña: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
