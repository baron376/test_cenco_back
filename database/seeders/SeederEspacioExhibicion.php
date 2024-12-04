<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederEspacioExhibicion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $espacio_exhibicion = [
            [
                "id" => 1,
                "nombre" => "PERECIBLES",
                "descripcion" => "PERECIBLES",
                "id_estatus" => null,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2,
                "nombre" => "CONSUMO MASIVO",
                "descripcion" => "CONSUMO MASIVO",
                "id_estatus" => null,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 3,
                "nombre" => "NON FOOD",
                "descripcion" => "NON FOOD",
                "id_estatus" => null,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ]
        ];

        DB::table('espacio_exhibicion')->insert($espacio_exhibicion);
    }
}
