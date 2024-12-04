<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductosRegistrados extends Model
{
    protected $table = 'productos_registrados';
    protected $fillable = [
		'id',
		'id_seccion',
		'cod_seccion',
		'nombre_generico_promocion',
		'sap',
		'cod_barra',
		'umb',
        'descripcion',
        'precio_referencia_moda',
        'id_usuario_crear',
        'id_usuario_modifica',
        'created_at',
        'updated_at',
    ];

}