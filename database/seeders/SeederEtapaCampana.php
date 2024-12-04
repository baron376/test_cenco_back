<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederEtapaCampana extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $etapa_campana = array(
            [
                "id" => 1,
                "nombre" => "Propuesta",
                "id_usuario_crear" => 1,
                "created_at" => "2021-07-28 13:41:24",
                "updated_at" => "2021-07-28 13:41:24",
                "deleted_at" => null
            ],
            [
                "id" => 2,
                "nombre" => "Revisión Propuesta",
                "id_usuario_crear" => 1,
                "created_at" => "2021-07-28 13:41:24",
                "updated_at" => "2021-07-28 13:41:24",
                "deleted_at" => null
            ],
            [
                "id" => 3,
                "nombre" => "Aprobada",
                "id_usuario_crear" => 1,
                "created_at" => "2021-07-28 13:41:24",
                "updated_at" => "2021-07-28 13:41:24",
                "deleted_at" => null
            ],
            [
                "id" => 4,
                "nombre" => "Rechazada",
                "id_usuario_crear" => 1,
                "created_at" => "2021-07-28 13:41:24",
                "updated_at" => "2021-07-28 13:41:24",
                "deleted_at" => null
            ]
        );

        DB::table('etapa_campana')->insert($etapa_campana);
    }
}
