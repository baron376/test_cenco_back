<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CampanaMaterial extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'campana_material';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'id_campana',
        'nombre',
        'url',
        'id_usuario_crear',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
