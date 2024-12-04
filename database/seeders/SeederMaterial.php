<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederMaterial extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $material = [
            [
                "id" => 1,
                "nombre" => "VIBRIN ",
                "descripcion" => "VIBRIN ",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2,
                "nombre" => "STOPPER",
                "descripcion" => "STOPPER",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 3,
                "nombre" => "FLEJERA",
                "descripcion" => "FLEJERA",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 4,
                "nombre" => "DELIMITADOR",
                "descripcion" => "DELIMITADOR",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 5,
                "nombre" => "FLEJERA DIGITAL",
                "descripcion" => "FLEJERA DIGITAL",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 6,
                "nombre" => "MARCO PRECIO",
                "descripcion" => "MARCO PRECIO",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 7,
                "nombre" => "GANCHERA",
                "descripcion" => "GANCHERA",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 8,
                "nombre" => "SOPORTE TESTER (GLORIFICADOR)",
                "descripcion" => "SOPORTE TESTER (GLORIFICADOR)",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 9,
                "nombre" => "EXHIBIDOR AEREO",
                "descripcion" => "EXHIBIDOR AEREO",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 10,
                "nombre" => "BANDEJA DE GONDOLA",
                "descripcion" => "BANDEJA DE GONDOLA",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 11,
                "nombre" => "MARCO DE GONDOLA",
                "descripcion" => "MARCO DE GONDOLA",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 12,
                "nombre" => "REVESTIMIENTO LATERAL",
                "descripcion" => "REVESTIMIENTO LATERAL",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 13,
                "nombre" => "ESQUINEROS ",
                "descripcion" => "ESQUINEROS ",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 14,
                "nombre" => "PAYLOADER",
                "descripcion" => "PAYLOADER",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 15,
                "nombre" => "SIN MATERIAL",
                "descripcion" => "SIN MATERIAL",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 16,
                "nombre" => "LOMO DE NAVE",
                "descripcion" => "LOMO DE NAVE",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 17,
                "nombre" => "STICKER CON CHUPON",
                "descripcion" => "STICKER CON CHUPON",
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ]
        ];

        DB::table('material')->insert($material);
    }
}
