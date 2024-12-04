<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
class Mantencion extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'mantencion';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'asunto',
        'id_cadena',
        'fecha_implementacion',
        'id_proveedor',
        'monto_cotizacion',
        'id_sala',
        'id_mantencion_estado',
        'id_usuario_crear',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function cadena()
	{
        return $this->belongsTo(Cadenas::class, 'id_cadena', 'id');
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
        return $this->belongsTo(Salas::class, 'id_sala', 'id');
	}

    public function elementos()
	{
    	return $this->hasMany(MantencionElementos::class,'id_mantencion');
	}
    
    public function estados()
    {
        return $this->belongsTo(MantencionEstados::class, 'id_mantencion_estado', 'id');
    }

    public function comentarios()
    {
        return $this->hasMany(MantencionComentarios::class,'id_mantencion');
    }

    public function proveedor()
	{
        return $this->belongsTo(Proveedores::class, 'id_proveedor', 'id');
	}

    public static function getMantenciones($salas_usuario, $admin, $estado = NULL)
    {
        
        $mantenciones = Mantencion::join('cadenas', 'mantencion.id_cadena', '=', 'cadenas.id')
                            ->join('salas', 'mantencion.id_sala', '=', 'salas.id')
                            ->join('mantencion_estados', 'mantencion.id_mantencion_estado', '=', 'mantencion_estados.id')
                            ->when(!$admin, function ($query) use ($salas_usuario) {
                                $query->whereIn('salas.id', $salas_usuario);
                            })
                        ->orderBy('mantencion.created_at', 'desc')
                        ->select(
                            'cadenas.nombre', 
                            'mantencion.id',
                            'mantencion.deleted_at', 
                            'mantencion.asunto',
                            'mantencion_estados.nombre as estado', 
                            'mantencion.updated_at',
                            'salas.nombre_sap as sala',
                            'mantencion.id_mantencion_estado'
                        );
                            if (!is_null($estado)) {
                                $mantenciones->where('mantencion.id_mantencion_estado', $estado);
                            }
                           
                            $result = $mantenciones->get();
                            return $result;
    }

    public static function getMantencionesDelete($salas_usuario, $admin)
    {
        
        $mantenciones = Mantencion::onlyTrashed()->join('cadenas', 'mantencion.id_cadena', '=', 'cadenas.id')
                            ->join('salas', 'mantencion.id_sala', '=', 'salas.id')
                            ->join('mantencion_estados', 'mantencion.id_mantencion_estado', '=', 'mantencion_estados.id')
                            ->when((Auth::user()->id), function ($query) use ($admin, $salas_usuario) {
                        if (!$admin) {
                            $query->join('salas', 'mantencion.id_sala', '=', 'salas.id')
                            ->whereIn('salas.id', $salas_usuario);
                        }})
                        ->orderBy('mantencion.created_at', 'desc')
                        ->select(
                            'cadenas.nombre', 
                            'mantencion.id',
                            'mantencion.deleted_at', 
                            'mantencion.asunto',
                            'mantencion_estados.nombre as estado', 
                            'mantencion.updated_at',
                            'salas.nombre_sap as sala',
                            'mantencion.id_mantencion_estado'
                        )->get();
                        
                        return $mantenciones;
    }
}
