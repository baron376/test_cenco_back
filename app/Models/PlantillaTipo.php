<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PlantillaTipo extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'plantilla_tipo';
    protected $primarykey = 'id';
    protected $appends = ['formatosqr'];
    protected $fillable = [
        'id',
        'descripcion',
        'id_estatus_plantilla_tipo',
        'id_usuario_crear',
        'qr_disponible',
        'id_usuario_modifica',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function getFormatosqrAttribute()
    {
        $formatosConQr = FormatoTipo::where('qr_disponible',1)->get();
        return $formatosConQr;
    }

    public function formatos()
    {
        return $this->belongsToMany(FormatoTipo::class, 'formatos_plantillas', 'id_plantilla', 'id_formato')->withPivot('id');
    }
}
