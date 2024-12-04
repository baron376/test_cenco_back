<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class CampanaSalas extends Model
{
    use HasFactory;
    protected $table = 'campana_salas';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'id_campana',
        'id_sala',
        'id_usuario_crear',
        'id_usuario_modifica',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
