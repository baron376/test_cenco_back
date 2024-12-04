<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederEstadoCampana extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campana_estado = array(
            [
                "id" => 1,
                "nombre" => "Espera",
                "descripcion" => "A espera de vigenvcias",
                "id_estatus_campana_estado" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 16:57:48",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2,
                "nombre" => "Vigente",
                "descripcion" => "Campaña de viegencia",
                "id_estatus_campana_estado" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 16:57:48",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 3,
                "nombre" => "Vencida",
                "descripcion" => "Campaña de vencidas",
                "id_estatus_campana_estado" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 16:57:48",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 4,
                "nombre" => "Inactiva",
                "descripcion" => "Campaña de Inactiva",
                "id_estatus_campana_estado" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 16:57:48",
                "updated_at" => null,
                "deleted_at" => null
            ]
        );

        DB::table('campana_estado')->insert($campana_estado);
    }
}
