<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PromotorasSalas extends Model
{
    use HasFactory;
    protected $table = 'promotoras_salas';
    protected $primarykey = 'id';
    protected $fillable = [
        'id_promotoras',
        'id_sala',
        'id_usuario_crear',
        'id_usuario_modifica'
    ];
}
