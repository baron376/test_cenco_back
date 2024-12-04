<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Firebase\JWT\JWT;
use App\Models\Token;
use App\Models\User;
use App\Models\UsuarioSalas;
use App\Models\Roles;
use App\Models\Cadenas;
use App\Models\Salas;
use App\Models\Modulos;
use App\Models\Secciones;
use App\Models\Regiones;
use App\Models\Comunas;
use App\Models\Proveedores;
use App\Models\Instaladores;
use App\Models\Zona;
use App\Models\Turnos;
use App\Models\EspacioExibhisionCamapana;
use App\Models\MedioCampanaFaldones;
use App\Models\TipoMedioCampanaFaldones;
use App\Models\TipoVolanteCatalogoCampanaFaldones;
use App\Models\TipoPromoCampanaFaldones;
use App\Models\CombinacionCampanaFaldones;
use App\Models\SeccionEspacio;
use App\Models\ZonaExhibicion;
use App\Models\Material;
use App\Models\TipoSala;
use App\Models\TpCampana;
use App\Models\TpElementosCampana;
use App\Models\TpVisibilidadCampana;
use App\Models\SubSeccion;
use Illuminate\Support\Facades\Auth;


class GeneralObetenerController extends Controller
{
	public function get_prueba(){
		$users = User::with('cadenas')->with('salas')->with('usuario_estado')->with('roles')->get();
		return $users;
	}
	public function valida_token($token)
	{	
		$key = env('APIKEY');
		$key = "$2y$10$9vlt0f18Day0OCcA5Qb0B.E5Wb85dVXNA.2LAG9A1PzS2PcSK.7Wi";
		
		try{
    		$genera_token = JWT::decode($token, $key, array('HS256'));
			$app = $genera_token->app;
			$password = $genera_token->password;
			$valida_token = Token::where('app',$app)->where('passwd',$password)->where('token',$token)->get();
			if(sizeof($valida_token) == 0){
				return "NO";
				$mensaje = "Fallo el Token";
				return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}else{
				return 'OK';
			}
		}catch(\Exception $e) {
			$mensaje = "Fallo Token";
			return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
		}    	
	}
    public function create_toke(Request $request)
    {
    	$key = env('APIKEY');
    	$consult = Token::where('app',$request->app)->get();

    	if(sizeof($consult)>0){
    		return "Ya el nombre usuario existe";
    	}

		$token = array(
		    'app' => $request->app, 
		    'password' => $request->passwd
		);

		$jwt = JWT::encode($token, $key);
		
		$token_new = new Token();
		$token_new->app = $request->app;
		$token_new->passwd = $request->passwd;
		$token_new->token = $jwt;
		$token_new->id_usuario_crear = 1;
		$token_new->save();

        $mensaje =  "El token para el usuario es: \n ".$jwt;
		return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    public function get_verificar_token(Request $request)
    {
    	$key = env('APIKEY');
    	$token = $request->token;
    	$genera_token = JWT::decode($token, $key, array('HS256'));
    	$app = $genera_token->app;
    	$password = $genera_token->password;
    	$valida_token = Token::where('app',$app)->where('passwd',$password)->where('token',$token)->get();
    	
    	if(sizeof($valida_token) == 0){
    		$mensaje = "Fallo el Token";
			return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    	}else{
    		return "ok";
    	}
    }
    
    public function get_users(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$valida = $this->valida_token($token);

    	if($valida == 'OK'){
            try{
				$users = User::with('cadenas')->with('salas')->with('usuario_estado')->with('roles')->with('usuario_password')->get();
				return response()->json($users, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}
    }

    public function get_users_detail(Request $request,$id)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$users = User::with('cadenas')->with('salas')->with('usuario_estado')->with('roles')->with('usuario_password')->where('id',$id)->get();
				return response()->json($users, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}
    }

	public function get_roles(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$rol = Roles::where('rol_proveedor', 0)->with('permisos')->where('id_estatus_roles',1)->get();
				return response($rol, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}	
    }

	public function get_roles_proveedor(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
               			$admin =  $this->verificar_rol_administrador($usuario_rol->roles);
                                $rol = Roles::where('rol_proveedor', 1)->with('permisos')->where('id_estatus_roles',1)->get();                			 
                                if ($admin) {
				$rolAdProvicional = Roles::where('id', 1)->with('permisos')->where('id_estatus_roles',1)->first();
				$rol->push($rolAdProvicional);
			        }	
			return response($rol, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}	
    }

	public function get_cadenas(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$cadena = Cadenas::with('salas_cadena')->with('plantillas')->where('id_estatus_cadenas',1)->get();
				return response($cadena, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }

	public function get_cadenas_qr(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$cadena = Cadenas::where('qr_disponible' , 1)->with('salas_cadena')->with('plantillas')->where('id_estatus_cadenas',1)->get();
				return response($cadena, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }
	

	public function get_salas_for_cadena(Request $request,$id_cadena)
    {	
		$token = $request->header('AuthorizationFrontWeb');
    	$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $this->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
				$salas = Salas::with('salas_sesiones')->with('usuarios_sala')->with('cadenas_salas')->where('id_cadena',$id_cadena)
					->when((Auth::user()->id),function($query) use ($admin,$salas_usuario,$request) {
						if(!$admin){
							$query->whereHas('salas', function ($query) use ($salas_usuario) {
								$query->whereIn('salas.id',$salas_usuario);
							});
						} 
					})->get();
				return response($salas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }

	public function get_salas(Request $request)
    {	
		$token = $request->header('AuthorizationFrontWeb');
    	$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $this->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
				$salas = Salas::with('salas_sesiones')->with('usuarios_sala')->with('cadenas_salas')->where('id_estatus_salas',1)
						->when((Auth::user()->id),function($query) use ($admin,$salas_usuario,$request) {
							if(!$admin){
								$query->whereHas('salas', function ($query) use ($salas_usuario) {
									$query->whereIn('salas.id',$salas_usuario);
								});
							} 
						})->get();
				return response($salas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }

    public function get_modulos(Request $request)
    {	
		$token = $request->header('AuthorizationFrontWeb');
    	$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$modulo = Modulos::with('permisos')->with('submenu')->get();
				return response($modulo, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }

    public function get_sesiones(Request $request)
    {	
		$token = $request->header('AuthorizationFrontWeb');
    	$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$sesiones = Secciones::where('id_estatus_secciones',1)->get();
				return response($sesiones, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }

    public function get_regiones(Request $request)
    {	
		$token = $request->header('AuthorizationFrontWeb');
    	$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$sesiones = Regiones::with('provincias')->get();
				return response($sesiones, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }

    public function get_comunas(Request $request, $id_provincia)
    {	
		$token = $request->header('AuthorizationFrontWeb');
    	$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$sesiones = Comunas::where('id_provincia',$id_provincia)->get();
				return response($sesiones, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }

	public function get_comunas_ByRegion(Request $request, $id_region)
    {	
		$token = $request->header('AuthorizationFrontWeb');
    	$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$sesiones = Comunas::join('provincias', 'provincias.id', '=', 'comunas.id_provincia')->where('provincias.id_region', $id_region)->select("comunas.*")->get();
				\Log::info($sesiones);
				return response($sesiones, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				\Log::info($e->getMessage());
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }

	public function get_proveedores(Request $request)
    {	
		$token = $request->header('AuthorizationFrontWeb');
    	$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{

				$usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                                $proveedor = $this->verificar_rol_proveedor($usuario_rol->roles);                                                           
                                $admin =  $this->verificar_rol_administrador($usuario_rol->roles);
				if ($admin || !$proveedor) {

					$provedores = Proveedores::orderBy('nombre', 'asc')->get();
				}else{

					$provedores = Proveedores::where('id', Auth::user()->id_proveedor)->orderBy('nombre', 'asc')->get();
				}
				return response($provedores, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }

	public function get_instaladores(Request $request)
    {	
		$token = $request->header('AuthorizationFrontWeb');
    	$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$instaladores = Instaladores::get();
				return response($instaladores, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }

	public function get_zonas(Request $request)
    {	
		$token = $request->header('AuthorizationFrontWeb');
    	$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $this->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
				$zonas = Zona::with('salas')
					->when((Auth::user()->id),function($query) use ($admin,$salas_usuario,$request) {
						if(!$admin){
							$query->whereHas('salas', function ($query) use ($salas_usuario) {
								$query->whereIn('salas.id',$salas_usuario);
							});
						} 
					})
					->when(($request->id_cadena),function($query) use ($request) {
						$query->whereHas('salas', function ($query) use ($request) {
							$query->where('salas.id_cadena', $request->id_cadena);
						});
					})->get();
				return response($zonas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }

	public function get_tipo_sala(Request $request)
    {	
		$token = $request->header('AuthorizationFrontWeb');
    	$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
                $admin =  $this->verificar_rol_administrador($usuario_rol->roles);
                $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
				$tipo_salas = TipoSala::with('salas')
					->when((Auth::user()->id),function($query) use ($admin,$salas_usuario,$request) {
						if(!$admin){
							$query->whereHas('salas', function ($query) use ($salas_usuario) {
								$query->whereIn('salas.id',$salas_usuario);
							});
						} 
					})->get();
				return response($tipo_salas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e->getMessage(), 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }

    public function get_espacios_exibhicion(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$espacios = EspacioExibhisionCamapana::get();
				return response($espacios, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}	
    }

	public function get_espacios_exibhicion_by_seccion(Request $request, $id)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$valida = $this->valida_token($token);
    	if($valida == 'OK'){
            try{
				$espacios = EspacioExibhisionCamapana::join('seccion_espacio', 'id_espacio', '=', 'espacio_exhibicion.id')->where('id_seccion', $id)->select("espacio_exhibicion.*")->get();
				return response($espacios, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				\Log::info($e->getMessage());
				return response()->json($e, 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}	
    }

	public function get_zonas_exhibicion(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$zonas = ZonaExhibicion::get();
				return response($zonas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}	
    }

	public function get_zonas_exhibicion_by_espacio(Request $request, $id)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$zonas = ZonaExhibicion::join('espacio_zona_exhibicion', 'id_zona', '=', 'zona_exhibicion.id')->where('id_espacio', $id)->select("zona_exhibicion.*")->get();
				return response($zonas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}	
    }

	public function get_materiales_by_zona_exhibicion(Request $request, $id)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$valida = $this->valida_token($token);
    	if($valida == 'OK'){
            try{
				$zonas = Material::join('zona_material', 'id_material', '=', 'material.id')->where('id_zona', $id)->select("material.*")->get();
				return response($zonas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				\Log::info($e->getMessage());
				return response()->json($e, 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}	
    }

	public function get_medios(Request $request)
    {	
		$token = $request->header('AuthorizationFrontWeb');
    	$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$medios = MedioCampanaFaldones::get();
				return response($medios, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }

	public function get_tipos_medios(Request $request)
    {	
		$token = $request->header('AuthorizationFrontWeb');
    	$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$tiposMedios = TipoMedioCampanaFaldones::get();
				return response($tiposMedios, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }
	public function get_tipos_volantes_catalogos(Request $request)
    {	
		$token = $request->header('AuthorizationFrontWeb');
    	$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$tiposVolantes = TipoVolanteCatalogoCampanaFaldones::get();
				return response($tiposVolantes, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }

	public function get_tipos_promos(Request $request)
    {	
		$token = $request->header('AuthorizationFrontWeb');
    	$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$tiposPromos = TipoPromoCampanaFaldones::get();
				return response($tiposPromos, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }

	public function get_combinaciones(Request $request)
    {	
		$token = $request->header('AuthorizationFrontWeb');
    	$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$combinaciones = CombinacionCampanaFaldones::get();
				return response($combinaciones, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }

	
    public function verificar_rol_administrador($roles){
        foreach($roles as $rol){
            if($rol->administrador == 1){
                return true;
            }
        }
        return false;
    }


     public function verificar_rol_proveedor($roles){
        foreach($roles as $rol){
            if($rol->rol_proveedor == 1){
                return true;
            }
        }
        return false;
    }

	public function get_turnos(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$turnos = Turnos::get();
				return response($turnos, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }

	public function validar_extencion_archivo($archivo,$es_faldon){

        $ext = strtolower(pathinfo($archivo['name_archivo'], PATHINFO_EXTENSION));
		$check = false;

        if($es_faldon){
			if( $ext == 'xlsx' || $ext == 'xls'){
				$check = true;
			}
		}
		else{
			if( $ext == 'xlsx' || $ext == 'xls' || $ext == 'pdf' || $ext == 'jpg' || $ext == 'png' || $ext == 'ppt' || $ext == 'doc' || $ext == 'pptx' || $ext == 'jpeg'){
				$check = true;
			}
		}

		return $check;
    }

	public function validar_permiso($id,$id_permiso){

		$usuario_rol = User::with('roles')->where('id',$id)->first();
        $admin = $this->verificar_rol_administrador($usuario_rol->roles);
		$tiene_permiso = $admin ? true : false;

		if(!$tiene_permiso){
			foreach($usuario_rol->roles as $usuario_rol){
				foreach($usuario_rol->permisoss as $permiso){
					if($permiso->cdg == $id_permiso){
						$tiene_permiso = true;
					}
				}
			}
		}

		return $tiene_permiso ;
    }

	public function get_tp_campana(Request $request, $id)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$valida = $this->valida_token($token);
    	\Log::info($id);
    	if($valida == 'OK'){
            try{
				$campana = TpCampana::select('tp_campana.id', 'tp_campana.name')->join('r_visibilidad_campana as rv', 'tp_campana.id', '=', 'rv.id_tp_campana')
				->join('tp_visibilidad_campana as v', 'rv.id_tp_visibilidad', '=', 'v.id')
				->where('rv.id_tp_visibilidad', $id)
				->get();

				return response($campana, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }

	public function get_visibilidad_campana(Request $request)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$visibilidadCampanas = TpVisibilidadCampana::get();

				return response($visibilidadCampanas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}	
    }

	public function get_elementos_campana(Request $request, $id)
    {
		$token = $request->header('AuthorizationFrontWeb');
		$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$elementoCampanas = TpElementosCampana::select('tp_elementos_campana.id', 'tp_elementos_campana.name')
				->join('tp_campana as c', 'tp_elementos_campana.id_tp_campana', '=', 'c.id')
				->where('c.id', $id)
				->get();
				return response($elementoCampanas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 500, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return  $valida;
		}	
    }

	public function get_sesiones_espacios(Request $request, $id)
    {	
		\Log::info('vino al  get_sesiones_espacios');
		$token = $request->header('AuthorizationFrontWeb');
    	$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$sesiones = Secciones::join('seccion_espacio', 'id_seccion', '=', 'secciones.id')->where('id_espacio', $id)->where('id_estatus_secciones',1)->select("secciones.*")->get();
				return response($sesiones, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }

	public function get_sub_sesiones(Request $request, $id)
    {	
		\Log::info('vino al  get_sub_sesiones');
		$token = $request->header('AuthorizationFrontWeb');
    	$valida = $this->valida_token($token);
    	
    	if($valida == 'OK'){
            try{
				$subseccion = SubSeccion::where('seccion_id', $id)->get();
				return response($subseccion, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE); 
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
    	}else{
			return $valida;
    	}
    }
}
