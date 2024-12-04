<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;
    protected $table = 'token';
    protected $fillable = [
    	'id',
		'app',
		'passwd',
		'token',
		'id_usuario_crear',
		'id_usuario_modifica',
		'created_at',
		'updated_at',
		'deleted_at'
    ];	
}
