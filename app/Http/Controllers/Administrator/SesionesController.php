<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\GeneralObetenerController;
use App\Models\Salas;
use App\Models\Secciones;
use Illuminate\Support\Facades\Auth;

class SesionesController extends Controller
{
    public function create_sesion(Request $request)
    {
    	$token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
    		try{
                if(!$validar->validar_permiso(Auth::user()->id,109)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
    			$sesion = new Secciones();
    			$sesion->numero =$request->numero;
				//$sesion->cdg_int =$request->cdg_int;
				$sesion->descripcion =$request->descripcion;
				$sesion->nombre = $request->nombre;
				$sesion->id_estatus_secciones = 1;
				$sesion->id_usuario_crear = Auth::user()->id;
				$sesion->created_at = now();
				$sesion->save();
                $id = $sesion->id;
                $cdg = 'SEC'.$id;

                $cdg_int = Secciones::where('id',$id)->update(array('cdg_int' => $cdg));

				return response()->json($sesion, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    		}catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
	    }else{
	        return $valida;
	    }
	}

	public function get_edit_sesion(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,110)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $sesion = Secciones::withTrashed()->where('id',$id)->first();
                return response()->json($sesion, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function get_numero_sesion(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                $sesion = Secciones::withTrashed()->where('numero',$id)->first();
                return response()->json($sesion, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function update_sesion(Request $request, $id)
    {
    	$token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
    		try{
                if(!$validar->validar_permiso(Auth::user()->id,110)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
    			$id_sesion = $id;
    			$sesion = Secciones::find($id_sesion);
    			$sesion->numero =$request->numero;
				$sesion->descripcion =$request->descripcion;
				$sesion->nombre = $request->nombre;
				//$sesion->id_estatus_secciones = 1;
				$sesion->id_usuario_modifica = Auth::user()->id;
				$sesion->created_at = now();
				$sesion->save();

				return response()->json($sesion, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    		}catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
	    }else{
	        return $valida;
	    }
	}

	public function status_sesion(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                $sesion = Secciones::where('id',$request->id)->first();

                if($sesion['id_estatus_secciones'] == 1){
                    $estado = 2;
                }else{
                    $estado = 1;
                }
                $sesion_update = Secciones::where('id',$request->id)->update(array('id_estatus_secciones' => $estado));
                return response()->json($sesion_update, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }

    public function delete_sesion(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,112)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $seccion = Secciones::find($request->id);
                if ($seccion->promotoras->isNotEmpty()) {
                    $mensaje = "No se puede eliminar la sección porque existen campañas promotoras asociadas.";
                    return response()->json($mensaje, 400, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                if ($seccion->campanas->isNotEmpty()) {
                    $mensaje = "No se puede eliminar la sección porque existen campañas  asociadas.";
                    return response()->json($mensaje, 400, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $delete_sesion = Secciones::where('id',$request->id)->delete();
                $mensaje ="OK";
                return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }

    public function get_sesion_active(Request $request)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
               // if(!$validar->validar_permiso(Auth::user()->id,115)){
                 //   return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                //}
                $sesiones = Secciones::where('id_estatus_secciones',1)->get();
                return response($sesiones, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function get_sesion_inactive(Request $request)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
               // if(!$validar->validar_permiso(Auth::user()->id,115)){
                 //   return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                //}
                $sesiones = Secciones::where('id_estatus_secciones',2)->get();
                return response($sesiones, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function get_sesion_delete22(Request $request)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                $sesiones = Secciones::onlyTrashed()->get();
                return response($sesiones, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }
    public function get_sesion_delete(Request $request)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,115)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $sesiones = Secciones::onlyTrashed()->get();
                return response($sesiones, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }
}
