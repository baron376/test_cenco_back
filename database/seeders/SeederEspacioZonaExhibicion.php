<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederEspacioZonaExhibicion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $espacio_zona_exhibicion = [
            [
                "id" => 1,
                "id_espacio" => 2,
                "id_zona" => 1,
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2,
                "id_espacio" => 2,
                "id_zona" => 2,
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 3,
                "id_espacio" => 2,
                "id_zona" => 3,
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 4,
                "id_espacio" => 2,
                "id_zona" => 4,
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 5,
                "id_espacio" => 2,
                "id_zona" => 5,
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 6,
                "id_espacio" => 2,
                "id_zona" => 6,
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 7,
                "id_espacio" => 2,
                "id_zona" => 7,
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 8,
                "id_espacio" => 1,
                "id_zona" => 8,
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 9,
                "id_espacio" => 1,
                "id_zona" => 9,
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 10,
                "id_espacio" => 1,
                "id_zona" => 10,
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 11,
                "id_espacio" => 1,
                "id_zona" => 11,
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 12,
                "id_espacio" => 3,
                "id_zona" => 1,
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 13,
                "id_espacio" => 3,
                "id_zona" => 2,
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 14,
                "id_espacio" => 3,
                "id_zona" => 5,
                "created_at" => "2021-07-28 13:40:57",
                "updated_at" => null,
                "deleted_at" => null
            ]
        ];
        

        DB::table('espacio_zona_exhibicion')->insert($espacio_zona_exhibicion);
    }
}
