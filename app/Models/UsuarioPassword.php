<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioPassword extends Model
{
    use HasFactory;
    protected $table = 'usuario_password';
    protected $fillable = ['id_usuario', 'password'];
}
