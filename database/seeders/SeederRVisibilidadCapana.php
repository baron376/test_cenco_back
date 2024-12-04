<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederRVisibilidadCapana extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r_visibilidad_campana = [
            [
                "id" => 1,
                "id_tp_visibilidad" => 1,
                "id_tp_campana" => 1,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 2,
                "id_tp_visibilidad" => 2,
                "id_tp_campana" => 1,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 3,
                "id_tp_visibilidad" => 1,
                "id_tp_campana" => 2,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 4,
                "id_tp_visibilidad" => 2,
                "id_tp_campana" => 2,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 5,
                "id_tp_visibilidad" => 1,
                "id_tp_campana" => 3,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 6,
                "id_tp_visibilidad" => 2,
                "id_tp_campana" => 3,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 7,
                "id_tp_visibilidad" => 1,
                "id_tp_campana" => 4,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 8,
                "id_tp_visibilidad" => 1,
                "id_tp_campana" => 5,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 9,
                "id_tp_visibilidad" => 2,
                "id_tp_campana" => 5,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 10,
                "id_tp_visibilidad" => 1,
                "id_tp_campana" => 6,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 11,
                "id_tp_visibilidad" => 2,
                "id_tp_campana" => 6,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 12,
                "id_tp_visibilidad" => 1,
                "id_tp_campana" => 7,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ]
        ];

        DB::table('r_visibilidad_campana')->insert($r_visibilidad_campana);
    }
}
