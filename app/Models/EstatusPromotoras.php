<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstatusPromotoras extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'estatus_promotoras';
    protected $primarykey = 'id';
    protected $fillable = [
        'nombre',
        'descripcion',
        'id_usuario_crear',
        'id_usuario_modifica'
    ];
}
