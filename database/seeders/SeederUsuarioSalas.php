<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederUsuarioSalas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
      	DB::table('usuario_salas')->truncate();
      	DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Activamos la revisión de claves foráneas
        $usuario_salas = [
            [
                "id" => 1,
                "id_usuario" => 1,
                "id_sala" => 8,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2,
                "id_usuario" => 1,
                "id_sala" => 9,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 3,
                "id_usuario" => 1,
                "id_sala" => 10,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 4,
                "id_usuario" => 1,
                "id_sala" => 11,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 5,
                "id_usuario" => 1,
                "id_sala" => 12,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 6,
                "id_usuario" => 1,
                "id_sala" => 13,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 7,
                "id_usuario" => 1,
                "id_sala" => 14,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 8,
                "id_usuario" => 1,
                "id_sala" => 15,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 9,
                "id_usuario" => 1,
                "id_sala" => 16,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 10,
                "id_usuario" => 1,
                "id_sala" => 17,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 11,
                "id_usuario" => 1,
                "id_sala" => 18,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 12,
                "id_usuario" => 1,
                "id_sala" => 19,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 13,
                "id_usuario" => 1,
                "id_sala" => 20,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 14,
                "id_usuario" => 1,
                "id_sala" => 21,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 15,
                "id_usuario" => 1,
                "id_sala" => 22,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 16,
                "id_usuario" => 1,
                "id_sala" => 23,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 17,
                "id_usuario" => 1,
                "id_sala" => 24,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 18,
                "id_usuario" => 1,
                "id_sala" => 25,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 19,
                "id_usuario" => 1,
                "id_sala" => 26,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 20,
                "id_usuario" => 1,
                "id_sala" => 27,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 21,
                "id_usuario" => 1,
                "id_sala" => 28,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 22,
                "id_usuario" => 1,
                "id_sala" => 29,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 23,
                "id_usuario" => 1,
                "id_sala" => 30,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 24,
                "id_usuario" => 1,
                "id_sala" => 31,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 25,
                "id_usuario" => 1,
                "id_sala" => 32,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 26,
                "id_usuario" => 1,
                "id_sala" => 33,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 27,
                "id_usuario" => 1,
                "id_sala" => 34,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 28,
                "id_usuario" => 1,
                "id_sala" => 35,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 29,
                "id_usuario" => 1,
                "id_sala" => 36,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 30,
                "id_usuario" => 1,
                "id_sala" => 37,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 31,
                "id_usuario" => 1,
                "id_sala" => 38,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 32,
                "id_usuario" => 1,
                "id_sala" => 39,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 33,
                "id_usuario" => 1,
                "id_sala" => 40,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 34,
                "id_usuario" => 1,
                "id_sala" => 41,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 35,
                "id_usuario" => 1,
                "id_sala" => 42,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 36,
                "id_usuario" => 1,
                "id_sala" => 43,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 37,
                "id_usuario" => 1,
                "id_sala" => 44,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 38,
                "id_usuario" => 1,
                "id_sala" => 45,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 39,
                "id_usuario" => 1,
                "id_sala" => 46,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 40,
                "id_usuario" => 1,
                "id_sala" => 47,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 41,
                "id_usuario" => 1,
                "id_sala" => 48,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 42,
                "id_usuario" => 1,
                "id_sala" => 49,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 43,
                "id_usuario" => 1,
                "id_sala" => 50,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 44,
                "id_usuario" => 1,
                "id_sala" => 51,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 45,
                "id_usuario" => 1,
                "id_sala" => 52,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 46,
                "id_usuario" => 1,
                "id_sala" => 53,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 47,
                "id_usuario" => 1,
                "id_sala" => 54,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 48,
                "id_usuario" => 1,
                "id_sala" => 55,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 49,
                "id_usuario" => 1,
                "id_sala" => 56,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 50,
                "id_usuario" => 1,
                "id_sala" => 57,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 51,
                "id_usuario" => 1,
                "id_sala" => 58,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 52,
                "id_usuario" => 1,
                "id_sala" => 59,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 53,
                "id_usuario" => 1,
                "id_sala" => 60,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 54,
                "id_usuario" => 1,
                "id_sala" => 61,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 55,
                "id_usuario" => 1,
                "id_sala" => 62,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 56,
                "id_usuario" => 1,
                "id_sala" => 63,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 57,
                "id_usuario" => 1,
                "id_sala" => 64,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 58,
                "id_usuario" => 1,
                "id_sala" => 65,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 59,
                "id_usuario" => 1,
                "id_sala" => 66,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 60,
                "id_usuario" => 1,
                "id_sala" => 67,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 61,
                "id_usuario" => 1,
                "id_sala" => 68,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 62,
                "id_usuario" => 1,
                "id_sala" => 69,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 63,
                "id_usuario" => 1,
                "id_sala" => 70,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 64,
                "id_usuario" => 1,
                "id_sala" => 71,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 65,
                "id_usuario" => 1,
                "id_sala" => 72,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 66,
                "id_usuario" => 1,
                "id_sala" => 73,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 67,
                "id_usuario" => 1,
                "id_sala" => 74,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 68,
                "id_usuario" => 1,
                "id_sala" => 75,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 69,
                "id_usuario" => 1,
                "id_sala" => 76,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 70,
                "id_usuario" => 1,
                "id_sala" => 77,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 71,
                "id_usuario" => 1,
                "id_sala" => 78,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 72,
                "id_usuario" => 1,
                "id_sala" => 79,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 73,
                "id_usuario" => 1,
                "id_sala" => 80,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 74,
                "id_usuario" => 1,
                "id_sala" => 81,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 75,
                "id_usuario" => 1,
                "id_sala" => 82,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 76,
                "id_usuario" => 1,
                "id_sala" => 83,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 77,
                "id_usuario" => 1,
                "id_sala" => 84,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 78,
                "id_usuario" => 1,
                "id_sala" => 85,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 79,
                "id_usuario" => 1,
                "id_sala" => 86,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 80,
                "id_usuario" => 1,
                "id_sala" => 87,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 81,
                "id_usuario" => 1,
                "id_sala" => 88,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 82,
                "id_usuario" => 1,
                "id_sala" => 89,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 83,
                "id_usuario" => 1,
                "id_sala" => 90,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 84,
                "id_usuario" => 1,
                "id_sala" => 91,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 85,
                "id_usuario" => 1,
                "id_sala" => 92,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 86,
                "id_usuario" => 1,
                "id_sala" => 93,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 87,
                "id_usuario" => 1,
                "id_sala" => 94,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 88,
                "id_usuario" => 1,
                "id_sala" => 95,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 89,
                "id_usuario" => 1,
                "id_sala" => 96,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 90,
                "id_usuario" => 1,
                "id_sala" => 97,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 91,
                "id_usuario" => 1,
                "id_sala" => 98,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 92,
                "id_usuario" => 1,
                "id_sala" => 99,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 93,
                "id_usuario" => 1,
                "id_sala" => 100,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 94,
                "id_usuario" => 1,
                "id_sala" => 101,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 95,
                "id_usuario" => 1,
                "id_sala" => 102,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 96,
                "id_usuario" => 1,
                "id_sala" => 103,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 97,
                "id_usuario" => 1,
                "id_sala" => 104,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 98,
                "id_usuario" => 1,
                "id_sala" => 105,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 99,
                "id_usuario" => 1,
                "id_sala" => 106,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 100,
                "id_usuario" => 1,
                "id_sala" => 107,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 101,
                "id_usuario" => 1,
                "id_sala" => 108,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 102,
                "id_usuario" => 1,
                "id_sala" => 109,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 103,
                "id_usuario" => 1,
                "id_sala" => 110,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 104,
                "id_usuario" => 1,
                "id_sala" => 111,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 105,
                "id_usuario" => 1,
                "id_sala" => 112,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 106,
                "id_usuario" => 1,
                "id_sala" => 113,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 107,
                "id_usuario" => 1,
                "id_sala" => 114,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 108,
                "id_usuario" => 1,
                "id_sala" => 115,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 109,
                "id_usuario" => 1,
                "id_sala" => 116,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 110,
                "id_usuario" => 1,
                "id_sala" => 117,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 111,
                "id_usuario" => 1,
                "id_sala" => 118,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 112,
                "id_usuario" => 1,
                "id_sala" => 119,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 113,
                "id_usuario" => 1,
                "id_sala" => 120,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 114,
                "id_usuario" => 1,
                "id_sala" => 121,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 115,
                "id_usuario" => 1,
                "id_sala" => 122,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 116,
                "id_usuario" => 1,
                "id_sala" => 123,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 117,
                "id_usuario" => 1,
                "id_sala" => 124,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 118,
                "id_usuario" => 1,
                "id_sala" => 125,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 119,
                "id_usuario" => 1,
                "id_sala" => 126,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 120,
                "id_usuario" => 1,
                "id_sala" => 127,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 121,
                "id_usuario" => 1,
                "id_sala" => 128,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 122,
                "id_usuario" => 1,
                "id_sala" => 129,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 123,
                "id_usuario" => 1,
                "id_sala" => 130,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 124,
                "id_usuario" => 1,
                "id_sala" => 131,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 125,
                "id_usuario" => 1,
                "id_sala" => 132,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 126,
                "id_usuario" => 1,
                "id_sala" => 133,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 127,
                "id_usuario" => 1,
                "id_sala" => 134,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 128,
                "id_usuario" => 1,
                "id_sala" => 135,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 129,
                "id_usuario" => 1,
                "id_sala" => 136,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 130,
                "id_usuario" => 1,
                "id_sala" => 137,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 131,
                "id_usuario" => 1,
                "id_sala" => 138,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 132,
                "id_usuario" => 1,
                "id_sala" => 139,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 133,
                "id_usuario" => 1,
                "id_sala" => 140,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 134,
                "id_usuario" => 1,
                "id_sala" => 141,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 135,
                "id_usuario" => 1,
                "id_sala" => 142,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 136,
                "id_usuario" => 1,
                "id_sala" => 143,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 137,
                "id_usuario" => 1,
                "id_sala" => 144,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 138,
                "id_usuario" => 1,
                "id_sala" => 145,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 139,
                "id_usuario" => 1,
                "id_sala" => 146,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 140,
                "id_usuario" => 1,
                "id_sala" => 147,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 141,
                "id_usuario" => 1,
                "id_sala" => 148,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 142,
                "id_usuario" => 1,
                "id_sala" => 149,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 143,
                "id_usuario" => 1,
                "id_sala" => 150,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 144,
                "id_usuario" => 1,
                "id_sala" => 151,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 145,
                "id_usuario" => 1,
                "id_sala" => 152,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 146,
                "id_usuario" => 1,
                "id_sala" => 153,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 147,
                "id_usuario" => 1,
                "id_sala" => 154,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 148,
                "id_usuario" => 1,
                "id_sala" => 155,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 149,
                "id_usuario" => 1,
                "id_sala" => 156,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 150,
                "id_usuario" => 1,
                "id_sala" => 157,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 151,
                "id_usuario" => 1,
                "id_sala" => 158,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 152,
                "id_usuario" => 1,
                "id_sala" => 159,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 153,
                "id_usuario" => 1,
                "id_sala" => 160,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 154,
                "id_usuario" => 1,
                "id_sala" => 161,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 155,
                "id_usuario" => 1,
                "id_sala" => 162,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 156,
                "id_usuario" => 1,
                "id_sala" => 163,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 157,
                "id_usuario" => 1,
                "id_sala" => 164,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 158,
                "id_usuario" => 1,
                "id_sala" => 165,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 159,
                "id_usuario" => 1,
                "id_sala" => 166,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 160,
                "id_usuario" => 1,
                "id_sala" => 167,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 161,
                "id_usuario" => 1,
                "id_sala" => 168,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 162,
                "id_usuario" => 1,
                "id_sala" => 169,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 163,
                "id_usuario" => 1,
                "id_sala" => 170,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 164,
                "id_usuario" => 1,
                "id_sala" => 171,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 165,
                "id_usuario" => 1,
                "id_sala" => 172,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 166,
                "id_usuario" => 1,
                "id_sala" => 173,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 167,
                "id_usuario" => 1,
                "id_sala" => 174,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 168,
                "id_usuario" => 1,
                "id_sala" => 175,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 169,
                "id_usuario" => 1,
                "id_sala" => 176,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 170,
                "id_usuario" => 1,
                "id_sala" => 177,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 171,
                "id_usuario" => 1,
                "id_sala" => 178,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 172,
                "id_usuario" => 1,
                "id_sala" => 179,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 173,
                "id_usuario" => 1,
                "id_sala" => 180,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 174,
                "id_usuario" => 1,
                "id_sala" => 181,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 175,
                "id_usuario" => 1,
                "id_sala" => 182,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 176,
                "id_usuario" => 1,
                "id_sala" => 183,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 177,
                "id_usuario" => 1,
                "id_sala" => 184,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 178,
                "id_usuario" => 1,
                "id_sala" => 185,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 179,
                "id_usuario" => 1,
                "id_sala" => 186,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 180,
                "id_usuario" => 1,
                "id_sala" => 187,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 181,
                "id_usuario" => 1,
                "id_sala" => 188,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 182,
                "id_usuario" => 1,
                "id_sala" => 189,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 183,
                "id_usuario" => 1,
                "id_sala" => 190,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 184,
                "id_usuario" => 1,
                "id_sala" => 191,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 185,
                "id_usuario" => 1,
                "id_sala" => 192,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 186,
                "id_usuario" => 1,
                "id_sala" => 193,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 187,
                "id_usuario" => 1,
                "id_sala" => 194,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 188,
                "id_usuario" => 1,
                "id_sala" => 195,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 189,
                "id_usuario" => 1,
                "id_sala" => 196,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 190,
                "id_usuario" => 1,
                "id_sala" => 197,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 191,
                "id_usuario" => 1,
                "id_sala" => 198,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 192,
                "id_usuario" => 1,
                "id_sala" => 199,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 193,
                "id_usuario" => 1,
                "id_sala" => 200,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 194,
                "id_usuario" => 1,
                "id_sala" => 201,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 195,
                "id_usuario" => 1,
                "id_sala" => 202,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 196,
                "id_usuario" => 1,
                "id_sala" => 203,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 197,
                "id_usuario" => 1,
                "id_sala" => 204,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 198,
                "id_usuario" => 1,
                "id_sala" => 205,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 199,
                "id_usuario" => 1,
                "id_sala" => 206,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 200,
                "id_usuario" => 1,
                "id_sala" => 207,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 201,
                "id_usuario" => 1,
                "id_sala" => 208,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 202,
                "id_usuario" => 1,
                "id_sala" => 209,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 203,
                "id_usuario" => 1,
                "id_sala" => 210,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 204,
                "id_usuario" => 1,
                "id_sala" => 211,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 205,
                "id_usuario" => 1,
                "id_sala" => 212,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 206,
                "id_usuario" => 1,
                "id_sala" => 213,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 207,
                "id_usuario" => 1,
                "id_sala" => 214,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 208,
                "id_usuario" => 1,
                "id_sala" => 215,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 209,
                "id_usuario" => 1,
                "id_sala" => 216,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 210,
                "id_usuario" => 1,
                "id_sala" => 217,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 211,
                "id_usuario" => 1,
                "id_sala" => 218,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 212,
                "id_usuario" => 1,
                "id_sala" => 219,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 213,
                "id_usuario" => 1,
                "id_sala" => 220,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 214,
                "id_usuario" => 1,
                "id_sala" => 221,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 215,
                "id_usuario" => 1,
                "id_sala" => 222,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 216,
                "id_usuario" => 1,
                "id_sala" => 223,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 217,
                "id_usuario" => 1,
                "id_sala" => 224,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 218,
                "id_usuario" => 1,
                "id_sala" => 225,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 219,
                "id_usuario" => 1,
                "id_sala" => 226,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 220,
                "id_usuario" => 1,
                "id_sala" => 227,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 221,
                "id_usuario" => 1,
                "id_sala" => 228,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 222,
                "id_usuario" => 1,
                "id_sala" => 229,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 223,
                "id_usuario" => 1,
                "id_sala" => 230,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 224,
                "id_usuario" => 1,
                "id_sala" => 231,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 225,
                "id_usuario" => 1,
                "id_sala" => 232,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 226,
                "id_usuario" => 1,
                "id_sala" => 233,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 227,
                "id_usuario" => 1,
                "id_sala" => 234,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 228,
                "id_usuario" => 1,
                "id_sala" => 235,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 229,
                "id_usuario" => 1,
                "id_sala" => 236,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 230,
                "id_usuario" => 1,
                "id_sala" => 237,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 231,
                "id_usuario" => 1,
                "id_sala" => 238,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 232,
                "id_usuario" => 1,
                "id_sala" => 239,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 233,
                "id_usuario" => 1,
                "id_sala" => 240,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 234,
                "id_usuario" => 1,
                "id_sala" => 241,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 235,
                "id_usuario" => 1,
                "id_sala" => 242,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 236,
                "id_usuario" => 1,
                "id_sala" => 243,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 237,
                "id_usuario" => 1,
                "id_sala" => 244,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 238,
                "id_usuario" => 1,
                "id_sala" => 245,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 239,
                "id_usuario" => 1,
                "id_sala" => 246,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 240,
                "id_usuario" => 1,
                "id_sala" => 247,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 241,
                "id_usuario" => 1,
                "id_sala" => 248,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 242,
                "id_usuario" => 1,
                "id_sala" => 249,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 243,
                "id_usuario" => 1,
                "id_sala" => 250,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 244,
                "id_usuario" => 1,
                "id_sala" => 251,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 245,
                "id_usuario" => 1,
                "id_sala" => 252,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2021-04-24 02:11:54",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1513,
                "id_usuario" => 1625,
                "id_sala" => 21,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1514,
                "id_usuario" => 1626,
                "id_sala" => 21,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1515,
                "id_usuario" => 1627,
                "id_sala" => 21,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1516,
                "id_usuario" => 1628,
                "id_sala" => 21,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1517,
                "id_usuario" => 1629,
                "id_sala" => 21,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1518,
                "id_usuario" => 1630,
                "id_sala" => 21,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1519,
                "id_usuario" => 1631,
                "id_sala" => 21,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1520,
                "id_usuario" => 1633,
                "id_sala" => 22,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1521,
                "id_usuario" => 1634,
                "id_sala" => 22,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1522,
                "id_usuario" => 1635,
                "id_sala" => 22,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1523,
                "id_usuario" => 1636,
                "id_sala" => 22,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1524,
                "id_usuario" => 1637,
                "id_sala" => 22,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1525,
                "id_usuario" => 1639,
                "id_sala" => 24,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1526,
                "id_usuario" => 1640,
                "id_sala" => 24,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1527,
                "id_usuario" => 1641,
                "id_sala" => 24,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1528,
                "id_usuario" => 1642,
                "id_sala" => 24,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1529,
                "id_usuario" => 1643,
                "id_sala" => 24,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1530,
                "id_usuario" => 1644,
                "id_sala" => 24,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1531,
                "id_usuario" => 1645,
                "id_sala" => 28,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1532,
                "id_usuario" => 1646,
                "id_sala" => 28,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1533,
                "id_usuario" => 1647,
                "id_sala" => 28,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1534,
                "id_usuario" => 1648,
                "id_sala" => 28,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1535,
                "id_usuario" => 1649,
                "id_sala" => 28,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1536,
                "id_usuario" => 1650,
                "id_sala" => 28,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1537,
                "id_usuario" => 1651,
                "id_sala" => 28,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1538,
                "id_usuario" => 1652,
                "id_sala" => 28,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1539,
                "id_usuario" => 1653,
                "id_sala" => 29,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1540,
                "id_usuario" => 1654,
                "id_sala" => 29,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1541,
                "id_usuario" => 1655,
                "id_sala" => 29,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1542,
                "id_usuario" => 1656,
                "id_sala" => 29,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1543,
                "id_usuario" => 1657,
                "id_sala" => 29,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1544,
                "id_usuario" => 1658,
                "id_sala" => 29,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1545,
                "id_usuario" => 1659,
                "id_sala" => 29,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1546,
                "id_usuario" => 1660,
                "id_sala" => 35,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1547,
                "id_usuario" => 1661,
                "id_sala" => 35,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1548,
                "id_usuario" => 1662,
                "id_sala" => 35,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1549,
                "id_usuario" => 1663,
                "id_sala" => 35,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1550,
                "id_usuario" => 1664,
                "id_sala" => 35,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1551,
                "id_usuario" => 1665,
                "id_sala" => 35,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1552,
                "id_usuario" => 1666,
                "id_sala" => 41,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1553,
                "id_usuario" => 1667,
                "id_sala" => 41,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1554,
                "id_usuario" => 1668,
                "id_sala" => 41,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1555,
                "id_usuario" => 1669,
                "id_sala" => 41,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1556,
                "id_usuario" => 1670,
                "id_sala" => 41,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1557,
                "id_usuario" => 1671,
                "id_sala" => 41,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1558,
                "id_usuario" => 1672,
                "id_sala" => 41,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1559,
                "id_usuario" => 1673,
                "id_sala" => 41,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1560,
                "id_usuario" => 1674,
                "id_sala" => 46,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1561,
                "id_usuario" => 1675,
                "id_sala" => 46,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1562,
                "id_usuario" => 1676,
                "id_sala" => 46,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1563,
                "id_usuario" => 1677,
                "id_sala" => 46,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1564,
                "id_usuario" => 1678,
                "id_sala" => 46,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1565,
                "id_usuario" => 1679,
                "id_sala" => 46,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1566,
                "id_usuario" => 1680,
                "id_sala" => 46,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1567,
                "id_usuario" => 1682,
                "id_sala" => 47,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1568,
                "id_usuario" => 1683,
                "id_sala" => 47,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1569,
                "id_usuario" => 1684,
                "id_sala" => 47,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1570,
                "id_usuario" => 1685,
                "id_sala" => 47,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1571,
                "id_usuario" => 1686,
                "id_sala" => 50,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1572,
                "id_usuario" => 1687,
                "id_sala" => 50,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1573,
                "id_usuario" => 1688,
                "id_sala" => 10,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1574,
                "id_usuario" => 1689,
                "id_sala" => 10,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1575,
                "id_usuario" => 1690,
                "id_sala" => 10,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1576,
                "id_usuario" => 1691,
                "id_sala" => 10,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1577,
                "id_usuario" => 1692,
                "id_sala" => 10,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1578,
                "id_usuario" => 1693,
                "id_sala" => 14,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1579,
                "id_usuario" => 1694,
                "id_sala" => 14,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1580,
                "id_usuario" => 1695,
                "id_sala" => 14,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1581,
                "id_usuario" => 1696,
                "id_sala" => 14,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1582,
                "id_usuario" => 1697,
                "id_sala" => 14,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1583,
                "id_usuario" => 1698,
                "id_sala" => 14,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1584,
                "id_usuario" => 1699,
                "id_sala" => 14,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1585,
                "id_usuario" => 1700,
                "id_sala" => 14,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1586,
                "id_usuario" => 1701,
                "id_sala" => 15,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1587,
                "id_usuario" => 1702,
                "id_sala" => 15,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1588,
                "id_usuario" => 1703,
                "id_sala" => 15,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1589,
                "id_usuario" => 1704,
                "id_sala" => 15,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1590,
                "id_usuario" => 1705,
                "id_sala" => 15,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1591,
                "id_usuario" => 1706,
                "id_sala" => 15,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1592,
                "id_usuario" => 1707,
                "id_sala" => 15,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1593,
                "id_usuario" => 1708,
                "id_sala" => 15,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1594,
                "id_usuario" => 1709,
                "id_sala" => 18,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1595,
                "id_usuario" => 1710,
                "id_sala" => 18,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1596,
                "id_usuario" => 1711,
                "id_sala" => 18,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1597,
                "id_usuario" => 1712,
                "id_sala" => 18,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1598,
                "id_usuario" => 1713,
                "id_sala" => 18,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1599,
                "id_usuario" => 1714,
                "id_sala" => 18,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1600,
                "id_usuario" => 1718,
                "id_sala" => 38,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1601,
                "id_usuario" => 1719,
                "id_sala" => 38,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1602,
                "id_usuario" => 1720,
                "id_sala" => 38,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1603,
                "id_usuario" => 1721,
                "id_sala" => 38,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1604,
                "id_usuario" => 1722,
                "id_sala" => 38,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1605,
                "id_usuario" => 1723,
                "id_sala" => 38,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1606,
                "id_usuario" => 1724,
                "id_sala" => 43,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1607,
                "id_usuario" => 1725,
                "id_sala" => 43,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1608,
                "id_usuario" => 1726,
                "id_sala" => 43,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1609,
                "id_usuario" => 1727,
                "id_sala" => 43,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1610,
                "id_usuario" => 1728,
                "id_sala" => 43,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1611,
                "id_usuario" => 1729,
                "id_sala" => 43,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1612,
                "id_usuario" => 1730,
                "id_sala" => 43,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1613,
                "id_usuario" => 1731,
                "id_sala" => 43,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1614,
                "id_usuario" => 1732,
                "id_sala" => 62,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1615,
                "id_usuario" => 1733,
                "id_sala" => 62,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1616,
                "id_usuario" => 1734,
                "id_sala" => 62,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1617,
                "id_usuario" => 1735,
                "id_sala" => 62,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1618,
                "id_usuario" => 1736,
                "id_sala" => 62,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1619,
                "id_usuario" => 1737,
                "id_sala" => 60,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1620,
                "id_usuario" => 1738,
                "id_sala" => 60,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1621,
                "id_usuario" => 1739,
                "id_sala" => 60,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1622,
                "id_usuario" => 1740,
                "id_sala" => 60,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1623,
                "id_usuario" => 1741,
                "id_sala" => 60,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1624,
                "id_usuario" => 1742,
                "id_sala" => 60,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1625,
                "id_usuario" => 1743,
                "id_sala" => 8,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1626,
                "id_usuario" => 1744,
                "id_sala" => 8,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1627,
                "id_usuario" => 1745,
                "id_sala" => 8,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1628,
                "id_usuario" => 1746,
                "id_sala" => 8,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1629,
                "id_usuario" => 1747,
                "id_sala" => 8,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1630,
                "id_usuario" => 1748,
                "id_sala" => 8,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1631,
                "id_usuario" => 1749,
                "id_sala" => 8,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1632,
                "id_usuario" => 1750,
                "id_sala" => 8,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1633,
                "id_usuario" => 1751,
                "id_sala" => 9,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1634,
                "id_usuario" => 1752,
                "id_sala" => 9,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1635,
                "id_usuario" => 1753,
                "id_sala" => 9,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1636,
                "id_usuario" => 1754,
                "id_sala" => 9,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1637,
                "id_usuario" => 1755,
                "id_sala" => 9,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1638,
                "id_usuario" => 1756,
                "id_sala" => 9,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1639,
                "id_usuario" => 1757,
                "id_sala" => 9,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1640,
                "id_usuario" => 1758,
                "id_sala" => 9,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1641,
                "id_usuario" => 1759,
                "id_sala" => 9,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1642,
                "id_usuario" => 1760,
                "id_sala" => 16,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1643,
                "id_usuario" => 1761,
                "id_sala" => 16,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1644,
                "id_usuario" => 1762,
                "id_sala" => 16,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1645,
                "id_usuario" => 1763,
                "id_sala" => 16,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1646,
                "id_usuario" => 1764,
                "id_sala" => 16,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1647,
                "id_usuario" => 1765,
                "id_sala" => 16,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1648,
                "id_usuario" => 1766,
                "id_sala" => 16,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1649,
                "id_usuario" => 1767,
                "id_sala" => 16,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1650,
                "id_usuario" => 1768,
                "id_sala" => 16,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1651,
                "id_usuario" => 1769,
                "id_sala" => 17,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1652,
                "id_usuario" => 1770,
                "id_sala" => 17,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1653,
                "id_usuario" => 1771,
                "id_sala" => 17,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1654,
                "id_usuario" => 1772,
                "id_sala" => 17,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1655,
                "id_usuario" => 1773,
                "id_sala" => 17,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1656,
                "id_usuario" => 1774,
                "id_sala" => 17,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1657,
                "id_usuario" => 1775,
                "id_sala" => 19,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1658,
                "id_usuario" => 1776,
                "id_sala" => 19,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1659,
                "id_usuario" => 1777,
                "id_sala" => 19,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1660,
                "id_usuario" => 1778,
                "id_sala" => 19,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1661,
                "id_usuario" => 1779,
                "id_sala" => 19,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1662,
                "id_usuario" => 1780,
                "id_sala" => 19,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1663,
                "id_usuario" => 1781,
                "id_sala" => 19,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1664,
                "id_usuario" => 1782,
                "id_sala" => 30,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1665,
                "id_usuario" => 1783,
                "id_sala" => 30,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1666,
                "id_usuario" => 1784,
                "id_sala" => 30,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1667,
                "id_usuario" => 1785,
                "id_sala" => 30,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1668,
                "id_usuario" => 1786,
                "id_sala" => 30,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1669,
                "id_usuario" => 1787,
                "id_sala" => 30,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1670,
                "id_usuario" => 1788,
                "id_sala" => 30,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1671,
                "id_usuario" => 1789,
                "id_sala" => 42,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1672,
                "id_usuario" => 1790,
                "id_sala" => 42,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1673,
                "id_usuario" => 1791,
                "id_sala" => 42,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1674,
                "id_usuario" => 1792,
                "id_sala" => 42,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1675,
                "id_usuario" => 1793,
                "id_sala" => 42,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1676,
                "id_usuario" => 1799,
                "id_sala" => 59,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1677,
                "id_usuario" => 1800,
                "id_sala" => 59,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1678,
                "id_usuario" => 1801,
                "id_sala" => 59,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1679,
                "id_usuario" => 1802,
                "id_sala" => 59,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1680,
                "id_usuario" => 1803,
                "id_sala" => 61,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1681,
                "id_usuario" => 1804,
                "id_sala" => 61,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1682,
                "id_usuario" => 1805,
                "id_sala" => 61,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1683,
                "id_usuario" => 1807,
                "id_sala" => 11,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1684,
                "id_usuario" => 1808,
                "id_sala" => 11,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1685,
                "id_usuario" => 1809,
                "id_sala" => 11,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1686,
                "id_usuario" => 1810,
                "id_sala" => 11,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1687,
                "id_usuario" => 1811,
                "id_sala" => 11,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1688,
                "id_usuario" => 1812,
                "id_sala" => 11,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1689,
                "id_usuario" => 1813,
                "id_sala" => 27,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1690,
                "id_usuario" => 1814,
                "id_sala" => 27,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1691,
                "id_usuario" => 1815,
                "id_sala" => 27,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1692,
                "id_usuario" => 1816,
                "id_sala" => 27,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1693,
                "id_usuario" => 1817,
                "id_sala" => 27,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1694,
                "id_usuario" => 1818,
                "id_sala" => 27,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1695,
                "id_usuario" => 1819,
                "id_sala" => 34,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1696,
                "id_usuario" => 1820,
                "id_sala" => 34,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1697,
                "id_usuario" => 1821,
                "id_sala" => 34,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1698,
                "id_usuario" => 1822,
                "id_sala" => 34,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1699,
                "id_usuario" => 1823,
                "id_sala" => 34,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1700,
                "id_usuario" => 1824,
                "id_sala" => 34,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1701,
                "id_usuario" => 1825,
                "id_sala" => 34,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1702,
                "id_usuario" => 1826,
                "id_sala" => 40,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1703,
                "id_usuario" => 1827,
                "id_sala" => 40,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1704,
                "id_usuario" => 1828,
                "id_sala" => 40,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1705,
                "id_usuario" => 1829,
                "id_sala" => 40,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1706,
                "id_usuario" => 1830,
                "id_sala" => 45,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1707,
                "id_usuario" => 1831,
                "id_sala" => 45,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1708,
                "id_usuario" => 1832,
                "id_sala" => 45,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1709,
                "id_usuario" => 1833,
                "id_sala" => 45,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1710,
                "id_usuario" => 1834,
                "id_sala" => 45,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1711,
                "id_usuario" => 1835,
                "id_sala" => 51,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1712,
                "id_usuario" => 1836,
                "id_sala" => 51,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1713,
                "id_usuario" => 1837,
                "id_sala" => 51,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1714,
                "id_usuario" => 1838,
                "id_sala" => 52,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1715,
                "id_usuario" => 1839,
                "id_sala" => 52,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1716,
                "id_usuario" => 1840,
                "id_sala" => 52,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1717,
                "id_usuario" => 1841,
                "id_sala" => 52,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1718,
                "id_usuario" => 1842,
                "id_sala" => 52,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1719,
                "id_usuario" => 1843,
                "id_sala" => 52,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1720,
                "id_usuario" => 1844,
                "id_sala" => 52,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1721,
                "id_usuario" => 1845,
                "id_sala" => 23,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1722,
                "id_usuario" => 1846,
                "id_sala" => 23,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1723,
                "id_usuario" => 1847,
                "id_sala" => 23,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1724,
                "id_usuario" => 1848,
                "id_sala" => 23,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1725,
                "id_usuario" => 1849,
                "id_sala" => 23,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1726,
                "id_usuario" => 1850,
                "id_sala" => 23,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1727,
                "id_usuario" => 1851,
                "id_sala" => 25,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1728,
                "id_usuario" => 1852,
                "id_sala" => 25,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1729,
                "id_usuario" => 1853,
                "id_sala" => 25,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1730,
                "id_usuario" => 1854,
                "id_sala" => 25,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1731,
                "id_usuario" => 1855,
                "id_sala" => 25,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1732,
                "id_usuario" => 1856,
                "id_sala" => 25,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1733,
                "id_usuario" => 1857,
                "id_sala" => 25,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1734,
                "id_usuario" => 1858,
                "id_sala" => 26,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1735,
                "id_usuario" => 1859,
                "id_sala" => 26,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1736,
                "id_usuario" => 1860,
                "id_sala" => 26,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1737,
                "id_usuario" => 1861,
                "id_sala" => 26,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1738,
                "id_usuario" => 1862,
                "id_sala" => 26,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1739,
                "id_usuario" => 1863,
                "id_sala" => 26,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1740,
                "id_usuario" => 1864,
                "id_sala" => 31,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1741,
                "id_usuario" => 1865,
                "id_sala" => 31,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1742,
                "id_usuario" => 1866,
                "id_sala" => 31,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1743,
                "id_usuario" => 1867,
                "id_sala" => 31,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1744,
                "id_usuario" => 1868,
                "id_sala" => 32,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1745,
                "id_usuario" => 1869,
                "id_sala" => 32,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1746,
                "id_usuario" => 1870,
                "id_sala" => 36,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1747,
                "id_usuario" => 1871,
                "id_sala" => 36,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1748,
                "id_usuario" => 1872,
                "id_sala" => 54,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1749,
                "id_usuario" => 1873,
                "id_sala" => 54,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1750,
                "id_usuario" => 1874,
                "id_sala" => 54,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1751,
                "id_usuario" => 1875,
                "id_sala" => 54,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1752,
                "id_usuario" => 1876,
                "id_sala" => 54,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1753,
                "id_usuario" => 1877,
                "id_sala" => 57,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1754,
                "id_usuario" => 1878,
                "id_sala" => 57,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1755,
                "id_usuario" => 1879,
                "id_sala" => 57,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1756,
                "id_usuario" => 1880,
                "id_sala" => 57,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1757,
                "id_usuario" => 1881,
                "id_sala" => 57,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1758,
                "id_usuario" => 1882,
                "id_sala" => 56,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1759,
                "id_usuario" => 1883,
                "id_sala" => 56,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1760,
                "id_usuario" => 1884,
                "id_sala" => 56,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1761,
                "id_usuario" => 1885,
                "id_sala" => 56,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1762,
                "id_usuario" => 1886,
                "id_sala" => 56,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1763,
                "id_usuario" => 1887,
                "id_sala" => 12,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1764,
                "id_usuario" => 1888,
                "id_sala" => 12,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1765,
                "id_usuario" => 1889,
                "id_sala" => 12,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1766,
                "id_usuario" => 1890,
                "id_sala" => 12,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1767,
                "id_usuario" => 1891,
                "id_sala" => 12,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1768,
                "id_usuario" => 1892,
                "id_sala" => 12,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1769,
                "id_usuario" => 1893,
                "id_sala" => 13,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1770,
                "id_usuario" => 1894,
                "id_sala" => 13,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1771,
                "id_usuario" => 1895,
                "id_sala" => 13,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1772,
                "id_usuario" => 1896,
                "id_sala" => 13,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1773,
                "id_usuario" => 1897,
                "id_sala" => 13,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1774,
                "id_usuario" => 1898,
                "id_sala" => 13,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1775,
                "id_usuario" => 1899,
                "id_sala" => 37,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1776,
                "id_usuario" => 1900,
                "id_sala" => 37,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1777,
                "id_usuario" => 1901,
                "id_sala" => 37,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1778,
                "id_usuario" => 1902,
                "id_sala" => 37,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1779,
                "id_usuario" => 1903,
                "id_sala" => 37,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1780,
                "id_usuario" => 1904,
                "id_sala" => 37,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1781,
                "id_usuario" => 1905,
                "id_sala" => 37,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1782,
                "id_usuario" => 1906,
                "id_sala" => 39,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1783,
                "id_usuario" => 1907,
                "id_sala" => 39,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1784,
                "id_usuario" => 1908,
                "id_sala" => 39,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1785,
                "id_usuario" => 1909,
                "id_sala" => 39,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1786,
                "id_usuario" => 1910,
                "id_sala" => 39,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1787,
                "id_usuario" => 1911,
                "id_sala" => 39,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1788,
                "id_usuario" => 1912,
                "id_sala" => 58,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1789,
                "id_usuario" => 1913,
                "id_sala" => 58,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1790,
                "id_usuario" => 1914,
                "id_sala" => 58,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1791,
                "id_usuario" => 1915,
                "id_sala" => 58,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1792,
                "id_usuario" => 10439,
                "id_sala" => 250,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1793,
                "id_usuario" => 10440,
                "id_sala" => 250,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1794,
                "id_usuario" => 10441,
                "id_sala" => 248,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1795,
                "id_usuario" => 10442,
                "id_sala" => 248,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1796,
                "id_usuario" => 10443,
                "id_sala" => 248,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1797,
                "id_usuario" => 10444,
                "id_sala" => 248,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1798,
                "id_usuario" => 10445,
                "id_sala" => 248,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1799,
                "id_usuario" => 10446,
                "id_sala" => 247,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1800,
                "id_usuario" => 10447,
                "id_sala" => 247,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1801,
                "id_usuario" => 10448,
                "id_sala" => 247,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1802,
                "id_usuario" => 10449,
                "id_sala" => 247,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1803,
                "id_usuario" => 10450,
                "id_sala" => 246,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1804,
                "id_usuario" => 10451,
                "id_sala" => 246,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1805,
                "id_usuario" => 10452,
                "id_sala" => 246,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1806,
                "id_usuario" => 10453,
                "id_sala" => 245,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1807,
                "id_usuario" => 10454,
                "id_sala" => 245,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1808,
                "id_usuario" => 10455,
                "id_sala" => 245,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1809,
                "id_usuario" => 10456,
                "id_sala" => 245,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1810,
                "id_usuario" => 10457,
                "id_sala" => 245,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1811,
                "id_usuario" => 10458,
                "id_sala" => 244,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1812,
                "id_usuario" => 10459,
                "id_sala" => 244,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1813,
                "id_usuario" => 10460,
                "id_sala" => 244,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1814,
                "id_usuario" => 10461,
                "id_sala" => 243,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1815,
                "id_usuario" => 10462,
                "id_sala" => 243,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1816,
                "id_usuario" => 10463,
                "id_sala" => 243,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1817,
                "id_usuario" => 10464,
                "id_sala" => 243,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1818,
                "id_usuario" => 10465,
                "id_sala" => 243,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1819,
                "id_usuario" => 10466,
                "id_sala" => 242,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1820,
                "id_usuario" => 10467,
                "id_sala" => 242,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1821,
                "id_usuario" => 10468,
                "id_sala" => 242,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1822,
                "id_usuario" => 10469,
                "id_sala" => 242,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1823,
                "id_usuario" => 10470,
                "id_sala" => 241,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1824,
                "id_usuario" => 10471,
                "id_sala" => 241,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1825,
                "id_usuario" => 10472,
                "id_sala" => 241,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1826,
                "id_usuario" => 10473,
                "id_sala" => 241,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1827,
                "id_usuario" => 10474,
                "id_sala" => 240,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1828,
                "id_usuario" => 10475,
                "id_sala" => 240,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1829,
                "id_usuario" => 10476,
                "id_sala" => 240,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1830,
                "id_usuario" => 10477,
                "id_sala" => 240,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1831,
                "id_usuario" => 10478,
                "id_sala" => 239,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1832,
                "id_usuario" => 10479,
                "id_sala" => 239,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1833,
                "id_usuario" => 10480,
                "id_sala" => 239,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1834,
                "id_usuario" => 10481,
                "id_sala" => 239,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1835,
                "id_usuario" => 10482,
                "id_sala" => 239,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1836,
                "id_usuario" => 10483,
                "id_sala" => 239,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1837,
                "id_usuario" => 10484,
                "id_sala" => 239,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1838,
                "id_usuario" => 10485,
                "id_sala" => 238,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1839,
                "id_usuario" => 10486,
                "id_sala" => 238,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1840,
                "id_usuario" => 10487,
                "id_sala" => 237,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1841,
                "id_usuario" => 10488,
                "id_sala" => 237,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1842,
                "id_usuario" => 10489,
                "id_sala" => 237,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1843,
                "id_usuario" => 10490,
                "id_sala" => 237,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1844,
                "id_usuario" => 10491,
                "id_sala" => 237,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1845,
                "id_usuario" => 10492,
                "id_sala" => 236,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1846,
                "id_usuario" => 10493,
                "id_sala" => 236,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1847,
                "id_usuario" => 10494,
                "id_sala" => 236,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1848,
                "id_usuario" => 10495,
                "id_sala" => 235,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1849,
                "id_usuario" => 10496,
                "id_sala" => 235,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1850,
                "id_usuario" => 10497,
                "id_sala" => 235,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1851,
                "id_usuario" => 10498,
                "id_sala" => 235,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1852,
                "id_usuario" => 10499,
                "id_sala" => 234,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1853,
                "id_usuario" => 10500,
                "id_sala" => 234,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1854,
                "id_usuario" => 10501,
                "id_sala" => 234,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1855,
                "id_usuario" => 10502,
                "id_sala" => 234,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1856,
                "id_usuario" => 10503,
                "id_sala" => 233,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1857,
                "id_usuario" => 10504,
                "id_sala" => 233,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1858,
                "id_usuario" => 10505,
                "id_sala" => 233,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1859,
                "id_usuario" => 10506,
                "id_sala" => 233,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1860,
                "id_usuario" => 10499,
                "id_sala" => 232,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1861,
                "id_usuario" => 10508,
                "id_sala" => 232,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1862,
                "id_usuario" => 10509,
                "id_sala" => 232,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1863,
                "id_usuario" => 10510,
                "id_sala" => 232,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1864,
                "id_usuario" => 10511,
                "id_sala" => 232,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1865,
                "id_usuario" => 10512,
                "id_sala" => 231,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1866,
                "id_usuario" => 10513,
                "id_sala" => 231,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1867,
                "id_usuario" => 10514,
                "id_sala" => 231,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1868,
                "id_usuario" => 10515,
                "id_sala" => 231,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1869,
                "id_usuario" => 10516,
                "id_sala" => 230,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1870,
                "id_usuario" => 10517,
                "id_sala" => 230,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1871,
                "id_usuario" => 10518,
                "id_sala" => 230,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1872,
                "id_usuario" => 10519,
                "id_sala" => 230,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1873,
                "id_usuario" => 10520,
                "id_sala" => 230,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1874,
                "id_usuario" => 10521,
                "id_sala" => 229,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1875,
                "id_usuario" => 10522,
                "id_sala" => 229,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1876,
                "id_usuario" => 10523,
                "id_sala" => 229,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1877,
                "id_usuario" => 10524,
                "id_sala" => 229,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1878,
                "id_usuario" => 10525,
                "id_sala" => 229,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1879,
                "id_usuario" => 10526,
                "id_sala" => 228,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1880,
                "id_usuario" => 10527,
                "id_sala" => 228,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1881,
                "id_usuario" => 10528,
                "id_sala" => 228,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1882,
                "id_usuario" => 10529,
                "id_sala" => 228,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1883,
                "id_usuario" => 10530,
                "id_sala" => 228,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1884,
                "id_usuario" => 10531,
                "id_sala" => 228,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1885,
                "id_usuario" => 10532,
                "id_sala" => 227,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1886,
                "id_usuario" => 10533,
                "id_sala" => 227,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1887,
                "id_usuario" => 10534,
                "id_sala" => 226,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1888,
                "id_usuario" => 10535,
                "id_sala" => 226,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1889,
                "id_usuario" => 10536,
                "id_sala" => 226,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1890,
                "id_usuario" => 10537,
                "id_sala" => 225,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1891,
                "id_usuario" => 10538,
                "id_sala" => 225,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1892,
                "id_usuario" => 10539,
                "id_sala" => 225,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1893,
                "id_usuario" => 10540,
                "id_sala" => 225,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1894,
                "id_usuario" => 10541,
                "id_sala" => 225,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1895,
                "id_usuario" => 10542,
                "id_sala" => 225,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1896,
                "id_usuario" => 10543,
                "id_sala" => 224,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1897,
                "id_usuario" => 10544,
                "id_sala" => 224,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1898,
                "id_usuario" => 10545,
                "id_sala" => 224,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1899,
                "id_usuario" => 10546,
                "id_sala" => 223,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1900,
                "id_usuario" => 10547,
                "id_sala" => 223,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1901,
                "id_usuario" => 10548,
                "id_sala" => 223,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1902,
                "id_usuario" => 10549,
                "id_sala" => 222,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1903,
                "id_usuario" => 10550,
                "id_sala" => 222,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1904,
                "id_usuario" => 10551,
                "id_sala" => 222,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1905,
                "id_usuario" => 10552,
                "id_sala" => 222,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1906,
                "id_usuario" => 10553,
                "id_sala" => 221,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1907,
                "id_usuario" => 10554,
                "id_sala" => 221,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1908,
                "id_usuario" => 10555,
                "id_sala" => 221,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1909,
                "id_usuario" => 10556,
                "id_sala" => 252,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1910,
                "id_usuario" => 10557,
                "id_sala" => 252,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1911,
                "id_usuario" => 10558,
                "id_sala" => 252,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1912,
                "id_usuario" => 10559,
                "id_sala" => 252,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1913,
                "id_usuario" => 10560,
                "id_sala" => 253,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1914,
                "id_usuario" => 10561,
                "id_sala" => 253,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1915,
                "id_usuario" => 10562,
                "id_sala" => 253,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1916,
                "id_usuario" => 10563,
                "id_sala" => 220,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1917,
                "id_usuario" => 10564,
                "id_sala" => 220,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1918,
                "id_usuario" => 10565,
                "id_sala" => 220,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1919,
                "id_usuario" => 10566,
                "id_sala" => 219,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1920,
                "id_usuario" => 10567,
                "id_sala" => 219,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1921,
                "id_usuario" => 10568,
                "id_sala" => 219,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1922,
                "id_usuario" => 10569,
                "id_sala" => 219,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1923,
                "id_usuario" => 10570,
                "id_sala" => 218,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1924,
                "id_usuario" => 10571,
                "id_sala" => 218,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1925,
                "id_usuario" => 10572,
                "id_sala" => 218,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1926,
                "id_usuario" => 10573,
                "id_sala" => 217,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1927,
                "id_usuario" => 10574,
                "id_sala" => 217,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1928,
                "id_usuario" => 10575,
                "id_sala" => 217,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1929,
                "id_usuario" => 10576,
                "id_sala" => 217,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1930,
                "id_usuario" => 10577,
                "id_sala" => 216,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1931,
                "id_usuario" => 10578,
                "id_sala" => 216,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1932,
                "id_usuario" => 10579,
                "id_sala" => 216,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1933,
                "id_usuario" => 10580,
                "id_sala" => 215,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1934,
                "id_usuario" => 10581,
                "id_sala" => 215,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1935,
                "id_usuario" => 10582,
                "id_sala" => 215,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1936,
                "id_usuario" => 10564,
                "id_sala" => 214,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1937,
                "id_usuario" => 10584,
                "id_sala" => 214,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1938,
                "id_usuario" => 10585,
                "id_sala" => 214,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1939,
                "id_usuario" => 10586,
                "id_sala" => 214,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1940,
                "id_usuario" => 10587,
                "id_sala" => 213,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1941,
                "id_usuario" => 10588,
                "id_sala" => 213,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1942,
                "id_usuario" => 10589,
                "id_sala" => 213,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1943,
                "id_usuario" => 10590,
                "id_sala" => 213,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1944,
                "id_usuario" => 10591,
                "id_sala" => 213,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1945,
                "id_usuario" => 10592,
                "id_sala" => 212,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1946,
                "id_usuario" => 10593,
                "id_sala" => 212,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1947,
                "id_usuario" => 10594,
                "id_sala" => 212,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1948,
                "id_usuario" => 10595,
                "id_sala" => 211,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1949,
                "id_usuario" => 10596,
                "id_sala" => 211,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1950,
                "id_usuario" => 10597,
                "id_sala" => 210,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1951,
                "id_usuario" => 10598,
                "id_sala" => 210,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1952,
                "id_usuario" => 10599,
                "id_sala" => 210,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1953,
                "id_usuario" => 10600,
                "id_sala" => 209,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1954,
                "id_usuario" => 10601,
                "id_sala" => 209,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1955,
                "id_usuario" => 10602,
                "id_sala" => 209,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1956,
                "id_usuario" => 10603,
                "id_sala" => 209,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1957,
                "id_usuario" => 10604,
                "id_sala" => 208,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1958,
                "id_usuario" => 10605,
                "id_sala" => 208,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1959,
                "id_usuario" => 10606,
                "id_sala" => 208,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1960,
                "id_usuario" => 10607,
                "id_sala" => 208,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1961,
                "id_usuario" => 10608,
                "id_sala" => 207,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1962,
                "id_usuario" => 10609,
                "id_sala" => 207,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1963,
                "id_usuario" => 10610,
                "id_sala" => 207,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1964,
                "id_usuario" => 10611,
                "id_sala" => 206,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1965,
                "id_usuario" => 10612,
                "id_sala" => 206,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1966,
                "id_usuario" => 10613,
                "id_sala" => 205,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1967,
                "id_usuario" => 10614,
                "id_sala" => 205,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1968,
                "id_usuario" => 10615,
                "id_sala" => 205,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1969,
                "id_usuario" => 10616,
                "id_sala" => 205,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1970,
                "id_usuario" => 10617,
                "id_sala" => 204,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1971,
                "id_usuario" => 10618,
                "id_sala" => 204,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1972,
                "id_usuario" => 10619,
                "id_sala" => 204,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1973,
                "id_usuario" => 10620,
                "id_sala" => 203,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1974,
                "id_usuario" => 10621,
                "id_sala" => 203,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1975,
                "id_usuario" => 10622,
                "id_sala" => 203,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1976,
                "id_usuario" => 10623,
                "id_sala" => 202,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1977,
                "id_usuario" => 10624,
                "id_sala" => 202,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1978,
                "id_usuario" => 10625,
                "id_sala" => 202,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1979,
                "id_usuario" => 10626,
                "id_sala" => 202,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1980,
                "id_usuario" => 10627,
                "id_sala" => 201,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1981,
                "id_usuario" => 10628,
                "id_sala" => 201,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1982,
                "id_usuario" => 10629,
                "id_sala" => 201,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1983,
                "id_usuario" => 10630,
                "id_sala" => 201,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1984,
                "id_usuario" => 10631,
                "id_sala" => 201,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1985,
                "id_usuario" => 10632,
                "id_sala" => 200,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1986,
                "id_usuario" => 10633,
                "id_sala" => 200,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1987,
                "id_usuario" => 10634,
                "id_sala" => 199,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1988,
                "id_usuario" => 10635,
                "id_sala" => 199,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1989,
                "id_usuario" => 10636,
                "id_sala" => 199,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1990,
                "id_usuario" => 10637,
                "id_sala" => 198,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1991,
                "id_usuario" => 10638,
                "id_sala" => 198,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1992,
                "id_usuario" => 10639,
                "id_sala" => 198,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1993,
                "id_usuario" => 10640,
                "id_sala" => 198,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1994,
                "id_usuario" => 10641,
                "id_sala" => 197,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1995,
                "id_usuario" => 10642,
                "id_sala" => 197,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1996,
                "id_usuario" => 10643,
                "id_sala" => 197,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1997,
                "id_usuario" => 10644,
                "id_sala" => 197,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1998,
                "id_usuario" => 10645,
                "id_sala" => 196,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 1999,
                "id_usuario" => 10646,
                "id_sala" => 196,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2000,
                "id_usuario" => 10647,
                "id_sala" => 196,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2001,
                "id_usuario" => 10648,
                "id_sala" => 196,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2002,
                "id_usuario" => 10649,
                "id_sala" => 195,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2003,
                "id_usuario" => 10650,
                "id_sala" => 195,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2004,
                "id_usuario" => 10651,
                "id_sala" => 195,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2005,
                "id_usuario" => 10652,
                "id_sala" => 195,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2006,
                "id_usuario" => 10653,
                "id_sala" => 194,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2007,
                "id_usuario" => 10654,
                "id_sala" => 194,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2008,
                "id_usuario" => 10655,
                "id_sala" => 194,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2009,
                "id_usuario" => 10656,
                "id_sala" => 194,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2010,
                "id_usuario" => 10657,
                "id_sala" => 193,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2011,
                "id_usuario" => 10658,
                "id_sala" => 193,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2012,
                "id_usuario" => 10659,
                "id_sala" => 193,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2013,
                "id_usuario" => 10660,
                "id_sala" => 193,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2014,
                "id_usuario" => 10661,
                "id_sala" => 193,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2015,
                "id_usuario" => 10662,
                "id_sala" => 192,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2016,
                "id_usuario" => 10663,
                "id_sala" => 192,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2017,
                "id_usuario" => 10664,
                "id_sala" => 191,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2018,
                "id_usuario" => 10665,
                "id_sala" => 191,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2019,
                "id_usuario" => 10759,
                "id_sala" => 191,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2020,
                "id_usuario" => 10666,
                "id_sala" => 191,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2021,
                "id_usuario" => 10667,
                "id_sala" => 191,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2022,
                "id_usuario" => 10668,
                "id_sala" => 190,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2023,
                "id_usuario" => 10669,
                "id_sala" => 190,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2024,
                "id_usuario" => 10670,
                "id_sala" => 190,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2025,
                "id_usuario" => 10671,
                "id_sala" => 190,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2026,
                "id_usuario" => 10672,
                "id_sala" => 189,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2027,
                "id_usuario" => 10673,
                "id_sala" => 189,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2028,
                "id_usuario" => 10674,
                "id_sala" => 189,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2029,
                "id_usuario" => 10675,
                "id_sala" => 189,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2030,
                "id_usuario" => 10676,
                "id_sala" => 188,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2031,
                "id_usuario" => 10677,
                "id_sala" => 188,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2032,
                "id_usuario" => 10678,
                "id_sala" => 188,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2033,
                "id_usuario" => 10679,
                "id_sala" => 187,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2034,
                "id_usuario" => 10680,
                "id_sala" => 187,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2035,
                "id_usuario" => 10681,
                "id_sala" => 187,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2036,
                "id_usuario" => 10682,
                "id_sala" => 187,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2037,
                "id_usuario" => 10683,
                "id_sala" => 186,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2038,
                "id_usuario" => 10684,
                "id_sala" => 186,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2039,
                "id_usuario" => 10685,
                "id_sala" => 186,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2040,
                "id_usuario" => 10686,
                "id_sala" => 186,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2041,
                "id_usuario" => 10687,
                "id_sala" => 185,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2042,
                "id_usuario" => 10688,
                "id_sala" => 185,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2043,
                "id_usuario" => 10689,
                "id_sala" => 185,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2044,
                "id_usuario" => 10690,
                "id_sala" => 184,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2045,
                "id_usuario" => 10691,
                "id_sala" => 184,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2046,
                "id_usuario" => 10692,
                "id_sala" => 184,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2047,
                "id_usuario" => 10693,
                "id_sala" => 184,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2048,
                "id_usuario" => 10694,
                "id_sala" => 183,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2049,
                "id_usuario" => 10695,
                "id_sala" => 183,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2050,
                "id_usuario" => 10696,
                "id_sala" => 183,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2051,
                "id_usuario" => 10697,
                "id_sala" => 182,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2052,
                "id_usuario" => 10698,
                "id_sala" => 182,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2053,
                "id_usuario" => 10699,
                "id_sala" => 182,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2054,
                "id_usuario" => 10700,
                "id_sala" => 181,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2055,
                "id_usuario" => 10701,
                "id_sala" => 181,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2056,
                "id_usuario" => 10702,
                "id_sala" => 181,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2057,
                "id_usuario" => 10703,
                "id_sala" => 180,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2058,
                "id_usuario" => 10704,
                "id_sala" => 180,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2059,
                "id_usuario" => 10705,
                "id_sala" => 180,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2060,
                "id_usuario" => 10706,
                "id_sala" => 180,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2061,
                "id_usuario" => 10707,
                "id_sala" => 179,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2062,
                "id_usuario" => 10708,
                "id_sala" => 179,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2063,
                "id_usuario" => 10709,
                "id_sala" => 179,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2064,
                "id_usuario" => 10710,
                "id_sala" => 178,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2065,
                "id_usuario" => 10711,
                "id_sala" => 178,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2066,
                "id_usuario" => 10712,
                "id_sala" => 178,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2067,
                "id_usuario" => 10713,
                "id_sala" => 178,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2068,
                "id_usuario" => 10714,
                "id_sala" => 177,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2069,
                "id_usuario" => 10715,
                "id_sala" => 177,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2070,
                "id_usuario" => 10716,
                "id_sala" => 177,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2071,
                "id_usuario" => 10717,
                "id_sala" => 177,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2072,
                "id_usuario" => 10718,
                "id_sala" => 177,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2073,
                "id_usuario" => 10719,
                "id_sala" => 176,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2074,
                "id_usuario" => 10720,
                "id_sala" => 176,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2075,
                "id_usuario" => 10721,
                "id_sala" => 176,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2076,
                "id_usuario" => 10722,
                "id_sala" => 176,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2077,
                "id_usuario" => 10723,
                "id_sala" => 175,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2078,
                "id_usuario" => 10724,
                "id_sala" => 175,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2079,
                "id_usuario" => 10725,
                "id_sala" => 175,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2080,
                "id_usuario" => 10726,
                "id_sala" => 175,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2081,
                "id_usuario" => 10727,
                "id_sala" => 174,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2082,
                "id_usuario" => 10728,
                "id_sala" => 174,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2083,
                "id_usuario" => 10729,
                "id_sala" => 174,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2084,
                "id_usuario" => 10730,
                "id_sala" => 174,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2085,
                "id_usuario" => 10731,
                "id_sala" => 173,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2086,
                "id_usuario" => 10732,
                "id_sala" => 173,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2087,
                "id_usuario" => 10733,
                "id_sala" => 173,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2088,
                "id_usuario" => 10734,
                "id_sala" => 173,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2089,
                "id_usuario" => 10735,
                "id_sala" => 173,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2090,
                "id_usuario" => 10736,
                "id_sala" => 172,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2091,
                "id_usuario" => 10737,
                "id_sala" => 172,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2092,
                "id_usuario" => 10738,
                "id_sala" => 172,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2093,
                "id_usuario" => 10739,
                "id_sala" => 172,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2094,
                "id_usuario" => 10740,
                "id_sala" => 172,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2095,
                "id_usuario" => 10741,
                "id_sala" => 171,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2096,
                "id_usuario" => 10742,
                "id_sala" => 171,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2097,
                "id_usuario" => 10743,
                "id_sala" => 171,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2098,
                "id_usuario" => 10744,
                "id_sala" => 171,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2099,
                "id_usuario" => 10745,
                "id_sala" => 171,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2100,
                "id_usuario" => 10746,
                "id_sala" => 170,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2101,
                "id_usuario" => 10747,
                "id_sala" => 170,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2102,
                "id_usuario" => 10748,
                "id_sala" => 170,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2103,
                "id_usuario" => 10749,
                "id_sala" => 170,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2104,
                "id_usuario" => 10750,
                "id_sala" => 169,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2105,
                "id_usuario" => 10751,
                "id_sala" => 169,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2106,
                "id_usuario" => 10752,
                "id_sala" => 169,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2107,
                "id_usuario" => 10753,
                "id_sala" => 169,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2108,
                "id_usuario" => 10754,
                "id_sala" => 168,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2109,
                "id_usuario" => 10755,
                "id_sala" => 168,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2110,
                "id_usuario" => 10756,
                "id_sala" => 168,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2111,
                "id_usuario" => 10757,
                "id_sala" => 168,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2112,
                "id_usuario" => 10758,
                "id_sala" => 168,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2113,
                "id_usuario" => 10759,
                "id_sala" => 167,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2114,
                "id_usuario" => 10760,
                "id_sala" => 167,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2115,
                "id_usuario" => 10761,
                "id_sala" => 167,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2116,
                "id_usuario" => 10762,
                "id_sala" => 166,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2117,
                "id_usuario" => 10763,
                "id_sala" => 166,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2118,
                "id_usuario" => 10764,
                "id_sala" => 166,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2119,
                "id_usuario" => 10765,
                "id_sala" => 166,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2120,
                "id_usuario" => 10474,
                "id_sala" => 165,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2121,
                "id_usuario" => 10766,
                "id_sala" => 165,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2122,
                "id_usuario" => 10767,
                "id_sala" => 165,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2123,
                "id_usuario" => 10768,
                "id_sala" => 165,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2124,
                "id_usuario" => 10769,
                "id_sala" => 164,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2125,
                "id_usuario" => 10770,
                "id_sala" => 164,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2126,
                "id_usuario" => 10771,
                "id_sala" => 164,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2127,
                "id_usuario" => 10772,
                "id_sala" => 163,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2128,
                "id_usuario" => 10773,
                "id_sala" => 163,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2129,
                "id_usuario" => 10774,
                "id_sala" => 163,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2130,
                "id_usuario" => 10775,
                "id_sala" => 163,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2131,
                "id_usuario" => 10776,
                "id_sala" => 162,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2132,
                "id_usuario" => 10777,
                "id_sala" => 162,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2133,
                "id_usuario" => 10778,
                "id_sala" => 162,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2134,
                "id_usuario" => 10779,
                "id_sala" => 162,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2135,
                "id_usuario" => 10780,
                "id_sala" => 162,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2136,
                "id_usuario" => 10781,
                "id_sala" => 162,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2137,
                "id_usuario" => 10782,
                "id_sala" => 162,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2138,
                "id_usuario" => 10783,
                "id_sala" => 162,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2139,
                "id_usuario" => 10784,
                "id_sala" => 161,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2140,
                "id_usuario" => 10785,
                "id_sala" => 161,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2141,
                "id_usuario" => 10786,
                "id_sala" => 161,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2142,
                "id_usuario" => 10787,
                "id_sala" => 161,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2143,
                "id_usuario" => 10788,
                "id_sala" => 161,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2144,
                "id_usuario" => 10789,
                "id_sala" => 160,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2145,
                "id_usuario" => 10790,
                "id_sala" => 160,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2146,
                "id_usuario" => 10791,
                "id_sala" => 160,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2147,
                "id_usuario" => 10478,
                "id_sala" => 159,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2148,
                "id_usuario" => 10793,
                "id_sala" => 159,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2149,
                "id_usuario" => 10794,
                "id_sala" => 159,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2150,
                "id_usuario" => 10795,
                "id_sala" => 159,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2151,
                "id_usuario" => 10796,
                "id_sala" => 159,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2152,
                "id_usuario" => 10797,
                "id_sala" => 158,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2153,
                "id_usuario" => 10798,
                "id_sala" => 158,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2154,
                "id_usuario" => 10799,
                "id_sala" => 158,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2155,
                "id_usuario" => 10800,
                "id_sala" => 158,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2156,
                "id_usuario" => 10801,
                "id_sala" => 157,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2157,
                "id_usuario" => 10802,
                "id_sala" => 157,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2158,
                "id_usuario" => 10803,
                "id_sala" => 157,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2159,
                "id_usuario" => 10804,
                "id_sala" => 157,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2160,
                "id_usuario" => 10805,
                "id_sala" => 157,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2161,
                "id_usuario" => 10806,
                "id_sala" => 156,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2162,
                "id_usuario" => 10807,
                "id_sala" => 156,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2163,
                "id_usuario" => 10808,
                "id_sala" => 156,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2164,
                "id_usuario" => 10809,
                "id_sala" => 156,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2165,
                "id_usuario" => 10810,
                "id_sala" => 156,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2166,
                "id_usuario" => 10811,
                "id_sala" => 156,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2167,
                "id_usuario" => 10812,
                "id_sala" => 155,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2168,
                "id_usuario" => 10813,
                "id_sala" => 155,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2169,
                "id_usuario" => 10814,
                "id_sala" => 155,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2170,
                "id_usuario" => 10815,
                "id_sala" => 155,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2171,
                "id_usuario" => 10816,
                "id_sala" => 154,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2172,
                "id_usuario" => 10817,
                "id_sala" => 154,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2173,
                "id_usuario" => 10818,
                "id_sala" => 154,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2174,
                "id_usuario" => 10819,
                "id_sala" => 154,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2175,
                "id_usuario" => 10820,
                "id_sala" => 153,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2176,
                "id_usuario" => 10821,
                "id_sala" => 153,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2177,
                "id_usuario" => 10822,
                "id_sala" => 153,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2178,
                "id_usuario" => 10823,
                "id_sala" => 153,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2179,
                "id_usuario" => 10824,
                "id_sala" => 153,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2180,
                "id_usuario" => 10825,
                "id_sala" => 152,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2181,
                "id_usuario" => 10826,
                "id_sala" => 152,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2182,
                "id_usuario" => 10827,
                "id_sala" => 152,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2183,
                "id_usuario" => 10828,
                "id_sala" => 152,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2184,
                "id_usuario" => 10829,
                "id_sala" => 151,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2185,
                "id_usuario" => 10830,
                "id_sala" => 151,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2186,
                "id_usuario" => 10831,
                "id_sala" => 151,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2187,
                "id_usuario" => 10832,
                "id_sala" => 150,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2188,
                "id_usuario" => 10833,
                "id_sala" => 150,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2189,
                "id_usuario" => 10834,
                "id_sala" => 150,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2190,
                "id_usuario" => 10835,
                "id_sala" => 150,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2191,
                "id_usuario" => 10836,
                "id_sala" => 149,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2192,
                "id_usuario" => 10837,
                "id_sala" => 149,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2193,
                "id_usuario" => 10838,
                "id_sala" => 149,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2194,
                "id_usuario" => 10839,
                "id_sala" => 149,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2195,
                "id_usuario" => 10840,
                "id_sala" => 249,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2196,
                "id_usuario" => 10841,
                "id_sala" => 249,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2197,
                "id_usuario" => 10842,
                "id_sala" => 249,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2198,
                "id_usuario" => 10485,
                "id_sala" => 148,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2199,
                "id_usuario" => 10843,
                "id_sala" => 148,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2200,
                "id_usuario" => 10844,
                "id_sala" => 148,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2201,
                "id_usuario" => 10845,
                "id_sala" => 148,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2202,
                "id_usuario" => 10846,
                "id_sala" => 147,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2203,
                "id_usuario" => 10847,
                "id_sala" => 147,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2204,
                "id_usuario" => 10848,
                "id_sala" => 147,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2205,
                "id_usuario" => 10849,
                "id_sala" => 147,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2206,
                "id_usuario" => 10850,
                "id_sala" => 146,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2207,
                "id_usuario" => 10851,
                "id_sala" => 146,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2208,
                "id_usuario" => 10852,
                "id_sala" => 146,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2209,
                "id_usuario" => 10853,
                "id_sala" => 146,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2210,
                "id_usuario" => 10854,
                "id_sala" => 254,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2211,
                "id_usuario" => 10855,
                "id_sala" => 254,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2212,
                "id_usuario" => 10856,
                "id_sala" => 254,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2213,
                "id_usuario" => 10857,
                "id_sala" => 145,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2214,
                "id_usuario" => 10858,
                "id_sala" => 145,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2215,
                "id_usuario" => 10859,
                "id_sala" => 145,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2216,
                "id_usuario" => 10860,
                "id_sala" => 144,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2217,
                "id_usuario" => 10861,
                "id_sala" => 144,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2218,
                "id_usuario" => 10862,
                "id_sala" => 144,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2219,
                "id_usuario" => 10867,
                "id_sala" => 143,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2220,
                "id_usuario" => 10868,
                "id_sala" => 143,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2221,
                "id_usuario" => 10869,
                "id_sala" => 143,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2222,
                "id_usuario" => 10870,
                "id_sala" => 143,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2223,
                "id_usuario" => 10871,
                "id_sala" => 142,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2224,
                "id_usuario" => 10872,
                "id_sala" => 142,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2225,
                "id_usuario" => 10873,
                "id_sala" => 142,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2226,
                "id_usuario" => 10874,
                "id_sala" => 142,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2227,
                "id_usuario" => 10657,
                "id_sala" => 141,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2228,
                "id_usuario" => 10876,
                "id_sala" => 141,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2229,
                "id_usuario" => 10877,
                "id_sala" => 141,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2230,
                "id_usuario" => 10878,
                "id_sala" => 141,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2231,
                "id_usuario" => 10879,
                "id_sala" => 140,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2232,
                "id_usuario" => 10880,
                "id_sala" => 140,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2233,
                "id_usuario" => 10881,
                "id_sala" => 140,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2234,
                "id_usuario" => 10882,
                "id_sala" => 139,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2235,
                "id_usuario" => 10883,
                "id_sala" => 139,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2236,
                "id_usuario" => 10884,
                "id_sala" => 139,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2237,
                "id_usuario" => 10885,
                "id_sala" => 139,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2238,
                "id_usuario" => 10886,
                "id_sala" => 139,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2239,
                "id_usuario" => 10887,
                "id_sala" => 138,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2240,
                "id_usuario" => 10888,
                "id_sala" => 138,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2241,
                "id_usuario" => 10889,
                "id_sala" => 138,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2242,
                "id_usuario" => 10890,
                "id_sala" => 137,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2243,
                "id_usuario" => 10891,
                "id_sala" => 137,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2244,
                "id_usuario" => 10892,
                "id_sala" => 137,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2245,
                "id_usuario" => 10534,
                "id_sala" => 136,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2246,
                "id_usuario" => 10894,
                "id_sala" => 136,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2247,
                "id_usuario" => 10895,
                "id_sala" => 136,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2248,
                "id_usuario" => 10896,
                "id_sala" => 136,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2249,
                "id_usuario" => 10897,
                "id_sala" => 135,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2250,
                "id_usuario" => 10898,
                "id_sala" => 135,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2251,
                "id_usuario" => 10899,
                "id_sala" => 135,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2252,
                "id_usuario" => 10900,
                "id_sala" => 135,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2253,
                "id_usuario" => 10901,
                "id_sala" => 135,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2254,
                "id_usuario" => 10902,
                "id_sala" => 134,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2255,
                "id_usuario" => 10903,
                "id_sala" => 134,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2256,
                "id_usuario" => 10904,
                "id_sala" => 134,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2257,
                "id_usuario" => 10905,
                "id_sala" => 134,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2258,
                "id_usuario" => 10906,
                "id_sala" => 134,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2259,
                "id_usuario" => 10907,
                "id_sala" => 133,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2260,
                "id_usuario" => 10908,
                "id_sala" => 133,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2261,
                "id_usuario" => 10909,
                "id_sala" => 133,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2262,
                "id_usuario" => 10910,
                "id_sala" => 132,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2263,
                "id_usuario" => 10911,
                "id_sala" => 132,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2264,
                "id_usuario" => 10912,
                "id_sala" => 132,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2265,
                "id_usuario" => 10913,
                "id_sala" => 132,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2266,
                "id_usuario" => 10914,
                "id_sala" => 132,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2267,
                "id_usuario" => 10915,
                "id_sala" => 131,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2268,
                "id_usuario" => 10916,
                "id_sala" => 131,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2269,
                "id_usuario" => 10917,
                "id_sala" => 131,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2270,
                "id_usuario" => 10918,
                "id_sala" => 130,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2271,
                "id_usuario" => 10919,
                "id_sala" => 130,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2272,
                "id_usuario" => 10920,
                "id_sala" => 130,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2273,
                "id_usuario" => 10921,
                "id_sala" => 130,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2274,
                "id_usuario" => 10922,
                "id_sala" => 130,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2275,
                "id_usuario" => 10923,
                "id_sala" => 130,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2276,
                "id_usuario" => 10924,
                "id_sala" => 128,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2277,
                "id_usuario" => 10925,
                "id_sala" => 128,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2278,
                "id_usuario" => 10926,
                "id_sala" => 128,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2279,
                "id_usuario" => 10927,
                "id_sala" => 128,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2280,
                "id_usuario" => 10928,
                "id_sala" => 127,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2281,
                "id_usuario" => 10929,
                "id_sala" => 127,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2282,
                "id_usuario" => 10930,
                "id_sala" => 127,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2283,
                "id_usuario" => 10931,
                "id_sala" => 127,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2284,
                "id_usuario" => 10932,
                "id_sala" => 126,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2285,
                "id_usuario" => 10933,
                "id_sala" => 126,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2286,
                "id_usuario" => 10934,
                "id_sala" => 126,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2287,
                "id_usuario" => 10935,
                "id_sala" => 125,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2288,
                "id_usuario" => 10936,
                "id_sala" => 125,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2289,
                "id_usuario" => 10937,
                "id_sala" => 125,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2290,
                "id_usuario" => 10938,
                "id_sala" => 125,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2291,
                "id_usuario" => 10939,
                "id_sala" => 124,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2292,
                "id_usuario" => 10940,
                "id_sala" => 124,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2293,
                "id_usuario" => 10941,
                "id_sala" => 124,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2294,
                "id_usuario" => 10942,
                "id_sala" => 124,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2295,
                "id_usuario" => 10943,
                "id_sala" => 123,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2296,
                "id_usuario" => 10944,
                "id_sala" => 123,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2297,
                "id_usuario" => 10466,
                "id_sala" => 122,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2298,
                "id_usuario" => 10945,
                "id_sala" => 122,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2299,
                "id_usuario" => 10946,
                "id_sala" => 122,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2300,
                "id_usuario" => 10947,
                "id_sala" => 122,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2301,
                "id_usuario" => 10948,
                "id_sala" => 121,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2302,
                "id_usuario" => 10949,
                "id_sala" => 121,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2303,
                "id_usuario" => 10950,
                "id_sala" => 121,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2304,
                "id_usuario" => 10951,
                "id_sala" => 121,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2305,
                "id_usuario" => 10952,
                "id_sala" => 120,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2306,
                "id_usuario" => 10953,
                "id_sala" => 120,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2307,
                "id_usuario" => 10954,
                "id_sala" => 120,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2308,
                "id_usuario" => 10955,
                "id_sala" => 120,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2309,
                "id_usuario" => 10956,
                "id_sala" => 119,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2310,
                "id_usuario" => 10957,
                "id_sala" => 119,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2311,
                "id_usuario" => 10958,
                "id_sala" => 119,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2312,
                "id_usuario" => 10959,
                "id_sala" => 118,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2313,
                "id_usuario" => 10960,
                "id_sala" => 118,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2314,
                "id_usuario" => 10961,
                "id_sala" => 118,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2315,
                "id_usuario" => 10962,
                "id_sala" => 118,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2316,
                "id_usuario" => 10963,
                "id_sala" => 117,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2317,
                "id_usuario" => 10964,
                "id_sala" => 117,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2318,
                "id_usuario" => 10965,
                "id_sala" => 117,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2319,
                "id_usuario" => 10966,
                "id_sala" => 116,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2320,
                "id_usuario" => 10967,
                "id_sala" => 116,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2321,
                "id_usuario" => 10968,
                "id_sala" => 114,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2322,
                "id_usuario" => 10969,
                "id_sala" => 114,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2323,
                "id_usuario" => 10970,
                "id_sala" => 114,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2324,
                "id_usuario" => 10971,
                "id_sala" => 114,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2325,
                "id_usuario" => 10972,
                "id_sala" => 114,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2326,
                "id_usuario" => 10973,
                "id_sala" => 113,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2327,
                "id_usuario" => 10974,
                "id_sala" => 113,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2328,
                "id_usuario" => 10975,
                "id_sala" => 113,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2329,
                "id_usuario" => 10976,
                "id_sala" => 113,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2330,
                "id_usuario" => 10977,
                "id_sala" => 113,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2331,
                "id_usuario" => 10978,
                "id_sala" => 112,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2332,
                "id_usuario" => 10979,
                "id_sala" => 112,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2333,
                "id_usuario" => 10980,
                "id_sala" => 112,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2334,
                "id_usuario" => 10981,
                "id_sala" => 112,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2335,
                "id_usuario" => 10982,
                "id_sala" => 111,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2336,
                "id_usuario" => 10983,
                "id_sala" => 111,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2337,
                "id_usuario" => 10984,
                "id_sala" => 111,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2338,
                "id_usuario" => 10985,
                "id_sala" => 110,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2339,
                "id_usuario" => 10986,
                "id_sala" => 110,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2340,
                "id_usuario" => 10932,
                "id_sala" => 109,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2341,
                "id_usuario" => 10987,
                "id_sala" => 109,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2342,
                "id_usuario" => 10988,
                "id_sala" => 109,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2343,
                "id_usuario" => 10989,
                "id_sala" => 108,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2344,
                "id_usuario" => 10990,
                "id_sala" => 108,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2345,
                "id_usuario" => 10991,
                "id_sala" => 108,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2346,
                "id_usuario" => 10992,
                "id_sala" => 107,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2347,
                "id_usuario" => 10993,
                "id_sala" => 107,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2348,
                "id_usuario" => 10994,
                "id_sala" => 107,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2349,
                "id_usuario" => 10995,
                "id_sala" => 106,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2350,
                "id_usuario" => 10996,
                "id_sala" => 106,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2351,
                "id_usuario" => 10997,
                "id_sala" => 106,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2352,
                "id_usuario" => 10998,
                "id_sala" => 106,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2353,
                "id_usuario" => 10999,
                "id_sala" => 105,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2354,
                "id_usuario" => 11000,
                "id_sala" => 105,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2355,
                "id_usuario" => 11001,
                "id_sala" => 105,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2356,
                "id_usuario" => 11002,
                "id_sala" => 105,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2357,
                "id_usuario" => 11003,
                "id_sala" => 105,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2358,
                "id_usuario" => 10710,
                "id_sala" => 104,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2359,
                "id_usuario" => 11005,
                "id_sala" => 104,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2360,
                "id_usuario" => 11006,
                "id_sala" => 104,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2361,
                "id_usuario" => 11007,
                "id_sala" => 251,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2362,
                "id_usuario" => 11008,
                "id_sala" => 251,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2363,
                "id_usuario" => 11009,
                "id_sala" => 251,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2364,
                "id_usuario" => 11010,
                "id_sala" => 251,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2365,
                "id_usuario" => 11011,
                "id_sala" => 103,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2366,
                "id_usuario" => 11012,
                "id_sala" => 103,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2367,
                "id_usuario" => 11013,
                "id_sala" => 103,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2368,
                "id_usuario" => 11014,
                "id_sala" => 103,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2369,
                "id_usuario" => 11015,
                "id_sala" => 102,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2370,
                "id_usuario" => 11016,
                "id_sala" => 102,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2371,
                "id_usuario" => 11017,
                "id_sala" => 102,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2372,
                "id_usuario" => 11018,
                "id_sala" => 101,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2373,
                "id_usuario" => 11019,
                "id_sala" => 101,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2374,
                "id_usuario" => 11020,
                "id_sala" => 101,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2375,
                "id_usuario" => 11021,
                "id_sala" => 101,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2376,
                "id_usuario" => 10890,
                "id_sala" => 100,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2377,
                "id_usuario" => 11023,
                "id_sala" => 100,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2378,
                "id_usuario" => 11024,
                "id_sala" => 100,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2379,
                "id_usuario" => 11025,
                "id_sala" => 100,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2380,
                "id_usuario" => 11026,
                "id_sala" => 100,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2381,
                "id_usuario" => 10924,
                "id_sala" => 99,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2382,
                "id_usuario" => 11028,
                "id_sala" => 99,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2383,
                "id_usuario" => 11029,
                "id_sala" => 99,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2384,
                "id_usuario" => 11030,
                "id_sala" => 99,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2385,
                "id_usuario" => 11031,
                "id_sala" => 98,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2386,
                "id_usuario" => 11032,
                "id_sala" => 98,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2387,
                "id_usuario" => 11033,
                "id_sala" => 98,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2388,
                "id_usuario" => 11034,
                "id_sala" => 98,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2389,
                "id_usuario" => 11035,
                "id_sala" => 97,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2390,
                "id_usuario" => 11036,
                "id_sala" => 97,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2391,
                "id_usuario" => 11037,
                "id_sala" => 97,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2392,
                "id_usuario" => 11038,
                "id_sala" => 97,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2393,
                "id_usuario" => 11039,
                "id_sala" => 96,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2394,
                "id_usuario" => 11040,
                "id_sala" => 95,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2395,
                "id_usuario" => 11041,
                "id_sala" => 95,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2396,
                "id_usuario" => 11042,
                "id_sala" => 95,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2397,
                "id_usuario" => 11043,
                "id_sala" => 95,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2398,
                "id_usuario" => 11044,
                "id_sala" => 94,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2399,
                "id_usuario" => 11045,
                "id_sala" => 94,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2400,
                "id_usuario" => 11046,
                "id_sala" => 93,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2401,
                "id_usuario" => 11047,
                "id_sala" => 93,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2402,
                "id_usuario" => 11048,
                "id_sala" => 93,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2403,
                "id_usuario" => 11049,
                "id_sala" => 93,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2404,
                "id_usuario" => 11050,
                "id_sala" => 93,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2405,
                "id_usuario" => 11051,
                "id_sala" => 92,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2406,
                "id_usuario" => 11052,
                "id_sala" => 92,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2407,
                "id_usuario" => 11053,
                "id_sala" => 92,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2408,
                "id_usuario" => 11054,
                "id_sala" => 92,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2409,
                "id_usuario" => 11055,
                "id_sala" => 92,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2410,
                "id_usuario" => 11056,
                "id_sala" => 91,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2411,
                "id_usuario" => 11057,
                "id_sala" => 91,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2412,
                "id_usuario" => 11058,
                "id_sala" => 91,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2413,
                "id_usuario" => 11059,
                "id_sala" => 91,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2414,
                "id_usuario" => 11060,
                "id_sala" => 90,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2415,
                "id_usuario" => 11061,
                "id_sala" => 90,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2416,
                "id_usuario" => 11062,
                "id_sala" => 90,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2417,
                "id_usuario" => 11063,
                "id_sala" => 90,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2418,
                "id_usuario" => 11064,
                "id_sala" => 89,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2419,
                "id_usuario" => 11065,
                "id_sala" => 89,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2420,
                "id_usuario" => 11066,
                "id_sala" => 89,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2421,
                "id_usuario" => 11067,
                "id_sala" => 89,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2422,
                "id_usuario" => 11068,
                "id_sala" => 88,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2423,
                "id_usuario" => 11069,
                "id_sala" => 88,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2424,
                "id_usuario" => 11070,
                "id_sala" => 88,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2425,
                "id_usuario" => 11071,
                "id_sala" => 88,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2426,
                "id_usuario" => 11072,
                "id_sala" => 87,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2427,
                "id_usuario" => 11073,
                "id_sala" => 87,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2428,
                "id_usuario" => 11074,
                "id_sala" => 87,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2429,
                "id_usuario" => 11075,
                "id_sala" => 87,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2430,
                "id_usuario" => 11076,
                "id_sala" => 86,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2431,
                "id_usuario" => 11077,
                "id_sala" => 86,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2432,
                "id_usuario" => 11078,
                "id_sala" => 86,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2433,
                "id_usuario" => 11079,
                "id_sala" => 86,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2434,
                "id_usuario" => 11080,
                "id_sala" => 86,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2435,
                "id_usuario" => 11081,
                "id_sala" => 85,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2436,
                "id_usuario" => 11082,
                "id_sala" => 85,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2437,
                "id_usuario" => 11083,
                "id_sala" => 85,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2438,
                "id_usuario" => 11084,
                "id_sala" => 84,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2439,
                "id_usuario" => 11085,
                "id_sala" => 84,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2440,
                "id_usuario" => 10950,
                "id_sala" => 84,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2441,
                "id_usuario" => 11086,
                "id_sala" => 84,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2442,
                "id_usuario" => 11087,
                "id_sala" => 83,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2443,
                "id_usuario" => 11088,
                "id_sala" => 83,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2444,
                "id_usuario" => 11089,
                "id_sala" => 82,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2445,
                "id_usuario" => 11090,
                "id_sala" => 82,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2446,
                "id_usuario" => 11091,
                "id_sala" => 82,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2447,
                "id_usuario" => 11092,
                "id_sala" => 82,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2448,
                "id_usuario" => 11093,
                "id_sala" => 82,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2449,
                "id_usuario" => 11094,
                "id_sala" => 81,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2450,
                "id_usuario" => 11095,
                "id_sala" => 81,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2451,
                "id_usuario" => 11096,
                "id_sala" => 81,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2452,
                "id_usuario" => 11097,
                "id_sala" => 81,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2453,
                "id_usuario" => 11098,
                "id_sala" => 80,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2454,
                "id_usuario" => 11099,
                "id_sala" => 80,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2455,
                "id_usuario" => 11100,
                "id_sala" => 80,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2456,
                "id_usuario" => 11101,
                "id_sala" => 80,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2457,
                "id_usuario" => 11102,
                "id_sala" => 79,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2458,
                "id_usuario" => 11103,
                "id_sala" => 79,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2459,
                "id_usuario" => 11104,
                "id_sala" => 79,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2460,
                "id_usuario" => 11105,
                "id_sala" => 79,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2461,
                "id_usuario" => 11106,
                "id_sala" => 79,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2462,
                "id_usuario" => 11107,
                "id_sala" => 78,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2463,
                "id_usuario" => 11108,
                "id_sala" => 78,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2464,
                "id_usuario" => 11109,
                "id_sala" => 78,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2465,
                "id_usuario" => 11110,
                "id_sala" => 78,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2466,
                "id_usuario" => 11111,
                "id_sala" => 77,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2467,
                "id_usuario" => 11112,
                "id_sala" => 77,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2468,
                "id_usuario" => 11113,
                "id_sala" => 77,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2469,
                "id_usuario" => 11114,
                "id_sala" => 76,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2470,
                "id_usuario" => 11115,
                "id_sala" => 76,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2471,
                "id_usuario" => 11116,
                "id_sala" => 76,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2472,
                "id_usuario" => 11117,
                "id_sala" => 75,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2473,
                "id_usuario" => 11118,
                "id_sala" => 75,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2474,
                "id_usuario" => 11119,
                "id_sala" => 75,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2475,
                "id_usuario" => 11120,
                "id_sala" => 75,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2476,
                "id_usuario" => 11121,
                "id_sala" => 75,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2477,
                "id_usuario" => 11122,
                "id_sala" => 75,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2478,
                "id_usuario" => 11123,
                "id_sala" => 74,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2479,
                "id_usuario" => 11124,
                "id_sala" => 74,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2480,
                "id_usuario" => 11125,
                "id_sala" => 74,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2481,
                "id_usuario" => 11126,
                "id_sala" => 74,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2482,
                "id_usuario" => 11123,
                "id_sala" => 74,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2483,
                "id_usuario" => 11124,
                "id_sala" => 74,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2484,
                "id_usuario" => 11125,
                "id_sala" => 74,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2485,
                "id_usuario" => 11126,
                "id_sala" => 74,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2486,
                "id_usuario" => 10592,
                "id_sala" => 73,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2487,
                "id_usuario" => 11128,
                "id_sala" => 73,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2488,
                "id_usuario" => 11129,
                "id_sala" => 72,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2489,
                "id_usuario" => 11130,
                "id_sala" => 72,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2490,
                "id_usuario" => 11131,
                "id_sala" => 72,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2491,
                "id_usuario" => 11132,
                "id_sala" => 70,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2492,
                "id_usuario" => 11133,
                "id_sala" => 70,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2493,
                "id_usuario" => 11134,
                "id_sala" => 70,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2494,
                "id_usuario" => 11135,
                "id_sala" => 70,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2495,
                "id_usuario" => 11136,
                "id_sala" => 69,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2496,
                "id_usuario" => 11137,
                "id_sala" => 69,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2497,
                "id_usuario" => 11138,
                "id_sala" => 69,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2498,
                "id_usuario" => 11139,
                "id_sala" => 68,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2499,
                "id_usuario" => 11140,
                "id_sala" => 68,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2500,
                "id_usuario" => 11141,
                "id_sala" => 68,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2501,
                "id_usuario" => 11142,
                "id_sala" => 67,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2502,
                "id_usuario" => 11143,
                "id_sala" => 67,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2503,
                "id_usuario" => 11144,
                "id_sala" => 67,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2504,
                "id_usuario" => 11145,
                "id_sala" => 66,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2505,
                "id_usuario" => 11146,
                "id_sala" => 66,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2506,
                "id_usuario" => 11147,
                "id_sala" => 66,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2507,
                "id_usuario" => 11148,
                "id_sala" => 65,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2508,
                "id_usuario" => 11149,
                "id_sala" => 65,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2509,
                "id_usuario" => 11150,
                "id_sala" => 65,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2510,
                "id_usuario" => 11151,
                "id_sala" => 65,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2511,
                "id_usuario" => 11152,
                "id_sala" => 64,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2512,
                "id_usuario" => 11153,
                "id_sala" => 64,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2513,
                "id_usuario" => 11154,
                "id_sala" => 64,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2514,
                "id_usuario" => 11155,
                "id_sala" => 64,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2515,
                "id_usuario" => 11156,
                "id_sala" => 64,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2516,
                "id_usuario" => 11157,
                "id_sala" => 63,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2517,
                "id_usuario" => 11158,
                "id_sala" => 63,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2518,
                "id_usuario" => 11159,
                "id_sala" => 63,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2519,
                "id_usuario" => 11160,
                "id_sala" => 63,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2520,
                "id_usuario" => 11161,
                "id_sala" => 63,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2521,
                "id_usuario" => 11162,
                "id_sala" => 63,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2522,
                "id_usuario" => 11163,
                "id_sala" => 76,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ]
        ];

        DB::table('usuario_salas')->insert($usuario_salas);
    }
}
