<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\UsuarioSalas;
use Illuminate\Support\Facades\Auth;


class TipoSala extends Model
{
	use HasFactory, Notifiable, SoftDeletes;
    protected $table = 'tipo_sala';
    protected $fillable = [
    	'id',
		'nombre',
		'descripcion',
		'id_cadena',
		'created_at',
		'updated_at'
    ];

	public function salas()
    {
        $usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
        $admin =  $this->verificar_rol_administrador($usuario_rol->roles);
        $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
       
        if($admin){
			return $this->hasMany(Salas::class, 'id_tipo');
        }
        else{
			return $this->hasMany(Salas::class, 'id_tipo')->whereIn('id',$salas_usuario);
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
}
