<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederTpVisibilidad extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tp_visibilidad_campana = [
            [
                "id" => 1,
                "name" => "PUBLICITARIA",
                "status" => 1,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ],
            [
                "id" => 2,
                "name" => "PRODUCTO",
                "status" => 1,
                "id_usuario_crear"=> null,
                "id_usuario_modifica"=> null
            ]
        ];

        DB::table('tp_visibilidad_campana')->insert($tp_visibilidad_campana);
    }
}
