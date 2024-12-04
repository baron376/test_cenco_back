<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class SeccionEspacio extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'seccion_espacio';
    protected $fillable = [
    	'id',
		'id_seccion',
		'id_espacio',
		'created_at',
		'updated_at',
		'deleted_at'
    ];
}
