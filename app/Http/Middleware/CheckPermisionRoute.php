<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CheckPermisionRoute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    protected $permisosConsultar;
   
    public function handle(Request $request, Closure $next , $stringPermisosCosultar)
    {
        $usuario =  User::where('id',Auth::user()->id)->first();
        $roles =  $usuario->roles;
        $arrayPermisosConsultar = explode(".", str_replace('"' , '' , $stringPermisosCosultar));
        $permitido = false;
        foreach ($roles as $key => $rol) {
            $permisos = $rol->permisoss;
            if($rol->administrador ==1){
                $permitido  =true;
                break;
            }
            foreach ($permisos as $key => $permi) {
                foreach ($arrayPermisosConsultar as $key => $pc) {
                    if ($permi->cdg == $pc ){
                        $permitido  =true;
                        break 3;
                    }
                }
            }
        }
        if (!$permitido) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }else{
            return $next($request);
        }
        
    }
}