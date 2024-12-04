<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regiones extends Model
{
    use HasFactory;
    protected $table = 'regiones';
    protected $fillable = [
    	'id',
		'region_nombre',
		'region_ordinal',
		'id_usuario_crear',
		'id_usuario_modifica',
		'created_at',
		'updated_at',
		'deleted_at'
    ];
    public function provincias()
	{
    	//return $this->hasMany(Provincias::class,'id_region', 'id');
    	return $this->hasMany(Provincias::class, 'id_region');
	}
}
