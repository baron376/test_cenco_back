<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederCadenas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cadenas = array (
        	[
        		"id" => 1,
        		"nombre" => "JUMBO",
        		"descripcion" => "Cadena Jumbo",
				"qr_disponible"=>1,
                "id_estatus_cadenas" => 1,
        		"id_usuario_crear" => 1,
        		"id_usuario_modifica" => NULL,
        		"created_at" => now()
        	],
        	[
        		"id" => 2,
        		"nombre" => "SISA",
        		"descripcion" => "Cadena Santa Isabel",
				"qr_disponible"=>0,
                "id_estatus_cadenas" => 1,
        		"id_usuario_crear" => 1,
        		"id_usuario_modifica" => NULL,
        		"created_at" => now()
        	],
        	[
        		"id" => 3,
        		"nombre" => "SPID",
        		"descripcion" => "Cadena SPID",
				"qr_disponible"=>0,
                "id_estatus_cadenas" => 1,
        		"id_usuario_crear" => 1,
        		"id_usuario_modifica" => NULL,
        		"created_at" => now()
        	]
        );
        DB::table('cadenas')->insert($cadenas);
    }
}
