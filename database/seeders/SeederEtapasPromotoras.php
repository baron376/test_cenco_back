<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SeederEtapasPromotoras extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $etapa_promotoras = array(
            [
                "id" => 1,
                "nombre" => "En Espera",
                "id_usuario_crear" => 1,
                "created_at" => "2021-08-30 13:41:24",
                "updated_at" => "2021-08-30 13:41:24",
                "deleted_at" => null
            ],
            [
                "id" => 2,
                "nombre" => "Rechazada",
                "id_usuario_crear" => 1,
                "created_at" => "2021-08-30 13:41:24",
                "updated_at" => "2021-08-30 13:41:24",
                "deleted_at" => null
            ],
            [
                "id" => 3,
                "nombre" => "Aprobada",
                "id_usuario_crear" => 1,
                "created_at" => "2021-08-30 13:41:24",
                "updated_at" => "2021-08-30 13:41:24",
                "deleted_at" => null
            ],
        );

        DB::table('etapas_promotoras')->insert($etapa_promotoras);
    }
}
