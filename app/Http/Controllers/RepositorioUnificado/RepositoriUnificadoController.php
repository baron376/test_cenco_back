<?php

namespace App\Http\Controllers\RepositorioUnificado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GeneralObetenerController;
use App\Models\RepositorioUnificado;
use App\Models\Modulos;


class RepositoriUnificadoController extends Controller
{
    public function index(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
				$repositorios =  RepositorioUnificado::with('modulo_repositorio')->orderBy('created_at', 'desc')->get();

                $repositorio = [];

                foreach ($repositorios as $key => $value) {

                    $file_url = public_path($value->url);
                    $doc = base64_encode(file_get_contents($file_url));
                    $extension = pathinfo($file_url, PATHINFO_EXTENSION);
                    
                    $repositorio[] = ['id' => $value->id, 'doc_64' => $doc, 'nombre' => $value->nombre, 'fecha' => $value->created_at,  'nombre_archivo'=> $value->nombre_archivo,'url'=> $value->url, 'modulo' => $value->modulo_repositorio->nombre,  'extension' => $extension, 'descargable' => $value->descargable];
                }

				return response()->json($repositorio, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }

    public function get_modulos(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                $modulos = Modulos::select('id','nombre')->whereIn('id', [4,5,7] )->get();               
				return response()->json($modulos, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }

    public function store(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                $data = $request->all();
                $data['nombre_archivo'] = $request->url;
                $data['descargable'] = $request->descargable ? 1 : 0;


                $name = now()->format('Y_m_d_s')."_".$request->url; 
                $name = str_replace(' ', '_', $name);
                if(!is_dir("RepositorioUnificado"))
                    mkdir("RepositorioUnificado", 0777);;
                if(!is_dir("RepositorioUnificado/$request->nombre"))
                    mkdir("RepositorioUnificado/$request->nombre", 0777);
                    $destinationPath = 'RepositorioUnificado/'.$request->nombre.'/';   
                    $filename = $name;
                    $url=$destinationPath.$filename;
                    $content = $request->archivo_64;
                    $file_path = public_path($url);
                    file_put_contents($file_path, base64_decode($content));
                $data['url'] = $url;
                $data['id_usuario_crear'] = Auth::user()->id;
                $repositorio = RepositorioUnificado::create($data);
				
                \Log::info('Guardando', $request->all());

               
				return response()->json($repositorio, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
                \Log::info($e->getMessage());
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }

    public function edit(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
        if($valida == 'OK'){

            try{
         
                $repositorios = RepositorioUnificado::withTrashed()
                ->with('modulo_repositorio')
                ->where('id',$id)->first();
        
                $fileUb = public_path($repositorios->url);
                $doc = base64_encode(file_get_contents($fileUb));
                $repositorios->file_64 =  $doc;
                $extension = pathinfo($repositorios->url, PATHINFO_EXTENSION);
                
                return response()->json(['repositorios' => $repositorios, 'extension' => $extension], 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }
        }else{
            return $valida;
        }
    }

    public function update(Request $request , $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
                $repositorio = RepositorioUnificado::find($id);
                $repositorio->nombre_archivo = $request->url;
                $repositorio->nombre = $request->nombre;
                $repositorio->id_modulo = $request->id_modulo;
                $repositorio->descargable = $request->descargable ? 1 : 0;
                $repositorio->id_usuario_modifica = Auth::user()->id;
               
                $name = now()->format('Y_m_d_s')."_".$request->url; 
                $name = str_replace(' ', '_', $name);
                if(!is_dir("RepositorioUnificado"))
                    mkdir("RepositorioUnificado", 0777);;
                if(!is_dir("RepositorioUnificado/$request->nombre"))
                    mkdir("RepositorioUnificado/$request->nombre", 0777);
                    $destinationPath = 'RepositorioUnificado/'.$request->nombre.'/';   
                    $filename = $name;
                    $url=$destinationPath.$filename;
                    $content = $request->archivo_64;
                    $file_path = public_path($url);
                    file_put_contents($file_path, base64_decode($content));
                    $repositorio->url = $url;
                    $repositorio->save();

                //\Log::info('Guardando', $repositorio);

               
				return response()->json($repositorio, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
                \Log::info($e->getMessage());
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }


    public function get_repositorios_modulo(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
				
                $repositorios = RepositorioUnificado::where('id_modulo', '=' ,$id)->orderBy('id', 'desc')->get();
                
                 $repositorio = [];

                foreach ($repositorios as $key => $value) {

                    $file_url = public_path($value->url);
                    $doc = base64_encode(file_get_contents($file_url));
                    $extension = pathinfo($file_url, PATHINFO_EXTENSION);
                    
                    $repositorio[] = ['id' => $value->id, 'doc_64' => $doc, 'nombre' => $value->nombre,  'nombre_archivo'=> $value->nombre_archivo,'url'=> $value->url, 'modulo' => $value->modulo_repositorio->nombre,  'extension' => $extension, 'descargable' => $value->descargable];
                }

				return response()->json($repositorio, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}
        }else{
			return  $valida;
		}
    }


    public function delete(Request $request, $id)
    {
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
          
    	if($valida == 'OK'){
            try{
                
                $repositorio = RepositorioUnificado::where('id',$request->id)->delete();
                $mensaje ="OK";
                return response()->json($mensaje, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e->getMessage(), 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            } 
        }else{
            return $valida;
        }
    }
    
    
    
}

