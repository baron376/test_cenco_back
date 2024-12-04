<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use App\Models\UsuarioSalas;

class Zona extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'zona';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nombre',
        'id_session',
        'id_usuario_crear',
        'id_usuario_modifica',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function salas()
    {
        $usuario_rol = User::with('roles')->where('id',Auth::user()->id)->first();
        $admin =  $this->verificar_rol_administrador($usuario_rol->roles);
        $salas_usuario = UsuarioSalas::select('id_sala')->where('id_usuario',Auth::user()->id)->get();
        if($admin){
            return $this->hasMany(Salas::class, 'id_zona');
        }
        else{
            return $this->hasMany(Salas::class, 'id_zona')->whereIn('salas.id',$salas_usuario);
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
