<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermisosRoles extends Model
{
    use HasFactory;
    protected $table = 'permisos_roles';
    protected $fillable = [
    	'id',
		'id_rol',
		'id_permiso',
		'id_usuario_crear',
		'id_usuario_modifica',
		'created_at',
		'updated_at',
		'deleted_at'
    ];
}
