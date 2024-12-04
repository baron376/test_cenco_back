<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class AlertaArchivosCampanasFaldones extends Model
{
    protected $table = 'alerta_archivos_campanas_faldones';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'estatus',
        'nombre',
        'descripcion',
        'validacion'
    ];
}
