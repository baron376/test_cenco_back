<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use DB;

class Promotoras extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'promotoras';
    protected $primarykey = 'id';
    protected $appends = ['base'];

    protected $fillable = [
        'id_cadena',
        'nombre',
        'desde',
        'hasta',
        'id_proveedor',
        'id_sesion',
        'id_turnos',
        'entrega_regalo',
        'degustacion',
        'material_externo',
        'descripcion',
        'concurso_asociado',
        'doc_bases_legales',
        'id_etapa_promotora',
        'id_status_promotora',
        'id_usuario_crear',
        'id_usuario_modifica'
    ];

    
    public function cadena()
	{
        return $this->belongsTo(Cadenas::class, 'id_cadena', 'id');
	}
    public function turno()
	{
        return $this->belongsTo(Turnos::class, 'id_turnos', 'id');
	}
    public function estado()
	{
        return $this->belongsTo(EstatusPromotoras::class, 'id_status_promotora', 'id');
	}
    public function proveedor()
	{
        return $this->belongsTo(Proveedores::class, 'id_proveedor', 'id');
	}
    public function sesion()
	{
        return $this->belongsTo(Secciones::class, 'id_sesion', 'id');
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
        return $this->belongsToMany(Salas::class, 'promotoras_salas','id_promotoras','id_sala')->withPivot('id_promotoras');
	}
    public function muebles()
	{
    	return $this->hasMany(PromotorasMuebles::class,'id_promotoras');
	}
    public function etapa_promotora()
    {
        return $this->belongsTo(EtapasPromotoras::class, 'id_etapa_promotora', 'id');
    }
    public function getBaseAttribute()
    {
       if($this->concurso_asociado == 1 || $this->material_externo ==1){
        return  base64_encode(file_get_contents(public_path($this->doc_bases_legales)));
       }else{
           return null;
       }
    }
 
    public static function getCampanasPromotoras($admin, $onlyTrashed = false)
    {
        $promotorasQuery = DB::table('promotoras')
        ->leftJoin('cadenas', 'promotoras.id_cadena', '=', 'cadenas.id')
        ->leftJoin('proveedores', 'promotoras.id_proveedor', '=', 'proveedores.id')
        ->leftJoin('turnos', 'promotoras.id_turnos', '=', 'turnos.id')
        ->leftJoin('etapas_promotoras', 'promotoras.id_etapa_promotora', '=', 'etapas_promotoras.id')
        ->leftJoin('estatus_promotoras', 'promotoras.id_status_promotora', '=', 'estatus_promotoras.id')
        ->select(
        'promotoras.id', 
        'promotoras.nombre', 
        'promotoras.desde',
        'promotoras.hasta', 
        'promotoras.deleted_at',
        'promotoras.id_etapa_promotora',
        'cadenas.nombre as cadena', 
        'proveedores.nombre as proveedor', 
        'turnos.nombre as turno', 
        'etapas_promotoras.nombre as etapa_promotora', 
        'estatus_promotoras.nombre as estado'
        );
        
        if ($onlyTrashed === true) {
            $promotorasQuery->whereNotNull('promotoras.deleted_at');
        } elseif ($onlyTrashed === false) {
            $promotorasQuery->whereNull('promotoras.deleted_at');
        }
        if (!$admin && Auth::user()->id_proveedor != NULL) {
            $promotorasQuery->where('id_proveedor', Auth::user()->id_proveedor);
        
        }
        $promotoras = $promotorasQuery->orderBy('promotoras.created_at', 'desc')->get();
        return $promotoras;
                
    }
}