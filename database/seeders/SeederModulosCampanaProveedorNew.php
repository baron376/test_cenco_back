<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederModulosCampanaProveedorNew extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ModulosCampanaProveedorNew = array(
			[
				"id" => 12,
				"nombre" => "Campana Proveedor",
				"descripcion" => "Modulo de Campana Proveedor",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2024-02-07 21:32:48",
				"updated_at" => null
			]
		);

		DB::table('modulos')->insert($ModulosCampanaProveedorNew);
    }
}
