<?php

namespace App\Http\Controllers\CampanaInterna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\GeneralObetenerController;
use App\Models\CampanaInterna;
use App\Models\Proveedores;
use App\Models\CampanaInternaSalas;
use App\Models\Zona;
use App\Models\User;
use App\Models\UsuarioSalas;
use App\Models\CampanaInternaMaterial;
use App\Models\CampanaInternaComentario;
use Illuminate\Support\Facades\Mail;
use App\Mail\StoreCampanaInterna;
use App\Mail\AprobarCampanaInterna;
use App\Mail\RechazarCampanaInterna;
use DB;
use Illuminate\Support\Facades\Auth;

class CampanaInternaController extends Controller
{
    public function get_campana_interna(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,800)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $validar->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
                $campanas = CampanaInterna::getCampanas($salas_usuario, $admin);
                              
				return response()->json($campanas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
                return $e;
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}

        }else{
			return  $valida;
		}
    }

    public function get_campana_interna_dashboard(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,0)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $campanas = CampanaInterna::count();
				return response()->json($campanas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
                return $e;
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}

        }else{
			return  $valida;
		}
    }

    public function get_campana_interna_elimninadas(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,800)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $validar->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
                $campanas = CampanaInterna::getCampanasDeleted($salas_usuario, $admin);
              
                return response()->json($campanas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}

        }else{
			return  $valida;
		}
    }

    public function comentario_campana_interna(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,800)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $data = CampanaInternaComentario::with('user')->with('materiales')->with('sala')->where('id_campana_interna',$id)->get();
				return response()->json($data, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
                return $e;
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}

        }else{
			return  $valida;
		}
    }

    public function comentario_campana_interna_deleted(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,800)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $data = CampanaInternaComentario::onlyTrashed()->with('user')->with('sala')->with('materiales')->where('id_campana_interna',$id)->get();
				return response()->json($data, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
                return $e;
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}

        }else{
			return  $valida;
		}
    }

    public function edit_campana_interna(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){

            try{
           //     if(!$validar->validar_permiso(Auth::user()->id,802)){
             //       return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
               // }
                $campanas = CampanaInterna::withTrashed()->with('cadena')->with('instalador')->with('sesion')->with('zona')->with('user_crea')->with('user_modifica')->with('salas')->with('materiales')->with('campana_estado')->with('campana_etapa')->with('zona')->with('comentarios')->where('id',$id)->first();
                //return $campanas;
                return response()->json($campanas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function generar_materiales(Request $request , $idCampana)
    {
        $arrayRutas = [];
        $campana = CampanaInterna::where('id', $idCampana)->first();
        $materiales = CampanaInternaMaterial::where('id_campana_interna' , $idCampana)->get();
         try{
            if(!$validar->validar_permiso(Auth::user()->id,800)){
                return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
            foreach ($materiales as $clave => $productoFaldon) {
                $plantillaCorrecta = CadenaPlantillaFormatoTipoPromoTexto::
                where('id_cadena' ,  $productoFaldon->id_cadena)
                ->where('id_plantilla' ,  $productoFaldon->id_plantilla)
                ->where('id_formato' ,  $productoFaldon->id_formato)
                ->where('id_tipo_promo' ,  $productoFaldon->id_tipo_promo)
                ->where('texto_largo' ,  $productoFaldon->texto_largo)
                ->where('qr' ,  $productoFaldon->qr)
                ->first();
                $plantillaPdf =  $plantillaCorrecta->plantilla_blade_pdf;

                $data = [
                'product' => [$productoFaldon]
                ];
                $has = bin2hex(random_bytes(8));
                $route = public_path().'/TmpFaldones/'.$has.'.pdf';
                $arrayRutas[] =  $route;
                $pdf = PDF::loadView($plantillaPdf, $data)->setPaper('A4', 'portrait')->save($route);
            }
            $hastt = bin2hex(random_bytes(16)); 
            $pathForTheMergedPdf = public_path().'/'.$hastt.'.pdf';

          
                    $fileArray= $arrayRutas;
                    $datadir = public_path()."/TmpFaldones/";
                    $outputName = $pathForTheMergedPdf;

                    $cmd = "gs -q -dNOPAUSE -dBATCH -sDEVICE=pdfwrite -sOutputFile=$outputName ";
                    foreach($fileArray as $file) {
                        $cmd .= $file." ";
                    }
                    $result = Shell_exec($cmd);

            $encode = base64_encode(file_get_contents($pathForTheMergedPdf));
            $dataReturn=[
                'nombre_archivo'=> $campana->nombre,
                'content'=>$encode
            ];
            return response()->json($dataReturn, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
           // return $cmd;
        }catch (\Exception $e){
            return $e;
        }
    }

    public function campana_interna_ultimo_archivo(Request $request , $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                $maxId = CampanaInternaMaterial::where('id_campana_interna',$id)->max('id');
				$formato = CampanaInternaMaterial::where('id',$maxId)->first();
                $fileUb = public_path($formato->url);
                $doc = base64_encode(file_get_contents($fileUb));
                $formato->file_64 =  $doc;
				return response()->json($formato, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }

    public function store_campana_interna(Request $request)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        //return $request->proveedor[0]['id'];
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,801)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $campana_interna = new CampanaInterna();
                $campana_interna->id_cadena = $request->cadena['id'];
                $campana_interna->nombre = $request->name;
                $campana_interna->desde = $request->desde;
                $campana_interna->hasta = $request->hasta;
                $campana_interna->id_instalador = $request->instalador[0]['id'];
                // $campana_interna->id_sesion = $request->seccion[0]['id'];
                // $campana_interna->id_zona = $request->zona[0]['id'];
                $campana_interna->descripcion = $request->description;
                $campana_interna->id_estado_campana = 1;
                $campana_interna->id_status_campana = 1;
                $campana_interna->id_etapa = 1;
                $campana_interna->id_usuario_crear = Auth::user()->id;
                $campana_interna->created_at = now();
                $campana_interna->save();
                //return $campana_interna;
                foreach($request->salas as $sala){
                    $campana_sala = new CampanaInternaSalas();
                    $campana_sala->id_campana_interna = $campana_interna->id;
                    $campana_sala->id_sala = $sala['id'];
                    $campana_sala->id_usuario_crear = Auth::user()->id;
                    $campana_sala->created_at = now();
                    $campana_sala->save();
                }

                $date_elemento = now()->format('Y_m_d');
                $id = $campana_interna->id;
                foreach ($request->objElementos as $key => $value) {

                    if(!$validar->validar_extencion_archivo($value,false)){
                        throw new \Exception("Invalid File");
                    }

                    $ext = pathinfo($value['name_archivo'], PATHINFO_EXTENSION);
                    $name = uniqid().".".$ext;

                    if(!is_dir("CampanaInterna/"))
                        mkdir("CampanaInterna/", 0777);
                    if(!is_dir("CampanaInterna/$id"))
                        mkdir("CampanaInterna/$id", 0777);
                    if(!is_dir("CampanaInterna/$id/$date_elemento"))
                        mkdir("CampanaInterna/$id/$date_elemento", 0777);
                    $destinationPath = 'CampanaInterna/'.$id.'/'.$date_elemento.'/';
                    try{           
                        $filename2 = $name;
                        $url=$destinationPath.$filename2;
                        $content = $value['cdc64'];
                        $file_path = public_path($url);
                        file_put_contents($file_path, base64_decode($content));

                        $mantencion_elemento = new CampanaInternaMaterial();
                        $mantencion_elemento->id_campana_interna = $id;
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

                // \Log::info('mail');
                // $detalle_mail = [
                //     'nombre_campana' => strtoupper($request->name),
                //     'nombre_proveedor' => $request->proveedor[0]['nombre'],
                //     'fecha' => date('d-M-Y'),
                //     'link' => 'test.campaña'
                // ];
                // $this->enviar_email_campana_interna($request->proveedor[0]['email'],$detalle_mail);
                // $usuario_proveedor = User::where('id_proveedor',$request->proveedor[0]['id'])->get();
                // foreach($usuario_proveedor as $usuario) {
                //     $this->enviar_email_campana_interna($usuario->email,$detalle_mail);
                // }
                // \Log::info('end mail');

                return response()->json($campana_interna, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                \Log::info($e->getMessage());
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }  
        }
    }

    public function update_campana_interna(Request $request,$id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
            try{
             //   if(!$validar->validar_permiso(Auth::user()->id,802)){
               //     return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                //}
                foreach ($request->imgTodelete as $key => $imgId) {
                    $delete = CampanaInternaMaterial::where('id',$imgId)->delete();
                }
            
                $campana_interna = CampanaInterna::find($id);
                $campana_interna->id_cadena = $request->cadena['id'];
                $campana_interna->nombre = $request->name;
                $campana_interna->desde = $request->desde;
                $campana_interna->hasta = $request->hasta;
                $campana_interna->id_instalador = $request->instalador[0]['id'];
                // $campana_interna->id_sesion = $request->seccion[0]['id'];
                // $campana_interna->id_zona = $request->zona[0]['id'];
                $campana_interna->descripcion = $request->description;
                $campana_interna->id_usuario_modifica = Auth::user()->id;
                $campana_interna->created_at = now();
                $campana_interna->save();

                $campana_salas_delete = CampanaInternaSalas::where('id_campana_interna',$id)->delete();
                foreach($request->salas as $sala){
                    $campana_sala = new CampanaInternaSalas();
                    $campana_sala->id_campana_interna = $campana_interna->id;
                    $campana_sala->id_sala = $sala['id'];
                    $campana_sala->id_usuario_crear = Auth::user()->id;
                    $campana_sala->created_at = now();
                    $campana_sala->save();
                }

                $date_elemento = now()->format('Y_m_d');
                $id = $campana_interna->id;
                foreach ($request->objElementos as $key => $value) {

                    if(!$validar->validar_extencion_archivo($value,false)){
                        throw new \Exception("Invalid File");
                    }

                    $ext = pathinfo($value['name_archivo'], PATHINFO_EXTENSION);
                        $name = uniqid().".".$ext;

                    if(!is_dir("CampanaInterna/"))
                        mkdir("CampanaInterna/", 0777);
                    if(!is_dir("CampanaInterna/$id"))
                        mkdir("CampanaInterna/$id", 0777);
                    if(!is_dir("CampanaInterna/$id/$date_elemento"))
                        mkdir("CampanaInterna/$id/$date_elemento", 0777);
                    $destinationPath = 'CampanaInterna/'.$id.'/'.$date_elemento.'/';
                    try{           
                        $filename2 = $name;
                        $url=$destinationPath.$filename2;
                        $content = $value['cdc64'];
                        $file_path = public_path($url);
                        file_put_contents($file_path, base64_decode($content));

                        $mantencion_elemento = new CampanaInternaMaterial();
                        $mantencion_elemento->id_campana_interna = $id;
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
                return response()->json($campana_interna, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }  
        }
    }

    public function comment_campana_interna(Request $request,$id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

    	if($valida == 'OK'){
            try{

                if(!$validar->validar_permiso(Auth::user()->id,800)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }

                $comentario = new CampanaInternaComentario();
                $comentario->id_campana_interna = $request->id ;
                $comentario->id_sala = $request->id_sala ;
                $comentario->comentario = $request->comentario ;
                $comentario->id_usuario_crear = Auth::user()->id;
                $comentario->created_at = now();
                $comentario->save();
                
                $date_elemento = now()->format('Y_m_d');
                $id = $request->id;
                foreach ($request->objElementos as $key => $value) {       

                    if(!$validar->validar_extencion_archivo($value,false)){
                        throw new \Exception("Invalid File");
                    }
                    $ext = pathinfo($value['name_archivo'], PATHINFO_EXTENSION);
                    $name = uniqid().".".$ext;

                    if(!is_dir("CampanaInterna/"))
                        mkdir("CampanaInterna/", 0777);
                    if(!is_dir("CampanaInterna/$id"))
                        mkdir("CampanaInterna/$id", 0777);
                    if(!is_dir("CampanaInterna/$id/$date_elemento"))
                        mkdir("CampanaInterna/$id/$date_elemento", 0777);
                    $destinationPath = 'CampanaInterna/'.$id.'/'.$date_elemento.'/';
                    try{
                        $filename2 = $name;
                        $url=$destinationPath.$filename2;
                        $content = $value['cdc64'];
                        $file_path = public_path($url);
                        file_put_contents($file_path, base64_decode($content));

                        $mantencion_elemento = new CampanaInternaMaterial();
                        $mantencion_elemento->id_campana_interna = $request->id;
                        $mantencion_elemento->id_comentario = $comentario->id;
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
                return response()->json($comentario, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                \Log::info($e->getMessage());
                return response()->json($e->getMessage(), 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }  
        }
    }

    public function delete_campana_interna(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,803)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $user_update = CampanaInterna::where('id',$request->id)->delete();
                $mensaje ="OK";
                return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }
    public function delete_comentario_campana_interna(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,800)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $user_update = CampanaInternaComentario::where('id',$request->id)->delete();
                $mensaje ="OK";
                return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }

    public function campana_interna_activate(Request $request, $id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,800)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $campana = CampanaInterna::find($id);
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

    public function campana_interna_desactivate(Request $request, $id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,800)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $campana = CampanaInterna::find($id);
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

    public function campana_interna_pendiente(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,800)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $validar->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
                $campanas = CampanaInterna::with('cadena')->with('instalador')->with('sesion')->with('zona')->with('user_crea')->with('user_modifica')->with('salas')->with('materiales')->with('espacio_exhibicion')->with('campana_estado')->with('campana_etapa')->where('id_estado_campana',1)->where('id_etapa',1)
                            ->when((Auth::user()->id),function($query) use ($admin,$salas_usuario,$request) {
                                if(!$admin){
                                    $query->whereHas('salas', function ($query) use ($salas_usuario) {
                                        $query->whereIn('salas.id',$salas_usuario);
                                    });
                                } 
                            })->get();
                return response()->json($campanas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }

        }else{
            return  $valida;
        }
    }

    public function campana_interna_up(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,800)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $validar->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
                $campanas = CampanaInterna::with('cadena')->with('instalador')->with('sesion')->with('zona')->with('user_crea')->with('user_modifica')->with('salas')->with('materiales')->with('campana_estado')->with('campana_etapa')->with('espacio_exhibicion')->where('id_estado_campana',1)->where('id_etapa',2)
                            ->when((Auth::user()->id),function($query) use ($admin,$salas_usuario,$request) {
                                if(!$admin){
                                    $query->whereHas('salas', function ($query) use ($salas_usuario) {
                                        $query->whereIn('salas.id',$salas_usuario);
                                    });
                                } 
                            })->get();
                return response()->json($campanas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }

        }else{
            return  $valida;
        }
    }

    public function up_campana_interna(Request $request,$id)
    {   
        //return $request;
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,800)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                //return $request->objMateriales[0]['cdc64'];
                $date_material = now()->format('Y_m_d');

                if($request->objMateriales[0]['cdc64'] <> null){

                    $user_update = CampanaInternaMaterial::where('id_campana_interna',$id)->delete();
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

                            $campanas_material = new CampanaInternaMaterial();
                            $campanas_material->id_campana_interna = $id;
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
                        $campanas_comentario = new CampanaInternaComentario();
                        $campanas_comentario->id_campana_interna = $id;
                        $campanas_comentario->comentario = $request->comentario;
                        $campanas_comentario->id_usuario_crear = Auth::user()->id;
                        $campanas_comentario->created_at = now();
                        $campanas_comentario->save();
                    }
                    $campana_update = CampanaInterna::where('id',$id)->update(array('id_etapa' => 2));
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
                if(!$validar->validar_permiso(Auth::user()->id,800)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $campana = CampanaInternaMaterial::where('id_campana_interna',$id)->get();

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

    public function get_comentarios_campanas(Request $request,$id){
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);

        if($valida == 'OK'){
            try{
                if(!$validar->validar_permiso(Auth::user()->id,800)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $campana = CampanaInternaComentario::select(DB::raw("
                    campana_comentario.id as id_camapana,
                    campana_comentario.comentario,
                    CONCAT(u.nombre, ' ', u.apellido) as usuario,
                    DATE_FORMAT(campana_comentario.created_at,'%d-%m-%Y %H:%i') as fecha
                "))
                ->join('usuarios as u','campana_comentario.id_usuario_crear','u.id')
                ->where('id_campana_interna',$id)->orderBy('campana_comentario.created_at', 'desc')->get();

                

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
                if(!$validar->validar_permiso(Auth::user()->id,804)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $campana_aprobe = CampanaInterna::where('id',$id)->update(array('id_etapa' => 3,'id_usuario_modifica'=> Auth::user()->id));
                if($request->comentario_gestion <> ''){
                    $campanas_comentario = new CampanaInternaComentario();
                    $campanas_comentario->id_campana_interna = $id;
                    $campanas_comentario->comentario = $request->comentario_gestion;
                    $campanas_comentario->id_usuario_crear = Auth::user()->id;
                    $campanas_comentario->created_at = now();
                    $campanas_comentario->save();
                }

                $campanas_comentario = new CampanaInternaComentario();
                $campanas_comentario->id_campana_interna = $id;
                $campanas_comentario->comentario = strtoupper($request->user()->nombre).' '.strtoupper($request->user()->apellido).' Aprobo la campaña.';
                $campanas_comentario->id_usuario_crear = 1;
                $campanas_comentario->created_at = now();
                $campanas_comentario->save();

                \Log::info('mail aprobar');
                $campana  = CampanaInterna::where('id',$id)->first();
                $campana_pdf = CampanaInterna::with('cadena')->with('espacio_exhibicion')->with('instalador')->with('sesion')->with('zona')->with('user_crea')->with('user_modifica')->with('salas')->with('materiales')->with('campana_estado')->with('campana_etapa')->where('id',$id)->first();
                $proveedor = Proveedores::where('id', $campana->id_proveedor)->first();
                \Log::info($campana_pdf);
                $detalle_mail = [
                    'nombre_campana' => strtoupper($campana->nombre),
                    'nombre_proveedor' => $proveedor->nombre,
                    'fecha' => date('d-M-Y'),
                    'link' => 'test.campaña.aprueba'
                ];

                $detalle_pdf = [
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
                ];

                \Log::info($detalle_pdf);

                $this->enviar_email_aprobar_campana_interna($proveedor->email,$detalle_mail, $detalle_pdf);
                $usuario_proveedor = User::where('id_proveedor',$proveedor->id)->get();
                foreach($usuario_proveedor as $usuario) {
                    $this->enviar_email_aprobar_campana_interna($usuario->email,$detalle_mail,$detalle_pdf);
                }
                \Log::info('end mail aprobar');

                return response()->json($campana_aprobe, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                \Log::info($e->getMessage());
                dd($e);
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
                if(!$validar->validar_permiso(Auth::user()->id,804)){
                    return response()->json( "" ,409, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                $campana_aprobe = CampanaInterna::where('id',$id)->update(array('id_etapa' => 4,'id_usuario_modifica'=> Auth::user()->id));

                //$campana_aprobe = CampanaInterna::where('id',$id)->update(array('id_etapa' => 3,'id_usuario_modifica'=> Auth::user()->id));

                if($request->comentario_gestion <> ''){
                    $campanas_comentario = new CampanaInternaComentario();
                    $campanas_comentario->id_campana_interna = $id;
                    $campanas_comentario->comentario = $request->comentario_gestion;
                    $campanas_comentario->id_usuario_crear = Auth::user()->id;
                    $campanas_comentario->created_at = now();
                    $campanas_comentario->save();
                }

                $campanas_comentario = new CampanaInternaComentario();
                $campanas_comentario->id_campana_interna = $id;
                $campanas_comentario->comentario = strtoupper($request->user()->nombre).' '.strtoupper($request->user()->apellido).' Rechazo la campaña.';
                $campanas_comentario->id_usuario_crear = 1;
                $campanas_comentario->created_at = now();
                $campanas_comentario->save();

                \Log::info('mail rechazo');
                $campana  = CampanaInterna::where('id',$id)->first();
                $proveedor = Proveedores::where('id',$campana->id_proveedor)->first();
                $detalle_mail = [
                    'nombre_campana' => strtoupper($campana->nombre),
                    'nombre_proveedor' => $proveedor->nombre,
                    'fecha' => date('d-M-Y'),
                    'link' => 'test.campaña.rechaza'
                ];
                $this->enviar_email_rechazar_campana_interna($proveedor->email,$detalle_mail);
                $usuario_proveedor = User::where('id_proveedor',$proveedor->id)->get();
                foreach($usuario_proveedor as $usuario) {
                    $this->enviar_email_rechazar_campana_interna($usuario->email,$detalle_mail);
                }
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

    private function enviar_email_campana_interna($to,$detalle_mail)
    {
        Mail::to($to)->send(new StoreCampanaInterna($detalle_mail));
    }

    private function enviar_email_aprobar_campana_interna($to,$detalle_mail,$detalle_pdf)
    {
        Mail::to($to)->send(new AprobarCampanaInterna($detalle_mail,$detalle_pdf));
    }

    private function enviar_email_rechazar_campana_interna($to,$detalle_mail)
    {
        Mail::to($to)->send(new RechazarCampanaInterna($detalle_mail));
    }
}
