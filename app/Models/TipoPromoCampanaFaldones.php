<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPromoCampanaFaldones extends Model
{
    protected $table = 'tipo_promo_campana_faldones';
    protected $fillable = [
    	'id',
		'nombre',
		'descripcion',
		'created_at',
		'updated_at'
    ];
}
