<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederEstadoMantencion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mantencion_estados = [
            [
                "id" => 1,
                "nombre" => "Espera",
                "descripcion" => "A espera de Revision ",
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 16:57:48",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2,
                "nombre" => "Liberada",
                "descripcion" => "Mantencion Liberada",
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 16:57:48",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 3,
                "nombre" => "Devuelta",
                "descripcion" => "Mantencion devuelta por agencia",
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 16:57:48",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 4,
                "nombre" => "Aceptada",
                "descripcion" => "Mantencion Aceptada",
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 16:57:48",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 5,
                "nombre" => "Rechazada",
                "descripcion" => "Mantencion Rechazada",
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 16:57:48",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 6,
                "nombre" => "Terminada",
                "descripcion" => "MantencionTerminada",
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 16:57:48",
                "updated_at" => null,
                "deleted_at" => null
            ]
        ];
        DB::table('mantencion_estados')->insert($mantencion_estados);
    }
}
