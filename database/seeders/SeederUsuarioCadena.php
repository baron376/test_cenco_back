<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederUsuarioCadena extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
      	DB::table('usuario_cadenas')->truncate();
      	DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Activamos la revisión de claves foráneas
		$usuario_cadenas = [
			[
				"id" => 1,
				"id_usuario" => 1,
				"id_cadena" => 1,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 2,
				"id_usuario" => 1,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 3,
				"id_usuario" => 2,
				"id_cadena" => 1,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 4,
				"id_usuario" => 2,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 5,
				"id_usuario" => 3,
				"id_cadena" => 1,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 6,
				"id_usuario" => 3,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 7,
				"id_usuario" => 10,
				"id_cadena" => 1,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 8,
				"id_usuario" => 10,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 9,
				"id_usuario" => 11,
				"id_cadena" => 1,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 10,
				"id_usuario" => 11,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 11,
				"id_usuario" => 12,
				"id_cadena" => 1,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 12,
				"id_usuario" => 13,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 13,
				"id_usuario" => 14,
				"id_cadena" => 1,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 14,
				"id_usuario" => 15,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 15,
				"id_usuario" => 1,
				"id_cadena" => 3,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 16,
				"id_usuario" => 2,
				"id_cadena" => 3,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 17,
				"id_usuario" => 3,
				"id_cadena" => 3,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 18,
				"id_usuario" => 17,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 19,
				"id_usuario" => 18,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 20,
				"id_usuario" => 19,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 21,
				"id_usuario" => 20,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 22,
				"id_usuario" => 21,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 23,
				"id_usuario" => 22,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 24,
				"id_usuario" => 23,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 25,
				"id_usuario" => 24,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 26,
				"id_usuario" => 25,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 27,
				"id_usuario" => 26,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 28,
				"id_usuario" => 27,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 29,
				"id_usuario" => 28,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 30,
				"id_usuario" => 29,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 31,
				"id_usuario" => 30,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 32,
				"id_usuario" => 31,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 33,
				"id_usuario" => 32,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 34,
				"id_usuario" => 33,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 35,
				"id_usuario" => 34,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 36,
				"id_usuario" => 35,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 37,
				"id_usuario" => 36,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 38,
				"id_usuario" => 37,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 39,
				"id_usuario" => 38,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 40,
				"id_usuario" => 39,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 41,
				"id_usuario" => 40,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 42,
				"id_usuario" => 41,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 43,
				"id_usuario" => 42,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 44,
				"id_usuario" => 43,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 45,
				"id_usuario" => 44,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 46,
				"id_usuario" => 45,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 47,
				"id_usuario" => 46,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 48,
				"id_usuario" => 47,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 49,
				"id_usuario" => 48,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 50,
				"id_usuario" => 49,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 51,
				"id_usuario" => 50,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 52,
				"id_usuario" => 51,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 53,
				"id_usuario" => 52,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 54,
				"id_usuario" => 53,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 55,
				"id_usuario" => 54,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 56,
				"id_usuario" => 55,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 57,
				"id_usuario" => 56,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 58,
				"id_usuario" => 57,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 59,
				"id_usuario" => 58,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 60,
				"id_usuario" => 59,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 61,
				"id_usuario" => 60,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 62,
				"id_usuario" => 61,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 63,
				"id_usuario" => 62,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 64,
				"id_usuario" => 63,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 65,
				"id_usuario" => 64,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 66,
				"id_usuario" => 65,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 67,
				"id_usuario" => 66,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 68,
				"id_usuario" => 67,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 69,
				"id_usuario" => 68,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 70,
				"id_usuario" => 69,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 71,
				"id_usuario" => 70,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 72,
				"id_usuario" => 71,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 73,
				"id_usuario" => 72,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 74,
				"id_usuario" => 73,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 75,
				"id_usuario" => 74,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 76,
				"id_usuario" => 75,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 77,
				"id_usuario" => 76,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 79,
				"id_usuario" => 78,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 80,
				"id_usuario" => 79,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 81,
				"id_usuario" => 80,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 82,
				"id_usuario" => 81,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 83,
				"id_usuario" => 82,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 84,
				"id_usuario" => 83,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 85,
				"id_usuario" => 84,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 86,
				"id_usuario" => 85,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 87,
				"id_usuario" => 86,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 88,
				"id_usuario" => 87,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 89,
				"id_usuario" => 88,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 90,
				"id_usuario" => 89,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 91,
				"id_usuario" => 90,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 92,
				"id_usuario" => 91,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 93,
				"id_usuario" => 92,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 94,
				"id_usuario" => 93,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 95,
				"id_usuario" => 94,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 96,
				"id_usuario" => 95,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 97,
				"id_usuario" => 96,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 98,
				"id_usuario" => 97,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 99,
				"id_usuario" => 98,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 100,
				"id_usuario" => 99,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 101,
				"id_usuario" => 100,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 102,
				"id_usuario" => 101,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 103,
				"id_usuario" => 102,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 104,
				"id_usuario" => 103,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 106,
				"id_usuario" => 105,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 107,
				"id_usuario" => 106,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 108,
				"id_usuario" => 107,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 109,
				"id_usuario" => 108,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 110,
				"id_usuario" => 109,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 112,
				"id_usuario" => 111,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 113,
				"id_usuario" => 112,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 114,
				"id_usuario" => 113,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 115,
				"id_usuario" => 114,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 116,
				"id_usuario" => 115,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 117,
				"id_usuario" => 116,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 118,
				"id_usuario" => 117,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 119,
				"id_usuario" => 118,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 120,
				"id_usuario" => 119,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 121,
				"id_usuario" => 120,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 122,
				"id_usuario" => 121,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 123,
				"id_usuario" => 122,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 124,
				"id_usuario" => 123,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 125,
				"id_usuario" => 124,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 126,
				"id_usuario" => 125,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 127,
				"id_usuario" => 126,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 128,
				"id_usuario" => 127,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 129,
				"id_usuario" => 128,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 130,
				"id_usuario" => 129,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 131,
				"id_usuario" => 130,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 132,
				"id_usuario" => 131,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 133,
				"id_usuario" => 132,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 134,
				"id_usuario" => 133,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 135,
				"id_usuario" => 134,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 136,
				"id_usuario" => 135,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 137,
				"id_usuario" => 136,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 138,
				"id_usuario" => 137,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 139,
				"id_usuario" => 138,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 140,
				"id_usuario" => 139,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 141,
				"id_usuario" => 140,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 142,
				"id_usuario" => 141,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 143,
				"id_usuario" => 142,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 144,
				"id_usuario" => 143,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 145,
				"id_usuario" => 144,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 146,
				"id_usuario" => 145,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 147,
				"id_usuario" => 146,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 148,
				"id_usuario" => 147,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 149,
				"id_usuario" => 148,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 150,
				"id_usuario" => 149,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 151,
				"id_usuario" => 150,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 152,
				"id_usuario" => 151,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 153,
				"id_usuario" => 152,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 154,
				"id_usuario" => 153,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 155,
				"id_usuario" => 154,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 156,
				"id_usuario" => 155,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 157,
				"id_usuario" => 156,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 158,
				"id_usuario" => 157,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 159,
				"id_usuario" => 158,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 160,
				"id_usuario" => 159,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 161,
				"id_usuario" => 160,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 162,
				"id_usuario" => 161,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 163,
				"id_usuario" => 162,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 164,
				"id_usuario" => 163,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 165,
				"id_usuario" => 164,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 166,
				"id_usuario" => 165,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 167,
				"id_usuario" => 166,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 168,
				"id_usuario" => 167,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 169,
				"id_usuario" => 168,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 170,
				"id_usuario" => 169,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 171,
				"id_usuario" => 170,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 172,
				"id_usuario" => 171,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 173,
				"id_usuario" => 172,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 174,
				"id_usuario" => 173,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 175,
				"id_usuario" => 174,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 176,
				"id_usuario" => 175,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 177,
				"id_usuario" => 176,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 178,
				"id_usuario" => 177,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 179,
				"id_usuario" => 178,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 180,
				"id_usuario" => 179,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 181,
				"id_usuario" => 180,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 182,
				"id_usuario" => 181,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 183,
				"id_usuario" => 182,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 184,
				"id_usuario" => 183,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 185,
				"id_usuario" => 184,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 186,
				"id_usuario" => 185,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 187,
				"id_usuario" => 186,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 188,
				"id_usuario" => 187,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 190,
				"id_usuario" => 189,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 191,
				"id_usuario" => 190,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 192,
				"id_usuario" => 191,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 193,
				"id_usuario" => 192,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 194,
				"id_usuario" => 193,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 195,
				"id_usuario" => 194,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 196,
				"id_usuario" => 195,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 197,
				"id_usuario" => 196,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 198,
				"id_usuario" => 197,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 199,
				"id_usuario" => 198,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 200,
				"id_usuario" => 199,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 201,
				"id_usuario" => 200,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 202,
				"id_usuario" => 201,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 203,
				"id_usuario" => 202,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 204,
				"id_usuario" => 203,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 205,
				"id_usuario" => 204,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 206,
				"id_usuario" => 205,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 207,
				"id_usuario" => 206,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 208,
				"id_usuario" => 207,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 209,
				"id_usuario" => 208,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 210,
				"id_usuario" => 209,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 211,
				"id_usuario" => 210,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 212,
				"id_usuario" => 211,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 213,
				"id_usuario" => 212,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 214,
				"id_usuario" => 213,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 215,
				"id_usuario" => 214,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 216,
				"id_usuario" => 215,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 217,
				"id_usuario" => 216,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 218,
				"id_usuario" => 217,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 219,
				"id_usuario" => 218,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 220,
				"id_usuario" => 219,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 221,
				"id_usuario" => 220,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 222,
				"id_usuario" => 221,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 223,
				"id_usuario" => 222,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 224,
				"id_usuario" => 223,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 225,
				"id_usuario" => 224,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 226,
				"id_usuario" => 225,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 227,
				"id_usuario" => 226,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 228,
				"id_usuario" => 227,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 229,
				"id_usuario" => 228,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 230,
				"id_usuario" => 229,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 231,
				"id_usuario" => 230,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 232,
				"id_usuario" => 231,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 233,
				"id_usuario" => 232,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 234,
				"id_usuario" => 233,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 235,
				"id_usuario" => 234,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 236,
				"id_usuario" => 235,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 237,
				"id_usuario" => 236,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 238,
				"id_usuario" => 237,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 239,
				"id_usuario" => 238,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 240,
				"id_usuario" => 239,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 241,
				"id_usuario" => 240,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 242,
				"id_usuario" => 241,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 243,
				"id_usuario" => 242,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 244,
				"id_usuario" => 243,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 245,
				"id_usuario" => 244,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 246,
				"id_usuario" => 245,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 247,
				"id_usuario" => 246,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 249,
				"id_usuario" => 248,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 250,
				"id_usuario" => 249,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 251,
				"id_usuario" => 250,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 252,
				"id_usuario" => 251,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 253,
				"id_usuario" => 252,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 254,
				"id_usuario" => 253,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 255,
				"id_usuario" => 254,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 256,
				"id_usuario" => 255,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 257,
				"id_usuario" => 256,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 258,
				"id_usuario" => 257,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 259,
				"id_usuario" => 258,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 260,
				"id_usuario" => 259,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 261,
				"id_usuario" => 260,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 262,
				"id_usuario" => 261,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 263,
				"id_usuario" => 262,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 264,
				"id_usuario" => 263,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 265,
				"id_usuario" => 264,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 266,
				"id_usuario" => 265,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 267,
				"id_usuario" => 266,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 268,
				"id_usuario" => 267,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 269,
				"id_usuario" => 268,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 270,
				"id_usuario" => 269,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 271,
				"id_usuario" => 270,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 272,
				"id_usuario" => 271,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 273,
				"id_usuario" => 272,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 274,
				"id_usuario" => 273,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 275,
				"id_usuario" => 274,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 276,
				"id_usuario" => 275,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 277,
				"id_usuario" => 276,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 278,
				"id_usuario" => 277,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 279,
				"id_usuario" => 278,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 280,
				"id_usuario" => 279,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 281,
				"id_usuario" => 280,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 282,
				"id_usuario" => 281,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 283,
				"id_usuario" => 282,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 284,
				"id_usuario" => 283,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 285,
				"id_usuario" => 284,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 286,
				"id_usuario" => 285,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 287,
				"id_usuario" => 286,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 288,
				"id_usuario" => 287,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 289,
				"id_usuario" => 288,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 290,
				"id_usuario" => 289,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 291,
				"id_usuario" => 290,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 292,
				"id_usuario" => 291,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 293,
				"id_usuario" => 292,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 294,
				"id_usuario" => 293,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 295,
				"id_usuario" => 294,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 296,
				"id_usuario" => 295,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 297,
				"id_usuario" => 296,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 298,
				"id_usuario" => 297,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 299,
				"id_usuario" => 298,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 300,
				"id_usuario" => 299,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 301,
				"id_usuario" => 300,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 302,
				"id_usuario" => 301,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 303,
				"id_usuario" => 302,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 304,
				"id_usuario" => 303,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 305,
				"id_usuario" => 304,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 306,
				"id_usuario" => 305,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 307,
				"id_usuario" => 306,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 308,
				"id_usuario" => 307,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 309,
				"id_usuario" => 308,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 310,
				"id_usuario" => 309,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 311,
				"id_usuario" => 310,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 312,
				"id_usuario" => 311,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 313,
				"id_usuario" => 312,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 314,
				"id_usuario" => 313,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 315,
				"id_usuario" => 314,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 316,
				"id_usuario" => 315,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 317,
				"id_usuario" => 316,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 318,
				"id_usuario" => 317,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 319,
				"id_usuario" => 318,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 320,
				"id_usuario" => 319,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 321,
				"id_usuario" => 320,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 322,
				"id_usuario" => 321,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 323,
				"id_usuario" => 322,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 324,
				"id_usuario" => 323,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 325,
				"id_usuario" => 324,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 326,
				"id_usuario" => 325,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 327,
				"id_usuario" => 326,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 328,
				"id_usuario" => 327,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 329,
				"id_usuario" => 328,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 330,
				"id_usuario" => 329,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 331,
				"id_usuario" => 330,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 332,
				"id_usuario" => 331,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 333,
				"id_usuario" => 332,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 334,
				"id_usuario" => 333,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 335,
				"id_usuario" => 334,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 336,
				"id_usuario" => 335,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 337,
				"id_usuario" => 336,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 338,
				"id_usuario" => 337,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 339,
				"id_usuario" => 338,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 340,
				"id_usuario" => 339,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 341,
				"id_usuario" => 340,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 342,
				"id_usuario" => 341,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 343,
				"id_usuario" => 342,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 344,
				"id_usuario" => 343,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 345,
				"id_usuario" => 344,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 346,
				"id_usuario" => 345,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 347,
				"id_usuario" => 346,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 348,
				"id_usuario" => 347,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 349,
				"id_usuario" => 348,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 351,
				"id_usuario" => 350,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 352,
				"id_usuario" => 351,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 353,
				"id_usuario" => 352,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 354,
				"id_usuario" => 353,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 355,
				"id_usuario" => 354,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 356,
				"id_usuario" => 355,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 357,
				"id_usuario" => 356,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 358,
				"id_usuario" => 357,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 359,
				"id_usuario" => 358,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 360,
				"id_usuario" => 359,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 361,
				"id_usuario" => 360,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 362,
				"id_usuario" => 361,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 363,
				"id_usuario" => 362,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 364,
				"id_usuario" => 363,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 365,
				"id_usuario" => 364,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 366,
				"id_usuario" => 365,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 367,
				"id_usuario" => 366,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 368,
				"id_usuario" => 367,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 369,
				"id_usuario" => 368,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 370,
				"id_usuario" => 369,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 371,
				"id_usuario" => 370,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 372,
				"id_usuario" => 371,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 373,
				"id_usuario" => 372,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 374,
				"id_usuario" => 373,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 375,
				"id_usuario" => 374,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 376,
				"id_usuario" => 375,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 377,
				"id_usuario" => 376,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 378,
				"id_usuario" => 377,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 379,
				"id_usuario" => 378,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 380,
				"id_usuario" => 379,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 381,
				"id_usuario" => 380,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 382,
				"id_usuario" => 381,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 383,
				"id_usuario" => 382,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 384,
				"id_usuario" => 383,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 385,
				"id_usuario" => 384,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 386,
				"id_usuario" => 385,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 387,
				"id_usuario" => 386,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 388,
				"id_usuario" => 387,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 389,
				"id_usuario" => 388,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 390,
				"id_usuario" => 389,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 391,
				"id_usuario" => 390,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 392,
				"id_usuario" => 391,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 393,
				"id_usuario" => 392,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 394,
				"id_usuario" => 393,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 395,
				"id_usuario" => 394,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 396,
				"id_usuario" => 395,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 397,
				"id_usuario" => 396,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 398,
				"id_usuario" => 397,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 399,
				"id_usuario" => 398,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 400,
				"id_usuario" => 399,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 401,
				"id_usuario" => 400,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 402,
				"id_usuario" => 401,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 403,
				"id_usuario" => 402,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 404,
				"id_usuario" => 403,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 405,
				"id_usuario" => 404,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 406,
				"id_usuario" => 405,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 407,
				"id_usuario" => 406,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 408,
				"id_usuario" => 407,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 409,
				"id_usuario" => 408,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 410,
				"id_usuario" => 409,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 411,
				"id_usuario" => 410,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 412,
				"id_usuario" => 411,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 413,
				"id_usuario" => 412,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 414,
				"id_usuario" => 413,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 415,
				"id_usuario" => 414,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 416,
				"id_usuario" => 415,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 417,
				"id_usuario" => 416,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 418,
				"id_usuario" => 417,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 419,
				"id_usuario" => 418,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 420,
				"id_usuario" => 419,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 421,
				"id_usuario" => 420,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 422,
				"id_usuario" => 421,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 423,
				"id_usuario" => 422,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 424,
				"id_usuario" => 423,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 425,
				"id_usuario" => 424,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 426,
				"id_usuario" => 425,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 427,
				"id_usuario" => 426,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 429,
				"id_usuario" => 428,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 430,
				"id_usuario" => 429,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 431,
				"id_usuario" => 430,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 432,
				"id_usuario" => 431,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 433,
				"id_usuario" => 432,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 434,
				"id_usuario" => 433,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 435,
				"id_usuario" => 434,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 436,
				"id_usuario" => 435,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 437,
				"id_usuario" => 436,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 438,
				"id_usuario" => 437,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 439,
				"id_usuario" => 438,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 440,
				"id_usuario" => 439,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 441,
				"id_usuario" => 440,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 442,
				"id_usuario" => 441,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 443,
				"id_usuario" => 442,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 444,
				"id_usuario" => 443,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 445,
				"id_usuario" => 444,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 446,
				"id_usuario" => 445,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 447,
				"id_usuario" => 446,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 448,
				"id_usuario" => 447,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 449,
				"id_usuario" => 448,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 450,
				"id_usuario" => 449,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 451,
				"id_usuario" => 450,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 452,
				"id_usuario" => 451,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 453,
				"id_usuario" => 452,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 454,
				"id_usuario" => 453,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 455,
				"id_usuario" => 454,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 456,
				"id_usuario" => 455,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 457,
				"id_usuario" => 456,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 458,
				"id_usuario" => 457,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 459,
				"id_usuario" => 458,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 460,
				"id_usuario" => 459,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 461,
				"id_usuario" => 460,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 462,
				"id_usuario" => 461,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 463,
				"id_usuario" => 462,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 464,
				"id_usuario" => 463,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 465,
				"id_usuario" => 464,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 466,
				"id_usuario" => 465,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 467,
				"id_usuario" => 466,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 468,
				"id_usuario" => 467,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 469,
				"id_usuario" => 468,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 470,
				"id_usuario" => 469,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 471,
				"id_usuario" => 470,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 472,
				"id_usuario" => 471,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 473,
				"id_usuario" => 472,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 474,
				"id_usuario" => 473,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 475,
				"id_usuario" => 474,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 476,
				"id_usuario" => 475,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 477,
				"id_usuario" => 476,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 478,
				"id_usuario" => 477,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 479,
				"id_usuario" => 478,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 480,
				"id_usuario" => 479,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 481,
				"id_usuario" => 480,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 482,
				"id_usuario" => 481,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 483,
				"id_usuario" => 482,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 484,
				"id_usuario" => 483,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 485,
				"id_usuario" => 484,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 486,
				"id_usuario" => 485,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 487,
				"id_usuario" => 486,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 488,
				"id_usuario" => 487,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 489,
				"id_usuario" => 488,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 490,
				"id_usuario" => 489,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 491,
				"id_usuario" => 490,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 492,
				"id_usuario" => 491,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 493,
				"id_usuario" => 492,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 494,
				"id_usuario" => 493,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 495,
				"id_usuario" => 494,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 496,
				"id_usuario" => 495,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 497,
				"id_usuario" => 496,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 498,
				"id_usuario" => 497,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 499,
				"id_usuario" => 498,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 500,
				"id_usuario" => 499,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 501,
				"id_usuario" => 500,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 502,
				"id_usuario" => 501,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 503,
				"id_usuario" => 502,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 504,
				"id_usuario" => 503,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 505,
				"id_usuario" => 504,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 506,
				"id_usuario" => 505,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 507,
				"id_usuario" => 506,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 508,
				"id_usuario" => 507,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 509,
				"id_usuario" => 508,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 510,
				"id_usuario" => 509,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 511,
				"id_usuario" => 510,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 512,
				"id_usuario" => 511,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 513,
				"id_usuario" => 512,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 514,
				"id_usuario" => 513,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 515,
				"id_usuario" => 514,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 516,
				"id_usuario" => 515,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 517,
				"id_usuario" => 516,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 518,
				"id_usuario" => 517,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 519,
				"id_usuario" => 518,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 520,
				"id_usuario" => 519,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 521,
				"id_usuario" => 520,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 522,
				"id_usuario" => 521,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 523,
				"id_usuario" => 522,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 524,
				"id_usuario" => 523,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 525,
				"id_usuario" => 524,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 526,
				"id_usuario" => 525,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 527,
				"id_usuario" => 526,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 528,
				"id_usuario" => 527,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 529,
				"id_usuario" => 528,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 530,
				"id_usuario" => 529,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 532,
				"id_usuario" => 531,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 533,
				"id_usuario" => 532,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 534,
				"id_usuario" => 533,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 535,
				"id_usuario" => 534,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 536,
				"id_usuario" => 535,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 537,
				"id_usuario" => 536,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 538,
				"id_usuario" => 537,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 539,
				"id_usuario" => 538,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 540,
				"id_usuario" => 539,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 541,
				"id_usuario" => 540,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 542,
				"id_usuario" => 541,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 543,
				"id_usuario" => 542,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 544,
				"id_usuario" => 543,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 545,
				"id_usuario" => 544,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 546,
				"id_usuario" => 545,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 547,
				"id_usuario" => 546,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 548,
				"id_usuario" => 547,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 549,
				"id_usuario" => 548,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 550,
				"id_usuario" => 549,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 551,
				"id_usuario" => 550,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 552,
				"id_usuario" => 551,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 554,
				"id_usuario" => 553,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 555,
				"id_usuario" => 554,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 556,
				"id_usuario" => 555,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 557,
				"id_usuario" => 556,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 558,
				"id_usuario" => 557,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 559,
				"id_usuario" => 558,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 560,
				"id_usuario" => 559,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 561,
				"id_usuario" => 560,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 562,
				"id_usuario" => 561,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 563,
				"id_usuario" => 562,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 564,
				"id_usuario" => 563,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 565,
				"id_usuario" => 564,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 566,
				"id_usuario" => 565,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 567,
				"id_usuario" => 566,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 568,
				"id_usuario" => 567,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 569,
				"id_usuario" => 568,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 570,
				"id_usuario" => 569,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 571,
				"id_usuario" => 570,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 572,
				"id_usuario" => 571,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 573,
				"id_usuario" => 572,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 574,
				"id_usuario" => 573,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 576,
				"id_usuario" => 575,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 577,
				"id_usuario" => 576,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 578,
				"id_usuario" => 577,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 579,
				"id_usuario" => 578,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 580,
				"id_usuario" => 579,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 581,
				"id_usuario" => 580,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 582,
				"id_usuario" => 581,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 583,
				"id_usuario" => 582,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 584,
				"id_usuario" => 583,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 585,
				"id_usuario" => 584,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 586,
				"id_usuario" => 585,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 587,
				"id_usuario" => 586,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 588,
				"id_usuario" => 587,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 589,
				"id_usuario" => 588,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 590,
				"id_usuario" => 589,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 591,
				"id_usuario" => 590,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 592,
				"id_usuario" => 591,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 593,
				"id_usuario" => 592,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 594,
				"id_usuario" => 593,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 595,
				"id_usuario" => 594,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 596,
				"id_usuario" => 595,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 597,
				"id_usuario" => 596,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 598,
				"id_usuario" => 597,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 599,
				"id_usuario" => 598,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 600,
				"id_usuario" => 599,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 601,
				"id_usuario" => 600,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 602,
				"id_usuario" => 601,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 603,
				"id_usuario" => 602,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 604,
				"id_usuario" => 603,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 605,
				"id_usuario" => 604,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 606,
				"id_usuario" => 605,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 607,
				"id_usuario" => 606,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 608,
				"id_usuario" => 607,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 609,
				"id_usuario" => 608,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 610,
				"id_usuario" => 609,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 611,
				"id_usuario" => 610,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 612,
				"id_usuario" => 611,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 613,
				"id_usuario" => 612,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 614,
				"id_usuario" => 613,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 615,
				"id_usuario" => 614,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 616,
				"id_usuario" => 615,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 617,
				"id_usuario" => 616,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 618,
				"id_usuario" => 617,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 619,
				"id_usuario" => 618,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 620,
				"id_usuario" => 619,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 621,
				"id_usuario" => 620,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 622,
				"id_usuario" => 621,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 623,
				"id_usuario" => 622,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 624,
				"id_usuario" => 623,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 625,
				"id_usuario" => 624,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 626,
				"id_usuario" => 625,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 627,
				"id_usuario" => 626,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 629,
				"id_usuario" => 628,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 630,
				"id_usuario" => 629,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 631,
				"id_usuario" => 630,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 632,
				"id_usuario" => 631,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 634,
				"id_usuario" => 633,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 635,
				"id_usuario" => 634,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 636,
				"id_usuario" => 635,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 637,
				"id_usuario" => 636,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 638,
				"id_usuario" => 637,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 639,
				"id_usuario" => 638,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 640,
				"id_usuario" => 639,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 641,
				"id_usuario" => 640,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 642,
				"id_usuario" => 641,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 643,
				"id_usuario" => 642,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 644,
				"id_usuario" => 643,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 645,
				"id_usuario" => 644,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 646,
				"id_usuario" => 645,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 647,
				"id_usuario" => 646,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 648,
				"id_usuario" => 647,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 649,
				"id_usuario" => 648,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 650,
				"id_usuario" => 649,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 651,
				"id_usuario" => 650,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 652,
				"id_usuario" => 651,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 653,
				"id_usuario" => 652,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 654,
				"id_usuario" => 653,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 655,
				"id_usuario" => 654,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 656,
				"id_usuario" => 655,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 657,
				"id_usuario" => 656,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 658,
				"id_usuario" => 657,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 659,
				"id_usuario" => 658,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 660,
				"id_usuario" => 659,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 661,
				"id_usuario" => 660,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 662,
				"id_usuario" => 661,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 663,
				"id_usuario" => 662,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 664,
				"id_usuario" => 663,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 665,
				"id_usuario" => 664,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 666,
				"id_usuario" => 665,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 667,
				"id_usuario" => 666,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 668,
				"id_usuario" => 667,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 669,
				"id_usuario" => 668,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 670,
				"id_usuario" => 669,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 671,
				"id_usuario" => 670,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 672,
				"id_usuario" => 671,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 673,
				"id_usuario" => 672,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 674,
				"id_usuario" => 673,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 675,
				"id_usuario" => 674,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 676,
				"id_usuario" => 675,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 678,
				"id_usuario" => 677,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 680,
				"id_usuario" => 679,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 681,
				"id_usuario" => 680,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 682,
				"id_usuario" => 681,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 683,
				"id_usuario" => 682,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 684,
				"id_usuario" => 683,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 685,
				"id_usuario" => 684,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 686,
				"id_usuario" => 685,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 687,
				"id_usuario" => 686,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 688,
				"id_usuario" => 687,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 689,
				"id_usuario" => 688,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 690,
				"id_usuario" => 689,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 691,
				"id_usuario" => 690,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 692,
				"id_usuario" => 691,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 693,
				"id_usuario" => 692,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 694,
				"id_usuario" => 693,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 695,
				"id_usuario" => 694,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 696,
				"id_usuario" => 695,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 697,
				"id_usuario" => 696,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 698,
				"id_usuario" => 697,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 699,
				"id_usuario" => 698,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 700,
				"id_usuario" => 699,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 701,
				"id_usuario" => 700,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 702,
				"id_usuario" => 701,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 703,
				"id_usuario" => 702,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 704,
				"id_usuario" => 703,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 705,
				"id_usuario" => 704,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 706,
				"id_usuario" => 705,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 707,
				"id_usuario" => 706,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 708,
				"id_usuario" => 707,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 709,
				"id_usuario" => 708,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 710,
				"id_usuario" => 709,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 711,
				"id_usuario" => 710,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 712,
				"id_usuario" => 711,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 713,
				"id_usuario" => 712,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 714,
				"id_usuario" => 713,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 715,
				"id_usuario" => 714,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 716,
				"id_usuario" => 715,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 717,
				"id_usuario" => 716,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 718,
				"id_usuario" => 717,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 719,
				"id_usuario" => 718,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 724,
				"id_usuario" => 723,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 725,
				"id_usuario" => 724,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 726,
				"id_usuario" => 725,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 727,
				"id_usuario" => 726,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 728,
				"id_usuario" => 727,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 729,
				"id_usuario" => 728,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 730,
				"id_usuario" => 729,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 731,
				"id_usuario" => 730,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 732,
				"id_usuario" => 731,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 733,
				"id_usuario" => 732,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 734,
				"id_usuario" => 733,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 735,
				"id_usuario" => 734,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 736,
				"id_usuario" => 735,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 737,
				"id_usuario" => 736,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 738,
				"id_usuario" => 737,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 739,
				"id_usuario" => 738,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 740,
				"id_usuario" => 739,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 741,
				"id_usuario" => 740,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 742,
				"id_usuario" => 741,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 743,
				"id_usuario" => 742,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 744,
				"id_usuario" => 743,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 745,
				"id_usuario" => 744,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 746,
				"id_usuario" => 745,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 747,
				"id_usuario" => 746,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 748,
				"id_usuario" => 747,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 749,
				"id_usuario" => 748,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 750,
				"id_usuario" => 749,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 751,
				"id_usuario" => 750,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 752,
				"id_usuario" => 751,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 753,
				"id_usuario" => 752,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 754,
				"id_usuario" => 753,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 755,
				"id_usuario" => 754,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 756,
				"id_usuario" => 755,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 757,
				"id_usuario" => 756,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 758,
				"id_usuario" => 757,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 759,
				"id_usuario" => 758,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 760,
				"id_usuario" => 759,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 761,
				"id_usuario" => 760,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 762,
				"id_usuario" => 761,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 763,
				"id_usuario" => 762,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 764,
				"id_usuario" => 763,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 765,
				"id_usuario" => 764,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 766,
				"id_usuario" => 765,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 767,
				"id_usuario" => 766,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 768,
				"id_usuario" => 767,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 770,
				"id_usuario" => 769,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 771,
				"id_usuario" => 770,
				"id_cadena" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-20 01:04:06",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 772,
				"id_usuario" => 1625,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 773,
				"id_usuario" => 1626,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 774,
				"id_usuario" => 1627,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 775,
				"id_usuario" => 1628,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 776,
				"id_usuario" => 1629,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 777,
				"id_usuario" => 1630,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 778,
				"id_usuario" => 1631,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 779,
				"id_usuario" => 1632,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 780,
				"id_usuario" => 1633,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 781,
				"id_usuario" => 1634,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 782,
				"id_usuario" => 1635,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 783,
				"id_usuario" => 1636,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 784,
				"id_usuario" => 1637,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 785,
				"id_usuario" => 1638,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 786,
				"id_usuario" => 1639,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 787,
				"id_usuario" => 1640,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 788,
				"id_usuario" => 1641,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 789,
				"id_usuario" => 1642,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 790,
				"id_usuario" => 1643,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 791,
				"id_usuario" => 1644,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 792,
				"id_usuario" => 1645,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 793,
				"id_usuario" => 1646,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 794,
				"id_usuario" => 1647,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 795,
				"id_usuario" => 1648,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 796,
				"id_usuario" => 1649,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 797,
				"id_usuario" => 1650,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 798,
				"id_usuario" => 1651,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 799,
				"id_usuario" => 1652,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 800,
				"id_usuario" => 1653,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 801,
				"id_usuario" => 1654,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 802,
				"id_usuario" => 1655,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 803,
				"id_usuario" => 1656,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 804,
				"id_usuario" => 1657,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 805,
				"id_usuario" => 1658,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 806,
				"id_usuario" => 1659,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 807,
				"id_usuario" => 1660,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 808,
				"id_usuario" => 1661,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 809,
				"id_usuario" => 1662,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 810,
				"id_usuario" => 1663,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 811,
				"id_usuario" => 1664,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 812,
				"id_usuario" => 1665,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 813,
				"id_usuario" => 1666,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 814,
				"id_usuario" => 1667,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 815,
				"id_usuario" => 1668,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 816,
				"id_usuario" => 1669,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 817,
				"id_usuario" => 1670,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 818,
				"id_usuario" => 1671,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 819,
				"id_usuario" => 1672,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 820,
				"id_usuario" => 1673,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 821,
				"id_usuario" => 1674,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 822,
				"id_usuario" => 1675,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 823,
				"id_usuario" => 1676,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 824,
				"id_usuario" => 1677,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 825,
				"id_usuario" => 1678,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 826,
				"id_usuario" => 1679,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 827,
				"id_usuario" => 1680,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 828,
				"id_usuario" => 1681,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 829,
				"id_usuario" => 1682,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 830,
				"id_usuario" => 1683,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 831,
				"id_usuario" => 1684,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 832,
				"id_usuario" => 1685,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 833,
				"id_usuario" => 1686,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 834,
				"id_usuario" => 1687,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 835,
				"id_usuario" => 1688,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 836,
				"id_usuario" => 1689,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 837,
				"id_usuario" => 1690,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 838,
				"id_usuario" => 1691,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 839,
				"id_usuario" => 1692,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 840,
				"id_usuario" => 1693,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 841,
				"id_usuario" => 1694,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 842,
				"id_usuario" => 1695,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 843,
				"id_usuario" => 1696,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 844,
				"id_usuario" => 1697,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 845,
				"id_usuario" => 1698,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 846,
				"id_usuario" => 1699,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 847,
				"id_usuario" => 1700,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 848,
				"id_usuario" => 1701,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 849,
				"id_usuario" => 1702,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 850,
				"id_usuario" => 1703,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 851,
				"id_usuario" => 1704,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 852,
				"id_usuario" => 1705,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 853,
				"id_usuario" => 1706,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 854,
				"id_usuario" => 1707,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 855,
				"id_usuario" => 1708,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 856,
				"id_usuario" => 1709,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 857,
				"id_usuario" => 1710,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 858,
				"id_usuario" => 1711,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 859,
				"id_usuario" => 1712,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 860,
				"id_usuario" => 1713,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 861,
				"id_usuario" => 1714,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 862,
				"id_usuario" => 1715,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 863,
				"id_usuario" => 1716,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 864,
				"id_usuario" => 1717,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 865,
				"id_usuario" => 1718,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 866,
				"id_usuario" => 1719,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 867,
				"id_usuario" => 1720,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 868,
				"id_usuario" => 1721,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 869,
				"id_usuario" => 1722,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 870,
				"id_usuario" => 1723,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 871,
				"id_usuario" => 1724,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 872,
				"id_usuario" => 1725,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 873,
				"id_usuario" => 1726,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 874,
				"id_usuario" => 1727,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 875,
				"id_usuario" => 1728,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 876,
				"id_usuario" => 1729,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 877,
				"id_usuario" => 1730,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 878,
				"id_usuario" => 1731,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 879,
				"id_usuario" => 1732,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 880,
				"id_usuario" => 1733,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 881,
				"id_usuario" => 1734,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 882,
				"id_usuario" => 1735,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 883,
				"id_usuario" => 1736,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 884,
				"id_usuario" => 1737,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 885,
				"id_usuario" => 1738,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 886,
				"id_usuario" => 1739,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 887,
				"id_usuario" => 1740,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 888,
				"id_usuario" => 1741,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 889,
				"id_usuario" => 1742,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 890,
				"id_usuario" => 1743,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 891,
				"id_usuario" => 1744,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 892,
				"id_usuario" => 1745,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 893,
				"id_usuario" => 1746,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 894,
				"id_usuario" => 1747,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 895,
				"id_usuario" => 1748,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 896,
				"id_usuario" => 1749,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 897,
				"id_usuario" => 1750,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 898,
				"id_usuario" => 1751,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 899,
				"id_usuario" => 1752,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 900,
				"id_usuario" => 1753,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 901,
				"id_usuario" => 1754,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 902,
				"id_usuario" => 1755,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 903,
				"id_usuario" => 1756,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 904,
				"id_usuario" => 1757,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 905,
				"id_usuario" => 1758,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 906,
				"id_usuario" => 1759,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 907,
				"id_usuario" => 1760,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 908,
				"id_usuario" => 1761,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 909,
				"id_usuario" => 1762,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 910,
				"id_usuario" => 1763,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 911,
				"id_usuario" => 1764,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 912,
				"id_usuario" => 1765,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 913,
				"id_usuario" => 1766,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 914,
				"id_usuario" => 1767,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 915,
				"id_usuario" => 1768,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 916,
				"id_usuario" => 1769,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 917,
				"id_usuario" => 1770,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 918,
				"id_usuario" => 1771,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 919,
				"id_usuario" => 1772,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 920,
				"id_usuario" => 1773,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 921,
				"id_usuario" => 1774,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 922,
				"id_usuario" => 1775,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 923,
				"id_usuario" => 1776,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 924,
				"id_usuario" => 1777,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 925,
				"id_usuario" => 1778,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 926,
				"id_usuario" => 1779,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 927,
				"id_usuario" => 1780,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 928,
				"id_usuario" => 1781,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 929,
				"id_usuario" => 1782,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 930,
				"id_usuario" => 1783,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 931,
				"id_usuario" => 1784,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 932,
				"id_usuario" => 1785,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 933,
				"id_usuario" => 1786,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 934,
				"id_usuario" => 1787,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 935,
				"id_usuario" => 1788,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 936,
				"id_usuario" => 1789,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 937,
				"id_usuario" => 1790,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 938,
				"id_usuario" => 1791,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 939,
				"id_usuario" => 1792,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 940,
				"id_usuario" => 1793,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 941,
				"id_usuario" => 1794,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 942,
				"id_usuario" => 1795,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 943,
				"id_usuario" => 1796,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 944,
				"id_usuario" => 1797,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 945,
				"id_usuario" => 1798,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 946,
				"id_usuario" => 1799,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 947,
				"id_usuario" => 1800,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 948,
				"id_usuario" => 1801,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 949,
				"id_usuario" => 1802,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 950,
				"id_usuario" => 1803,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 951,
				"id_usuario" => 1804,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 952,
				"id_usuario" => 1805,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 953,
				"id_usuario" => 1806,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 954,
				"id_usuario" => 1807,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 955,
				"id_usuario" => 1808,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 956,
				"id_usuario" => 1809,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 957,
				"id_usuario" => 1810,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 958,
				"id_usuario" => 1811,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 959,
				"id_usuario" => 1812,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 960,
				"id_usuario" => 1813,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 961,
				"id_usuario" => 1814,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 962,
				"id_usuario" => 1815,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 963,
				"id_usuario" => 1816,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 964,
				"id_usuario" => 1817,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 965,
				"id_usuario" => 1818,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 966,
				"id_usuario" => 1819,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 967,
				"id_usuario" => 1820,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 968,
				"id_usuario" => 1821,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 969,
				"id_usuario" => 1822,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 970,
				"id_usuario" => 1823,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 971,
				"id_usuario" => 1824,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 972,
				"id_usuario" => 1825,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 973,
				"id_usuario" => 1826,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 974,
				"id_usuario" => 1827,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 975,
				"id_usuario" => 1828,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 976,
				"id_usuario" => 1829,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 977,
				"id_usuario" => 1830,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 978,
				"id_usuario" => 1831,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 979,
				"id_usuario" => 1832,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 980,
				"id_usuario" => 1833,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 981,
				"id_usuario" => 1834,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 982,
				"id_usuario" => 1835,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 983,
				"id_usuario" => 1836,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 984,
				"id_usuario" => 1837,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 985,
				"id_usuario" => 1838,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 986,
				"id_usuario" => 1839,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 987,
				"id_usuario" => 1840,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 988,
				"id_usuario" => 1841,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 989,
				"id_usuario" => 1842,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 990,
				"id_usuario" => 1843,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 991,
				"id_usuario" => 1844,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 992,
				"id_usuario" => 1845,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 993,
				"id_usuario" => 1846,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 994,
				"id_usuario" => 1847,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 995,
				"id_usuario" => 1848,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 996,
				"id_usuario" => 1849,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 997,
				"id_usuario" => 1850,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 998,
				"id_usuario" => 1851,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 999,
				"id_usuario" => 1852,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1000,
				"id_usuario" => 1853,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1001,
				"id_usuario" => 1854,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1002,
				"id_usuario" => 1855,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1003,
				"id_usuario" => 1856,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1004,
				"id_usuario" => 1857,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1005,
				"id_usuario" => 1858,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1006,
				"id_usuario" => 1859,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1007,
				"id_usuario" => 1860,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1008,
				"id_usuario" => 1861,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1009,
				"id_usuario" => 1862,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1010,
				"id_usuario" => 1863,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1011,
				"id_usuario" => 1864,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1012,
				"id_usuario" => 1865,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1013,
				"id_usuario" => 1866,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1014,
				"id_usuario" => 1867,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1015,
				"id_usuario" => 1868,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1016,
				"id_usuario" => 1869,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1017,
				"id_usuario" => 1870,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1018,
				"id_usuario" => 1871,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1019,
				"id_usuario" => 1872,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1020,
				"id_usuario" => 1873,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1021,
				"id_usuario" => 1874,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1022,
				"id_usuario" => 1875,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1023,
				"id_usuario" => 1876,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1024,
				"id_usuario" => 1877,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1025,
				"id_usuario" => 1878,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1026,
				"id_usuario" => 1879,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1027,
				"id_usuario" => 1880,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1028,
				"id_usuario" => 1881,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1029,
				"id_usuario" => 1882,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1030,
				"id_usuario" => 1883,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1031,
				"id_usuario" => 1884,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1032,
				"id_usuario" => 1885,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1033,
				"id_usuario" => 1886,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1034,
				"id_usuario" => 1887,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1035,
				"id_usuario" => 1888,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1036,
				"id_usuario" => 1889,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1037,
				"id_usuario" => 1890,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1038,
				"id_usuario" => 1891,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1039,
				"id_usuario" => 1892,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1040,
				"id_usuario" => 1893,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1041,
				"id_usuario" => 1894,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1042,
				"id_usuario" => 1895,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1043,
				"id_usuario" => 1896,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1044,
				"id_usuario" => 1897,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1045,
				"id_usuario" => 1898,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1046,
				"id_usuario" => 1899,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1047,
				"id_usuario" => 1900,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1048,
				"id_usuario" => 1901,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1049,
				"id_usuario" => 1902,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1050,
				"id_usuario" => 1903,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1051,
				"id_usuario" => 1904,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1052,
				"id_usuario" => 1905,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1053,
				"id_usuario" => 1906,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1054,
				"id_usuario" => 1907,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1055,
				"id_usuario" => 1908,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1056,
				"id_usuario" => 1909,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1057,
				"id_usuario" => 1910,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1058,
				"id_usuario" => 1911,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1059,
				"id_usuario" => 1912,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1060,
				"id_usuario" => 1913,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1061,
				"id_usuario" => 1914,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1062,
				"id_usuario" => 1915,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1063,
				"id_usuario" => 1916,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1064,
				"id_usuario" => 1917,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1065,
				"id_usuario" => 1918,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1066,
				"id_usuario" => 1919,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1067,
				"id_usuario" => 10439,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1068,
				"id_usuario" => 10440,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1069,
				"id_usuario" => 10441,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1070,
				"id_usuario" => 10442,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1071,
				"id_usuario" => 10443,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1072,
				"id_usuario" => 10444,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1073,
				"id_usuario" => 10445,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1074,
				"id_usuario" => 10446,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1075,
				"id_usuario" => 10447,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1076,
				"id_usuario" => 10448,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1077,
				"id_usuario" => 10449,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1078,
				"id_usuario" => 10450,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1079,
				"id_usuario" => 10451,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1080,
				"id_usuario" => 10452,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1081,
				"id_usuario" => 10453,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1082,
				"id_usuario" => 10454,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1083,
				"id_usuario" => 10455,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1084,
				"id_usuario" => 10456,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1085,
				"id_usuario" => 10457,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1086,
				"id_usuario" => 10458,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1087,
				"id_usuario" => 10459,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1088,
				"id_usuario" => 10460,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1089,
				"id_usuario" => 10461,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1090,
				"id_usuario" => 10462,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1091,
				"id_usuario" => 10463,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1092,
				"id_usuario" => 10464,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1093,
				"id_usuario" => 10465,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1094,
				"id_usuario" => 10466,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1095,
				"id_usuario" => 10467,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1096,
				"id_usuario" => 10468,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1097,
				"id_usuario" => 10469,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1098,
				"id_usuario" => 10470,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1099,
				"id_usuario" => 10471,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1100,
				"id_usuario" => 10472,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1101,
				"id_usuario" => 10473,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1102,
				"id_usuario" => 10474,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1103,
				"id_usuario" => 10475,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1104,
				"id_usuario" => 10476,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1105,
				"id_usuario" => 10477,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1106,
				"id_usuario" => 10478,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1107,
				"id_usuario" => 10479,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1108,
				"id_usuario" => 10480,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1109,
				"id_usuario" => 10481,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1110,
				"id_usuario" => 10482,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1111,
				"id_usuario" => 10483,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1112,
				"id_usuario" => 10484,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1113,
				"id_usuario" => 10485,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1114,
				"id_usuario" => 10486,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1115,
				"id_usuario" => 10487,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1116,
				"id_usuario" => 10488,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1117,
				"id_usuario" => 10489,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1118,
				"id_usuario" => 10490,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1119,
				"id_usuario" => 10491,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1120,
				"id_usuario" => 10492,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1121,
				"id_usuario" => 10493,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1122,
				"id_usuario" => 10494,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1123,
				"id_usuario" => 10495,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1124,
				"id_usuario" => 10496,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1125,
				"id_usuario" => 10497,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1126,
				"id_usuario" => 10498,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1127,
				"id_usuario" => 10499,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1128,
				"id_usuario" => 10500,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1129,
				"id_usuario" => 10501,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1130,
				"id_usuario" => 10502,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1131,
				"id_usuario" => 10503,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1132,
				"id_usuario" => 10504,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1133,
				"id_usuario" => 10505,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1134,
				"id_usuario" => 10506,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1135,
				"id_usuario" => 10499,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1136,
				"id_usuario" => 10508,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1137,
				"id_usuario" => 10509,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1138,
				"id_usuario" => 10510,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1139,
				"id_usuario" => 10511,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1140,
				"id_usuario" => 10512,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1141,
				"id_usuario" => 10513,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1142,
				"id_usuario" => 10514,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1143,
				"id_usuario" => 10515,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1144,
				"id_usuario" => 10516,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1145,
				"id_usuario" => 10517,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1146,
				"id_usuario" => 10518,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1147,
				"id_usuario" => 10519,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1148,
				"id_usuario" => 10520,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1149,
				"id_usuario" => 10521,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1150,
				"id_usuario" => 10522,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1151,
				"id_usuario" => 10523,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1152,
				"id_usuario" => 10524,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1153,
				"id_usuario" => 10525,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1154,
				"id_usuario" => 10526,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1155,
				"id_usuario" => 10527,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1156,
				"id_usuario" => 10528,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1157,
				"id_usuario" => 10529,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1158,
				"id_usuario" => 10530,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1159,
				"id_usuario" => 10531,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1160,
				"id_usuario" => 10532,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1161,
				"id_usuario" => 10533,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1162,
				"id_usuario" => 10534,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1163,
				"id_usuario" => 10535,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1164,
				"id_usuario" => 10536,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1165,
				"id_usuario" => 10537,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1166,
				"id_usuario" => 10538,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1167,
				"id_usuario" => 10539,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1168,
				"id_usuario" => 10540,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1169,
				"id_usuario" => 10541,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1170,
				"id_usuario" => 10542,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1171,
				"id_usuario" => 10543,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1172,
				"id_usuario" => 10544,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1173,
				"id_usuario" => 10545,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1174,
				"id_usuario" => 10546,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1175,
				"id_usuario" => 10547,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1176,
				"id_usuario" => 10548,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1177,
				"id_usuario" => 10549,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1178,
				"id_usuario" => 10550,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1179,
				"id_usuario" => 10551,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1180,
				"id_usuario" => 10552,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1181,
				"id_usuario" => 10553,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1182,
				"id_usuario" => 10554,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1183,
				"id_usuario" => 10555,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1184,
				"id_usuario" => 10556,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1185,
				"id_usuario" => 10557,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1186,
				"id_usuario" => 10558,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1187,
				"id_usuario" => 10559,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1188,
				"id_usuario" => 10560,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1189,
				"id_usuario" => 10561,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1190,
				"id_usuario" => 10562,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1191,
				"id_usuario" => 10563,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1192,
				"id_usuario" => 10564,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1193,
				"id_usuario" => 10565,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1194,
				"id_usuario" => 10566,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1195,
				"id_usuario" => 10567,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1196,
				"id_usuario" => 10568,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1197,
				"id_usuario" => 10569,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1198,
				"id_usuario" => 10570,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1199,
				"id_usuario" => 10571,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1200,
				"id_usuario" => 10572,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1201,
				"id_usuario" => 10573,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1202,
				"id_usuario" => 10574,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1203,
				"id_usuario" => 10575,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1204,
				"id_usuario" => 10576,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1205,
				"id_usuario" => 10577,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1206,
				"id_usuario" => 10578,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1207,
				"id_usuario" => 10579,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1208,
				"id_usuario" => 10580,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1209,
				"id_usuario" => 10581,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1210,
				"id_usuario" => 10582,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1211,
				"id_usuario" => 10564,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1212,
				"id_usuario" => 10584,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1213,
				"id_usuario" => 10585,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1214,
				"id_usuario" => 10586,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1215,
				"id_usuario" => 10587,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1216,
				"id_usuario" => 10588,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1217,
				"id_usuario" => 10589,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1218,
				"id_usuario" => 10590,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1219,
				"id_usuario" => 10591,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1220,
				"id_usuario" => 10592,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1221,
				"id_usuario" => 10593,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1222,
				"id_usuario" => 10594,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1223,
				"id_usuario" => 10595,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1224,
				"id_usuario" => 10596,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1225,
				"id_usuario" => 10597,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1226,
				"id_usuario" => 10598,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1227,
				"id_usuario" => 10599,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1228,
				"id_usuario" => 10600,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1229,
				"id_usuario" => 10601,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1230,
				"id_usuario" => 10602,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1231,
				"id_usuario" => 10603,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1232,
				"id_usuario" => 10604,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1233,
				"id_usuario" => 10605,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1234,
				"id_usuario" => 10606,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1235,
				"id_usuario" => 10607,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1236,
				"id_usuario" => 10608,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1237,
				"id_usuario" => 10609,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1238,
				"id_usuario" => 10610,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1239,
				"id_usuario" => 10611,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1240,
				"id_usuario" => 10612,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1241,
				"id_usuario" => 10613,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1242,
				"id_usuario" => 10614,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1243,
				"id_usuario" => 10615,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1244,
				"id_usuario" => 10616,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1245,
				"id_usuario" => 10617,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1246,
				"id_usuario" => 10618,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1247,
				"id_usuario" => 10619,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1248,
				"id_usuario" => 10620,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1249,
				"id_usuario" => 10621,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1250,
				"id_usuario" => 10622,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1251,
				"id_usuario" => 10623,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1252,
				"id_usuario" => 10624,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1253,
				"id_usuario" => 10625,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1254,
				"id_usuario" => 10626,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1255,
				"id_usuario" => 10627,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1256,
				"id_usuario" => 10628,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1257,
				"id_usuario" => 10629,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1258,
				"id_usuario" => 10630,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1259,
				"id_usuario" => 10631,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1260,
				"id_usuario" => 10632,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1261,
				"id_usuario" => 10633,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1262,
				"id_usuario" => 10634,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1263,
				"id_usuario" => 10635,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1264,
				"id_usuario" => 10636,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1265,
				"id_usuario" => 10637,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1266,
				"id_usuario" => 10638,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1267,
				"id_usuario" => 10639,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1268,
				"id_usuario" => 10640,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1269,
				"id_usuario" => 10641,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1270,
				"id_usuario" => 10642,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1271,
				"id_usuario" => 10643,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1272,
				"id_usuario" => 10644,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1273,
				"id_usuario" => 10645,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1274,
				"id_usuario" => 10646,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1275,
				"id_usuario" => 10647,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1276,
				"id_usuario" => 10648,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1277,
				"id_usuario" => 10649,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1278,
				"id_usuario" => 10650,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1279,
				"id_usuario" => 10651,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1280,
				"id_usuario" => 10652,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1281,
				"id_usuario" => 10653,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1282,
				"id_usuario" => 10654,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1283,
				"id_usuario" => 10655,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1284,
				"id_usuario" => 10656,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1285,
				"id_usuario" => 10657,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1286,
				"id_usuario" => 10658,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1287,
				"id_usuario" => 10659,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1288,
				"id_usuario" => 10660,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1289,
				"id_usuario" => 10661,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1290,
				"id_usuario" => 10662,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1291,
				"id_usuario" => 10663,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1292,
				"id_usuario" => 10664,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1293,
				"id_usuario" => 10665,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1294,
				"id_usuario" => 10759,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1295,
				"id_usuario" => 10666,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1296,
				"id_usuario" => 10667,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1297,
				"id_usuario" => 10668,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1298,
				"id_usuario" => 10669,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1299,
				"id_usuario" => 10670,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1300,
				"id_usuario" => 10671,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1301,
				"id_usuario" => 10672,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1302,
				"id_usuario" => 10673,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1303,
				"id_usuario" => 10674,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1304,
				"id_usuario" => 10675,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1305,
				"id_usuario" => 10676,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1306,
				"id_usuario" => 10677,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1307,
				"id_usuario" => 10678,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1308,
				"id_usuario" => 10679,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1309,
				"id_usuario" => 10680,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1310,
				"id_usuario" => 10681,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1311,
				"id_usuario" => 10682,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1312,
				"id_usuario" => 10683,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1313,
				"id_usuario" => 10684,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1314,
				"id_usuario" => 10685,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1315,
				"id_usuario" => 10686,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1316,
				"id_usuario" => 10687,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1317,
				"id_usuario" => 10688,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1318,
				"id_usuario" => 10689,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1319,
				"id_usuario" => 10690,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1320,
				"id_usuario" => 10691,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1321,
				"id_usuario" => 10692,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1322,
				"id_usuario" => 10693,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1323,
				"id_usuario" => 10694,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1324,
				"id_usuario" => 10695,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1325,
				"id_usuario" => 10696,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1326,
				"id_usuario" => 10697,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1327,
				"id_usuario" => 10698,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1328,
				"id_usuario" => 10699,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1329,
				"id_usuario" => 10700,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1330,
				"id_usuario" => 10701,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1331,
				"id_usuario" => 10702,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1332,
				"id_usuario" => 10703,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1333,
				"id_usuario" => 10704,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1334,
				"id_usuario" => 10705,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1335,
				"id_usuario" => 10706,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1336,
				"id_usuario" => 10707,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1337,
				"id_usuario" => 10708,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1338,
				"id_usuario" => 10709,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1339,
				"id_usuario" => 10710,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1340,
				"id_usuario" => 10711,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1341,
				"id_usuario" => 10712,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1342,
				"id_usuario" => 10713,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1343,
				"id_usuario" => 10714,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1344,
				"id_usuario" => 10715,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1345,
				"id_usuario" => 10716,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1346,
				"id_usuario" => 10717,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1347,
				"id_usuario" => 10718,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1348,
				"id_usuario" => 10719,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1349,
				"id_usuario" => 10720,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1350,
				"id_usuario" => 10721,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1351,
				"id_usuario" => 10722,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1352,
				"id_usuario" => 10723,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1353,
				"id_usuario" => 10724,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1354,
				"id_usuario" => 10725,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1355,
				"id_usuario" => 10726,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1356,
				"id_usuario" => 10727,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1357,
				"id_usuario" => 10728,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1358,
				"id_usuario" => 10729,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1359,
				"id_usuario" => 10730,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1360,
				"id_usuario" => 10731,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1361,
				"id_usuario" => 10732,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1362,
				"id_usuario" => 10733,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1363,
				"id_usuario" => 10734,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1364,
				"id_usuario" => 10735,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1365,
				"id_usuario" => 10736,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1366,
				"id_usuario" => 10737,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1367,
				"id_usuario" => 10738,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1368,
				"id_usuario" => 10739,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1369,
				"id_usuario" => 10740,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1370,
				"id_usuario" => 10741,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1371,
				"id_usuario" => 10742,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1372,
				"id_usuario" => 10743,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1373,
				"id_usuario" => 10744,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1374,
				"id_usuario" => 10745,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1375,
				"id_usuario" => 10746,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1376,
				"id_usuario" => 10747,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1377,
				"id_usuario" => 10748,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1378,
				"id_usuario" => 10749,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1379,
				"id_usuario" => 10750,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1380,
				"id_usuario" => 10751,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1381,
				"id_usuario" => 10752,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1382,
				"id_usuario" => 10753,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1383,
				"id_usuario" => 10754,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1384,
				"id_usuario" => 10755,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1385,
				"id_usuario" => 10756,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1386,
				"id_usuario" => 10757,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1387,
				"id_usuario" => 10758,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1388,
				"id_usuario" => 10759,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1389,
				"id_usuario" => 10760,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1390,
				"id_usuario" => 10761,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1391,
				"id_usuario" => 10762,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1392,
				"id_usuario" => 10763,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1393,
				"id_usuario" => 10764,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1394,
				"id_usuario" => 10765,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1395,
				"id_usuario" => 10474,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1396,
				"id_usuario" => 10766,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1397,
				"id_usuario" => 10767,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1398,
				"id_usuario" => 10768,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1399,
				"id_usuario" => 10769,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1400,
				"id_usuario" => 10770,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1401,
				"id_usuario" => 10771,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1402,
				"id_usuario" => 10772,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1403,
				"id_usuario" => 10773,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1404,
				"id_usuario" => 10774,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1405,
				"id_usuario" => 10775,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1406,
				"id_usuario" => 10776,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1407,
				"id_usuario" => 10777,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1408,
				"id_usuario" => 10778,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1409,
				"id_usuario" => 10779,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1410,
				"id_usuario" => 10780,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1411,
				"id_usuario" => 10781,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1412,
				"id_usuario" => 10782,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1413,
				"id_usuario" => 10783,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1414,
				"id_usuario" => 10784,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1415,
				"id_usuario" => 10785,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1416,
				"id_usuario" => 10786,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1417,
				"id_usuario" => 10787,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1418,
				"id_usuario" => 10788,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1419,
				"id_usuario" => 10789,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1420,
				"id_usuario" => 10790,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1421,
				"id_usuario" => 10791,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1422,
				"id_usuario" => 10478,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1423,
				"id_usuario" => 10793,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1424,
				"id_usuario" => 10794,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1425,
				"id_usuario" => 10795,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1426,
				"id_usuario" => 10796,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1427,
				"id_usuario" => 10797,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1428,
				"id_usuario" => 10798,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1429,
				"id_usuario" => 10799,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1430,
				"id_usuario" => 10800,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1431,
				"id_usuario" => 10801,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1432,
				"id_usuario" => 10802,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1433,
				"id_usuario" => 10803,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1434,
				"id_usuario" => 10804,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1435,
				"id_usuario" => 10805,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1436,
				"id_usuario" => 10806,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1437,
				"id_usuario" => 10807,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1438,
				"id_usuario" => 10808,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1439,
				"id_usuario" => 10809,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1440,
				"id_usuario" => 10810,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1441,
				"id_usuario" => 10811,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1442,
				"id_usuario" => 10812,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1443,
				"id_usuario" => 10813,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1444,
				"id_usuario" => 10814,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1445,
				"id_usuario" => 10815,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1446,
				"id_usuario" => 10816,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1447,
				"id_usuario" => 10817,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1448,
				"id_usuario" => 10818,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1449,
				"id_usuario" => 10819,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1450,
				"id_usuario" => 10820,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1451,
				"id_usuario" => 10821,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1452,
				"id_usuario" => 10822,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1453,
				"id_usuario" => 10823,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1454,
				"id_usuario" => 10824,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1455,
				"id_usuario" => 10825,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1456,
				"id_usuario" => 10826,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1457,
				"id_usuario" => 10827,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1458,
				"id_usuario" => 10828,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1459,
				"id_usuario" => 10829,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1460,
				"id_usuario" => 10830,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1461,
				"id_usuario" => 10831,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1462,
				"id_usuario" => 10832,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1463,
				"id_usuario" => 10833,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1464,
				"id_usuario" => 10834,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1465,
				"id_usuario" => 10835,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1466,
				"id_usuario" => 10836,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1467,
				"id_usuario" => 10837,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1468,
				"id_usuario" => 10838,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1469,
				"id_usuario" => 10839,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1470,
				"id_usuario" => 10840,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1471,
				"id_usuario" => 10841,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1472,
				"id_usuario" => 10842,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1473,
				"id_usuario" => 10485,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1474,
				"id_usuario" => 10843,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1475,
				"id_usuario" => 10844,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1476,
				"id_usuario" => 10845,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1477,
				"id_usuario" => 10846,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1478,
				"id_usuario" => 10847,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1479,
				"id_usuario" => 10848,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1480,
				"id_usuario" => 10849,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1481,
				"id_usuario" => 10850,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1482,
				"id_usuario" => 10851,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1483,
				"id_usuario" => 10852,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1484,
				"id_usuario" => 10853,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1485,
				"id_usuario" => 10854,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1486,
				"id_usuario" => 10855,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1487,
				"id_usuario" => 10856,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1488,
				"id_usuario" => 10857,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1489,
				"id_usuario" => 10858,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1490,
				"id_usuario" => 10859,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1491,
				"id_usuario" => 10860,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1492,
				"id_usuario" => 10861,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1493,
				"id_usuario" => 10862,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1494,
				"id_usuario" => 10863,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1495,
				"id_usuario" => 10864,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1496,
				"id_usuario" => 10865,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1497,
				"id_usuario" => 10866,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1498,
				"id_usuario" => 10867,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1499,
				"id_usuario" => 10868,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1500,
				"id_usuario" => 10869,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1501,
				"id_usuario" => 10870,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1502,
				"id_usuario" => 10871,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1503,
				"id_usuario" => 10872,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1504,
				"id_usuario" => 10873,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1505,
				"id_usuario" => 10874,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1506,
				"id_usuario" => 10657,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1507,
				"id_usuario" => 10876,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1508,
				"id_usuario" => 10877,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1509,
				"id_usuario" => 10878,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1510,
				"id_usuario" => 10879,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1511,
				"id_usuario" => 10880,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1512,
				"id_usuario" => 10881,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1513,
				"id_usuario" => 10882,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1514,
				"id_usuario" => 10883,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1515,
				"id_usuario" => 10884,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1516,
				"id_usuario" => 10885,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1517,
				"id_usuario" => 10886,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1518,
				"id_usuario" => 10887,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1519,
				"id_usuario" => 10888,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1520,
				"id_usuario" => 10889,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1521,
				"id_usuario" => 10890,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1522,
				"id_usuario" => 10891,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1523,
				"id_usuario" => 10892,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1524,
				"id_usuario" => 10534,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1525,
				"id_usuario" => 10894,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1526,
				"id_usuario" => 10895,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1527,
				"id_usuario" => 10896,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1528,
				"id_usuario" => 10897,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1529,
				"id_usuario" => 10898,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1530,
				"id_usuario" => 10899,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1531,
				"id_usuario" => 10900,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1532,
				"id_usuario" => 10901,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1533,
				"id_usuario" => 10902,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1534,
				"id_usuario" => 10903,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1535,
				"id_usuario" => 10904,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1536,
				"id_usuario" => 10905,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1537,
				"id_usuario" => 10906,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1538,
				"id_usuario" => 10907,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1539,
				"id_usuario" => 10908,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1540,
				"id_usuario" => 10909,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1541,
				"id_usuario" => 10910,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1542,
				"id_usuario" => 10911,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1543,
				"id_usuario" => 10912,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1544,
				"id_usuario" => 10913,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1545,
				"id_usuario" => 10914,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1546,
				"id_usuario" => 10915,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1547,
				"id_usuario" => 10916,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1548,
				"id_usuario" => 10917,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1549,
				"id_usuario" => 10918,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1550,
				"id_usuario" => 10919,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1551,
				"id_usuario" => 10920,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1552,
				"id_usuario" => 10921,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1553,
				"id_usuario" => 10922,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1554,
				"id_usuario" => 10923,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1555,
				"id_usuario" => 10924,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1556,
				"id_usuario" => 10925,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1557,
				"id_usuario" => 10926,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1558,
				"id_usuario" => 10927,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1559,
				"id_usuario" => 10928,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1560,
				"id_usuario" => 10929,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1561,
				"id_usuario" => 10930,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1562,
				"id_usuario" => 10931,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1563,
				"id_usuario" => 10932,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1564,
				"id_usuario" => 10933,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1565,
				"id_usuario" => 10934,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1566,
				"id_usuario" => 10935,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1567,
				"id_usuario" => 10936,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1568,
				"id_usuario" => 10937,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1569,
				"id_usuario" => 10938,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1570,
				"id_usuario" => 10939,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1571,
				"id_usuario" => 10940,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1572,
				"id_usuario" => 10941,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1573,
				"id_usuario" => 10942,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1574,
				"id_usuario" => 10943,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1575,
				"id_usuario" => 10944,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1576,
				"id_usuario" => 10466,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1577,
				"id_usuario" => 10945,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1578,
				"id_usuario" => 10946,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1579,
				"id_usuario" => 10947,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1580,
				"id_usuario" => 10948,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1581,
				"id_usuario" => 10949,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1582,
				"id_usuario" => 10950,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1583,
				"id_usuario" => 10951,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1584,
				"id_usuario" => 10952,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1585,
				"id_usuario" => 10953,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1586,
				"id_usuario" => 10954,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1587,
				"id_usuario" => 10955,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1588,
				"id_usuario" => 10956,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1589,
				"id_usuario" => 10957,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1590,
				"id_usuario" => 10958,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1591,
				"id_usuario" => 10959,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1592,
				"id_usuario" => 10960,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1593,
				"id_usuario" => 10961,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1594,
				"id_usuario" => 10962,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1595,
				"id_usuario" => 10963,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1596,
				"id_usuario" => 10964,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1597,
				"id_usuario" => 10965,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1598,
				"id_usuario" => 10966,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1599,
				"id_usuario" => 10967,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1600,
				"id_usuario" => 10968,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1601,
				"id_usuario" => 10969,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1602,
				"id_usuario" => 10970,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1603,
				"id_usuario" => 10971,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1604,
				"id_usuario" => 10972,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1605,
				"id_usuario" => 10973,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1606,
				"id_usuario" => 10974,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1607,
				"id_usuario" => 10975,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1608,
				"id_usuario" => 10976,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1609,
				"id_usuario" => 10977,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1610,
				"id_usuario" => 10978,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1611,
				"id_usuario" => 10979,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1612,
				"id_usuario" => 10980,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1613,
				"id_usuario" => 10981,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1614,
				"id_usuario" => 10982,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1615,
				"id_usuario" => 10983,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1616,
				"id_usuario" => 10984,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1617,
				"id_usuario" => 10985,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1618,
				"id_usuario" => 10986,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1619,
				"id_usuario" => 10932,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1620,
				"id_usuario" => 10987,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1621,
				"id_usuario" => 10988,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1622,
				"id_usuario" => 10989,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1623,
				"id_usuario" => 10990,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1624,
				"id_usuario" => 10991,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1625,
				"id_usuario" => 10992,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1626,
				"id_usuario" => 10993,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1627,
				"id_usuario" => 10994,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1628,
				"id_usuario" => 10995,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1629,
				"id_usuario" => 10996,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1630,
				"id_usuario" => 10997,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1631,
				"id_usuario" => 10998,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1632,
				"id_usuario" => 10999,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1633,
				"id_usuario" => 11000,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1634,
				"id_usuario" => 11001,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1635,
				"id_usuario" => 11002,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1636,
				"id_usuario" => 11003,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1637,
				"id_usuario" => 10710,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1638,
				"id_usuario" => 11005,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1639,
				"id_usuario" => 11006,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1640,
				"id_usuario" => 11007,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1641,
				"id_usuario" => 11008,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1642,
				"id_usuario" => 11009,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1643,
				"id_usuario" => 11010,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1644,
				"id_usuario" => 11011,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1645,
				"id_usuario" => 11012,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1646,
				"id_usuario" => 11013,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1647,
				"id_usuario" => 11014,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1648,
				"id_usuario" => 11015,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1649,
				"id_usuario" => 11016,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1650,
				"id_usuario" => 11017,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1651,
				"id_usuario" => 11018,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1652,
				"id_usuario" => 11019,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1653,
				"id_usuario" => 11020,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1654,
				"id_usuario" => 11021,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1655,
				"id_usuario" => 10890,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1656,
				"id_usuario" => 11023,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1657,
				"id_usuario" => 11024,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1658,
				"id_usuario" => 11025,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1659,
				"id_usuario" => 11026,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1660,
				"id_usuario" => 10924,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1661,
				"id_usuario" => 11028,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1662,
				"id_usuario" => 11029,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1663,
				"id_usuario" => 11030,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1664,
				"id_usuario" => 11031,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1665,
				"id_usuario" => 11032,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1666,
				"id_usuario" => 11033,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1667,
				"id_usuario" => 11034,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1668,
				"id_usuario" => 11035,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1669,
				"id_usuario" => 11036,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1670,
				"id_usuario" => 11037,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1671,
				"id_usuario" => 11038,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1672,
				"id_usuario" => 11039,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1673,
				"id_usuario" => 11040,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1674,
				"id_usuario" => 11041,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1675,
				"id_usuario" => 11042,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1676,
				"id_usuario" => 11043,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1677,
				"id_usuario" => 11044,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1678,
				"id_usuario" => 11045,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1679,
				"id_usuario" => 11046,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1680,
				"id_usuario" => 11047,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1681,
				"id_usuario" => 11048,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1682,
				"id_usuario" => 11049,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1683,
				"id_usuario" => 11050,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1684,
				"id_usuario" => 11051,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1685,
				"id_usuario" => 11052,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1686,
				"id_usuario" => 11053,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1687,
				"id_usuario" => 11054,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1688,
				"id_usuario" => 11055,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1689,
				"id_usuario" => 11056,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1690,
				"id_usuario" => 11057,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1691,
				"id_usuario" => 11058,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1692,
				"id_usuario" => 11059,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1693,
				"id_usuario" => 11060,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1694,
				"id_usuario" => 11061,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1695,
				"id_usuario" => 11062,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1696,
				"id_usuario" => 11063,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1697,
				"id_usuario" => 11064,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1698,
				"id_usuario" => 11065,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1699,
				"id_usuario" => 11066,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1700,
				"id_usuario" => 11067,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1701,
				"id_usuario" => 11068,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1702,
				"id_usuario" => 11069,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1703,
				"id_usuario" => 11070,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1704,
				"id_usuario" => 11071,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1705,
				"id_usuario" => 11072,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1706,
				"id_usuario" => 11073,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1707,
				"id_usuario" => 11074,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1708,
				"id_usuario" => 11075,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1709,
				"id_usuario" => 11076,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1710,
				"id_usuario" => 11077,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1711,
				"id_usuario" => 11078,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1712,
				"id_usuario" => 11079,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1713,
				"id_usuario" => 11080,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1714,
				"id_usuario" => 11081,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1715,
				"id_usuario" => 11082,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1716,
				"id_usuario" => 11083,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1717,
				"id_usuario" => 11084,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1718,
				"id_usuario" => 11085,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1719,
				"id_usuario" => 10950,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1720,
				"id_usuario" => 11086,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1721,
				"id_usuario" => 11087,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1722,
				"id_usuario" => 11088,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1723,
				"id_usuario" => 11089,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1724,
				"id_usuario" => 11090,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1725,
				"id_usuario" => 11091,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1726,
				"id_usuario" => 11092,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1727,
				"id_usuario" => 11093,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1728,
				"id_usuario" => 11094,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1729,
				"id_usuario" => 11095,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1730,
				"id_usuario" => 11096,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1731,
				"id_usuario" => 11097,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1732,
				"id_usuario" => 11098,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1733,
				"id_usuario" => 11099,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1734,
				"id_usuario" => 11100,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1735,
				"id_usuario" => 11101,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1736,
				"id_usuario" => 11102,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1737,
				"id_usuario" => 11103,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1738,
				"id_usuario" => 11104,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1739,
				"id_usuario" => 11105,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1740,
				"id_usuario" => 11106,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1741,
				"id_usuario" => 11107,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1742,
				"id_usuario" => 11108,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1743,
				"id_usuario" => 11109,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1744,
				"id_usuario" => 11110,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1745,
				"id_usuario" => 11111,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1746,
				"id_usuario" => 11112,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1747,
				"id_usuario" => 11113,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1748,
				"id_usuario" => 11114,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1749,
				"id_usuario" => 11115,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1750,
				"id_usuario" => 11116,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1751,
				"id_usuario" => 11117,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1752,
				"id_usuario" => 11118,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1753,
				"id_usuario" => 11119,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1754,
				"id_usuario" => 11120,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1755,
				"id_usuario" => 11121,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1756,
				"id_usuario" => 11122,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1757,
				"id_usuario" => 11123,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1758,
				"id_usuario" => 11124,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1759,
				"id_usuario" => 11125,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1760,
				"id_usuario" => 11126,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1761,
				"id_usuario" => 11123,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1762,
				"id_usuario" => 11124,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1763,
				"id_usuario" => 11125,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1764,
				"id_usuario" => 11126,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1765,
				"id_usuario" => 10592,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1766,
				"id_usuario" => 11128,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1767,
				"id_usuario" => 11129,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1768,
				"id_usuario" => 11130,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1769,
				"id_usuario" => 11131,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1770,
				"id_usuario" => 11132,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1771,
				"id_usuario" => 11133,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1772,
				"id_usuario" => 11134,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1773,
				"id_usuario" => 11135,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1774,
				"id_usuario" => 11136,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1775,
				"id_usuario" => 11137,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1776,
				"id_usuario" => 11138,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1777,
				"id_usuario" => 11139,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1778,
				"id_usuario" => 11140,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1779,
				"id_usuario" => 11141,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1780,
				"id_usuario" => 11142,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1781,
				"id_usuario" => 11143,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1782,
				"id_usuario" => 11144,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1783,
				"id_usuario" => 11145,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1784,
				"id_usuario" => 11146,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1785,
				"id_usuario" => 11147,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1786,
				"id_usuario" => 11148,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1787,
				"id_usuario" => 11149,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1788,
				"id_usuario" => 11150,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1789,
				"id_usuario" => 11151,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1790,
				"id_usuario" => 11152,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1791,
				"id_usuario" => 11153,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1792,
				"id_usuario" => 11154,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1793,
				"id_usuario" => 11155,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1794,
				"id_usuario" => 11156,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1795,
				"id_usuario" => 11157,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1796,
				"id_usuario" => 11158,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1797,
				"id_usuario" => 11159,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1798,
				"id_usuario" => 11160,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1799,
				"id_usuario" => 11161,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1800,
				"id_usuario" => 11162,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1801,
				"id_usuario" => 11163,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1802,
				"id_usuario" => 11164,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1803,
				"id_usuario" => 11165,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1804,
				"id_usuario" => 11166,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1805,
				"id_usuario" => 11167,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1806,
				"id_usuario" => 11168,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1807,
				"id_usuario" => 11169,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1808,
				"id_usuario" => 11170,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1809,
				"id_usuario" => 11171,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1810,
				"id_usuario" => 11172,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1811,
				"id_usuario" => 11174,
				"id_cadena" => 1,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1812,
				"id_usuario" => 11167,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1813,
				"id_usuario" => 11168,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1814,
				"id_usuario" => 11169,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1815,
				"id_usuario" => 11170,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1816,
				"id_usuario" => 11171,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1817,
				"id_usuario" => 11172,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1818,
				"id_usuario" => 11174,
				"id_cadena" => 2,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1819,
				"id_usuario" => 11166,
				"id_cadena" => 3,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1820,
				"id_usuario" => 11167,
				"id_cadena" => 3,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1821,
				"id_usuario" => 11168,
				"id_cadena" => 3,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1822,
				"id_usuario" => 11169,
				"id_cadena" => 3,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1823,
				"id_usuario" => 11170,
				"id_cadena" => 3,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1824,
				"id_usuario" => 11171,
				"id_cadena" => 3,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1825,
				"id_usuario" => 11172,
				"id_cadena" => 3,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 1826,
				"id_usuario" => 11174,
				"id_cadena" => 3,
				"id_usuario_crear" => null,
				"id_usuario_modifica" => null,
				"created_at" => null,
				"updated_at" => null,
				"deleted_at" => null
			]
		];
		DB::table('usuario_cadenas')->insert($usuario_cadenas);
    }
}
