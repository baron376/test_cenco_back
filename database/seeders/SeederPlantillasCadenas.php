<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederPlantillasCadenas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$plantillas_cadenas = array(
			[
				"id_plantilla" => 1,
				"id_cadena" => 1,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
            [
				"id_plantilla" => 2,
				"id_cadena" => 1,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
			],
            [
				"id_plantilla" => 3,
				"id_cadena" => 1,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
			],
            /*[
				"id_plantilla" => 3,
				"id_cadena" => 1,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
			],*/
            [
				"id_plantilla" => 6,
				"id_cadena" => 1,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
			],
            /*[
				"id_plantilla" => 7,
				"id_cadena" => 1,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
			],*/
            [
				"id_plantilla" => 8,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
			],
            /*[
				"id_plantilla" => 5,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
			],*/
            [
				"id_plantilla" => 6,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
			],
            /*[
				"id_plantilla" => 7,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
			],*/
			[
				"id_plantilla" => 1,
				"id_cadena" => 3,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
			],
			[
				"id_plantilla" => 2,
				"id_cadena" => 3,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
			],
			[
				"id_plantilla" => 3,
				"id_cadena" => 3,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
			],
			[
				"id_plantilla" => 6,
				"id_cadena" => 3,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
			],
        );

        DB::table('plantillas_cadenas')->insert($plantillas_cadenas);
    }
}