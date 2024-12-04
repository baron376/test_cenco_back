<?php

namespace App\Http\Controllers\Promotoras;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GeneralObetenerController;
use App\Models\Promotoras;
use App\Models\User;
use App\Models\UsuarioSalas;
use App\Models\PromotorasSalas;
use App\Models\Proveedores;
use App\Models\PromotorasMuebles;
use App\Models\PromotorasComentarios;
use DB;
use PDF;
use App\Mail\StoreCampanaPromotora;
use App\Mail\AprobarCampanaPromotora;
use App\Mail\RechazaCampanaPromotora;
use Illuminate\Support\Facades\Mail;


class PromotorasController extends Controller
{
    protected $urlFront = '';
    function __construct() {
        $this->urlFront = config('app.front');
    }
    public function get_promotoras(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
               // if(!$validar->validar_permiso(Auth::user()->id,515)){
                 //   return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                //}
                $usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $validar->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
                $promotoras = Promotoras::getCampanasPromotoras($admin);
				return response()->json($promotoras, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}

        }else{
			return  $valida;
		}
    }

    public function get_promotoras_dashboard(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
              //  if(!$validar->validar_permiso(Auth::user()->id,0)){
                //    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
               // }
                //$promotoras = Promotoras::count();
                $usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $validar->verificar_rol_administrador($usuario_rol->roles);
                $promotoras = Promotoras::getCampanasPromotoras($admin)->count();
				return response()->json($promotoras, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}

        }else{
			return  $valida;
		}
    }

    public function create_promotoras(Request $request)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,900)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $promotoras = new Promotoras();
                $promotoras->id_cadena      = $request->cadena['id'];
                $promotoras->nombre         = $request->name;
                $promotoras->desde          = $request->desde;
                $promotoras->hasta          = $request->hasta;
                $promotoras->id_proveedor   = $request->proveedor['id'];
                $promotoras->id_sesion      = $request->seccion['id'];
                $promotoras->id_turnos      = $request->id_turnos['id'];
                $promotoras->entrega_regalo = $request->entrega_regalo['id'];
                $promotoras->degustacion    = $request->degustacion['id'];
                $promotoras->material_externo = $request->materialInt['id'];
                $promotoras->descripcion    = $request->description;
                $promotoras->concurso_asociado = $request->concurso_asociado['id'];
                $promotoras->id_status_promotora = 1;
                $promotoras->id_etapa_promotora = 1;
               /* if( $request->concurso_asociado['id'] ==1 ){
                    $promotoras->id_etapa_promotora = 3;
                }
                if( $request->concurso_asociado['id'] ==0 && $request->materialInt['id']==0 ){
                    $promotoras->id_etapa_promotora = 3;
                }*/
                
                $promotoras->id_usuario_crear = Auth::user()->id;
                $promotoras->created_at = now();
                $promotoras->save();
               
                foreach($request->salas as $sala){
                    $promotoras_salas = new PromotorasSalas();
                    $promotoras_salas->id_promotoras = $promotoras->id;
                    $promotoras_salas->id_sala = $sala['id'];
                    $promotoras_salas->id_usuario_crear = Auth::user()->id;
                    $promotoras_salas->created_at = now();
                    $promotoras_salas->save();
                }

                if($promotoras->concurso_asociado === 1 || $promotoras->material_externo){
                    $name = now()->format('Y_m_d_s')."_".$request->name_archivo; 
                    $name = str_replace(' ', '_', $name);
                        if(!is_dir("BasesLegales"))
                            mkdir("BasesLegales", 0777);
                        if(!is_dir("BasesLegales/Promotoras"))
                            mkdir("BasesLegales/Promotoras", 0777);
                        if(!is_dir("BasesLegales/Promotoras/$promotoras->id"))
                            mkdir("BasesLegales/Promotoras/$promotoras->id", 0777);
                            $destinationPath = 'BasesLegales/Promotoras/'.$promotoras->id.'/';   
                            $filename = $name;
                            $url=$destinationPath.$filename;
                            $content = $request->archivo_64_sin_cabecera;
                            $file_path = public_path($url);
                            file_put_contents($file_path, base64_decode($content));
                    $promotoras->doc_bases_legales = $url;
                    $promotoras->save();
                }

                //if ($promotoras->id_etapa_promotora ==3){
                    $this->enviar_email_campana_promotora($promotoras);
                //}

                
                return response()->json($promotoras, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }  
        }
    }

    public function get_edit_promotoras(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){

            try{
         //       if(!$validar->validar_permiso(Auth::user()->id,515)){
           //         return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
             //   }
                $promotoras = Promotoras::withTrashed()
                ->with('cadena')
                ->with('proveedor')
                ->with('sesion')
                ->with('turno')
                ->with('user_crea')
                ->with('user_modifica')
                ->with('salas')
                ->with('muebles')
                ->with('etapa_promotora')
                ->with('estado')
                ->where('id',$id)->first();
                
                return response()->json($promotoras, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function update_promotoras(Request $request,$id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,901)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $promotoras = Promotoras::find($id);
                $promotoras->id_cadena      = $request->cadena['id'];
                $promotoras->nombre         = $request->name;
                $promotoras->desde          = $request->desde;
                $promotoras->hasta          = $request->hasta;
                $promotoras->id_proveedor   = $request->proveedor['id'];
                $promotoras->id_sesion      = $request->seccion['id'];
                $promotoras->id_turnos      = $request->id_turnos['id'];
                $promotoras->entrega_regalo = $request->entrega_regalo['id'];
                $promotoras->degustacion    = $request->degustacion['id'];
                $promotoras->material_externo = $request->materialInt['id'];
                $promotoras->descripcion    = $request->description;
                $promotoras->concurso_asociado = $request->concurso_asociado['id'];
                $promotoras->id_usuario_modifica = Auth::user()->id;
                $promotoras->id_etapa_promotora = 1;
                // if( $request->concurso_asociado['id'] ==1 ){
                //     $promotoras->id_etapa_promotora = 3;
                // }
                // if( $request->concurso_asociado['id'] ==0 && $request->materialInt['id']==0 ){
                //     $promotoras->id_etapa_promotora = 3;
                // }
                $promotoras->save();
            
                $deleteSalas = PromotorasSalas::where('id_promotoras',$id)->delete();
                foreach($request->salas as $sala){
                    $promotoras_salas = new PromotorasSalas();
                    $promotoras_salas->id_promotoras = $promotoras->id;
                    $promotoras_salas->id_sala = $sala['id'];
                    $promotoras_salas->id_usuario_crear = Auth::user()->id;
                    $promotoras_salas->created_at = now();
                    $promotoras_salas->save();
                }
                return response()->json($promotoras, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }  
        }
    }

    public function delete_promotoras(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,905)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $promotoras_update = Promotoras::where('id',$request->id)->delete();
                $mensaje ="OK";
                return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }

    public function promotoras_activate(Request $request, $id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,906)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $promotoras = Promotoras::find($id);
                $promotoras->id_status_promotora = 1;
                $promotoras->id_usuario_modifica = Auth::user()->id;
                $promotoras->save();
                return response()->json($promotoras, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }            
        }else{
            return $valida;
        }
    }

    public function promotoras_desactivate(Request $request, $id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,906)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $promotoras = Promotoras::find($id);
                $promotoras->id_status_promotora = 2;
                $promotoras->id_usuario_modifica = Auth::user()->id;
                $promotoras->save();
                return response()->json($promotoras, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }            
        }else{
            return $valida;
        }
    }

    public function get_promotoras_elimninadas(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                //if(!$validar->validar_permiso(Auth::user()->id,515)){
                  //  return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
               // }
                $usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $validar->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
                $promotoras = Promotoras::getCampanasPromotoras($admin, true);
                return response()->json($promotoras, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}

        }else{
			return  $valida;
		}
    }

    public function promotoras_pendiente(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,906)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $validar->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
                $promotoras = Promotoras::with('cadena')
                            ->with('proveedor')
                            ->with('sesion')
                            ->with('zona')
                            ->with('user_crea')
                            ->with('user_modifica')
                            ->with('salas')
                            ->with('muebles')
                            ->with('etapa_promotora')
                            ->where('id_etapa_promotora',1)
                            ->when((Auth::user()->id),function($query) use ($admin,$salas_usuario) {
                                if($admin){

                                } 
                                elseif(Auth::user()->id_proveedor != NULL) {
                                    $query->where('id_proveedor',Auth::user()->id_proveedor);
                                }
                                else{
                                    $query->whereHas('salas', function ($query) use ($salas_usuario) {
                                        $query->whereIn('salas.id',$salas_usuario);
                                    });
                                }
                            })->get();
                return response()->json($promotoras, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }

        }else{
            return  $valida;
        }
    }

    public function up_muebles_promotoras(Request $request,$id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
                /*if(!$validar->validar_permiso(Auth::user()->id,906)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }*/
                $date_muebles = now()->format('Y_m_d');

                foreach ($request->imgTodelete as $key => $imgId) {
                    $delete = PromotorasMuebles::where('id',$imgId)->delete();
                }

                if($request->objMuebles[0]['cdc64'] <> null){

                    //$user_update = PromotorasMuebles::where('id_promotoras',$id)->delete();
                    
                    foreach ($request->objMuebles as $key => $value) {

                        if(!$validar->validar_extencion_archivo($value,false)){
                            throw new \Exception("Invalid File");
                        }

                        $ext = pathinfo($value['name_archivo'], PATHINFO_EXTENSION);
                        $name = uniqid().".".$ext;

                        if(!is_dir("Promotoras/"))
                            mkdir("Promotoras/", 0777);
                        if(!is_dir("Promotoras/$id"))
                            mkdir("Promotoras/$id", 0777);
                        if(!is_dir("Promotoras/$id/$date_muebles"))
                            mkdir("Promotoras/$id/$date_muebles", 0777);
                        $destinationPath = 'Promotoras/'.$id.'/'.$date_muebles.'/';
                        try{           
                            $filename2 = $name;
                            $url=$destinationPath.$filename2;
                            //return $url;
                            $content = $value['cdc64'];
                            $file_path = public_path($url);
                            file_put_contents($file_path, base64_decode($content));

                            $campanas_material = new PromotorasMuebles();
                            $campanas_material->id_promotoras = $id;
                            $campanas_material->nombre = $value['name'];
                            $campanas_material->name_archivo = $filename2;
                            $campanas_material->url = $url;
                            $campanas_material->id_usuario_crear = Auth::user()->id;
                            $campanas_material->created_at = now();
                            $campanas_material->medida   = $value['medida'];
                            $campanas_material->save();
                        }catch(\Exception $e){ 
                            return $e;//response()->json($e, 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                        }
                    }

                    return response()->json($campanas_material, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }else{
                    return response()->json("NO SE GUARDO EL ARCHIVO NO SE RECONOCE", 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
            }catch (\Exception $e){
                return $e;
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }  
        }
    }

    public function get_muebles_promotoras(Request $request,$id){
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
               // if(!$validar->validar_permiso(Auth::user()->id,515)){
                 //   return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
               // }
                $promotoras_muebles = PromotorasMuebles::where('id_promotoras',$id)->get();

                $muebles = [];

                foreach ($promotoras_muebles as $key => $value) {

                    $file_url = public_path($value->url);
                    $doc = base64_encode(file_get_contents($file_url));
                    $extension = pathinfo($file_url, PATHINFO_EXTENSION);
                    
                    $muebles[] = ['id' => $value->id, 'doc_64' => $doc, 'name' => $value->nombre, 'medida' => $value->medida, 'name_archivo'=> $value->name_archivo,'url'=> $value->url, 'extension' => $extension];
                }

                return response()->json($muebles, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }

        return "NO";
    }

    public function aprobar_promotoras(Request $request)
    {
        $id = $request->id;
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,902)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $promotoras_aprob = Promotoras::where('id',$id)->update(array('id_etapa_promotora' => 3,'id_usuario_modifica'=> Auth::user()->id));

                $promotoras  = Promotoras::where('id',$id)->first();
                $promotoras_pdf = Promotoras::with('cadena')
                            ->with('proveedor')
                            ->with('sesion')
                            ->with('user_crea')
                            ->with('user_modifica')
                            ->with('salas')
                            ->with('muebles')
                            ->with('etapa_promotora')
                            ->where('id',$id)->first();
                //$proveedor = Proveedores::where('id', $promotoras->id_proveedor)->first();
                $this->enviar_email_aprobar_campana_promotora($promotoras);
               
               /* $detalle_mail = [
                    'nombre_promotoras' => strtoupper($promotoras->nombre),
                    'nombre_proveedor' => $proveedor->nombre,
                    'fecha' => date('d-M-Y'),
                    'link' => 'test.promotoras.aprueba'
                ];

                $detalle_pdf = [
                    'nombre' => strtoupper($promotoras->nombre),
                    'etapa' => $promotoras_pdf->campana_etapa->nombre,
                    'cadena' => $promotoras_pdf->cadena->nombre,
                    'vigencia' => $promotoras_pdf->desde." al ".$promotoras_pdf->hasta,
                    'proveedor' => $promotoras_pdf->proveedor->nombre,
                    'seccion' => $promotoras_pdf->sesion->cdg_int."-".$promotoras_pdf->sesion->nombre,
                    'zona' => $promotoras_pdf->zona->nombre,
                    'sala' => $promotoras_pdf->salas[0]->nombre_sap,
                    'descripcion' => $promotoras_pdf->descripcion,
                ];*/
                //$this->enviar_email_aprobar_campana_promotora($promotoras);

                return response()->json($promotoras_aprob, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }

        return "NO";
    }

    public function rechazar_promotoras(Request $request)
    {
        $id = $request->id;
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,902)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $promotoras_rechaz = Promotoras::where('id',$id)->update(array('id_etapa_promotora' => 2,'id_usuario_modifica'=> Auth::user()->id));

                $promotoras  = Promotoras::where('id',$id)->first();
                $proveedor = Proveedores::where('id',$promotoras->id_proveedor)->first();
                $detalle_mail = [
                    'nombre_promotoras' => strtoupper($promotoras->nombre),
                    'nombre_proveedor' => $proveedor->nombre,
                    'fecha' => date('d-M-Y'),
                    'link' => 'test.campaña.rechaza'
                ];
                $promotoras->comentario_gestion = $request->comentario_gestion;
                $this->enviar_email_rechazar_campana_promotora($promotoras);

                return response()->json($promotoras_rechaz, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }

        return "NO";
    }
    public function get_comentarios_promotoras(Request $request,$id){
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
          //      if(!$validar->validar_permiso(Auth::user()->id,515)){
            //        return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
              //  }
                $campana = PromotorasComentarios::select(DB::raw("
                    promotoras_comentarios.id as id_camapana,
                    promotoras_comentarios.comentario,
                    CONCAT(u.nombre, ' ', u.apellido) as usuario,
                    DATE_FORMAT(promotoras_comentarios.created_at,'%d-%m-%Y %H:%i') as fecha
                "))
                ->join('usuarios as u','promotoras_comentarios.id_usuario_crear','u.id')
                ->where('id_promotoras',$id)->orderBy('promotoras_comentarios.created_at', 'desc')->get();

                

                return response()->json($campana, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }

        return "NO";
    }
    public function generar_campana_promotoras_pdf(Request $request , $idCampanaPromotora)
    {
        set_time_limit(14200);
        try{
            $campanaPromotora = Promotoras::where('id' , $idCampanaPromotora)->first();
            $urlQrcode = $this->urlFront.'/DowloadPdfCampanaPromotora-'.$campanaPromotora->id;
            $data = [
                'campana' => $campanaPromotora,
                'urlQrcode'=>$urlQrcode
            ];
            $has = bin2hex(random_bytes(8));
            if(!is_dir("TmpCampanaPromotoras/")){
                mkdir("TmpCampanaPromotoras/", 0777);
            }
                
            $nombreCampana = $campanaPromotora->id.'_'.str_replace(' ' , '_' , $campanaPromotora->nombre).'_'.$has.'_.pdf';
            $route = public_path().'/TmpCampanaPromotoras/'.$nombreCampana;
            $pdf = PDF::loadView('Pdf.Campana.detallecampanapromotora', $data)->setPaper('letter', 'portrait')->save($route);
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

    private function enviar_email_campana_promotora($campana)
    {
        //return $campana;
        $UserProveedorr = User::where('id_proveedor' , $campana->id_proveedor)->get();
        foreach ($UserProveedorr as $key => $value) {
            Mail::to($value->email)->send(new StoreCampanaPromotora($campana));
        }
        $userCreaCampana =  $UserProveedorr = User::where('id' , $campana->id_usuario_crear)->first();
        Mail::to($userCreaCampana->email)->send(new StoreCampanaPromotora($campana));
    }

    private function enviar_email_aprobar_campana_promotora($campana)
    {
        $UserProveedorr = User::where('id_proveedor' , $campana->id_proveedor)->get();
        foreach ($UserProveedorr as $key => $value) {
            Mail::to($value->email)->send(new AprobarCampanaPromotora($campana));
        }
        $usuarioActualSecion = User::where('id' , Auth::user()->id)->first(); 
        Mail::to($usuarioActualSecion->email)->send(new AprobarCampanaPromotora($campana));

        $userCreaCampana =  $UserProveedorr = User::where('id' , $campana->id_usuario_crear)->first();
        Mail::to($userCreaCampana->email)->send(new AprobarCampanaPromotora($campana));
    }

    private function enviar_email_rechazar_campana_promotora($campana)
    {
        $UserProveedorr = User::where('id_proveedor' , $campana->id_proveedor)->get();
        foreach ($UserProveedorr as $key => $value) {
            Mail::to($value->email)->send(new RechazaCampanaPromotora($campana));
        }
        $usuarioActualSecion = User::where('id' , Auth::user()->id)->first(); 
        Mail::to($usuarioActualSecion->email)->send(new RechazaCampanaPromotora($campana));

        $userCreaCampana =  $UserProveedorr = User::where('id' , $campana->id_usuario_crear)->first();
        Mail::to($userCreaCampana->email)->send(new RechazaCampanaPromotora($campana));
    }



}
