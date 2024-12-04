<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\GeneralObetenerController;
use App\Models\Proveedores;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ProveedoresMarcas;
class ProveedoresController extends Controller

{
    public function create_proveedor(Request $request)
    {
    	$token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
    		try{
                if(!$validar->validar_permiso(Auth::user()->id,220)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
    			$pro = new Proveedores();
				$pro->nombre = $request->name;
                $pro->giro = $request->giro;
                $pro->rut =  $request->rut;
                $pro->dv =  $request->dv;
                $pro->email = $request->email;
                $pro->tipo = $request->tipo;
				$pro->id_usuario_crear = 1;
                $pro->id_usuario_modifica = 1;
				$pro->save();

				foreach($request->marcas as $marca){
                    $mp = new ProveedoresMarcas();
                    $mp->id_marca =$marca['id']; 
                    $mp->id_proveedor = $pro->id;
                    $mp->save();
                }

				return response()->json($pro, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    		}catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
	    }else{
	        return $valida;
	    }
	}
	public function delete_proveedor(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,221)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $proveedor = Proveedores::find($id);
                if ($proveedor->usuarios->isNotEmpty()) {
                    $mensaje = "No se puede eliminar el proveedor porque existen usuarios asociados.";
                    return response()->json($mensaje, 400, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                    
                }
                if ($proveedor->promotoras->isNotEmpty()) {
                    $mensaje = "No se puede eliminar el proveedor porque existen campañas promotoras asociadas.";
                    return response()->json($mensaje, 400, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                    
                }
                if ($proveedor->campanas->isNotEmpty()) {
                    $mensaje = "No se puede eliminar el proveedor porque existen campañas asociadas.";
                    return response()->json($mensaje, 400, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                    
                }
                $proveedorDelete = Proveedores::where('id',$id)->delete();
                $mensaje ="OK";
                return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }
	public function get_proveedores_delete(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,221)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $proveedores = Proveedores::onlyTrashed()->get();
                return response($proveedores, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }
}
