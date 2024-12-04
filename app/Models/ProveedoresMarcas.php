<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProveedoresMarcas extends Model
{
    protected $table = 'proveedores_marcas';
    protected $fillable = ['id_proveedor' , 'id_marca'];
}