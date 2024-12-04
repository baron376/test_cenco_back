<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederZonas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zona = array(
            [
                "id" => 1,
                "nombre" => "Centro Sur",
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => "2021-07-28 13:40:57",
                "deleted_at" => null
            ],
            [
                "id" => 2,
                "nombre" => "Norte",
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => "2021-07-28 13:40:57",
                "deleted_at" => null
            ],
            [
                "id" => 3,
                "nombre" => "STGO-PONIENTE",
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => "2021-07-28 13:40:57",
                "deleted_at" => null
            ],
            [
                "id" => 4,
                "nombre" => "STGO-ORIENTE",
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => "2021-07-28 13:40:57",
                "deleted_at" => null
            ],
            [
                "id" => 5,
                "nombre" => "SUR",
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => "2021-07-28 13:40:57",
                "deleted_at" => null
            ],
            [
                "id" => 6,
                "nombre" => "Zona 6",
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 00:00:00",
                "updated_at" => "2021-07-28 00:00:00",
                "deleted_at" => null
            ],
            [
                "id" => 7,
                "nombre" => "Zona 7",
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 00:00:00",
                "updated_at" => "2021-07-28 00:00:00",
                "deleted_at" => null
            ],
            [
                "id" => 8,
                "nombre" => "Zona 8",
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 00:00:00",
                "updated_at" => "2021-07-28 00:00:00",
                "deleted_at" => null
            ],
            [
                "id" => 9,
                "nombre" => "Zona 9",
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 00:00:00",
                "updated_at" => "2021-07-28 00:00:00",
                "deleted_at" => null
            ],
            [
                "id" => 10,
                "nombre" => "zona 10",
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 00:00:00",
                "updated_at" => "2021-07-28 00:00:00",
                "deleted_at" => null
            ],
            [
                "id" => 11,
                "nombre" => "zona 11",
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => "2021-07-28 00:00:00",
                "updated_at" => "2021-07-28 00:00:00",
                "deleted_at" => null
            ]
        );

        DB::table('zona')->insert($zona);
    }
}
