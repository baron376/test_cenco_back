<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedioCampanaFaldones extends Model
{
    protected $table = 'medio_campana_faldones';
    protected $fillable = [
    	'id',
		'nombre',
		'descripcion',
		'created_at',
		'updated_at'
    ];
}
