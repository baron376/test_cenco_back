<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class AlertaValidacionesArchivosCampanasFaldones extends Model
{
    protected $table = 'alerta_validaciones_archivos_campanas_faldones';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'id_archivo',
        'id_alerta_archivos_campana_faldones',
        'descripcion',
        'numero_fila',
        'campo_asociado'
    ];
}
