<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TpVisibilidadCampana extends Model
{
    protected $table = 'tp_visibilidad_campana';
    protected $fillable = [
    	'id',
		'name',
		'status',
		'created_at',
		'updated_at'
    ];

	public function salas()
    {
        return $this->belongsToMany(Salas::class, 'usuario_salas', 'id_usuario', 'id_sala')->withPivot('id_usuario');
    }
}
