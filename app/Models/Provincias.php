<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincias extends Model
{
    use HasFactory;
    protected $table = 'provincias';
    protected $fillable = [
    	'id',
		'provincia_nombre',
		'id_region',
		'id_usuario_crear',
		'id_usuario_modifica',
		'created_at',
		'updated_at',
		'deleted_at'
    ];

    public function comunas()
	{
    	return $this->hasMany(Comunas::class,'id_provincia');
	}

	public function regiones()
	{
    	return $this->hasMany(Regiones::class,'id', 'id_region');
	}
}
