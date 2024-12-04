<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use DB;
class CampanaProveedorNew extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'campana_proveedor_new';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'id_cadena',
        'nombre',
        'desde',
        'hasta',
        'id_proveedor',
        'id_formato',
        'id_zona',
        'id_gerencia',
        'id_sesion',
        'id_tipo_campana',
        'id_visibilidad_campana',
        'id_elemento_campana',
        'url_area_comercial',
        'url_orden_compra',
        'url_bases_legales',
        'id_estado_campana',
        'id_status_campana',
        'id_usuario_crear',
        'id_usuario_modifica',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function cadena()
	{
        return $this->belongsTo(Cadenas::class, 'id_cadena', 'id');
	}

    public function proveedor()
	{
        return $this->belongsTo(Proveedores::class, 'id_proveedor', 'id');
	}

    public function salas()
	{
        return $this->belongsToMany(Salas::class, 'campana_salas_new','id_campana','id_sala')->withPivot('id_campana')->with('tipo');
	}

    public function zonas()
	{
        return $this->belongsToMany(Zona::class, 'campana_zonas_new','id_campana','id_zona');
	}

    public function formato()
	{
        return $this->belongsToMany(TipoSala::class, 'campana_formato_new','id_campana','id_formato');
	}

    public function tpCampana()
	{
        return $this->belongsTo(TpCampana::class, 'id_tipo_campana', 'id');
	}

    public function visibilidad()
	{
        return $this->belongsTo(TpVisibilidadCampana::class, 'id_visibilidad_campana', 'id');
	}

    public function elementos()
	{
       // return $this->belongsTo(TpElementosCampana::class, 'id_elemento_campana', 'id');
       return $this->belongsToMany(TpElementosCampana::class, 'campana_elementos_new','id_campana','id_elementos')->withPivot('desde', 'hasta','fecha');
	}
    public function salasDisponibles()
    {
        return $this->belongsToMany(Salas::class, 'campana_elementos_new', 'id_campana', 'id_sala')
                    //->wherePivot('cupo', 0)
                    ->withPivot('desde', 'hasta','cupo')
                    ->get()
                    ->unique();
    }

    public function sesion()
	{
        return $this->belongsTo(Secciones::class, 'id_sesion', 'id');
	}

    public function sub_sesion()
	{
        return $this->belongsTo(SubSeccion::class, 'id_sub_seccion', 'id');
	}

    public function espacio()
    {
        return $this->belongsTo(EspacioExibhisionCamapana::class, 'id_gerencia', 'id');
    }

    public function campana_estado()
    {
        return $this->belongsTo(CampanaEstado::class, 'id_estado_campana', 'id');
    }

    public function campana_etapa()
    {
        return $this->belongsTo(EtapaCamapana::class, 'id_etapa', 'id');
    }

    public function material()
	{
    	return $this->belongsTo(CampanaMaterialNew::class, 'id', 'id_campana');
	}

    public function vigencias()
	{
    	return $this->hasMany(CampanaFechas::class, 'id_campana', 'id');
	}

    public static function getCampanasProveedor($admin, $salas_usuario, $request, $onlyTrashed = false, $etapa = null)
    {
        $campanasQuery = DB::table('campana_proveedor_new')
                ->leftJoin('cadenas', 'cadenas.id', '=', 'campana_proveedor_new.id_cadena')
                ->leftJoin('proveedores', 'proveedores.id', '=', 'campana_proveedor_new.id_proveedor')
                ->leftJoin('campana_estado', 'campana_estado.id', '=', 'campana_proveedor_new.id_estado_campana')
                ->leftJoin('etapa_campana', 'etapa_campana.id', '=', 'campana_proveedor_new.id_etapa')
                ->select(
                    'campana_proveedor_new.id', 
                    'campana_proveedor_new.nombre as nombre',
                    'campana_proveedor_new.deleted_at', 
                    'campana_proveedor_new.id_estado_campana',
                    'campana_proveedor_new.id_etapa', 
                    'campana_proveedor_new.desde', 
                    'campana_proveedor_new.updated_at', 
                    'campana_proveedor_new.hasta', 
                    'cadenas.nombre as cadena', 
                    'proveedores.nombre as proveedor', 
                    'campana_estado.nombre as campana_estado', 
                    'etapa_campana.nombre as campana_etapa',
                    'campana_proveedor_new.url_orden_compra', 
                    'campana_proveedor_new.url_area_comercial', 
                    'campana_proveedor_new.url_bases_legales'
                )
                ->whereNotIn('id_estado_campana',[7])
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
                     $campanasQuery->whereNotNull('campana_proveedor_new.deleted_at');
                } else {
                    $campanasQuery->whereNull('campana_proveedor_new.deleted_at');
                }
                
                if ($etapa !== null) {
                    $campanasQuery->where('campana_proveedor_new.id_etapa', $etapa);
                }
                
                $campanas = $campanasQuery->orderBy('campana_proveedor_new.created_at', 'desc')->get();
                
                return $campanas;
    }


    public function elementosgroupBy()
    {
        $elementos = $this->elementos()->get(); // Obtén todos los elementos
    
        // Agrupar elementos por el formato deseado
        $groupedElements = $elementos->groupBy(function ($e) {
            return $e->pivot->desde . ' - ' . $e->pivot->hasta . ' - ' . $e->name;
        });
    
        // Obtener los valores únicos de cada grupo
        $uniqueElements = $groupedElements->map(function ($group) {
            return $group->first(); // Obtén solo el primer elemento de cada grupo
        });
    
        // Formatear los elementos para incluir saltos de línea
        $formattedElements = $uniqueElements->map(function ($e) {
            return $e->pivot->desde . ' - ' . $e->pivot->hasta . ' - ' . $e->name;
        })->join("\n");
    
        return $formattedElements;
    }


}
