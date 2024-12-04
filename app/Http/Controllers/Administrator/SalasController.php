<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\GeneralObetenerController;
use App\Models\Salas;
use App\Models\Sesiones;
use App\Models\SalasSesiones;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\CampanaFaldon;
use App\Models\SalasSeccionesCupo;


class SalasController extends Controller
{
    public function create_sala(Request $request)
    {
    	$token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
    		try{
                if(!$validar->validar_permiso(Auth::user()->id,105)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
    			$sala = new Salas();
    			$sala->id_cadena = $request->id_cadena;
				$sala->cdg_local = $request->cdg_local;
				$sala->nombre_sap = $request->nombre_sap;
                                $sala->display_nombre_sap = $request->cdg_local . ' - ' . $request->nombre_sap;
				$sala->direccion = $request->direccion;
				$sala->id_comuna =$request->id_comuna;
                $sala->id_region =$request->id_region;
				$sala->id_provincia =$request->id_provincia;
                $sala->id_zona =$request->id_zona;
                $sala->id_tipo =$request->id_tipo_sala;
				$sala->id_estatus_salas = 1;
				$sala->id_usuario_crear = Auth::user()->id;
				$sala->created_at = now();
				$sala->save();
				$id_sala = $sala->id;

				$sesiones = Sesiones::where('id_estatus_secciones',1)->get();

				foreach ($sesiones as $key => $value) {
					$salaSesion = new SalasSesiones();
					$salaSesion->id_sala = $id_sala;
					$salaSesion->id_sesion = $value->id;
					$salaSesion->id_usuario_crear = Auth::user()->id; 
					$salaSesion->created_at = now();
					$salaSesion->save();
				}

				return response()->json($sala, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    		}catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
	    }else{
	        return $valida;
	    }
	}

	public function get_edit_sala(Request $request, $id)
    {
    	$token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,106)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $sala = Salas::withTrashed()->with('cadenas_salas')->with('region')->with('comunas')->with('provincia')->with('zona')->with('tipo')->where('id',$id)->first();
                return response()->json($sala, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function get_cdg_sala(Request $request, $cdg)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                $sala = Salas::withTrashed()->where('cdg_local',$cdg)->first();
                return response()->json($sala, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function update_sala(Request $request, $id)
    {
    	$token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
    		try{
                if(!$validar->validar_permiso(Auth::user()->id,106)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
    			$id_sala = $id;
                $sala = Salas::find($id_sala);
    			$sala->id_cadena = $request->id_cadena;
                $sala->cdg_local = $request->cdg_local;
                $sala->display_nombre_sap = $request->cdg_local . ' - ' . $request->nombre_sap;
                $sala->nombre_sap = $request->nombre_sap;
                $sala->direccion = $request->direccion;
                $sala->id_comuna =$request->id_comuna;
                $sala->id_region =$request->id_region;
                $sala->id_provincia =$request->id_provincia;
                $sala->id_zona =$request->id_zona;
                $sala->id_tipo =$request->id_tipo_sala;
				$sala->id_usuario_modifica = Auth::user()->id;
				$sala->updated_at = now();
				$sala->save();

				$delete_rol = SalasSesiones::where('id_sala',$id_sala)->delete();
				$sesiones = Sesiones::where('id_estatus_secciones',1)->get();

				foreach ($sesiones as $key => $value) {
					$salaSesion = new SalasSesiones();
					$salaSesion->id_sala = $id_sala;
					$salaSesion->id_sesion = $value->id;
					$salaSesion->id_usuario_crear = Auth::user()->id; 
					$salaSesion->created_at = now();
					$salaSesion->save();
				}

				return response()->json($sala, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    		}catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
	    }else{
	        return $valida;
	    }
	}

	public function status_sala(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                $sala = Salas::where('id',$request->id)->first();

                if($sala['id_estatus_salas'] == 1){
                    $estado = 2;
                }else{
                    $estado = 1;
                }
                
                $sala_update = Salas::where('id',$request->id)->update(array('id_estatus_salas' => $estado));
                return response()->json($sala_update, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }

    public function delete_sala(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,108)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $sala = Salas::find($request->id);
                $relations = [
                    'campanas' => 'campañas asociadas',
                    'promotoras' => 'campañas promotoras asociadas',
                    'faldones' => 'faldones asociados',
                    'mantenciones' => 'mantenciones asociadas',
                    'campanasInternas' => 'campañas internas asociadas',
                    'faldonesExpress' => 'faldones express asociados'
                ];
                foreach ($relations as $relation => $message) {
                    if ($sala->$relation->isNotEmpty()) {
                        $mensaje = "No se puede eliminar la sala porque existen $message.";
                        return response()->json($mensaje, 400, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                    }
                }
                $delete_sala = Salas::where('id',$request->id)->delete();
                $mensaje = "OK";
                return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }

    public function get_salas_active(Request $request)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                //if(!$validar->validar_permiso(Auth::user()->id,900)){
                  //  return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
               // }
               $salas = Salas::with('cadenas_salas')->where('id_estatus_salas',1)->get();
                return response($salas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function get_salas_inactive(Request $request)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
               // if(!$validar->validar_permiso(Auth::user()->id,900)){
                    //return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
               // }
                $salas = Salas::with('cadenas_salas')->where('id_estatus_salas',2)->get();
                return response($salas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function get_salas_delete(Request $request)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                //if(!$validar->validar_permiso(Auth::user()->id,900)){
                  //  return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
               // }
                $salas = Salas::onlyTrashed()->with('cadenas_salas')->get();
                return response($salas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function get_salas_user(Request $request, $idUser)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                $usuario = User::withTrashed()->where('id',$idUsers)->with('salas')->first();
                $salas = $usuario->salas;
                return response()->json($salas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function get_salas_user_cadena(Request $request, $idCadena)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        $cadenas = explode(',', $idCadena);
        
        if($valida == 'OK'){
            try{
                $salas = DB::table('salas')
                            ->select('salas.*')
                            ->join('usuario_salas','salas.id', '=', 'usuario_salas.id_sala')
                            ->where('id_usuario', Auth::user()->id)
                            ->whereIn('salas.id_cadena',  $cadenas)
                            ->get();
                return response()->json($salas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function salas_user(Request $request){
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                $usuario = User::withTrashed()->where('id',Auth::user()->id)->with('salas')->first();
                $salas = $usuario->salas;
                return response()->json($salas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function salas_for_cadenas(Request $request , $idCadena){
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                $salas = Salas::where('id_cadena' , $idCadena)->with('salas_sesiones')->with('usuarios_sala')->with('cadenas_salas')->get();
                return response($salas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }
    public function salas_cadenas_user(Request $request , $idCadena){
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                $usuario = User::withTrashed()->where('id',Auth::user()->id)->with('salas')->first();
                $salas = $usuario->salas;
                return response()->json($salas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function salas_campana_faldon_user(Request $request , $idCampana){
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                $usuario = User::withTrashed()->where('id',Auth::user()->id)->with('salas')->first();
                $salasUsuario = $usuario->salas;

                $campanaFaldon = CampanaFaldon::where('id' , $idCampana)->first();
                if(!$campanaFaldon->id_sala){
                    $salasCadena = Salas::where('id_cadena', $campanaFaldon->id_cadena)->get();
                    $intercep = $salasUsuario->intersect($salasCadena);
                }else{
                    $salasCampana = Salas::where('id', $campanaFaldon->id_sala)->get();
                    $intercep = $salasUsuario->intersect($salasCampana);
                }

                return response()->json($intercep, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return $e;
            }
        }else{
            return $valida;
        }
    }

    public function update_sala_cupo_total(Request $request, $id)
    {
    	$token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
    		try{
                if(!$validar->validar_permiso(Auth::user()->id,106)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
    			$id_sala = $id;
                $sala = Salas::find($id_sala);
                $sala->cupo_total_promo = $request->cupo_total_promo;
				$sala->save();
				return response()->json($sala, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    		}catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
	    }else{
	        return $valida;
	    }
	}

    public function create_sala_seccion_cupo(Request $request)
    {
    	$token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
    		try{
                if(!$validar->validar_permiso(Auth::user()->id,105)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $SalaSeccionCupoNuevo = new SalasSeccionesCupo();
                $SalaSeccionCupoNuevo->id_sala = $request->id_sala;
                $SalaSeccionCupoNuevo->id_seccion = $request->id_seccion['id'];
                $SalaSeccionCupoNuevo->cupo_promo = $request->cupo_promo;
                $SalaSeccionCupoNuevo->id_usuario_crear = Auth::user()->id;
				$SalaSeccionCupoNuevo->save();
				return response()->json($SalaSeccionCupoNuevo, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    		}catch (\Exception $e){
                return $e;
            }
	    }else{
	        return $valida;
	    }
	}

    public function get_secciones_cupo(Request $request, $id)
    {
    	$token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,115)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $secciones = SalasSeccionesCupo::with('sala')->with('seccion')->where('id_sala',$id)->get();
                return response()->json($secciones, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function delete_sala_seccion_grupo(Request $request, $id)
    {
    	$token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,112)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $seccion = SalasSeccionesCupo::where('id',$id)->first();
                $seccion->delete();
                return response()->json('ok', 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }
    
    public function get_sala_seccion_cupo(Request $request, $idSala , $idSeccion)
    {
    	$token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,115)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $secciones = SalasSeccionesCupo::where('id_sala',$idSala)->where('id_seccion',$idSeccion)->get();
                return response()->json($secciones, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }
}
