<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalasSeccionesCupo extends Model
{
    use HasFactory;
    protected $table = 'salas_secciones_cupo';
    protected $fillable = [
    	'id',
		'id_sala',
		'id_seccion',
        'cupo_promo',
		'id_usuario_crear',
		'created_at'
    ];

    public function sala()
    {
        return $this->belongsTo(Salas::class, 'id_sala', 'id'); 
    }
    public function seccion()
    {
        return $this->belongsTo(Secciones::class, 'id_seccion', 'id'); 
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