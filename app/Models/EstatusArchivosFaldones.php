<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class EstatusArchivosFaldones extends Model
{
    protected $table = 'estatus_archivos_faldones';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'id_usuario_crear',
        'id_usuario_modifica',
    ];
}