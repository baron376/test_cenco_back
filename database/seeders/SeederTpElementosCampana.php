<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederTpElementosCampana extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tp_elementos_campana = [
            [
                "id" => 1,
                "name" => "IMPULSOR DE VENTA",
                "status" => 1,
                "id_tp_campana"=> 1,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 2,
                "name" => "DEGUSTACION/ SAMPLING",
                "status" => 1,
                "id_tp_campana"=> 1,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 3,
                "name" => "ACTIVACIÓN ESPECIAL",
                "status" => 1,
                "id_tp_campana"=> 1,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 4,
                "name" => "STOPPER",
                "status" => 1,
                "id_tp_campana"=> 2,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 5,
                "name" => "GLORIFICADOR",
                "status" => 1,
                "id_tp_campana"=> 2,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 6,
                "name" => "GANCHERA",
                "status" => 1,
                "id_tp_campana"=> 2,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 7,
                "name" => "MUEBLE COLGANTE",
                "status" => 1,
                "id_tp_campana"=> 2,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 8,
                "name" => "CABECERA ESTANDAR (LATERALES Y FLEJERAS)",
                "status" => 1,
                "id_tp_campana"=> 3,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 9,
                "name" => "CABECERA ESPECIAL",
                "status" => 1,
                "id_tp_campana"=> 3,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 10,
                "name" => "LOMO NAVE CONGELADOS",
                "status" => 1,
                "id_tp_campana"=> 4,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 11,
                "name" => "VIBRIN CHUPON",
                "status" => 1,
                "id_tp_campana"=> 4,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 12,
                "name" => "ESQUINEROS",
                "status" => 1,
                "id_tp_campana"=> 5,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 13,
                "name" => "ESQUINERO PAYLOADER ",
                "status" => 1,
                "id_tp_campana"=> 5,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 14,
                "name" => "CAJAS BRANDEADAS",
                "status" => 1,
                "id_tp_campana"=> 5,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 15,
                "name" => "PAYLOADER LATERAL CABECERA",
                "status" => 1,
                "id_tp_campana"=> 6,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 16,
                "name" => "PDQ",
                "status" => 1,
                "id_tp_campana"=> 6,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 17,
                "name" => "ISLA IMAGEN",
                "status" => 1,
                "id_tp_campana"=> 6,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 18,
                "name" => "ALARMAS",
                "status" => 1,
                "id_tp_campana"=> 7,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 19,
                "name" => "CARROS",
                "status" => 1,
                "id_tp_campana"=> 7,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 20,
                "name" => "PILAR",
                "status" => 1,
                "id_tp_campana"=> 7,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 21,
                "name" => "RAMPLA",
                "status" => 1,
                "id_tp_campana"=> 7,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ]
        ];

        DB::table('tp_elementos_campana')->insert($tp_elementos_campana);
    }
}
