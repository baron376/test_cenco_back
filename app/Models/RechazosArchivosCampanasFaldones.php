<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class RechazosArchivosCampanasFaldones extends Model
{
    protected $table = 'rechazos_archivos_campanas_faldones';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'estatus',
        'nombre',
        'descripcion',
        'validacion'
    ];
}
