<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ZonaExhibicion extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'zona_exhibicion';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
