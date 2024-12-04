<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
class CampanaInterna extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'campana_interna';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'id_cadena',
        'nombre',
        'desde',
        'hasta',
        'id_instalador',
        'id_sesion',
        'id_zona',
        'descripcion',
        'id_estado_campana',
        'id_status_campana',
        'id_usuario_crear',
        'id_usuario_modifica',
        'created_at',
        'updated_at',
        'deleted_at',
        'id_etapa'
    ];

    public function cadena()
	{
        return $this->belongsTo(Cadenas::class, 'id_cadena', 'id');
	}

    public function instalador()
	{
        return $this->belongsTo(Instaladores::class, 'id_instalador', 'id');
	}

    public function sesion()
	{
        return $this->belongsTo(Secciones::class, 'id_sesion', 'id');
	}

    public function zona()
	{
        return $this->belongsTo(Zona::class, 'id_zona', 'id');
	}

    public function tipo()
	{
        return $this->belongsTo(TipoSala::class, 'id_tipo', 'id');
	}

    public function user_crea()
	{
        return $this->belongsTo(User::class, 'id_usuario_crear', 'id');
	}

    public function user_modifica()
	{
        return $this->belongsTo(User::class, 'id_usuario_modifica', 'id');
	}

    public function salas()
	{
        return $this->belongsToMany(Salas::class, 'campana_interna_salas','id_campana_interna','id_sala')->withPivot('id_campana_interna');
	}

    public function materiales()
	{
    	return $this->hasMany(CampanaInternaMaterial::class,'id_campana_interna');
	}

    public function campana_estado()
    {
        return $this->belongsTo(CampanaEstado::class, 'id_estado_campana', 'id');
    }

    public function campana_etapa()
    {
        return $this->belongsTo(EtapaCamapana::class, 'id_etapa', 'id');
    }

    public function comentarios()
    {
        return $this->hasMany(CampanaInternaComentario::class,'id_campana_interna');
    }

    public static function getCampanas($admin, $salas_usuario)
    {
        $campanas = CampanaInterna::join('cadenas', 'campana_interna.id_cadena', '=', 'cadenas.id')
                ->join('instaladores', 'campana_interna.id_instalador', '=', 'instaladores.id')
                ->join('campana_estado', 'campana_interna.id_estado_campana', '=', 'campana_estado.id')
                ->join('etapa_campana', 'campana_interna.id_etapa', '=', 'etapa_campana.id')
                ->when((Auth::user()->id), function ($query) use ($admin, $salas_usuario) {
                    if (!$admin) {
                        $query->whereIn('salas.id', $salas_usuario);
                    }
                })
                ->select(
                    'cadenas.nombre as cadena',
                    'campana_interna.id',
                    'campana_interna.desde',
                    'campana_interna.hasta',
                    'campana_interna.nombre',
                    'campana_interna.updated_at',
                    'campana_interna.deleted_at',
                    'instaladores.nombre as instalador',
                    'campana_estado.nombre as estado',
                    'etapa_campana.nombre as etapa'
                )
                ->orderBy('campana_interna.created_at', 'desc')->with('materiales')->get();

                return $campanas;
    }

    public static function getCampanasDeleted($admin, $salas_usuario)
    {
        $campanas = CampanaInterna::onlyTrashed()->join('cadenas', 'campana_interna.id_cadena', '=', 'cadenas.id')
                ->join('instaladores', 'campana_interna.id_instalador', '=', 'instaladores.id')
                ->join('campana_estado', 'campana_interna.id_estado_campana', '=', 'campana_estado.id')
                ->join('etapa_campana', 'campana_interna.id_etapa', '=', 'etapa_campana.id')
                ->when((Auth::user()->id), function ($query) use ($admin, $salas_usuario) {
                    if (!$admin) {
                        $query->whereIn('salas.id', $salas_usuario);
                    }
                })
                ->select(
                    'cadenas.nombre as cadena',
                    'campana_interna.id',
                    'campana_interna.desde',
                    'campana_interna.hasta',
                    'campana_interna.nombre',
                    'campana_interna.updated_at',
                    'campana_interna.deleted_at',
                    'instaladores.nombre as instalador',
                    'campana_estado.nombre as estado',
                    'etapa_campana.nombre as etapa'
                )
                ->orderBy('campana_interna.created_at', 'desc')
                ->get();

                return $campanas;
    }

}
