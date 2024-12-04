<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instaladores extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'instaladores';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nombre'
    ];
}
