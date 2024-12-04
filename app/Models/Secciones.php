<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Secciones extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'secciones';
    protected $fillable = [
    	'id',
		'numero',
		'cdg_int',
		'descripcion',
		'nombre',
		'id_estatus_secciones',
		'id_usuario_crear',
		'id_usuario_modifica',
		'created_at',
		'updated_at',
		'deleted_at'
    ];

	public function promotoras() {
    	return $this->hasMany(Promotoras::class, 'id_sesion', 'id');
	}
	public function campanas() {
    	return $this->hasMany(CampanaProveedor::class, 'id_sesion', 'id');
	}

}
