<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CampanaFaldon extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'campana_faldon';
    protected $primarykey = 'id';
    protected $appends = ['archivo' , 'tipop'];
    //protected $visible = ['id','archivo','id_cadena','id_sala','id_campana_tipo','nombre','desde','hasta','id_formato','id_plantilla','qr','id_estado_campana','id_usuario_crear','id_usuario_modifica','created_at','updated_at','deleted_at'];
    protected $fillable = ['id', 'archivo' ,'id_cadena','id_sala','id_campana_tipo','nombre','desde','hasta','id_formato','id_plantilla','qr','id_estado_campana','id_usuario_crear','id_usuario_modifica','created_at','updated_at','deleted_at'
    ];
    
    public function getArchivoAttribute()
    {
        $maxId = ArchivosFaldones::where('id_campana',$this->id)->max('id');
        $formato = ArchivosFaldones::where('id',$maxId)->with('estado')->with('estatus')->with('usuario_crea')->with('usuario_modifica')->with('alertas_productos')->with('rechazos_productos')->first();
        return $formato;
    }
    public function getTipopAttribute()
    {
       if(!$this->id_sala){
           return 'Global';
       }else{
            return Salas::where('id' , $this->id_sala)->first()->nombre_sap;
       }
    }
    public function sala_campana()
    {
        return $this->belongsTo(Salas::class, 'id_sala' ,'id');
    }
    public function archivos_excel()
    {
        return $this->hasMany(ArchivosFaldones::class, 'id_campana','id');
    }
    public function cadena_campana()
    {
        return $this->belongsTo(Cadenas::class, 'id_cadena', 'id');
    }
    public function campana_estado()
    {
        return $this->belongsTo(CampanaEstado::class, 'id_estado_campana', 'id');
    }
    public function campana_tipo()
    {
        return $this->belongsTo(CampanaFaldonTipo::class,'id_campana_tipo' , 'id');
    }

    public function formato_campana()
    {
        return $this->belongsTo(FormatoTipo::class, 'id_formato' , 'id');
    }

    public function plantilla_campana()
    {
        return $this->belongsTo(PlantillaTipo::class, 'id_plantilla', 'id');
    }

    public function usuario_crea_campana()
    {
        return $this->belongsTo(User::class,'id_usuario_crear' , 'id');
    }

    public function usuario_modifica_campana()
    {
        return $this->belongsTo(User::class, 'id_usuario_modifica' , 'id');
    }
}
