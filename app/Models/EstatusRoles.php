<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstatusRoles extends Model
{
    use HasFactory;
    protected $table = 'estatus_roles';
    protected $fillable = [
    	'id',
		'nombre',
		'descripcion',
		'id_usuario_crear',
		'id_usuario_modifica',
		'created_at',
		'updated_at',
		'deleted_at'
    ];
}
