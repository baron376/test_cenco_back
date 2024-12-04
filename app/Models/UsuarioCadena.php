<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioCadena extends Model
{
    use HasFactory;
    protected $table = 'usuario_cadenas';
    protected $fillable = [
    	'id',
		'id_usuario',
		'id_cadena',
		'id_usuario_crear',
		'id_usuario_modifica',
		'created_at',
		'updated_at',
		'deleted_at'
    ];
}
