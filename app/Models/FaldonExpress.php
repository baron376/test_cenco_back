<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaldonExpress extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'faldon_express';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'id_campana_estado',
        'id_cadena',
        'cadena',
        'id_sala',
        'locales',
        'id_medio_campana_faldones',
        'medio',
        'tipo_medio',
        'id_tipo_medio_campana_faldones',
        'id_tipo_volante_catalogo_campana_faldones',
        'tipo_volante_catalogo',
        'n_promocion',
        'id_seccion',
        'seccion',
        'nombre_generico_promocion',
        'sap',
        'cod_barra',
        'umb',
        'id_umb_faldones',
        'descripcion',
        'precio_referencia_moda',
        'id_tipo_promo',
        'tipo_promo',
        'id_combinacion',
        'combinacion',
        'tmp',
        'tc',
        'fecha_inicio_promo',
        'fecha_termino_promo',
        'id_formato', 
        'formato', 
        'id_plantilla',
        'plantilla',
        'qr',
       /*  'uso_catalogo',
        'explicacion',
        'cruce', */
        'id_usuario_crear',
        'id_usuario_modifica',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function estado_faldon()
    {
        return $this->belongsTo(CampanaEstado::class, 'id_campana_estado', 'id');
    }
    public function sala_faldon()
    {
        return $this->belongsTo(Salas::class, 'id_sala', 'id');
    }
    public function cadena_faldon()
    {
        return $this->belongsTo(Cadenas::class, 'id_cadena', 'id');
    }
    public function medio_faldon()
    {
        return $this->belongsTo(MedioCampanaFaldones::class, 'id_medio_campana_faldones', 'id');
    }
    public function tipo_medio_faldon()
    {
        return $this->belongsTo(TipoMedioCampanaFaldones::class, 'id_tipo_medio_campana_faldones', 'id');
    }
    public function tipo_volante_catalogo_faldon()
    {
        return $this->belongsTo(TipoVolanteCatalogoCampanaFaldones::class, 'id_tipo_volante_catalogo_campana_faldones', 'id');
    }
    public function seccion_faldon()
    {
        return $this->belongsTo(Secciones::class, 'id_seccion', 'id');
    }
    public function tipo_promo_faldon()
    {
        return $this->belongsTo(TipoPromoCampanaFaldones::class, 'id_tipo_promo', 'id');
    }
    public function combinacion_faldon()
    {
        return $this->belongsTo(CombinacionCampanaFaldones::class, 'id_combinacion', 'id');
    }
    public function formato_faldon()
    {
        return $this->belongsTo(FormatoTipo::class, 'id_formato' , 'id');
    }
    public function plantilla_faldon()
    {
        return $this->belongsTo(PlantillaTipo::class, 'id_plantilla', 'id');
    }
    public function umb_faldon()
    {
        return $this->belongsTo(UmbFaldones::class, 'id_umb_faldones', 'id');
    }
    public function usuario_crea_faldon()
    {
        return $this->belongsTo(User::class,'id_usuario_crear' , 'id');
    }
    public function usuario_modifica_faldon()
    {
        return $this->belongsTo(User::class, 'id_usuario_modifica' , 'id');
    }
}
