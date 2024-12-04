<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerifyLoginToken extends Model
{
    protected $table = 'verify_login_token';
    protected $fillable = [
    	'id',
		'hast_email',
		'app_token',
		'token_user',
		'type_register',
		'created_at',
		'updated_at',
    ];	
}
