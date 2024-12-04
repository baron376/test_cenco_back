<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstatusUsuarios extends Model
{
    use HasFactory;
    protected $table = 'estatus_usuarios';
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
