<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampanaZonasNew extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $table = 'campana_zonas_new';
    protected $fillable = [
        'id',
        'id_campana',
        'id_zona',
        'id_usuario_crear',
        'id_usuario_modifica',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
