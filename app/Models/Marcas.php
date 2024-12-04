<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marcas extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'marcas';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nombre',
        'representante',
        'telefono',
        'email',
        'comentario',
        'id_estatus_marca',
        'id_usuario_autoriza',
        'id_usuario_crear',
        'id_usuario_modifica',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function usuario_crea_marca()
    {
        return $this->belongsTo(User::class,'id_usuario_crear' , 'id');
    }

    public function usuario_modifica_marca()
    {
        return $this->belongsTo(User::class,'id_usuario_modifica' , 'id');
    }

    public function usuario_autoriza_marca()
    {
        return $this->belongsTo(User::class,'id_usuario_autoriza' , 'id');
    }

    public function estado()
    {
        return $this->belongsTo(MarcasEstado::class,'id_estatus_marca' , 'id');
    }

    public function proveedor()
    {
    return $this->hasOne(ProveedoresMarcas::class, 'id_marca', 'id');
    }

}
