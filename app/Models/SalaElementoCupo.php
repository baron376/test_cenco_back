<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaElementoCupo extends Model
{
    use HasFactory;

    protected $table = 'sala_elemento_cupos';

    protected $fillable = [
        'id_sala',
        'id_elemento',
        'n_cupos',
    ];
}
