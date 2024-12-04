<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\GeneralObetenerController;
use App\Models\Cadenas;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CadenasController extends Controller
{
    public function create_cadena(Request $request)
    {
    	$token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
    		try{

                if(!$validar->validar_permiso(Auth::user()->id,100)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }

    			$cadena = new Cadenas();
    			$cadena->nombre = strtoupper($request->nombre);
				$cadena->descripcion = $request->descripcion;
				$cadena->id_estatus_cadenas = 1;
				$cadena->id_usuario_crear = Auth::user()->id;
				$cadena->created_at = now();
				$cadena->save();

				return response()->json($cadena, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    		}catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
	    }else{
	        return $valida;
	    }
	}

	public function get_edit_cadena(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{

                if(!$validar->validar_permiso(Auth::user()->id,102)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }

                $cadena = Cadenas::withTrashed()->where('id',$id)->first();
                return response()->json($cadena, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function get_nombre_cadena(Request $request, $nombre)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{

                if(!$validar->validar_permiso(Auth::user()->id,212)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }

                $cadena = Cadenas::withTrashed()->where('nombre',strtoupper($nombre))->first();
                return response()->json($cadena, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function update_cadena(Request $request, $id)
    {
    	$token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){

    		try{

                if(!$validar->validar_permiso(Auth::user()->id,101)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }

    			$id_cadena = $id;
    			$cadena =  Cadenas::find($id_cadena);
    			$cadena->nombre = strtoupper($request->nombre);
				$cadena->descripcion = $request->descripcion;
				//$cadena->id_estatus_cadenas = 1;
				$cadena->id_usuario_modifica = Auth::user()->id;
				$cadena->created_at = now();
				$cadena->save();

				return response()->json($cadena, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    		}catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
	    }else{
	        return $valida;
	    }
	}

	public function status_cadena(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{

                if(!$validar->validar_permiso(Auth::user()->id,102)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }

                $cadena = Cadenas::where('id',$request->id)->first();

                if($cadena['id_estatus_cadenas'] == 1){
                    $estado = 2;
                }else{
                    $estado = 1;
                }
                $cadena_update = Cadenas::where('id',$request->id)->update(array('id_estatus_cadenas' => $estado, 'id_usuario_modifica' => Auth::user()->id));
                return response()->json($cadena_update, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }

    public function delete_cadena(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{

                if(!$validar->validar_permiso(Auth::user()->id,104)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }

                $cadena = Cadenas::find($request->id);
                if ($cadena->salas_cadena->isNotEmpty()) {
                    $mensaje = "No se puede eliminar la cadena porque existen salas asociadas.";
                    return response()->json($mensaje, 400, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                    
                }
                $delete_cadena = Cadenas::where('id',$request->id)->delete();
                $mensaje ="OK";
                return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }

    public function get_cadenas_active(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{

                if(!$validar->validar_permiso(Auth::user()->id,102)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }

                $cadena = Cadenas::where('id_estatus_cadenas',1)->get();
                return response($cadena, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function get_cadenas_inactive(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{

                if(!$validar->validar_permiso(Auth::user()->id,102)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }

                $cadena = Cadenas::where('id_estatus_cadenas',2)->get();
                return response($cadena, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function get_cadenas_delete(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{

                if(!$validar->validar_permiso(Auth::user()->id,102)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }

                $cadena = Cadenas::onlyTrashed()->with('salas_cadena')->get();
                //$cadena = Cadenas::with('salas_cadena')->where('id_estatus_cadenas',2)->get();
                return response($cadena, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function get_cadenas_user(Request $request, $idUser)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{

                if(!$validar->validar_permiso(Auth::user()->id,102)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }

                $usuario = User::withTrashed()->where('id',$idUsers)->with('cadenas')->first();
                $cadenas = $usuario->cadenas;
                return response()->json($cadenas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function cadenas_user(Request $request){
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{                
                $usuario = User::withTrashed()->where('id',Auth::user()->id)->with('cadenas')->first();
                $cadenas = $usuario->cadenas->pluck('id');
                $cadenas = Cadenas::whereIn('id' , $cadenas)->with('plantillas')->with('salas_cadena')->get();
                return response()->json($cadenas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }
}
