<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederCampanaEstado extends Seeder
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
                "descripcion" => "A espera de vigencias",
                "id_estatus_campana_estado" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-05-30 20:46:24",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2,
                "nombre" => "Vigente",
                "descripcion" => "Campaña Vigente",
                "id_estatus_campana_estado" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-05-30 20:46:24",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 3,
                "nombre" => "Vencida",
                "descripcion" => "Campaña Vencidas",
                "id_estatus_campana_estado" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-05-30 20:46:24",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 4,
                "nombre" => "Inactiva",
                "descripcion" => "Campaña Inactiva",
                "id_estatus_campana_estado" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-05-30 20:46:24",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 5,
                "nombre" => "Aceptada",
                "descripcion" => "Campaña aceptada",
                "id_estatus_campana_estado" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-05-30 20:46:24",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 6,
                "nombre" => "Rechazada",
                "descripcion" => "Campaña rechazada",
                "id_estatus_campana_estado" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-05-30 20:46:24",
                "updated_at" => null,
                "deleted_at" => null
            ]
        );
        DB::table('campana_estado')->insert($campana_estado);
    }
}
