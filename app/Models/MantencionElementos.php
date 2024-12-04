<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class MantencionElementos extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'mantencion_elementos';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'id_mantencion',
        'nombre',
        'url',
        'id_usuario_crear',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
