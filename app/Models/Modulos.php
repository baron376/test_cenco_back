<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulos extends Model
{
    use HasFactory;
    protected $table = 'modulos';
	protected $appends = ['permisosproveedor'];
    protected $fillable = [
		'id',
		'nombre',
		'descripcion',
		'id_usuario_crear',
		'id_usuario_modifica',
		'created_at',
		'updated_at'
    ];

    public function permisos()
	{
    	return $this->hasMany(Permisos::class,'id_modulo');
	}

	public function submenu()
	{
    	return $this->hasMany(SubMenu::class,'id_modulo');
	}
	public function getPermisosProveedorAttribute()
    {
        $permisos = Permisos::where('permiso_proveedor' , 1)->where('id_modulo',$this->id)->get();
        return $permisos;
    }
}
