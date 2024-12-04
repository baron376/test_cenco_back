<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSeccion extends Model
{
    use HasFactory;
    protected $table = 'sub_secciones';
    protected $fillable = [
        'nombre',
        'seccion_id',
        'cdg_int_seccion',
        'estatus',
    ];

}