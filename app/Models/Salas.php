<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Salas extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'salas';
    protected $primarykey = 'id';
    protected $fillable = [
    	'id',
		'id_cadena',
		'cdg_local',
		'nombre_sap',
		'display_nombre_sap',
		'direccion',
		'id_comuna',
		'id_region',
        'id_provincia',
        'cupo_total_promo',
		'id_usuario_crear',
		'id_usuario_modifica',
		'created_at',
		'updated_at',
		'deleted_at'
    ];

    public function cadenas_salas()
	{
    	return $this->belongsTo(Cadenas::class, 'id_cadena', 'id'); /*1 A MUCHOS TABLA INTERMEDIA O MUCHOS A 1*/
	}

	public function salas_sesiones()
    {
        return $this->belongsToMany(Secciones::class, 'salas_sesiones', 'id_sala', 'id_sesion')->withPivot('id_sala');/*MUCHO A MUCHOS TABLA INTERMEDIA*/
    }

    public function usuarios_sala()
    {
        return $this->belongsToMany(User::class, 'usuario_salas', 'id_sala', 'id_usuario')->withPivot('id_sala');/*MUCHO A MUCHOS TABLA INTERMEDIA*/
    }

    public function region()
    {
        return $this->belongsTo(Regiones::class, 'id_region', 'id'); /*1 A MUCHOS TABLA INTERMEDIA O MUCHOS A 1*/
    }

    public function comunas()
    {
        return $this->belongsTo(Comunas::class, 'id_comuna', 'id'); /*1 A MUCHOS TABLA INTERMEDIA O MUCHOS A 1*/
    }

    public function provincia()
    {
        return $this->belongsTo(Provincias::class, 'id_provincia', 'id'); /*1 A MUCHOS TABLA INTERMEDIA O MUCHOS A 1*/
    }

    public function Zona()
    {
        return $this->belongsTo(Zona::class, 'id_zona', 'id');
    }

    public function tipo()
    {
        return $this->belongsTo(TipoSala::class, 'id_tipo', 'id');
    }

    public function campanas(){
        return $this->belongsToMany(CampanaProveedor::class, 'campana_salas', 'id_sala', 'id_campana')->withPivot('id_sala');
    }

    public function promotoras()
    {
        return $this->belongsToMany(Promotoras::class, 'promotoras_salas', 'id_sala', 'id_promotoras')->withPivot('id_sala');
    }

    public function faldones()
    {
        return $this->hasMany(CampanaFaldon::class, 'id_sala', 'id');
    }
    public function mantenciones()
    {
        return $this->hasMany(Mantencion::class, 'id_sala', 'id');
    }

    public function campanasInternas()
    {
        return $this->belongsToMany(CampanaInterna::class, 'campana_interna_salas', 'id_sala', 'id_campana_interna')->withPivot('id_sala');
    }

    public function faldonesExpress()
    {
        return $this->hasMany(FaldonExpress::class, 'id_sala', 'id');
    }

    public function campanas_proveedor_new(){
        return $this->belongsToMany(CampanaProveedorNew::class, 'campana_salas_new', 'id_sala', 'id_campana')->withPivot('id_sala');
    }

    public function campanaElementos()
    {
        return $this->hasMany(CampanaElementos::class, 'id_sala');
    }

}
