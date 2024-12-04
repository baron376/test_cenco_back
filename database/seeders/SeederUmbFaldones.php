<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederUmbFaldones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $turnos = array(
            [
                "nombre" => "UN",
                'descripcion'=>'',
                "id_usuario_crear" => 1,
                "created_at" => "2021-08-30 13:41:24",
                "updated_at" => "2021-08-30 13:41:24",
            ],
            [
                "nombre" => "KG",
                'descripcion'=>'',
                "id_usuario_crear" => 1,
                "created_at" => "2021-08-30 13:41:24",
                "updated_at" => "2021-08-30 13:41:24",
            ],
            [
                "nombre" => "PAK",
                'descripcion'=>'',
                "id_usuario_crear" => 1,
                "created_at" => "2021-08-30 13:41:24",
                "updated_at" => "2021-08-30 13:41:24",
            ]
        );

        DB::table('umb_faldones')->insert($turnos);
    }
}
