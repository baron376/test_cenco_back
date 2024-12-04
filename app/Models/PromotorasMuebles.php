<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PromotorasMuebles extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'promotoras_muebles';
    protected $primarykey = 'id';
    protected $fillable = [
        'id_promotoras',
        'nombre',
        'name_archivo',
        'medida',
        'url',
        'id_usuario_crear',
        'id_usuario_modifica'
    ];
}