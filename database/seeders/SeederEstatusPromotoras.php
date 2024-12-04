<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederEstatusPromotoras extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estatus_promotoras = array(
            [
                'id' =>1, 
                'nombre'=>'Activa', 
                'descripcion'=>'Cadenas Activas', 
                'id_usuario_crear'=>1, 
                'id_usuario_modifica'=>1, 
                "created_at" => "2021-08-30 13:41:24",
                "updated_at" => "2021-08-30 13:41:24",
                "deleted_at" => null
            ],
            [
                'id' =>2, 
                'nombre'=>'Inactiva', 
                'descripcion'=>'Cadenas inactivas',
                'id_usuario_crear'=>1, 
                'id_usuario_modifica'=>1, 
                "created_at" => "2021-08-30 13:41:24",
                "updated_at" => "2021-08-30 13:41:24",
                "deleted_at" => null
            ]
        );

        DB::table('estatus_promotoras')->insert($estatus_promotoras);



    }
}
