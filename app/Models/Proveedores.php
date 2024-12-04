<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proveedores extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'proveedores';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nombre',
        'giro',
        'rut',
        'dv',
        'email',
        'id_usuario_crear',
        'id_usuario_modifica',
        'url_imagen',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function usuarios() {
        return $this->hasMany(User::class, 'id_proveedor', 'id');
    }

    public function promotoras(){
        return $this->hasMany(Promotoras::class, 'id_proveedor', 'id');
    }

    public function campanas(){
        return $this->hasMany(CampanaProveedor::class, 'id_proveedor', 'id');
    }

    public function campanas_proveedor_new(){
        return $this->hasMany(CampanaProveedorNew::class, 'id_proveedor', 'id');
    }

}

