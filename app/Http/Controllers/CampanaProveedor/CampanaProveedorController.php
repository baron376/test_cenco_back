<?php

namespace App\Http\Controllers\CampanaProveedor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\GeneralObetenerController;
use App\Models\CampanaProveedor;
use App\Models\Proveedores;
use App\Models\CampanaSalas;
use App\Models\CampanaZonas;
use App\Models\Zona;
use App\Models\User;
use App\Models\UsuarioSalas;
use App\Models\CampanaMaterial;
use App\Models\CampanaComentario;
use Illuminate\Support\Facades\Mail;
use App\Mail\StoreCampanaProveedor;
use App\Mail\AprobarCampanaProveedor;
use App\Mail\RechazarCampanaProveedor;
use DB;
use Illuminate\Support\Facades\Auth;
use PDF;
class CampanaProveedorController extends Controller
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
                $campanas = CampanaProveedor::getCampanasProveedor($admin, $salas_usuario, $request);
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
                //$campanas = CampanaProveedor::count();
                $usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $validar->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
                $campanas = CampanaProveedor::getCampanasProveedor($admin, $salas_usuario, $request)->count();
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
                $campanas = CampanaProveedor::getCampanasProveedor($admin, $salas_usuario, $request, true);
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
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){

            try{
            //    if(!$validar->validar_permiso(Auth::user()->id,515)){
              //      return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
               // }
                $campanas = CampanaProveedor::withTrashed()->with('cadena')->with('proveedor')->with('sesion')->with('zona')->with('zona_exhibicion')->with('user_crea')->with('user_modifica')->with('salas')->with('materiales')->with('espacio_exhibicion')->with('campana_estado')->with('campana_etapa')->with('zona')->with('zonas')->with('comentarios')->where('id',$id)->first();
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
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        //return $request->proveedor[0]['id'];
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,300)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $campana_proveedor = new CampanaProveedor();
                $campana_proveedor->id_cadena = $request->cadena['id'];
                $campana_proveedor->nombre = $request->name;
                $campana_proveedor->desde = $request->desde;
                $campana_proveedor->hasta = $request->hasta;
                $campana_proveedor->id_proveedor = $request->proveedor[0]['id'];
                $campana_proveedor->id_sesion = $request->seccion[0]['id'];
                //$campana_proveedor->id_zona = $request->zona[0]['id'];
                $campana_proveedor->id_zona_exhibicion = $request->zonaExhibicion[0]['id'];
                $campana_proveedor->descripcion = $request->description;
                $campana_proveedor->id_espacio_exhibicion = $request->espacio[0]['id'];
                $campana_proveedor->material_externo = $request->materialInt;
                $campana_proveedor->id_estado_campana = 1;
                $campana_proveedor->id_status_campana = 1;
                $campana_proveedor->id_etapa = 1;
                $campana_proveedor->id_usuario_crear = Auth::user()->id;
                $campana_proveedor->created_at = now();
                $campana_proveedor->save();
                //return $campana_proveedor;
                foreach($request->salas as $sala){
                    $campana_sala = new CampanaSalas();
                    $campana_sala->id_campana = $campana_proveedor->id;
                    $campana_sala->id_sala = $sala['id'];
                    $campana_sala->id_usuario_crear = Auth::user()->id;
                    $campana_sala->created_at = now();
                    $campana_sala->save();
                }

                foreach($request->zona as $zona){
                    $campana_zona = new CampanaZonas();
                    $campana_zona->id_campana = $campana_proveedor->id;
                    $campana_zona->id_zona = $zona['id'];
                    $campana_zona->id_usuario_crear = Auth::user()->id;
                    $campana_zona->created_at = now();
                    $campana_zona->save();
                }

                \Log::info('mail');
                $detalle_mail = [
                    'nombre_campana' => strtoupper($request->name),
                    'nombre_proveedor' => $request->proveedor[0]['nombre'],
                    'fecha' => date('d-M-Y'),
                    'link' => 'test.campaña'
                ];
                $this->enviar_email_campana_proveedor($campana_proveedor);
                /*$this->enviar_email_campana_proveedor($request->proveedor[0]['email'],$detalle_mail);
                $usuario_proveedor = User::where('id_proveedor',$request->proveedor[0]['id'])->get();
                foreach($usuario_proveedor as $usuario) {
                    $this->enviar_email_campana_proveedor($usuario->email,$detalle_mail);
                }*/
                \Log::info('end mail');

                return response()->json($campana_proveedor, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                \Log::info($e->getMessage());
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }  
        }
    }

    public function update_campana_proveedor(Request $request,$id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,301)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $campana_proveedor = CampanaProveedor::find($id);
                $campana_proveedor->id_cadena = $request->cadena;
                $campana_proveedor->nombre = $request->name;
                $campana_proveedor->desde = $request->desde;
                $campana_proveedor->hasta = $request->hasta;
                $campana_proveedor->id_proveedor = $request->proveedor[0]['id'];
                $campana_proveedor->id_sesion = $request->seccion[0]['id'];
                $campana_proveedor->id_zona = $request->zona[0]['id'];
                $campana_proveedor->id_zona_exhibicion = $request->zonaExhibicion[0]['id'];
                $campana_proveedor->descripcion = $request->description;
                $campana_proveedor->id_espacio_exhibicion = $request->espacio[0]['id'];
                $campana_proveedor->material_externo = $request->materialInt;
                //$campana_proveedor->id_estado_campana = 1;
                //$campana_proveedor->id_status_campana = 1;
                //$campana_proveedor->id_etapa = 1;
                $campana_proveedor->id_usuario_modifica = Auth::user()->id;
                $campana_proveedor->created_at = now();
                $campana_proveedor->save();
                //return $campana_proveedor;

                $deleteSalas = CampanaSalas::where('id_campana',$id)->delete();
                foreach($request->salas as $sala){
                        $campana_sala = new CampanaSalas();
                        $campana_sala->id_campana = $campana_proveedor->id;
                        $campana_sala->id_sala = $sala['id'];
                        $campana_sala->id_usuario_crear = Auth::user()->id;
                        $campana_sala->created_at = now();
                        $campana_sala->save();
                    
                }


                $deleteZonas = CampanaZonas::where('id_campana',$id)->delete();
                foreach($request->zona as $zona){
                       
                        $campana_zona = new CampanaZonas();
                        $campana_zona->id_campana = $campana_proveedor->id;
                        $campana_zona->id_zona = $zona['id'];
                        $campana_zona->id_usuario_modifica = Auth::user()->id;
                        $campana_zona->created_at = now();
                        $campana_zona->save();
                    
                }

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
                $user_update = CampanaProveedor::where('id',$request->id)->delete();
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
                $campana = CampanaProveedor::find($id);
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
                $campana = CampanaProveedor::find($id);
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
                $campanas = CampanaProveedor::getCampanasProveedor($admin, $salas_usuario, $request, false, 1);
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
                $campanas = CampanaProveedor::getCampanasProveedor($admin, $salas_usuario, $request, false, 2);
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
        //return $request;
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,505)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                //return $request->objMateriales[0]['cdc64'];
                $date_material = now()->format('Y_m_d');

                if($request->objMateriales[0]['cdc64'] <> null){

                    $user_update = CampanaMaterial::where('id_campana',$id)->delete();
                    foreach ($request->objMateriales as $key => $value) {
                        
                        if(!$validar->validar_extencion_archivo($value,false)){
                            throw new \Exception("Invalid File");
                        }

                        $ext = pathinfo($value['name_archivo'], PATHINFO_EXTENSION);
                        $name = uniqid().".".$ext;

                        if(!is_dir("Campanas/"))
                            mkdir("Campanas/", 0777);
                        if(!is_dir("Campanas/$id"))
                            mkdir("Campanas/$id", 0777);
                        if(!is_dir("Campanas/$id/$date_material"))
                            mkdir("Campanas/$id/$date_material", 0777);
                        $destinationPath = 'Campanas/'.$id.'/'.$date_material.'/';
                        try{           
                            $filename2 = $name;
                            $url=$destinationPath.$filename2;
                            //return $url;
                            $content = $value['cdc64'];
                            $file_path = public_path($url);
                            file_put_contents($file_path, base64_decode($content));

                            $campanas_material = new CampanaMaterial();
                            $campanas_material->id_campana = $id;
                            $campanas_material->nombre = $value['name'];
                            $campanas_material->name_archivo = $filename2;
                            $campanas_material->url = $url;
                            $campanas_material->id_usuario_crear = Auth::user()->id;
                            $campanas_material->created_at = now();
                            $campanas_material->medida   = $value['medida'];
                            $campanas_material->save();
                        }catch(Exception $e){ 
                            return $e;//response()->json($e, 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                            return $archivo;
                        }
                    }
                    if($request->comentario <> ''){
                        $campanas_comentario = new CampanaComentario();
                        $campanas_comentario->id_campana = $id;
                        $campanas_comentario->comentario = $request->comentario;
                        $campanas_comentario->id_usuario_crear = Auth::user()->id;
                        $campanas_comentario->created_at = now();
                        $campanas_comentario->save();
                    }
                    $campana_update = CampanaProveedor::where('id',$id)->update(array('id_etapa' => 2));
                    return response()->json($campana_update, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }else{
                    return response()->json("NO SE GUARDO EL ARCHIVO NO SE RECONOCE", 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
            }catch (\Exception $e){
                return $e;
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
                $campana = CampanaComentario::select(DB::raw("
                    campana_comentario.id_campana as id_camapana,
                    campana_comentario.comentario,
                    CONCAT(u.nombre, ' ', u.apellido) as usuario,
                    DATE_FORMAT(campana_comentario.created_at,'%d-%m-%Y %H:%i') as fecha
                "))
                ->join('usuarios as u','campana_comentario.id_usuario_crear','u.id')
                ->where('id_campana',$id)->orderBy('campana_comentario.created_at', 'desc')->get();

                

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
                $campana_aprobe = CampanaProveedor::where('id',$id)->update(array('id_etapa' => 3,'id_usuario_modifica'=> Auth::user()->id));

                if(!$validar->validar_permiso(Auth::user()->id,302)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                if($request->comentario_gestion <> ''){
                    $campanas_comentario = new CampanaComentario();
                    $campanas_comentario->id_campana = $id;
                    $campanas_comentario->comentario = $request->comentario_gestion;
                    $campanas_comentario->id_usuario_crear = Auth::user()->id;
                    $campanas_comentario->created_at = now();
                    $campanas_comentario->save();
                }
                   \Log::info(' paralelepipedo 0' . $request->user()->nombre);
                $campanas_comentario = new CampanaComentario();
                $campanas_comentario->id_campana = $id;
                $campanas_comentario->comentario = strtoupper($request->user()->nombre).' '.strtoupper($request->user()->apellido).' Aprobo la campaña.';
                $campanas_comentario->id_usuario_crear = 1;
                $campanas_comentario->created_at = now();
                $campanas_comentario->save();

        //        \Log::info('mail aprobar');
                $campana  = CampanaProveedor::where('id',$id)->first();
                $campana_pdf = CampanaProveedor::with('cadena')->with('espacio_exhibicion')->with('proveedor')->with('sesion')->with('zona')->with('user_crea')->with('user_modifica')->with('salas')->with('materiales')->with('campana_estado')->with('campana_etapa')->where('id',$id)->first();
                $proveedor = Proveedores::where('id', $campana->id_proveedor)->first();
          //      \Log::info($campana_pdf);
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

                //\Log::info('detalles sadasdasdasda',$detalle_pdf);
                 //\Log::info('antes de enviar email');
                $this->enviar_email_aprobar_campana_proveedor($campana_pdf);
                \Log::info('end mail aprobar ok sssss');

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
                $campana_aprobe = CampanaProveedor::where('id',$id)->update(array('id_etapa' => 4,'id_usuario_modifica'=> Auth::user()->id));

                if($request->comentario_gestion <> ''){
                    $campanas_comentario = new CampanaComentario();
                    $campanas_comentario->id_campana = $id;
                    $campanas_comentario->comentario = $request->comentario_gestion;
                    $campanas_comentario->id_usuario_crear = Auth::user()->id;
                    $campanas_comentario->created_at = now();
                    $campanas_comentario->save();
                }

                $campanas_comentario = new CampanaComentario();
                $campanas_comentario->id_campana = $id;
                $campanas_comentario->comentario = strtoupper($request->user()->nombre).' '.strtoupper($request->user()->apellido).' Rechazo la campaña.';
                $campanas_comentario->id_usuario_crear = 1;
                $campanas_comentario->created_at = now();
                $campanas_comentario->save();

                \Log::info('mail rechazo');
                $campana  = CampanaProveedor::where('id',$id)->first();
                $proveedor = Proveedores::where('id',$campana->id_proveedor)->first();
                $detalle_mail = [
                    'nombre_campana' => strtoupper($campana->nombre),
                    'nombre_proveedor' => $proveedor->nombre,
                    'fecha' => date('d-M-Y'),
                    'link' => 'test.campaña.rechaza'
                ];
                $campana->comentario_gestion = $request->comentario_gestion;
                $this->enviar_email_rechazar_campana_proveedor($campana);
                /*$this->enviar_email_rechazar_campana_promotora($campana);
                $usuario_proveedor = User::where('id_proveedor',$proveedor->id)->get();
                foreach($usuario_proveedor as $usuario) {
                    $this->enviar_email_rechazar_campana_proveedor($usuario->email,$detalle_mail);
                }*/
                \Log::info('end mail rechazo');

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
        set_time_limit(14200);
        try{
            $campanaProveedor = CampanaProveedor::where('id' , $idCampanaProveedor)->first();
            $urlQrcode = $this->urlFront.'/DowloadPdfCampanaProveedor-'.$campanaProveedor->id;
            \Log::info($urlQrcode);
            $data = [
                'campana' => $campanaProveedor,
                'urlQrcode'=>$urlQrcode
            ];
            $has = bin2hex(random_bytes(8));
            if(!is_dir("TmpCampanaProveedor/")){
                mkdir("TmpCampanaProveedor/", 0777);
            }
                
            $nombreCampana = $campanaProveedor->id.'_'.str_replace(' ' , '_' , $campanaProveedor->nombre).'_'.$has.'_.pdf';
            $route = public_path().'/TmpCampanaProveedor/'.$nombreCampana;
            $pdf = PDF::loadView('Pdf.Campana.detallecampanaproveedor', $data)->setPaper('letter', 'portrait')->save($route);
            $encode = base64_encode(file_get_contents($route));
            $dataReturn=[
                'nombre_archivo'=> $nombreCampana,
                'content'=>$encode
            ];
            return response()->json($dataReturn, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        }catch (\Exception $e){
            return $e;
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
                $campanas = CampanaProveedor::getCampanasProveedor($admin, $salas_usuario, $request, false, 3);
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
                $campanas = CampanaProveedor::getCampanasProveedor($admin, $salas_usuario, $request, false, 4);
                return response()->json($campanas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }

        }else{
            return  $valida;
        }
    }


}
