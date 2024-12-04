<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CampanaFaldonTipo extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'campana_faldon_tipo';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'descripcion',
        'id_estatus_campana_faldon_tipo',
        'id_usuario_crear',
        'id_usuario_modifica',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
