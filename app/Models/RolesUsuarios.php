<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolesUsuarios extends Model
{
    use HasFactory;
    protected $table = 'roles_usuarios';
    protected $fillable = [
    	'id',
		'id_rol',
		'id_usuario',
		'id_usuario_crear',
		'id_usuario_modifica',
		'created_at',
		'updated_at'
    ];
}
