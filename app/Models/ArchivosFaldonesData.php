<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class ArchivosFaldonesData extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'archivos_faldones_data';
    protected $primarykey = 'id';
    protected $appends = ['estadoPromocion'];
    protected $fillable = [
        'id',
        'id_archivo',
        'cadena',
        'locales',
        'medio',
        'tipo_medio',
        'tipo_volante_catalogo',
        'n_promocion',
        'seccion',
        'nombre_generico_promocion',
        'sap',
        'cod_barra',
        'umb',
        'descripcion',
        'precio_referencia_moda',
        'tipo_promo',
        'combinacion',
        'tmp',
        'tc',
        'fecha_inicio_promo',
        'fecha_termino_promo',
        'uso_catalogo',
        'explicacion',
        'cruce',
        'id_usuario_crear',
        'id_usuario_modifica',
        'created_at',
        'updated_at',
        'deleted_at',
        'cuotas',
        'valor_cuota',
        'costo_total',
        'cae',
        'puntos_cencosud',
        'puntos_otros_medios',
        'id_campana',
        'id_cadena',
        'id_plantilla',
        'id_formato',
        'id_tipo_promo', 
        'texto_largo'
    ];
    public function seccion_string()
    {
        return $this->belongsTo(Secciones::class, 'seccion', 'numero');
    }
    public function getEstadoPromocionAttribute()
    {
       $fI =  Carbon::parse($this->fecha_inicio_promo.'00:00:00');
       $fF =  Carbon::parse($this->fecha_termino_promo.'23:59:59');
       $hoy = Carbon::now();
       if($hoy >= $fI && $hoy <= $fF){
           return 'Activa';
       }else{
            return 'Inactiva';
       }
    }
}
