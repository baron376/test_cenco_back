<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Salas;
use App\Models\TpElementosCampana;

class CampanaElementos extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $table = 'campana_elementos_new';
    protected $fillable = [
        'id',
        'id_campana',
        'id_elementos',
        'id_usuario_crear',
        'id_usuario_modifica',
        'id_sala',
        'desde',
        'hasta',
        'cupo',
        'created_at',
        'updated_at',
        'deleted_at',
        'fecha',
    ];

    public function salas()
    {
        return $this->belongsTo(Salas::class, 'id_sala', 'id');
    }

    public function elementos()
    {
        return $this->belongsTo(TpElementosCampana::class, 'id_elementos', 'id');
    }

    public static function updateCupo($campanaId, $salasIds)
    {
        self::where('id_campana', $campanaId)
            ->whereIn('id_sala', $salasIds)
            ->update(['cupo' => 1]);

        self::where('id_campana', $campanaId)
            ->whereNotIn('id_sala', $salasIds)
            ->update(['cupo' => 0]);
    }
}



