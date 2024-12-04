<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederCampanaTipo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campana_faldon_tipo = array(
            [
                "id" => 1,
                "nombre" => "Global",
                "descripcion" => "Campa general para toda una Cadena",
                "id_estatus_campana_faldon_tipo" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-05-30 00:56:27",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2,
                "nombre" => "Interna",
                "descripcion" => "Campa Interna para una Sala",
                "id_estatus_campana_faldon_tipo" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-05-30 00:56:27",
                "updated_at" => null,
                "deleted_at" => null
            ]
        );

        DB::table('campana_faldon_tipo')->insert($campana_faldon_tipo);
    }
}
