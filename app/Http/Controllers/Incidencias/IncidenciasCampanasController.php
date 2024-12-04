<?php

namespace App\Http\Controllers\Incidencias;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\IncidenciasCampanas;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GeneralObetenerController;
use App\Models\CampanaProveedor;
class IncidenciasCampanasController extends Controller
{

    public function index()
    {
        dd('aqui');
    }

    public function get_incidencias_campanas(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,1001)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
				$incidencias =  IncidenciasCampanas::get();
				return response()->json($incidencias, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }
    public function get_incidencias_campanas_deleted(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,1001)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
				$formato =  IncidenciasCampanas::onlyTrashed()->get();
				return response()->json($formato, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }
    public function store_incidencia (Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,1002)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $ncidencia  = new IncidenciasCampanas ();
                $ncidencia->tipo_campana  =  $request->tipo_campana;
                $ncidencia->id_campana_proveedor  =  $request->id_campana_proveedor;
                $ncidencia->id_campana_promotora  =  $request->id_campana_promotora;
                $ncidencia->descripcion_incidencia  =  $request->descripcion_incidencia;
                $ncidencia->save();
                return response()->json($ncidencia, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return $e;
				//return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }
    public function delete_incidencia(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,1004)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $incidenciaEliminar = IncidenciasCampanas::where('id',$request->id)->delete();
                $mensaje ="OK";
                return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }
    public function get_edit_incidencia(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){

            try{
                if(!$validar->validar_permiso(Auth::user()->id,1001)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $incidencia = IncidenciasCampanas::withTrashed()->where('id',$id)->first();
                
                return response()->json($incidencia, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }
    public function update_incidencia(Request $request,$id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,1003)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $ncidencia = IncidenciasCampanas::find($id);
                $ncidencia->tipo_campana  =  $request->tipo_campana;
                $ncidencia->id_campana_proveedor  =  $request->id_campana_proveedor;
                $ncidencia->id_campana_promotora  =  $request->id_campana_promotora;
                $ncidencia->descripcion_incidencia  =  $request->descripcion_incidencia;
                $ncidencia->save();
                return response()->json($promotoras, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }  
        }
    }
    public function get_incidencias_campanas_proveedor(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,516)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $campanas = CampanaProveedor::with('cadena')->with('espacio_exhibicion')->with('proveedor')->with('sesion')->with('zona')->with('user_crea')->with('user_modifica')->with('salas')->with('materiales')->with('campana_estado')->with('campana_etapa')
                            ->where('id_proveedor',Auth::user()->id_proveedor)->get();
                $campanas = $campanas->pluck('id');
				$incidencias =  IncidenciasCampanas::whereIn('id',  $campanas)->get();
				return response()->json($incidencias, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }
    public function get_incidencias_campanas_deleted_proveedor(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,516)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $campanas = CampanaProveedor::with('cadena')->with('espacio_exhibicion')->with('proveedor')->with('sesion')->with('zona')->with('user_crea')->with('user_modifica')->with('salas')->with('materiales')->with('campana_estado')->with('campana_etapa')
                ->where('id_proveedor',Auth::user()->id_proveedor)->get();
				$formato =  IncidenciasCampanas::whereIn('id',  $campanas)->onlyTrashed()->get();
				return response()->json($formato, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }
}
