<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ArchivosFaldonesData;
use App\Models\ArchivosFaldonesDataOriginal;
class ArchivosFaldones extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'archivos_faldones';
    protected $primarykey = 'id';
    protected $appends = ['productosOriginales' , 'ProductosValidados'];
    protected $fillable = [
        'id',
        'nombre',
        'extension',
        'tamano',
        'id_campana',
        'url',
        'id_estados_archivos_faldones',
        'id_estatus_archivos_faldones',
        'id_usuario_crear',
        'id_usuario_modifica',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public function alertas_productos()
    {
        return $this->hasMany(AlertaValidacionesArchivosCampanasFaldones::class, 'id_archivo','id');
    }
    public function rechazos_productos()
    {
        return $this->hasMany(RechazosValidacionesArchivosCampanasFaldones::class, 'id_archivo','id');
    }
    public function campana()
    {
        return $this->belongsTo(CampanaFaldon::class, 'id_campana', 'id');
    }
    public function estado()
    {
        return $this->belongsTo(EstadosArchivosFaldones::class, 'id_estados_archivos_faldones', 'id');
    }
    public function estatus()
    {
        return $this->belongsTo(EstatusArchivosFaldones::class, 'id_estatus_archivos_faldones', 'id');
    }
    public function usuario_crea()
    {
        return $this->belongsTo(User::class, 'id_usuario_crear', 'id');
    }
    public function usuario_modifica()
    {
        return $this->belongsTo(User::class, 'id_usuario_modifica', 'id');
    }
    public function getProductosOriginalesAttribute()
    {
        $regOriginales = ArchivosFaldonesDataOriginal::where('id_archivo' , $this->id)->with('seccion_string')->get();
        return $regOriginales;
    }
    public function getProductosValidadosAttribute()
    {
        $regValidos = ArchivosFaldonesData::where('id_archivo' , $this->id)->with('seccion_string')->get();
        return $regValidos;
    }
}
