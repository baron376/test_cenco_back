<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class ArchivosFaldonesDataOriginal extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'archivos_faldon_data_original';
    protected $primarykey = 'id';
    protected $appends = ['estadoPromocion'];
    protected $fillable = [
        'id',
        'id_archivo',
        'numero_fila',
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
        'id_usuario_crear',
        'id_usuario_modifica',
        'estatus_registro',
        'cuotas',
        'valor_cuota',
        'costo_total',
        'cae',
        'qr',
        'puntos_cencosud',
        'puntos_otros_medios'
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
