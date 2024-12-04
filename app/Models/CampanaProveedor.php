<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use DB;
class CampanaProveedor extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'campana_proveedor';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'id_cadena',
        'nombre',
        'desde',
        'hasta',
        'id_proveedor',
        'id_sesion',
        'id_zona',
        'descripcion',
        'material_externo',
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
    	//return $this->belongsTo(Cadenas::class, 'id','id_cadena');
        return $this->belongsTo(Cadenas::class, 'id_cadena', 'id');
	}

    public function proveedor()
	{
    	//return $this->hasMany(Proveedor::class, 'id','id_proveedor');
        return $this->belongsTo(Proveedores::class, 'id_proveedor', 'id');
	}

    public function sesion()
	{
    	//return $this->hasMany(Sesiones::class, 'id','id_sesion');
        return $this->belongsTo(Secciones::class, 'id_sesion', 'id');
	}

    public function zona()
	{
    	//return $this->hasMany(Zona::class, 'id','id_zona');
        return $this->belongsTo(Zona::class, 'id_zona', 'id');
	}


    public function zonas()
	{
    	//return $this->belongsToMany(Salas::class, 'campana_salas', 'id_campana', 'id_sala');
        return $this->belongsToMany(Zona::class, 'campana_zonas','id_campana','id_zona');
	}

    public function zona_exhibicion()
	{
        return $this->belongsTo(ZonaExhibicion::class, 'id_zona_exhibicion', 'id');
	}

    public function user_crea()
	{
    	//return $this->hasMany(User::class, 'id','id_usuario_crear');
        return $this->belongsTo(User::class, 'id_usuario_crear', 'id');
	}

    public function user_modifica()
	{
    	//return $this->hasMany(User::class, 'id','id_usuario_modifica');
        return $this->belongsTo(User::class, 'id_usuario_modifica', 'id');
	}

    public function salas()
	{
    	//return $this->belongsToMany(Salas::class, 'campana_salas', 'id_campana', 'id_sala');
        return $this->belongsToMany(Salas::class, 'campana_salas','id_campana','id_sala')->withPivot('id_campana')->with('tipo');
	}

    public function materiales()
	{
    	return $this->hasMany(CampanaMaterial::class,'id_campana');
        //return $this->belongsTo(CampanaMaterial::class, 'id_campana', 'id');
	}//CampanaEstado
    public function campana_estado()
    {
        //     return $this->hasMany(CampanaMaterial::class,'id_campana');
        return $this->belongsTo(CampanaEstado::class, 'id_estado_campana', 'id');
    }

    public function campana_etapa()
    {
        //     return $this->hasMany(CampanaMaterial::class,'id_campana');
        return $this->belongsTo(EtapaCamapana::class, 'id_etapa', 'id');
    }

    public function espacio_exhibicion()
    {
        //     return $this->hasMany(CampanaMaterial::class,'id_campana');
        return $this->belongsTo(EspacioExibhisionCamapana::class, 'id_espacio_exhibicion', 'id');
    }

    public function comentarios()
    {
        return $this->hasMany(CampanaComentario::class,'id_campana');
        //return $this->belongsTo(EspacioExibhisionCamapana::class, 'id_espacio_exhibicion', 'id');
    }

    public static function getCampanasProveedor($admin, $salas_usuario, $request, $onlyTrashed = false, $etapa = null)
    {
        $campanasQuery = DB::table('campana_proveedor')
                ->leftJoin('cadenas', 'cadenas.id', '=', 'campana_proveedor.id_cadena')
                ->leftJoin('proveedores', 'proveedores.id', '=', 'campana_proveedor.id_proveedor')
                ->leftJoin('campana_estado', 'campana_estado.id', '=', 'campana_proveedor.id_estado_campana')
                ->leftJoin('etapa_campana', 'etapa_campana.id', '=', 'campana_proveedor.id_etapa')
                ->select(
                    'campana_proveedor.id', 
                    'campana_proveedor.nombre as nombre',
                    'campana_proveedor.deleted_at', 
                    'campana_proveedor.id_estado_campana',
                    'campana_proveedor.id_etapa', 
                    'campana_proveedor.desde', 
                    'campana_proveedor.updated_at', 
                    'campana_proveedor.hasta', 
                    'cadenas.nombre as cadena', 
                    'proveedores.nombre as proveedor', 
                    'campana_estado.nombre as campana_estado', 
                    'etapa_campana.nombre as campana_etapa'
                )
                ->when((Auth::user()->id),function($query) use ($admin,$salas_usuario,$request) {
                    if($admin|| Auth::user()->id_proveedor == NULL ){

                    } else if(Auth::user()->id_proveedor != NULL) {
                        $query->where('id_proveedor',Auth::user()->id_proveedor);
                    } else{
                        $query->whereHas('salas', function ($query) use ($salas_usuario) {
                            $query->whereIn('salas.id',$salas_usuario);
                        });
                    }
                });

                if ($onlyTrashed) {
                     $campanasQuery->whereNotNull('campana_proveedor.deleted_at');
                } else {
                    $campanasQuery->whereNull('campana_proveedor.deleted_at');
                }
                
                if ($etapa !== null) {
                    $campanasQuery->where('campana_proveedor.id_etapa', $etapa);
                }
                
                $campanas = $campanasQuery->orderBy('campana_proveedor.created_at', 'desc')->get();
                
                return $campanas;
    }
}
