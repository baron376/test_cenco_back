<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use DB;
class User extends Authenticatable
{
    use HasApiTokens,HasFactory, Notifiable, SoftDeletes;

    protected $table = 'usuarios';
    protected $fillable = ['nombre', 'apellido' , 'rut'  , 'dv' ,'email','password' , 'id_estatus_usuarios' , 'confirmado' , 'cdg_confirmacion' , 'remember_token' , 'id_usuario_crear' , 'id_usuario_modifica' , 'url_imagen' , 'ultimo_inicio' , 'id_proveedor'];
    protected $hidden = ['password', 'cdg_confirmacion', 'remember_token'];
    public function usuario_cadena()
    {
        return $this->hasMany(UsuarioCadena::class, 'id_usuario');
    }

    public function cadenas()
    {
        return $this->belongsToMany(Cadenas::class, 'usuario_cadenas', 'id_usuario', 'id_cadena')->withPivot('id_usuario');
    }

    public function usuario_roles()
    {
        return $this->belongsToMany(Roles::class, 'roles_usuarios', 'id_usuario', 'id_rol')->withPivot('id_usuario');
    }

    public function usuario_password()
    {
        return $this->hasMany(UsuarioPassword::class, 'id_usuario', 'id')->orderBy('created_at', 'desc')->take(3);
    }
    
    public function salas()
    {
        return $this->belongsToMany(Salas::class, 'usuario_salas', 'id_usuario', 'id_sala')->withPivot('id_usuario');
    }

    public function usuario_estado()
    {
        return $this->hasMany(EstatusUsuarios::class, 'id','id_estatus_usuarios');
    }

    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'roles_usuarios', 'id_usuario', 'id_rol')->withPivot('id_usuario');
    }
    
    public function proveedor()
    {
        return $this->belongsTo(Proveedores::class, 'id_proveedor', 'id');
    }

     public static function getUsers($statusActives)
    {
        $usersQuery = DB::table('usuarios')
        ->where('id_estatus_usuarios', $statusActives->id)
        ->whereNull('usuarios.deleted_at')
        ->whereNull('id_proveedor')
        ->leftJoin('usuario_cadenas', 'usuarios.id', '=', 'usuario_cadenas.id_usuario')
        ->leftJoin('cadenas', 'usuario_cadenas.id_cadena', '=', 'cadenas.id')
        ->leftJoin('roles_usuarios', 'usuarios.id', '=', 'roles_usuarios.id_usuario')
        ->leftJoin('roles', 'roles_usuarios.id_rol', '=', 'roles.id')
        ->groupBy('usuarios.id')
        ->select('usuarios.id as id', 'usuarios.nombre', 'usuarios.email', 'usuarios.rut', 'usuarios.apellido', 'usuarios.id_estatus_usuarios', 'usuarios.deleted_at', DB::raw('GROUP_CONCAT(DISTINCT cadenas.nombre SEPARATOR ",") as cadenas'), DB::raw('GROUP_CONCAT(DISTINCT roles.nombre SEPARATOR ",") as roles'))
        ->orderBy('usuarios.created_at', 'desc')
        ->get();
        
        return $usersQuery;
    }

    public static function getDeletedUsers()
    {
        $users = DB::table('usuarios')
        ->whereNotNull('usuarios.deleted_at') 
        ->whereNull('id_proveedor')
        ->leftJoin('usuario_cadenas', 'usuarios.id', '=', 'usuario_cadenas.id_usuario')
        ->leftJoin('cadenas', 'usuario_cadenas.id_cadena', '=', 'cadenas.id')
        ->leftJoin('roles_usuarios', 'usuarios.id', '=', 'roles_usuarios.id_usuario')
        ->leftJoin('roles', 'roles_usuarios.id_rol', '=', 'roles.id')
        ->groupBy('usuarios.id')
        ->select('usuarios.id as id', 'usuarios.nombre', 'usuarios.email', 'usuarios.rut', 'usuarios.apellido', 'usuarios.id_estatus_usuarios', 'usuarios.deleted_at', DB::raw('GROUP_CONCAT(DISTINCT cadenas.nombre SEPARATOR ",") as cadenas'), DB::raw('GROUP_CONCAT(DISTINCT roles.nombre SEPARATOR ",") as roles'))
        ->orderBy('usuarios.deleted_at', 'desc')
        ->get();
        
        return $users;
    }
}
