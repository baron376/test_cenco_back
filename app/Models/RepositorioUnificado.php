<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RepositorioUnificado extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'repositorio_unificado';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nombre',
        'nombre_archivo',
        'url',
        'descargable',
        'id_modulo',
        'created_at',
        'updated_at',
        'deleted_at'
    ];


    public function modulo_repositorio()
    {
        return $this->belongsTo(Modulos::class, 'id_modulo', 'id');
    }
}
