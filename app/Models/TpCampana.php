<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TpCampana extends Model
{
    protected $table = 'tp_campana';
    protected $fillable = [
    	'id',
		'name',
		'status',
		'created_at',
		'updated_at'
    ];
}
