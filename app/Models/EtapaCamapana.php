<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class EtapaCamapana extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'etapa_campana';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nombre',
        'id_usuario_crear',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

}
