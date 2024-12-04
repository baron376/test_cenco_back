<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederTurnos extends Seeder
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
                "id" => 1,
                "nombre" => "AM",
                'descripcion'=>'Turno mañana',
                "id_usuario_crear" => 1,
                "created_at" => "2021-08-30 13:41:24",
                "updated_at" => "2021-08-30 13:41:24",
                "deleted_at" => null
            ],
            [
                "id" => 2,
                "nombre" => "PM",
                'descripcion'=>'Turno tarde',
                "id_usuario_crear" => 1,
                "created_at" => "2021-08-30 13:41:24",
                "updated_at" => "2021-08-30 13:41:24",
                "deleted_at" => null
            ]
        );

        DB::table('turnos')->insert($turnos);
    }
}
