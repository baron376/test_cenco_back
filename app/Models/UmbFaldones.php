<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UmbFaldones extends Model
{
    protected $table = 'umb_faldones';
    protected $fillable = [
    	'id',
		'nombre',
		'descripcion',
		'id_usuario_crear',
		'id_usuario_modifica',
		'created_at',
		'updated_at',
    ];
}
