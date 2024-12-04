<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederZonaExhibicion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zona_exhibicion = [
            [
                "id" => 1,
                "nombre" => "LINEAL DE GONDOLA",
                "descripcion" => "LINEAL DE GONDOLA",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2,
                "nombre" => "CABECERA ESTANDAR",
                "descripcion" => "CABECERA ESTANDAR",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 3,
                "nombre" => "CABECERA MASIVA",
                "descripcion" => "CABECERA MASIVA",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 4,
                "nombre" => "CABECERA ESPECIAL",
                "descripcion" => "CABECERA ESPECIAL",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 5,
                "nombre" => "EXHIBICIONES PDQ",
                "descripcion" => "EXHIBICIONES PDQ",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 6,
                "nombre" => "EXHIBICION PASILLO ACCESO 4 PALLETS",
                "descripcion" => "EXHIBICION PASILLO ACCESO 4 PALLETS",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 7,
                "nombre" => "EXHIBICION PASILLO ACCESO 2 PALLETS",
                "descripcion" => "EXHIBICION PASILLO ACCESO 2 PALLETS",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 8,
                "nombre" => "COOLER PUERTA COMPLETA",
                "descripcion" => "COOLER PUERTA COMPLETA",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 9,
                "nombre" => "MURAL DE FRIO SIN PUERTA",
                "descripcion" => "MURAL DE FRIO SIN PUERTA",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 10,
                "nombre" => "NAVES O ISLAS DE FRIO",
                "descripcion" => "NAVES O ISLAS DE FRIO",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 11,
                "nombre" => "VENTA ASISTIDA",
                "descripcion" => "VENTA ASISTIDA",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ]
        ];

        DB::table('zona_exhibicion')->insert($zona_exhibicion);
    }
}
