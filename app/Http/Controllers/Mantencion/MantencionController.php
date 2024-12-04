<?php

namespace App\Http\Controllers\Mantencion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\GeneralObetenerController;
use App\Models\CampanaProveedor;
use App\Models\Mantencion;
use App\Models\Proveedores;
use App\Models\CampanaSalas;
use App\Models\Zona;
use App\Models\User;
use App\Models\Salas;
use App\Models\UsuarioSalas;
use App\Models\CampanaComentario;
use App\Models\CampanaMaterial;
use App\Models\MantencionElementos;
use App\Models\MantencionComentarios;
use App\Models\Permisos;
use App\Models\PermisosRoles;
use Illuminate\Support\Facades\Mail;
use App\Mail\StoreMantencion;
use App\Mail\AprobarMantencion;
use App\Mail\RechazarMantencion;
use DB;
use PDF;
use Illuminate\Support\Facades\Auth;

class MantencionController extends Controller
{
    public function get_mantencion(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,700)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $validar->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
                $mantenciones = Mantencion::getMantenciones($salas_usuario, $admin);

				return response()->json($mantenciones, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
                return $e;
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}

        }else{
			return  $valida;
		}
    }

    public function get_mantencion_by_state(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,700)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $validar->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
                $mantenciones = Mantencion::getMantenciones($salas_usuario, $admin, $id);
                return response()->json($mantenciones, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}

        }else{
			return  $valida;
		}
    }

    public function get_mantencion_delete(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,700)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $validar->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
                $mantenciones = Mantencion::getMantencionesDelete($salas_usuario, $admin);
        
                return response()->json($mantenciones, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}

        }else{
			return  $valida;
		}
    }

    public function get_mantencion_dashboard(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,0)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $mantenciones = Mantencion::count();
                return response()->json($mantenciones, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return $e;
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }

        }else{
            return  $valida;
        }
    }

    public function edit_mantencion(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){

             try{
            //    if(!$validar->validar_permiso(Auth::user()->id,702)){
              //      return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
              //  }
                $mantencion = Mantencion::with('cadena')->with('user_crea')->with('user_modifica')->with('salas')->with('proveedor')->with('comentarios')->with('elementos')->with('estados')->where('id',$id)->first();
                return response()->json($mantencion, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function store_mantencion(Request $request)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        //return $request->proveedor[0]['id'];
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,701)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $mantencion = new Mantencion();
                $mantencion->asunto = $request->asunto;
                $mantencion->id_cadena = $request->cadena['id'];
                $mantencion->id_sala = $request->salas[0]['id'];
                $mantencion->id_mantencion_estado = 1;
                $mantencion->id_usuario_crear = Auth::user()->id;
                $mantencion->created_at = now();
                $mantencion->save();

                $date_elemento = now()->format('Y_m_d');
                $id = $mantencion->id;
                \Log::info('elementos');
                \Log::info($id);
                \Log::info($request->objElementos);
                foreach ($request->objElementos as $key => $value) {

                    if(!$validar->validar_extencion_archivo($value,false)){
                        throw new \Exception("Invalid File");
                    }

                    $ext = pathinfo($value['name_archivo'], PATHINFO_EXTENSION);
                    $name = uniqid().".".$ext;

                    if(!is_dir("Mantencion/"))
                        mkdir("Mantencion/", 0777);
                    if(!is_dir("Mantencion/$id"))
                        mkdir("Mantencion/$id", 0777);
                    if(!is_dir("Mantencion/$id/$date_elemento"))
                        mkdir("Mantencion/$id/$date_elemento", 0777);
                    $destinationPath = 'Mantencion/'.$id.'/'.$date_elemento.'/';
                    try{           
                        $filename2 = $name;
                        $url=$destinationPath.$filename2;
                        $content = $value['cdc64'];
                        $file_path = public_path($url);
                        file_put_contents($file_path, base64_decode($content));

                        $mantencion_elemento = new MantencionElementos();
                        $mantencion_elemento->id_mantencion = $id;
                        $mantencion_elemento->nombre = $value['name'];
                        $mantencion_elemento->name_archivo = $filename2;
                        $mantencion_elemento->url = $url;
                        $mantencion_elemento->id_usuario_crear = Auth::user()->id;
                        $mantencion_elemento->created_at = now();
                        $mantencion_elemento->medida   = $value['medida'];
                        $mantencion_elemento->save();
                    }catch(Exception $e){
                        \Log::info($e->getMessage()); 
                       continue;
                    }
                }
                if($request->comentario <> ''){
                    \Log::info('comentarios');
                    $campanas_comentario = new MantencionComentarios();
                    $campanas_comentario->id_mantencion = $id;
                    $campanas_comentario->comentario = $request->comentario;
                    $campanas_comentario->id_usuario_crear = Auth::user()->id;
                    $campanas_comentario->created_at = now();
                    $campanas_comentario->save();
                }

                \Log::info('mail');
                $permiso_roles = PermisosRoles::select('id_rol')->whereIn('id_permiso', [85, 86])->get();
                $usuarios = User::with('roles')->whereHas('roles', function ($query) use ($permiso_roles) {
                    $query->whereIn('roles.id',$permiso_roles);
                })->get();
                $sala= Salas::where('id',$request->salas[0]['id'])->first();
                \Log::info($usuarios);
                $mantencion = Mantencion::with('cadena')->with('user_crea')->with('user_modifica')->with('salas')->with('elementos')->with('estados')->where('id' , $mantencion->id)->first();
                $zona = Zona::find($mantencion->salas->first()->id)->nombre;
                foreach ($usuarios as $key => $usuario) {
                    $detalle_mail = [
                        'nombre_mantencion' => strtoupper($mantencion->asunto),
                        'nombre' => strtoupper($usuario->nombre." ".$usuario->apellido),
                        'nombre_sala' => strtoupper($sala->nombre_sap),
                        'fecha' => date('d-M-Y'),
                        'mantencion' => $mantencion , 
                        'zona' => $zona
                    ];
                    $this->enviar_email_mantencion($usuario->email,$detalle_mail);
                }
                \Log::info('fin mail');
                return response()->json($mantencion, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                \Log::info($e->getMessage());
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }  
        }
    }

    public function update_mantencion(Request $request,$id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,702)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $id = $request->id;
                $mantencion = Mantencion::where('id',$id)->update(array('id_mantencion_estado' => 1));
                foreach ($request->imgTodelete as $key => $imgId) {
                    $delete = MantencionElementos::where('id',$imgId)->delete();
                }

                $date_elemento = now()->format('Y_m_d');
                foreach ($request->objElementos as $key => $value) {

                    if(!$validar->validar_extencion_archivo($value,false)){
                        throw new \Exception("Invalid File");
                    }

                    $ext = pathinfo($value['name_archivo'], PATHINFO_EXTENSION);
                    $name = uniqid().".".$ext;

                    if(!is_dir("Mantencion/"))
                        mkdir("Mantencion/", 0777);
                    if(!is_dir("Mantencion/$id"))
                        mkdir("Mantencion/$id", 0777);
                    if(!is_dir("Mantencion/$id/$date_elemento"))
                        mkdir("Mantencion/$id/$date_elemento", 0777);
                    $destinationPath = 'Mantencion/'.$id.'/'.$date_elemento.'/';
                    try{           
                        $filename2 = $name;
                        $url=$destinationPath.$filename2;
                        $content = $value['cdc64'];
                        $file_path = public_path($url);
                        file_put_contents($file_path, base64_decode($content));

                        $mantencion_elemento = new MantencionElementos();
                        $mantencion_elemento->id_mantencion = $id;
                        $mantencion_elemento->nombre = $value['name'];
                        $mantencion_elemento->name_archivo = $filename2;
                        $mantencion_elemento->url = $url;
                        $mantencion_elemento->id_usuario_crear = Auth::user()->id;
                        $mantencion_elemento->created_at = now();
                        $mantencion_elemento->medida   = $value['medida'];
                        $mantencion_elemento->save();
                    }catch(Exception $e){
                        \Log::info($e->getMessage()); 
                       continue;
                    }
                }

                if($request->comentario <> ''){
                    \Log::info('comentarios');
                    $mantencion_comentario = new MantencionComentarios();
                    $mantencion_comentario->id_mantencion = $id;
                    $mantencion_comentario->comentario = $request->comentario;
                    $mantencion_comentario->id_usuario_crear = Auth::user()->id;
                    $mantencion_comentario->created_at = now();
                    $mantencion_comentario->save();
                }
                return response()->json($mantencion_comentario, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
            catch (\Exception $e){
                \Log::info($e->getMessage());
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }  
        }
    }

    public function delete_mantencion(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,703)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $user_update = Mantencion::where('id',$request->id)->delete();
                $mensaje ="OK";
                return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }

    public function mantencion_activate(Request $request, $id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,700)){
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

    public function mantencion_desactivate(Request $request, $id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,700)){
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

    public function up_mantencion(Request $request,$id)
    {   
        //return $request;
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,700)){
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

    public function get_elementos_mantencion(Request $request,$id){
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,700)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $campana = MantencionElementos::where('id_mantencion',$id)->get();

                $materiales = [];

                foreach ($campana as $key => $value) {

                    $file_url = public_path($value->url);
                    $doc = base64_encode(file_get_contents($file_url));
                    
                    $materiales[$key] = ['doc_64' => $doc, 'name' => $value->nombre, 'medida' => $value->medida, 'name_archivo'=> $value->name_archivo];
                }

                return response()->json($materiales, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }

        return "NO";
    }

    public function get_comentarios_mantencion(Request $request,$id){
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,700)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $campana = MantencionComentarios::select(DB::raw("
                    mantencion_comentario.id_mantencion as id_mantencion,
                    mantencion_comentario.comentario,
                    CONCAT(u.nombre, ' ', u.apellido) as usuario,
                    DATE_FORMAT(mantencion_comentario.created_at,'%d-%m-%Y %H:%i') as fecha
                "))
                ->join('usuarios as u','mantencion_comentario.id_usuario_crear','u.id')
                ->where('id_campana',$id)->orderBy('mantencion_comentario.created_at', 'desc')->get();

                

                return response()->json($campana, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }

        return "NO";
    }

    public function aprobar_mantencion(Request $request)
    {
        //return $request;
        $id = $request->id;
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,704)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $dataUpdate = array(
                    'id_mantencion_estado' => 4,
                    'fecha_implementacion'=> $request->fechaImplementacion,
                    'id_proveedor'=> $request->idProveeador[0]['id'],
                    'monto_cotizacion'=> $request->montoCootizacion,
                );
                $mantencion_aprobe = Mantencion::where('id',$id)->update($dataUpdate);

                if($request->comentario <> ''){
                    $mantencion_comentario = new MantencionComentarios();
                    $mantencion_comentario->id_mantencion = $id;
                    $mantencion_comentario->comentario = $request->comentario;
                    $mantencion_comentario->id_usuario_crear = Auth::user()->id;
                    $mantencion_comentario->created_at = now();
                    $mantencion_comentario->save();
                }

                $mantencion_comentario = new MantencionComentarios();
                $mantencion_comentario->id_mantencion = $id;
                $mantencion_comentario->comentario = strtoupper($request->user()->nombre).' '.strtoupper($request->user()->apellido).' Aprobo la solicitud.';
                $mantencion_comentario->id_usuario_crear = Auth::user()->id;
                $mantencion_comentario->created_at = now();
                $mantencion_comentario->save();

                \Log::info('mail');
                $mantencion = Mantencion::with('cadena')->with('user_crea')->with('user_modifica')->with('salas')->with('elementos')->with('estados')->where('id' , $id)->first();
                $zona = Zona::find($mantencion->salas->first()->id)->nombre;
                $usuario_creador= User::where('id',$mantencion->id_usuario_crear)->first();
                $detalle_mail = [
                    'nombre_mantencion' => strtoupper($mantencion->asunto),
                    'nombre' => strtoupper($usuario_creador->nombre." ".$usuario_creador->apellido),
                    'fecha' => date('d-M-Y'),
                    'mantencion' => $mantencion , 
                    'zona' => $zona
                ];
                $this->enviar_email_aprobar_mantencion($usuario_creador->email,$detalle_mail);
                \Log::info('fin');

                return response()->json($mantencion_aprobe, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                \Log::info($e->getMessage());
                return response()->json($e->getMessage(), 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }

        return "NO";
    }

    public function liberar_mantencion(Request $request)
    {
        //return $request;
        $id = $request->id;
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,714)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $dataUpdate = array(
                    'id_mantencion_estado' => 2,
                    // 'fecha_implementacion'=> $request->fechaImplementacion,
                    // 'id_proveedor'=> $request->idProveeador[0]['id'],
                    // 'monto_cotizacion'=> $request->montoCootizacion,
                );
                $mantencion_aprobe = Mantencion::where('id',$id)->update($dataUpdate);

                if($request->comentario <> ''){
                    $mantencion_comentario = new MantencionComentarios();
                    $mantencion_comentario->id_mantencion = $id;
                    $mantencion_comentario->comentario = $request->comentario;
                    $mantencion_comentario->id_usuario_crear = Auth::user()->id;
                    $mantencion_comentario->created_at = now();
                    $mantencion_comentario->save();
                }

                $mantencion_comentario = new MantencionComentarios();
                $mantencion_comentario->id_mantencion = $id;
                $mantencion_comentario->comentario = strtoupper($request->user()->nombre).' '.strtoupper($request->user()->apellido).' Libero la solicitud.';
                $mantencion_comentario->id_usuario_crear = Auth::user()->id;
                $mantencion_comentario->created_at = now();
                $mantencion_comentario->save();

                \Log::info('mail');
                $mantencion = Mantencion::with('cadena')->with('user_crea')->with('user_modifica')->with('salas')->with('elementos')->with('estados')->where('id' , $id)->first();
                $zona = Zona::find($mantencion->salas->first()->id)->nombre;
                $usuario_creador= User::where('id',$mantencion->id_usuario_crear)->first();
                $detalle_mail = [
                    'nombre_mantencion' => strtoupper($mantencion->asunto),
                    'nombre' => strtoupper($usuario_creador->nombre." ".$usuario_creador->apellido),
                    'fecha' => date('d-M-Y'),
                    'mantencion' => $mantencion , 
                    'zona' => $zona
                ];
                $this->enviar_email_aprobar_mantencion($usuario_creador->email,$detalle_mail);
                \Log::info('fin');

                return response()->json($mantencion_aprobe, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                \Log::info($e->getMessage());
                return response()->json($e->getMessage(), 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }

        return "NO";
    }

    public function rechazar_mantencion(Request $request)
    {
        //return $request;
        $id = $request->id;
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,713)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $mantencion_rechazo = Mantencion::where('id',$id)->update(array('id_mantencion_estado' => 5));

                if($request->comentario <> ''){
                    $mantencion_comentario = new MantencionComentarios();
                    $mantencion_comentario->id_mantencion = $id;
                    $mantencion_comentario->comentario = $request->comentario;
                    $mantencion_comentario->id_usuario_crear = Auth::user()->id;
                    $mantencion_comentario->created_at = now();
                    $mantencion_comentario->save();
                }

                $mantencion_comentario = new MantencionComentarios();
                $mantencion_comentario->id_mantencion = $id;
                $mantencion_comentario->comentario = strtoupper($request->user()->nombre).' '.strtoupper($request->user()->apellido).' Rechazo la solicitud.';
                $mantencion_comentario->id_usuario_crear = Auth::user()->id;
                $mantencion_comentario->created_at = now();
                $mantencion_comentario->save();

                $mantencion = Mantencion::with('cadena')->with('user_crea')->with('user_modifica')->with('salas')->with('elementos')->with('estados')->where('id' , $id)->first();
                $zona = Zona::find($mantencion->salas->first()->id)->nombre;
                $usuario_creador= User::where('id',$mantencion->id_usuario_crear)->first();
                $detalle_mail = [
                    'nombre_mantencion' => strtoupper($mantencion->asunto),
                    'nombre' => strtoupper($usuario_creador->nombre." ".$usuario_creador->apellido),
                    'fecha' => date('d-M-Y'),
                    'motivo' => $request->comentario,
                    'mantencion' => $mantencion , 
                    'zona' => $zona
                ];
                $this->enviar_email_rechazar_mantencion($usuario_creador->email,$detalle_mail);

                return response()->json($mantencion_rechazo, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                \Log::info($e->getMessage());
                dd($e);
                return response()->json($e->getMessage(), 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }

        return "NO";
    }

    public function devolver_mantencion(Request $request)
    {
        //return $request;
        $id = $request->id;
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,714)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $mantencion_rechazo = Mantencion::where('id',$id)->update(array('id_mantencion_estado' => 3));

                if($request->comentario <> ''){
                    $mantencion_comentario = new MantencionComentarios();
                    $mantencion_comentario->id_mantencion = $id;
                    $mantencion_comentario->comentario = $request->comentario;
                    $mantencion_comentario->id_usuario_crear = Auth::user()->id;
                    $mantencion_comentario->created_at = now();
                    $mantencion_comentario->save();
                }

                $mantencion_comentario = new MantencionComentarios();
                $mantencion_comentario->id_mantencion = $id;
                $mantencion_comentario->comentario = strtoupper($request->user()->nombre).' '.strtoupper($request->user()->apellido).' Devolvio la solicitud.';
                $mantencion_comentario->id_usuario_crear = Auth::user()->id;
                $mantencion_comentario->created_at = now();
                $mantencion_comentario->save();

                $mantencion = Mantencion::with('cadena')->with('user_crea')->with('user_modifica')->with('salas')->with('elementos')->with('estados')->where('id' , $id)->first();
                $zona = Zona::find($mantencion->salas->first()->id)->nombre;
                $usuario_creador= User::where('id',$mantencion->id_usuario_crear)->first();
                $detalle_mail = [
                    'nombre_mantencion' => strtoupper($mantencion->asunto),
                    'nombre' => strtoupper($usuario_creador->nombre." ".$usuario_creador->apellido),
                    'fecha' => date('d-M-Y'),
                    'motivo' => $request->comentario,
                    'mantencion' => $mantencion , 
                    'zona' => $zona
                ];
                $this->enviar_email_rechazar_mantencion($usuario_creador->email,$detalle_mail);

                return response()->json($mantencion_rechazo, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                \Log::info($e->getMessage());
                dd($e);
                return response()->json($e->getMessage(), 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }

        return "NO";
    }

    public function finalizar_mantencion(Request $request,$id)
    {
        //return $request;
        \Log::info($id);
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,700)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $mantencion_rechazo = Mantencion::where('id',$id)->update(array('id_mantencion_estado' => 6));

                if($request->comentario <> ''){
                    $mantencion_comentario = new MantencionComentarios();
                    $mantencion_comentario->id_mantencion = $id;
                    $mantencion_comentario->comentario = $request->comentario;
                    $mantencion_comentario->id_usuario_crear = Auth::user()->id;
                    $mantencion_comentario->created_at = now();
                    $mantencion_comentario->save();
                }

                $mantencion_comentario = new MantencionComentarios();
                $mantencion_comentario->id_mantencion = $id;
                $mantencion_comentario->comentario = strtoupper($request->user()->nombre).' '.strtoupper($request->user()->apellido).' Finalizo la solicitud.';
                $mantencion_comentario->id_usuario_crear = Auth::user()->id;
                $mantencion_comentario->created_at = now();
                $mantencion_comentario->save();

                $mantencion  = Mantencion::where('id',$id)->first();
                $usuario_creador= User::where('id',$mantencion->id_usuario_crear)->first();
                $detalle_mail = [
                    'nombre_mantencion' => strtoupper($mantencion->asunto),
                    'nombre' => strtoupper($usuario_creador->nombre." ".$usuario_creador->apellido),
                    'fecha' => date('d-M-Y'),
                    'motivo' => $request->comentario
                ];

                // $this->enviar_email_finalizar_mantencion($usuario_creador->email,$detalle_mail);

                return response()->json($mantencion_rechazo, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                \Log::info($e->getMessage());
                dd($e);
                return response()->json($e->getMessage(), 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }

        return "NO";
    }

    public function generar_mantencion_pdf(Request $request , $idMantencion)
    {
        set_time_limit(14200);
        try{
            $mantencion = Mantencion::with('cadena')->with('user_crea')->with('user_modifica')->with('salas')->with('elementos')->with('estados')->where('id' , $idMantencion)->first();
            $sala = Salas::find($mantencion->id_sala);
            $zona = Zona::find($sala->id_zona)->nombre;
            $data = [ 'mantencion' => $mantencion , 'zona' => $zona,'sala' => $sala->display_nombre_sap ];
            $has = bin2hex(random_bytes(8));
            if(!is_dir("TmpCampanaMantencion/")){
                mkdir("TmpCampanaMantencion/", 0777);
            }
            $nombreMantenicon = $mantencion->id.'_'.str_replace(' ' , '_' , $mantencion->asunto).'_'.$has.'_.pdf';
            $route = public_path().'/TmpCampanaMantencion/'.$nombreMantenicon;
            $pdf = PDF::loadView('Pdf.Mantencion.detallemantencion', $data)->setPaper('letter', 'portrait')->save($route);
            $encode = base64_encode(file_get_contents($route));
            $dataReturn=[
                'nombre_archivo'=> $nombreMantenicon,
                'content'=>$encode
            ];
            return response()->json($dataReturn, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        }catch (\Exception $e){
            return $e;
        }
    }

    private function enviar_email_mantencion($to,$detalle_mail)
    {
        // Mail::to($to)->send(new StoreMantencion($detalle_mail));
        return true;
    }

    private function enviar_email_aprobar_mantencion($to,$detalle_mail)
    {
        // Mail::to($to)->send(new AprobarMantencion($detalle_mail));
        return true;

    }

    private function enviar_email_rechazar_mantencion($to,$detalle_mail)
    {
        return true;

        // Mail::to($to)->send(new RechazarMantencion($detalle_mail));
    }

    private function enviar_email_finalizar_mantencion($to,$detalle_mail)
    {
        return true;
        // Mail::to($to)->send(new RechazarMantencion($detalle_mail));
    }
}
