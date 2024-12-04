<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CampanaComentarioNew extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'campana_comentario_new';
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
