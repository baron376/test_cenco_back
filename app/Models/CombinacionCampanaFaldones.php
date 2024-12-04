<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CombinacionCampanaFaldones extends Model
{
    protected $table = 'combinacion_campana_faldones';
    protected $fillable = [
    	'id',
		'nombre',
		'descripcion',
		'created_at',
		'updated_at'
    ];
}
