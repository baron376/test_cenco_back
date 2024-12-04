<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CampanaEstado extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'campana_estado';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'id_estatus_campana_estado',
        'id_usuario_crear',
        'id_usuario_modifica',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
