<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cadenas extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'cadenas';
    protected $primarykey = 'id';
    protected $appends = ['plantillasqr'];
    protected $fillable = [
    	'id',
		'nombre',
		'descripcion',
		'id_estatus_cadenas',
		'id_usuario_crear',
		'id_usuario_modifica',
		'created_at',
		'updated_at',
		'deleted_at'
	];

    public function getPlantillasqrAttribute()
    {
        $plantillasConQr = PlantillaTipo::where('qr_disponible',1)->with('formatos')->get();
        return $plantillasConQr;
    }
	public function salas_cadena()
    {
        return $this->hasMany(Salas::class, 'id_cadena');
    }
    public function plantillas()
    {
        return $this->belongsToMany(PlantillaTipo::class, 'plantillas_cadenas', 'id_cadena', 'id_plantilla')->withPivot('id')->with('formatos');
    }
    public function usuario_cadena()
    {
        return $this->belongsToMany(User::class, 'usuario_cadenas', 'id_cadena', 'id_usuario')->withPivot('id_cadena');
    }

    public function estatus_cadena()
    {
        return $this->hasMany(EstatusCadenas::class, 'id','id_estatus_cadenas');
    }
}
