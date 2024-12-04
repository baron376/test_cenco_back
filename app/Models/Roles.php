<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Roles extends Model
{
    use HasFactory, Notifiable, SoftDeletes;
    protected $table = 'roles';
	protected $appends = ['permisoss', 'permisosproveedor'];
    protected $fillable = [
    	'id',
		'nombre',
		'descripcion',
		'administrador',
		'id_estatus_roles',
		'id_usuario_crear',
		'id_usuario_modifica',
		'created_at',
		'updated_at',
		'deleted_at',
		'permisoss'
    ];
	public function getPermisossAttribute()
    {
        $idPermisos = PermisosRoles::where('id_rol',$this->id)->get()->pluck('id_permiso');
        $permisos = Permisos::whereIn('id',$idPermisos)->get();
        return $permisos;
    }
    
    public function permisos()
    {
        return $this->belongsToMany(Permisos::class, 'permisos_roles', 'id_rol', 'id_permiso')->withPivot('id');
    }

    public function getPermisosProveedorAttribute()
    {
        $idPermisos = PermisosRoles::where('id_rol',$this->id)->get()->pluck('id_permiso');
        $permisos = Permisos::where('permiso_proveedor' , 1)->whereIn('id',$idPermisos)->get();
        return $permisos;
    }
}
