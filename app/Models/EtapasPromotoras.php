<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EtapasPromotoras extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'etapas_promotoras';
    protected $primarykey = 'id';
    protected $fillable = [
        'nombre',
        'id_usuario_crear',
        'id_usuario_modifica'
    ];
}