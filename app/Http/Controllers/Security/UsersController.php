<?php

namespace App\Http\Controllers\Security;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UsuarioSalas;
use App\Models\UsuarioCadena;
use App\Models\UsuarioPassword;
use App\Models\RolesUsuarios;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GeneralObetenerController;
use App\Models\EstatusUsuarios;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\StoreUsuarioCencosud;
use App\Mail\StoreUsuarioProveedor;
use App\Mail\RecordarContrasena;





class UsersController extends Controller
{
    protected $key = '';
    protected $iv = '';
    function __construct() {
        $this->key = config('app.keyencript');
        $this->iv = config('app.ivencript');
        $this->urlFront = config('app.front');
    }

    public function get_users_actives(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        $statusActives = EstatusUsuarios::where('nombre' , 'Activo')->first();
    	if($statusActives && $valida == 'OK'){
            try{
                /*if(!$validar->validar_permiso(Auth::user()->id,210)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }*/
                $users = User::getUsers($statusActives);
                return response()->json($users, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}
    }
    public function get_users_inactive(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        $statusActives = EstatusUsuarios::where('nombre' , 'Inactivo')->first();
    	if($statusActives && $valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,210)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
				//$users = User::where('id_estatus_usuarios' , $statusActives->id)->where('id_proveedor' , null)->with('cadenas')->with('salas')->with('usuario_estado')->with('roles')->get();
				$users = User::getUsers($statusActives);
                return response()->json($users, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}
    }
    public function get_users_deleted(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        $statusActives = EstatusUsuarios::where('nombre' , 'Inactivo')->first();
    	if($statusActives && $valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,210)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
				//$users = User::where('id_proveedor' , null)->onlyTrashed()->with('cadenas')->with('salas')->with('usuario_estado')->with('roles')->get();
                $users = User::getDeletedUsers();
                return response()->json($users, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}
    }
    public function create_user(Request $request)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
            try{
                
                $user = new User();
                $user->nombre = $request->name;
                $user->apellido = $request->lastname;
                $user->rut =  $request->rut;
                $user->dv =  $request->dv;
                $user->email = $request->email;
                $user->password = bcrypt('998i98u88we732$$');
                $user->id_estatus_usuarios = 1;
                $user->remember_token = '';
                $user->id_usuario_crear = Auth::user()->id;
                $user->id_usuario_modifica = Auth::user()->id;
                $user->confirmado = 1;
                $user->url_imagen = '#';
                $user->ultimo_inicio = Carbon::now();
                $user->cdg_confirmacion = bin2hex(random_bytes(20));
                $user->remember_token = bin2hex(random_bytes(24));
                $user->save();

                $usuario_password = new UsuarioPassword();
                $usuario_password->id_usuario = $user->id;
                $usuario_password->password = bcrypt('998i98u88we732$$');
                $usuario_password->save();
                
                foreach($request->roles as $role){
                    $rol = new RolesUsuarios();
                    $rol->id_rol =$role['id']; 
                    $rol->id_usuario = $user->id;
                    $rol->id_usuario_crear = 1;
                    $rol->id_usuario_modifica = 1;
                    $rol->save();
                }
                foreach($request->cadenas as $cadena){
                    $cad = new UsuarioCadena();
                    $cad->id_usuario = $user->id;
                    $cad->id_cadena = $cadena['id'];
                    $cad->id_usuario_crear = 1;
                    $cad->id_usuario_modifica = 1;
                    $cad->save();
                }
                foreach($request->salas as $sala){
                    $local = new UsuarioSalas();
                    $local->id_usuario =  $user->id;
                    $local->id_sala = $sala['id'];
                    $local->id_usuario_crear = 1;
                    $local->save();
                }
                $this->enviar_email_user_bienvenida($user);

                return response()->json($user, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }            
        }else{
            return $valida;
        }
    }
    private function enviar_email_user_bienvenida($user)
    {
        $User = User::where('id' , $user->id)->first();
        Mail::to($User->email)->send(new StoreUsuarioCencosud($User));
       
    }
    public function get_edit_user(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                $users = User::withTrashed()->with('cadenas.salas_cadena')->with('salas')->with('usuario_estado')->with('roles')->where('id',$id)->first();
                return response()->json($users, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }
    public function update_user(Request $request, $id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                $id_user = $id;
                $user = User::find($id_user);
                $user->nombre = $request->name;
                $user->apellido = $request->lastname;
                $user->rut =  $request->rut;
                $user->dv =  $request->dv;
                $user->email = $request->email;
                //$user->password = $request->password;
                $user->id_estatus_usuarios = 1;
                //$user->remember_token = '';
                $user->id_usuario_crear = Auth::user()->id;
                $user->id_usuario_modifica = Auth::user()->id;
                $user->created_at = now();
                $user->save();
                
                $delete_rol = RolesUsuarios::where('id_usuario',$id_user)->delete();
                foreach($request->roles as $role){
                    $rol = new RolesUsuarios();
                    $rol->id_rol =$role['id']; 
                    $rol->id_usuario = $user->id;
                    $rol->id_usuario_crear = Auth::user()->id;
                    $rol->id_usuario_modifica = Auth::user()->id;
                    $rol->save();
                }
                $delete_rol = UsuarioCadena::where('id_usuario',$id_user)->delete();
                foreach($request->cadenas as $cadena){
                    $cad = new UsuarioCadena();
                    $cad->id_usuario = $user->id;
                    $cad->id_cadena = $cadena['id'];
                    $cad->id_usuario_crear = Auth::user()->id;
                    $cad->id_usuario_modifica = Auth::user()->id;
                    $cad->save();
                }
                $delete_rol = UsuarioSalas::where('id_usuario',$id_user)->delete();
                foreach($request->salas as $sala){
                    $local = new UsuarioSalas();
                    $local->id_usuario =  $user->id;
                    $local->id_sala = $sala['id'];
                    $local->id_usuario_crear = Auth::user()->id;
                    $local->id_usuario_modifica = Auth::user()->id;
                    $local->save();
                }
                return response()->json($user, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }            
        }else{
            return $valida;
        }
    }
    public function desactivate_user(Request $request, $id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                $id_user = $id;
                $user = User::find($id_user);
                $user->id_estatus_usuarios = 2;
                $user->id_usuario_modifica = Auth::user()->id;
                $user->save();
                return response()->json($user, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }            
        }else{
            return $valida;
        }
    }
    public function activate_user(Request $request, $id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                $id_user = $id;
                $user = User::find($id_user);
                $user->id_estatus_usuarios = 1;
                $user->id_usuario_modifica = Auth::user()->id;
                $user->save();
                return response()->json($user, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }            
        }else{
            return $valida;
        }
    }
    public function restore_user(Request $request, $id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                $id_user = $id;
                $user = User::withTrashed()->find($id_user);

                if ($user->proveedor !== null) {
                    $user->restore();
                    $mensaje = "ok";
                }
                else {
                    $mensaje = "No se puede restaurar el usuario porque su proveedor fue eliminado.";
                    return response()->json($mensaje, 400, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                
                return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }            
        }else{
            return $valida;
        }
    }
    public function status_user(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                $user_update = User::where('id',$request->id)->update(array('id_estatus_usuarios' => $request->id_estatus_usuarios));
                $id_estado =$request->id_estatus_usuarios;
                return response()->json($user_update, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }
    public function delete_user(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                $user_update = User::where('id',$request->id)->delete();
                $mensaje ="OK";
                return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }
    public function get_users_actives_proveedor(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        $statusActives = EstatusUsuarios::where('nombre' , 'Activo')->first();
    	if($statusActives && $valida == 'OK'){
            try{
		$user = User::with('roles')->where('id',Auth::user()->id)->first();
                $proveedor =  $this->verificar_rol_proveedor($user->roles);

                if (!$proveedor) {
                    // $users = User::where('id_estatus_usuarios' , $statusActives->id)->where('id_proveedor' ,'!=', null)->with('proveedor')->with('usuario_estado')->with('roles')->get();
                    $users = User::where('id_proveedor', '!=', null)
                    ->leftJoin('proveedores', 'usuarios.id_proveedor', '=', 'proveedores.id')
                    ->where('id_estatus_usuarios', $statusActives->id)
                    ->with('usuario_estado')
                    ->with('roles')
                    ->get(['usuarios.*', 'proveedores.nombre as proveedor']);

                }else {
                    // $users = User::where('id_estatus_usuarios' , $statusActives->id)->where('id_proveedor' ,'!=', null)->with('proveedor')->with('usuario_estado')->with('roles')->where('id_proveedor',Auth::user()->id_proveedor)->get();
                    $users = User::leftJoin('proveedores', 'usuarios.id_proveedor', '=', 'proveedores.id')
                    ->where('id_estatus_usuarios', $statusActives->id)
                    ->where('id_proveedor',Auth::user()->id_proveedor)
                    ->with('usuario_estado')
                    ->with('roles')
                    ->get(['usuarios.*', 'proveedores.nombre as proveedor']);
                }
		return response()->json($users, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}
    }
    public function get_users_inactive_proveedor(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        $statusActives = EstatusUsuarios::where('nombre' , 'Inactivo')->first();
    	if($statusActives && $valida == 'OK'){
            try{
				// $users = User::where('id_estatus_usuarios' , $statusActives->id)->where('id_proveedor' ,'!=', null)->with('proveedor:nombre as proveedor')->with('usuario_estado')->with('roles')->get();
                $users = User::where('id_proveedor', '!=', null)
                ->leftJoin('proveedores', 'usuarios.id_proveedor', '=', 'proveedores.id')
                ->where('id_estatus_usuarios', $statusActives->id)
                ->with('usuario_estado')
                ->with('roles')
                ->get(['usuarios.*', 'proveedores.nombre as proveedor']);
                return response()->json($users, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}
    }
    public function get_users_deleted_proveedor(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        $statusActives = EstatusUsuarios::where('nombre' , 'Inactivo')->first();
    	if($statusActives && $valida == 'OK'){
            try{
				// $users = User::where('id_proveedor' ,'!=', null)->onlyTrashed()->with('proveedor')->with('usuario_estado')->with('roles')->get();
                $users = User::where('id_proveedor', '!=', null)
    ->onlyTrashed()
    ->leftJoin('proveedores', 'usuarios.id_proveedor', '=', 'proveedores.id')
    ->with('usuario_estado')
    ->with('roles')
    ->get(['usuarios.*', 'proveedores.nombre as proveedor']);

				return response()->json($users, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}
    }
    public function get_edit_user_proveedor(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){
            try{
                $users = User::withTrashed()->with('cadenas.salas_cadena')->with('salas')->with('proveedor')->with('usuario_estado')->with('roles')->where('id',$id)->first();
                return response()->json($users, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }
    public function create_user_proveedor(Request $request)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
            try{
                
                $user = new User();
                $user->nombre = $request->name;
                $user->apellido = $request->lastname;
                $user->rut =  $request->rut;
                $user->dv =  $request->dv;
                $user->email = $request->email;
                $user->password = $request->password;
                $user->id_estatus_usuarios = 1;
                $user->id_proveedor = $request->proveedores['id'];
                $user->remember_token = '';
                $user->id_usuario_crear = Auth::user()->id;
                $user->id_usuario_modifica = Auth::user()->id;
                $user->confirmado = 1;
                $user->url_imagen = '#';
                $user->ultimo_inicio =Carbon::now();
                $user->cdg_confirmacion = bin2hex(random_bytes(20));
                $user->remember_token = bin2hex(random_bytes(24));
                $user->save();

                $usuario_password = new UsuarioPassword();
                $usuario_password->id_usuario = $user->id;
                $usuario_password->password = $request->password;
                $usuario_password->save();
                
                $user->password_mod =  $request->ptk;

                foreach($request->roles as $role){
                    $rol = new RolesUsuarios();
                    $rol->id_rol =$role['id']; 
                    $rol->id_usuario = $user->id;
                    $rol->id_usuario_crear = Auth::user()->id;
                    $rol->id_usuario_modifica = Auth::user()->id;
                    $rol->save();
                }

                if ($request->cadenas && $request->salas) {
                    foreach($request->cadenas as $cadena){
                        $cad = new UsuarioCadena();
                        $cad->id_usuario = $user->id;
                        $cad->id_cadena = $cadena['id'];
                        $cad->id_usuario_crear = Auth::user()->id;
                        $cad->id_usuario_modifica = Auth::user()->id;
                        $cad->save();
                    }
        
                    foreach($request->salas as $sala){
                        $local = new UsuarioSalas();
                        $local->id_usuario =  $user->id;
                        $local->id_sala = $sala['id'];
                        $local->id_usuario_crear = Auth::user()->id;
                        $local->id_usuario_modifica = Auth::user()->id;
                        $local->save();
                }
            }
                $this->enviar_email_user_proveedor_bienvenida($user);

                return response()->json($user, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return $e;
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }            
        }else{
            return $valida;
        }
    }
    private function enviar_email_user_proveedor_bienvenida($user)
    {
        $UserE = User::where('id' , $user->id)->first();
        Mail::to($UserE->email)->send(new StoreUsuarioProveedor($user));
    }
    public function update_user_proveedor(Request $request, $id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                $id_user = $id;
                $user = User::find($id_user);
                $user->nombre = $request->name;
                $user->apellido = $request->lastname;
                $user->rut =  $request->rut;
                $user->dv =  $request->dv;
                $user->email = $request->email;
                $user->id_proveedor = $request->proveedores['id'];
               // $user->password = $request->password;
                $user->id_estatus_usuarios = 1;
                $user->id_usuario_modifica = Auth::user()->id;
                $user->created_at = now();
                $user->save();
                
                $delete_rol = RolesUsuarios::where('id_usuario',$id_user)->delete();
                foreach($request->roles as $role){
                    $rol = new RolesUsuarios();
                    $rol->id_rol =$role['id']; 
                    $rol->id_usuario = $user->id;
                    $rol->id_usuario_crear = Auth::user()->id;
                    $rol->id_usuario_modifica = Auth::user()->id;
                    $rol->save();
                }
                
                if ($request->cadenas && $request->salas) {
                    
                $delete_rol = UsuarioCadena::where('id_usuario',$id_user)->delete();
                foreach($request->cadenas as $cadena){
                    $cad = new UsuarioCadena();
                    $cad->id_usuario = $user->id;
                    $cad->id_cadena = $cadena['id'];
                    $cad->id_usuario_crear = Auth::user()->id;
                    $cad->id_usuario_modifica = Auth::user()->id;
                    $cad->save();
                }
                $delete_rol = UsuarioSalas::where('id_usuario',$id_user)->delete();
                foreach($request->salas as $sala){
                    $local = new UsuarioSalas();
                    $local->id_usuario =  $user->id;
                    $local->id_sala = $sala['id'];
                    $local->id_usuario_crear = Auth::user()->id;
                    $local->id_usuario_modifica = Auth::user()->id;
                    $local->save();
                }
                }

                return response()->json($user, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }            
        }else{
            return $valida;
        }
    }
    public function checkSecion(Request $request){
            try{
                $userSecion  = Auth::check();
                $userSeccionInt =0;
                if($userSecion){
                    $userSeccionInt =1;
                }else{
                    $userSeccionInt =0;
                }
                $jsonResponse = ['secion' =>  $userSeccionInt];
                return response()->json($jsonResponse, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
           }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
    }
    public function get_rebember_password_user(Request $request)
    {
     
        $encryhEmail  = $request->email;
        $decryptedEmail = openssl_decrypt($encryhEmail, 'AES-128-CBC', hex2bin($this->key), OPENSSL_ZERO_PADDING, hex2bin($this->iv));
        $users = User::where('email' , $decryptedEmail)->first();
        $users->urlResetPassword = $this->urlFront.'/UpdatePasswordPro-'.$users->remember_token;
        Mail::to($users->email)->send(new RecordarContrasena($users));
        try{
            
            return response()->json('ok', 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        }catch (\Exception $e){
            return $e;
        }
    }

    public function get_user_data_token(Request $request)
    {
        $ttk  = $request->ttk;
        $users = User::where('remember_token' , $ttk)->with('usuario_password')->first();
        try{
            
            return response()->json($users, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        }catch (\Exception $e){
            return $e;
        }
    }

    public function update_password_proveedores(Request $request){
        $encryhEmail  = $request->email;
        $decryptedEmail = openssl_decrypt($encryhEmail, 'AES-128-CBC', hex2bin($this->key), OPENSSL_ZERO_PADDING, hex2bin($this->iv));
        try{
            $users = User::where('email' , $decryptedEmail)->first();
            $users->password = $request->password;
            $users->remember_token  = bin2hex(random_bytes(64));
            $users->save();

            $usuario_password = new UsuarioPassword();
            $usuario_password->id_usuario = $users->id;
            $usuario_password->password = $request->password;
            $usuario_password->save();

            return response()->json($users, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return $e;
        }
    }

    public function get_password(Request $request){
        \Log::info($request->password);
        $encryPassword = $request->password;
        $decryptedPassword = openssl_decrypt($encryPassword, 'AES-128-CBC', hex2bin($this->key), OPENSSL_ZERO_PADDING, hex2bin($this->iv));
        \Log::info($decryptedPassword);
        return response()->json($decryptedPassword, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }


    public function verificar_rol_proveedor($roles){
        foreach($roles as $rol){
            if($rol->rol_proveedor == 1){
                return true;
            }
        }
        return false;
    }

}
