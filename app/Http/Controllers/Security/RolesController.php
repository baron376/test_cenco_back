<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UsuarioSalas;
use App\Models\UsuarioCadena;
use App\Models\RolesUsuarios;
use App\Models\Roles;
use App\Models\PermisosRoles;
use App\Models\Permisos;
use App\Models\Modulos;
use App\Models\EstatusRoles;
use App\Http\Controllers\GeneralObetenerController;
use Illuminate\Support\Facades\Auth;

class RolesController extends Controller
{
    public function get_roles_actives(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        $statusActives = EstatusRoles::where('nombre' , 'Activo')->first();
    	if($statusActives && $valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,211)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $roles = Roles::with('permisos')->where('rol_proveedor' , 0)->where('id_estatus_roles',$statusActives->id)->get();
                return response($roles, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}
    }
    public function get_roles_inactive(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        $statusActives = EstatusRoles::where('nombre' , 'Inactivo')->first();
    	if($statusActives && $valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,211)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $roles = Roles::with('permisos')->where('rol_proveedor' , 0)->where('id_estatus_roles',$statusActives->id)->get();
                return response($roles, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}
    }
    public function get_roles_deleted(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        $statusActives = EstatusRoles::where('nombre' , 'Activo')->first();
    	if($statusActives && $valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,211)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $roles = Roles::onlyTrashed()->with('permisos')->where('rol_proveedor' , 0)->where('id_estatus_roles',$statusActives->id)->get();
                return response($roles, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}
    }
    public function create_rol(Request $request)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
            try{
                
                $rol = new Roles();
                $rol->nombre = $request->name;
				$rol->descripcion = $request->description;
				$rol->administrador = $request->administrator;
				$rol->id_estatus_roles = 1;
				$rol->id_usuario_crear = Auth::user()->id;
                $rol->rol_proveedor = 0;
				$rol->created_at = now();
                $rol->save();
                
                foreach($request->modulos as $modulo){
                    foreach($modulo['permisos'] as $permiso){
                        if($permiso['isChecked']){
                            $permisoRol = new PermisosRoles();
                            $permisoRol->id_permiso =$permiso['id']; 
                            $permisoRol->id_rol = $rol->id;
                            $permisoRol->id_usuario_crear = 1;
                            $permisoRol->save();
                        }
                    }
                }

                return response()->json($rol, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }            
        }else{
            return $valida;
        }
    }

    public function get_edit_rol(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                $users = Roles::withTrashed()->with('permisos')->where('id',$id)->first();
                return response()->json($users, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function update_rol(Request $request, $id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
            try{
            	$id_rol = $id;                
                $rol = Roles::find($id_rol);
                $rol->nombre = $request->name;
				$rol->descripcion = $request->description;
				$rol->administrador = $request->administrator;
				$rol->id_estatus_roles = 1;
				$rol->id_usuario_crear = Auth::user()->id;
				$rol->created_at = now();
                $rol->save();
                $delete_rol = PermisosRoles::where('id_rol',$id_rol)->delete();
                foreach($request->modulos as $modulo){
                    foreach($modulo['permisos'] as $permiso){
                        if($permiso['isChecked']){
                            $permisoRol = new PermisosRoles();
                            $permisoRol->id_permiso =$permiso['id']; 
                            $permisoRol->id_rol = $rol->id;
                            $permisoRol->id_usuario_crear = 1;
                            $permisoRol->save();
                        }
                    }
                }
                return response()->json($rol, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }            
        }else{
            return $valida;
        }
    }

    public function status_rol(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                $rol_update = Roles::where('id',$request->id)->update(array('id_estatus_roles' => $request->id_estatus_roles));
                return response()->json($rol_update, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }

    public function delete_rol(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                $user_update = Roles::where('id',$id)->delete();
                $mensaje ="OK";
                return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }
    public function get_permissions(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
    	if($valida == 'OK'){
            try{
                //$permissions = Permisos::with('roles' , 'modulos')->get()->groupBy('id_modulo');
                $modulesPermissions = Modulos::with('permisos')->get();
                return response($modulesPermissions, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}
    }
    public function desactivate_rol(Request $request, $id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                $id_rol = $id;
                $rol = Roles::find($id);
                $rol->id_estatus_roles = 2;
                $rol->id_usuario_modifica =  Auth::user()->id;
                $rol->save();
                return response()->json($rol, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }            
        }else{
            return $valida;
        }
    }
    public function activate_rol(Request $request, $id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                $id_rol = $id;
                $rol = Roles::find($id);
                $rol->id_estatus_roles = 1;
                $rol->id_usuario_modifica =  Auth::user()->id;
                $rol->save();
                return response()->json($rol, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }            
        }else{
            return $valida;
        }
    }



    /* Proveedor */


    public function get_roles_actives_proveedor(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        $statusActives = EstatusRoles::where('nombre' , 'Activo')->first();
    	if($statusActives && $valida == 'OK'){
            try{
                $roles = Roles::with('permisos')->where('rol_proveedor' , 1)->where('id_estatus_roles',$statusActives->id)->get();
                return response($roles, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}
    }
    public function get_roles_inactive_proveedor(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        $statusActives = EstatusRoles::where('nombre' , 'Inactivo')->first();
    	if($statusActives && $valida == 'OK'){
            try{
                $roles = Roles::with('permisos')->where('rol_proveedor' , 1)->where('id_estatus_roles',$statusActives->id)->get();
                return response($roles, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}
    }
    public function get_roles_deleted_proveedor(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        $statusActives = EstatusRoles::where('nombre' , 'Activo')->first();
    	if($statusActives && $valida == 'OK'){
            try{
                $roles = Roles::onlyTrashed()->with('permisos')->where('rol_proveedor' , 1)->where('id_estatus_roles',$statusActives->id)->get();
                return response($roles, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}
    }
    public function get_permissions_proveedor(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
    	if($valida == 'OK'){
            try{
                //$permissions = Permisos::with('roles' , 'modulos')->get()->groupBy('id_modulo');
                $yperPermissions = 1;
                $modulesPermissions = Modulos::whereHas('permisos', function ($query) use ($yperPermissions) {
                    $query->where('permiso_proveedor',$yperPermissions);
                })->get();
                return response($modulesPermissions, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}
    }


    public function create_rol_proveedor(Request $request)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
            try{
                
                $rol = new Roles();
                $rol->nombre = $request->name;
				$rol->descripcion = $request->description;
				$rol->administrador = $request->administrator;
				$rol->id_estatus_roles = 1;
				$rol->id_usuario_crear = 1;
                $rol->rol_proveedor = 1;
				$rol->created_at = now();
                $rol->save();
                
                foreach($request->modulos as $modulo){
                    foreach($modulo['permisosproveedor'] as $permiso){
                        if($permiso['isChecked']){
                            $permisoRol = new PermisosRoles();
                            $permisoRol->id_permiso =$permiso['id']; 
                            $permisoRol->id_rol = $rol->id;
                            $permisoRol->id_usuario_crear = Auth::user()->id;
                            $permisoRol->save();
                        }
                    }
                }

                return response()->json($rol, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }            
        }else{
            return $valida;
        }
    }

    public function update_rol_proeedor(Request $request, $id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
            try{
            	$id_rol = $id;                
                $rol = Roles::find($id_rol);
                $rol->nombre = $request->name;
				$rol->descripcion = $request->description;
				$rol->administrador = $request->administrator;
                $rol->rol_proveedor = 1;
				$rol->id_estatus_roles = 1;
				$rol->id_usuario_crear = 1;
				$rol->created_at = now();
                $rol->save();
                $delete_rol = PermisosRoles::where('id_rol',$id_rol)->delete();
                foreach($request->modulos as $modulo){
                    foreach($modulo['permisosproveedor'] as $permiso){
                        if($permiso['isChecked']){
                            $permisoRol = new PermisosRoles();
                            $permisoRol->id_permiso =$permiso['id']; 
                            $permisoRol->id_rol = $rol->id;
                            $permisoRol->id_usuario_crear = Auth::user()->id;
                            $permisoRol->save();
                        }
                    }
                }
                return response()->json($rol, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }            
        }else{
            return $valida;
        }
    }





}
