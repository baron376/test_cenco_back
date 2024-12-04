<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioSalas extends Model
{
    use HasFactory;
    protected $table = 'usuario_salas';
    protected $fillable = [
    	'id',
		'id_usuario',
		'id_sala',
		'id_usuario_crear',
		'id_usuario_modifica',
		'created_at',
		'updated_at',
		'deleted_at'
    ];

    public function usuario()
	{
    	return $this->belongsTo(User::class, 'id_usuario', 'id');
	}

	public function salas()
	{
    	return $this->belongsTo(Salas::class, 'id_sala', 'id'); 
	}
}
