<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederTipoSala extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo_sala = [
            [
                "id" => 1,
                "nombre" => "CONVENIENCIA",
                "descripcion" => "CONVENIENCIA",
                "id_cadena" => 3,
                "created_at" =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2,
                "nombre" => "HIPER",
                "descripcion" => "HIPER",
                "id_cadena" => 1,
                "created_at" =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 3,
                "nombre" => "SUPER",
                "descripcion" => "SUPER",
                "id_cadena" => 1,
                "created_at" =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 4,
                "nombre" => "MEDIANO",
                "descripcion" => "MEDIANO",
                "id_cadena" => 2,
                "created_at" =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 5,
                "nombre" => "GRANDE",
                "descripcion" => "GRANDE",
                "id_cadena" => 2,
                "created_at" =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 6,
                "nombre" => "PEQUEÑO",
                "descripcion" => "PEQUEÑO",
                "id_cadena" => 2,
                "created_at" =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 7,
                "nombre" => "MINI",
                "descripcion" => "MINI",
                "id_cadena" => 2,
                "created_at" =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ]
        ];

        DB::table('tipo_sala')->insert($tipo_sala);
    }
}
