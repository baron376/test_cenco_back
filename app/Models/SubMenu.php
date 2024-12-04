<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    use HasFactory;
    protected $table = 'sub_menu';
    protected $fillable = [
    	'id',
		'id_modulo',
		'nombre',
		'descripcion',
		'id_usuario_crear',
		'id_usuario_modifica',
		'created_at',
		'updated_at',
		'deleted_at'
    ];

    public function permisos()
	{
    	return $this->hasMany(Permisos::class,'id_modulo','id_modulo');
	}

	public function modulo()
	{
    	return $this->hasMany(Modulos::class,'id','id_modulo');
	}
}
