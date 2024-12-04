<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CampanaComentario extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'campana_comentario';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'id_campana',
        'comentario',
        'id_usuario_crear',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}

