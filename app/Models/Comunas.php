<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunas extends Model
{
    use HasFactory;
    protected $table = 'comunas';
    protected $fillable = [
    	'id',
		'comuna_nombre',
		'id_provincia',
		'id_usuario_crear',
		'id_usuario_modifica',
		'created_at',
		'updated_at',
		'deleted_at'
    ];
    public function provincias()
	{
    	return $this->belongsTo(Provincias::class, 'id_provincia', 'id');
	}

	public function regiones()
    {
        return $this->belongsToMany(Regiones::class, 'provincias', 'id_region', 'id')->withPivot('id');
    }
}
