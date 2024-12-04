<?php
namespace App\Http\Controllers\Faldones;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\GeneralObetenerController;
use App\Models\FormatoTipo;
use App\Models\PlantillaTipo;
class PlantillasController extends Controller
{
    public function get_plantillas(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
				$plantillas = PlantillaTipo::where('id_estatus_plantilla_tipo' , 1)->get();
				return response()->json($plantillas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}

        }else{
			return  $valida;
		}
    }
    public function get_plantillas_inactivas(Request $request)
    {
        $token = $request->header('AuthorizationFrontWeb');
		$validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        if($valida == 'OK'){
            try{
				$plantillas = PlantillaTipo::where('id_estatus_plantilla_tipo' , 2)->get();
				return response()->json($plantillas, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}catch (\Exception $e){
				return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
			}

        }else{
			return  $valida;
		}
    }
    public function desactivate_plantilla(Request $request, $id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                $id_plantilla = $id;
                $plantilla = PlantillaTipo::find($id);
                $plantilla->id_estatus_plantilla_tipo = 2;
                $plantilla->id_usuario_modifica =  $request->user()->id;
                $plantilla->save();
                return response()->json($plantilla, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }            
        }else{
            return $valida;
        }
    }
    public function activate_plantilla(Request $request, $id)
    {   
        $token = $request->header('AuthorizationFrontWeb');
        $validar = new GeneralObetenerController();
        $valida = $validar->valida_token($token);
        
    	if($valida == 'OK'){
            try{
                $id_plantilla = $id;
                $plantilla = PlantillaTipo::find($id);
                $plantilla->id_estatus_plantilla_tipo = 1;
                $plantilla->id_usuario_modifica =  $request->user()->id;
                $plantilla->save();
                return response()->json($plantilla, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }catch (\Exception $e){
                return response()->json($e, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
            }            
        }else{
            return $valida;
        }
    }

}