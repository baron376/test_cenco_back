<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TpElementosCampana extends Model
{
    protected $table = 'tp_elementos_campana';
    protected $fillable = [
    	'id',
		'name',
		'status',
		'id_tp_campana',
		'created_at',
		'updated_at'
    ];
}
