<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RechazosValidacionesArchivosCampanasFaldones extends Model
{
    protected $table = 'rechazos_validaciones_archivos_campanas_faldones';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'id_archivo',
        'id_rechazos_archivos_campanas_faldones',
        'descripcion',
        'numero_fila',
        'campo_asociado'
    ];
}
