<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permisos extends Model
{
    use HasFactory;
    protected $table = 'permisos';
    protected $fillable = [
    	'id',
		'cdg',
		'nombre',
		'descripcion',
        'permiso_proveedor',
		'id_modulo',
		'id_usuario_crear',
		'id_usuario_modifica',
		'created_at',
		'updated_at',
		'deleted_at'
    ];

    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'permisos_roles', 'id_permiso', 'id_rol')->withPivot('id');
    }
	public function modulos()
    {
        return $this->belongsTo(Modulos::class , 'id_modulo');
    }    
}
