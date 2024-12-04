<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\GeneralObetenerController;
use App\Models\Marcas;
use App\Models\Cadenas;
use Illuminate\Support\Facades\Auth;
class MarcasController extends Controller
{
    public function create_marca(Request $request)
    {
    	$token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
    		try{
                if(!$validar->validar_permiso(Auth::user()->id,212)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
    			$marca = new Marcas();
    			$marca->nombre = strtoupper($request->nombre);
                $marca->representante = $request->representante;
                $marca->telefono = $request->telefono;
                $marca->email = $request->email;
                $marca->comentario = $request->comentario;
                $marca->id_estatus_marca = 1;
                $marca->id_usuario_autoriza = NULL;
                $marca->id_usuario_crear = Auth::user()->id;
                $marca->id_usuario_modifica = NULL;
				$marca->created_at = now();
				$marca->save();

				return response()->json($marca, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    		}catch (\Exception $e){
                return response()->json($e, 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
	    }else{
	        return $valida;
	    }
	}

	public function get_edit_marca(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,216)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $cadena = Marcas::withTrashed()->where('id',$id)->with('usuario_crea_marca')->with('usuario_modifica_marca')->with('usuario_autoriza_marca')->with('estado')->first();
                return response()->json($cadena, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function get_nombre_marca(Request $request, $nombre)
    {
        if(!$validar->validar_permiso(Auth::user()->id,216)){
            return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        }
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                $cadena = Cadenas::withTrashed()->where('nombre',strtoupper($nombre))->first();
                return response()->json($cadena, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function update_marca(Request $request, $id)
    {
    	$token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){

    		try{
                if(!$validar->validar_permiso(Auth::user()->id,213)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
    			$id_marca = $id;
    			$marca =  Marcas::find($id_marca);
    			$marca->nombre = strtoupper($request->nombre);
                $marca->representante = $request->representante;
                $marca->telefono = $request->telefono;
                $marca->email = $request->email;
                $marca->comentario = $request->comentario;
                $marca->id_usuario_modifica = Auth::user()->id;
                $marca->updated_at = now();
                $marca->save();

				return response()->json($marca, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    		}catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
	    }else{
	        return $valida;
	    }
	}
	public function status_marca(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{                
                $marca_update = Marcas::where('id',$request->id)->update(array('id_estatus_marca' => $request->estado));
                return response()->json($marca_update, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }

    public function delete_marca(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,213)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $marca = Marcas::find($request->id);
                if ($marca->proveedor) {
                    $mensaje = "No se puede eliminar la marca porque esta relacionada un con proveedor";
                    return response()->json($mensaje, 400, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                } else {
                    
                $delete_cadena = Marcas::where('id',$request->id)->delete();
                $mensaje ="OK";
                
                }
                return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }

    public function get_marca_active(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,217)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $marca =Marcas::where('id_estatus_marca',2)->with('usuario_crea_marca')->with('usuario_modifica_marca')->with('usuario_autoriza_marca')->with('estado')->get();
                return response($marca, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function get_marca_inactive(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,217)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $marca =Marcas::where('id_estatus_marca',3)->with('usuario_crea_marca')->with('usuario_modifica_marca')->with('usuario_autoriza_marca')->with('estado')->get();
                return response($marca, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function get_marca_delete(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,217)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $marca = Marcas::onlyTrashed()->with('usuario_crea_marca')->with('usuario_modifica_marca')->with('usuario_autoriza_marca')->with('estado')->get();
                //$cadena = Cadenas::with('salas_cadena')->where('id_estatus_cadenas',2)->get();
                return response($marca, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function get_marca_espera(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,217)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $marca =Marcas::where('id_estatus_marca',1)->with('usuario_crea_marca')->with('usuario_modifica_marca')->with('usuario_autoriza_marca')->with('estado')->get();
                //$cadena = Cadenas::with('salas_cadena')->where('id_estatus_cadenas',2)->get();
                return response($marca, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }
}
