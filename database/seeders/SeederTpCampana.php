<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederTpCampana extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tp_campana = [
            [
                "id" => 1,
                "name" => "ACTIVACIONES",
                "status" => 1,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 2,
                "name" => "GONDOLA",
                "status" => 1,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 3,
                "name" => "CABECERAS",
                "status" => 1,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 4,
                "name" => "COOLER O NAVE",
                "status" => 1,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 5,
                "name" => "EXHIBICIONES A PALLET",
                "status" => 1,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 6,
                "name" => "EXHIBICIONES ADICIONALES ",
                "status" => 1,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 7,
                "name" => "OUT STORE",
                "status" => 1,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ]
        ];

        DB::table('tp_campana')->insert($tp_campana);
    }
}
