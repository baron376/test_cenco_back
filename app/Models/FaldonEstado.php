<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaldonEstado extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'faldon_estado';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'id_estatus_faldon_estado',
        'id_usuario_crear',
        'id_usuario_modifica',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
