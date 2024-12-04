<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CampanaInternaSalas extends Model
{
    use HasFactory;
    protected $table = 'campana_interna_salas';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'id_campana_interna',
        'id_sala',
        'id_usuario_crear',
        'id_usuario_modifica',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
