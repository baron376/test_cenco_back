<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederModulos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modulos = array(
			[
				"id" => 1,
				"nombre" => "Administración",
				"descripcion" => "Modulo de Administración",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 21:32:48",
				"updated_at" => null
			],
			[
				"id" => 2,
				"nombre" => "Seguridad",
				"descripcion" => "Modulo de Seguridad",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 21:32:48",
				"updated_at" => null
			],
			[
				"id" => 3,
				"nombre" => "Campaña",
				"descripcion" => "Modulo de Campaña",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 21:32:48",
				"updated_at" => null
			],
			[
				"id" => 4,
				"nombre" => "Faldones",
				"descripcion" => "Modulo de Faldones",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 21:32:48",
				"updated_at" => null
			],
			[
				"id" => 5,
				"nombre" => "Proveedores",
				"descripcion" => "Modulo de Proveedores",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 21:32:48",
				"updated_at" => null
			],
			[
				"id" => 7,
				"nombre" => "Mantecion",
				"descripcion" => "Modulo de Mantecion",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 21:32:48",
				"updated_at" => null
			]
			,
			[
				"id" => 8,
				"nombre" => "Campaña interna",
				"descripcion" => "Modulo de Campaña interna",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 21:32:48",
				"updated_at" => null
			]
			,
			[
				"id" => 9,
				"nombre" => "Campaña Promotoras",
				"descripcion" => "Modulo de Campaña Promotoras",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 21:32:48",
				"updated_at" => null
			],
			[
				"id" => 10,
				"nombre" => "Incidencias",
				"descripcion" => "Modulo de Incidencias de campñas",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 21:32:48",
				"updated_at" => null
			]
		);

		DB::table('modulos')->insert($modulos);
    }
}
