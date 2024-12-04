<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CadenaPlantillaFormatoTipoPromoTexto extends Model
{
    protected $table = 'cadena_plantilla_formato_tipo_promo_texto';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'id_cadena',
        'id_plantilla',
        'id_tipo_promo',
        'id_formato',
        'texto_largo',
        'qr',
        'plantilla_blade_pdf',
        'url_ejemplo',
        'id_usuario_crear',
        'id_usuario_modifica',
        'created_at',
        'updated_at',
    ];

    public function formato()
    {
        return $this->belongsTo(FormatoTipo::class, 'id_formato' , 'id');
    }
}
