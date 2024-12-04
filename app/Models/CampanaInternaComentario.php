<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CampanaInternaComentario extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'campana_interna_comentario';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'id_campana_interna',
        'comentario',
        'id_usuario_crear',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function user()
	{
        return $this->belongsTo(User::class, 'id_usuario_crear', 'id')->with('salas');
	}
    
    public function materiales()
	{
    	return $this->hasMany(CampanaInternaMaterial::class,'id_comentario');
	}

    public function sala()
	{
        return $this->belongsTo(Salas::class, 'id_sala', 'id');
	}
}

