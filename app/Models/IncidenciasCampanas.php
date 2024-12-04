<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IncidenciasCampanas extends Model
{
    use SoftDeletes;
    protected $table = 'incidencias_campanas';
    protected $primarykey = 'id';
    protected $appends = ['campana'];
    protected $fillable = [
        'id',
        'tipo_campana',
        'id_campana_proveedor',
        'id_campana_promotora',
        'descripcion_incidencia',
        'created_at',
        'updated_at',
    ];

    public function campana_proveedor()
    {
        return $this->belongsTo(CampanaProveedor::class, 'id_campana_proveedor', 'id');
    }
    public function campana_promotora()
    {
        return $this->belongsTo(Promotoras::class, 'id_campana_promotora', 'id');
    }
    public function getCampanaAttribute()
    {
       if($this->tipo_campana == 'Campaña Promotora'){
        return Promotoras::withTrashed()->where('id' , $this->id_campana_promotora)->with('cadena')->with('proveedor')->with('sesion')->first();
       }
       if($this->tipo_campana == 'Campaña Proveedor'){
        return CampanaProveedor::withTrashed()->where('id' , $this->id_campana_proveedor)->with('cadena')->with('proveedor')->with('sesion')->first();
       }

    }
}
