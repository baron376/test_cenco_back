<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalasSesiones extends Model
{
    use HasFactory;
    protected $table = 'salas_sesiones';
    protected $fillable = [
    	'id',
		'id_sala',
		'id_sesion',
		'id_usuario_crear',
		'id_usuario_modifica',
		'created_at',
		'updated_at',
		'deleted_at'
    ];

	public function sala()
    {
        return $this->belongsTo(Salas::class, 'id_sala', 'id'); 
    }
    public function seccion()
    {
        return $this->belongsTo(Secciones::class, 'id_sesion', 'id'); 
    }
	public function usuario_crea()
    {
        return $this->belongsTo(User::class,'id_usuario_crear' , 'id');
    }
    public function usuario_modifica()
    {
        return $this->belongsTo(User::class, 'id_usuario_modifica' , 'id');
    }
}
