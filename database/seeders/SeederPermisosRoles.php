<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederPermisosRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
      DB::table('permisos_roles')->truncate();
      DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Activamos la revisión de claves foráneas
      $permisos_roles = [
        [
          "id" => 1,
          "id_rol" => 1,
          "id_permiso" => 67,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 2,
          "id_rol" => 1,
          "id_permiso" => 13,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 3,
          "id_rol" => 1,
          "id_permiso" => 14,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 4,
          "id_rol" => 1,
          "id_permiso" => 15,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 5,
          "id_rol" => 1,
          "id_permiso" => 16,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 6,
          "id_rol" => 1,
          "id_permiso" => 17,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 7,
          "id_rol" => 1,
          "id_permiso" => 18,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 8,
          "id_rol" => 1,
          "id_permiso" => 19,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 9,
          "id_rol" => 1,
          "id_permiso" => 20,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 10,
          "id_rol" => 1,
          "id_permiso" => 21,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 11,
          "id_rol" => 1,
          "id_permiso" => 22,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 12,
          "id_rol" => 1,
          "id_permiso" => 23,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 13,
          "id_rol" => 1,
          "id_permiso" => 24,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 14,
          "id_rol" => 1,
          "id_permiso" => 25,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 15,
          "id_rol" => 1,
          "id_permiso" => 26,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 16,
          "id_rol" => 1,
          "id_permiso" => 27,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 17,
          "id_rol" => 1,
          "id_permiso" => 28,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 18,
          "id_rol" => 1,
          "id_permiso" => 1,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 19,
          "id_rol" => 1,
          "id_permiso" => 2,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 20,
          "id_rol" => 1,
          "id_permiso" => 3,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 21,
          "id_rol" => 1,
          "id_permiso" => 4,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 22,
          "id_rol" => 1,
          "id_permiso" => 5,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 23,
          "id_rol" => 1,
          "id_permiso" => 6,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 24,
          "id_rol" => 1,
          "id_permiso" => 7,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 25,
          "id_rol" => 1,
          "id_permiso" => 8,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 26,
          "id_rol" => 1,
          "id_permiso" => 9,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 27,
          "id_rol" => 1,
          "id_permiso" => 10,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 28,
          "id_rol" => 1,
          "id_permiso" => 11,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 29,
          "id_rol" => 1,
          "id_permiso" => 12,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 30,
          "id_rol" => 1,
          "id_permiso" => 61,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 31,
          "id_rol" => 1,
          "id_permiso" => 62,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 32,
          "id_rol" => 1,
          "id_permiso" => 63,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 33,
          "id_rol" => 1,
          "id_permiso" => 64,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 34,
          "id_rol" => 1,
          "id_permiso" => 65,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 35,
          "id_rol" => 1,
          "id_permiso" => 66,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 36,
          "id_rol" => 1,
          "id_permiso" => 79,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 37,
          "id_rol" => 1,
          "id_permiso" => 36,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 38,
          "id_rol" => 1,
          "id_permiso" => 37,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 39,
          "id_rol" => 1,
          "id_permiso" => 38,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 40,
          "id_rol" => 1,
          "id_permiso" => 39,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 41,
          "id_rol" => 1,
          "id_permiso" => 40,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 42,
          "id_rol" => 1,
          "id_permiso" => 41,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 43,
          "id_rol" => 1,
          "id_permiso" => 42,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 44,
          "id_rol" => 1,
          "id_permiso" => 43,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 45,
          "id_rol" => 1,
          "id_permiso" => 29,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 46,
          "id_rol" => 1,
          "id_permiso" => 30,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 47,
          "id_rol" => 1,
          "id_permiso" => 31,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 48,
          "id_rol" => 1,
          "id_permiso" => 32,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 49,
          "id_rol" => 1,
          "id_permiso" => 33,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 50,
          "id_rol" => 1,
          "id_permiso" => 34,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 51,
          "id_rol" => 1,
          "id_permiso" => 35,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 52,
          "id_rol" => 1,
          "id_permiso" => 68,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 53,
          "id_rol" => 1,
          "id_permiso" => 69,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 54,
          "id_rol" => 1,
          "id_permiso" => 70,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 55,
          "id_rol" => 1,
          "id_permiso" => 71,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 56,
          "id_rol" => 1,
          "id_permiso" => 72,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 57,
          "id_rol" => 1,
          "id_permiso" => 73,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 58,
          "id_rol" => 1,
          "id_permiso" => 74,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 59,
          "id_rol" => 1,
          "id_permiso" => 75,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 60,
          "id_rol" => 1,
          "id_permiso" => 76,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 61,
          "id_rol" => 1,
          "id_permiso" => 77,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 62,
          "id_rol" => 1,
          "id_permiso" => 46,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 63,
          "id_rol" => 1,
          "id_permiso" => 47,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 64,
          "id_rol" => 1,
          "id_permiso" => 48,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 65,
          "id_rol" => 1,
          "id_permiso" => 49,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 66,
          "id_rol" => 1,
          "id_permiso" => 50,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 67,
          "id_rol" => 1,
          "id_permiso" => 51,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 68,
          "id_rol" => 1,
          "id_permiso" => 52,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 69,
          "id_rol" => 1,
          "id_permiso" => 53,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 70,
          "id_rol" => 1,
          "id_permiso" => 54,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 71,
          "id_rol" => 1,
          "id_permiso" => 55,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 72,
          "id_rol" => 1,
          "id_permiso" => 56,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 73,
          "id_rol" => 1,
          "id_permiso" => 57,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 74,
          "id_rol" => 1,
          "id_permiso" => 58,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 75,
          "id_rol" => 1,
          "id_permiso" => 59,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 76,
          "id_rol" => 1,
          "id_permiso" => 60,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 77,
          "id_rol" => 1,
          "id_permiso" => 78,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 78,
          "id_rol" => 1,
          "id_permiso" => 107,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 79,
          "id_rol" => 1,
          "id_permiso" => 108,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 80,
          "id_rol" => 1,
          "id_permiso" => 80,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 81,
          "id_rol" => 1,
          "id_permiso" => 81,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 82,
          "id_rol" => 1,
          "id_permiso" => 82,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 83,
          "id_rol" => 1,
          "id_permiso" => 83,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 84,
          "id_rol" => 1,
          "id_permiso" => 84,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 85,
          "id_rol" => 1,
          "id_permiso" => 85,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 86,
          "id_rol" => 1,
          "id_permiso" => 86,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 87,
          "id_rol" => 1,
          "id_permiso" => 110,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 88,
          "id_rol" => 1,
          "id_permiso" => 111,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 89,
          "id_rol" => 1,
          "id_permiso" => 112,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 90,
          "id_rol" => 1,
          "id_permiso" => 113,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 91,
          "id_rol" => 1,
          "id_permiso" => 114,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 92,
          "id_rol" => 1,
          "id_permiso" => 115,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 93,
          "id_rol" => 1,
          "id_permiso" => 116,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 94,
          "id_rol" => 1,
          "id_permiso" => 117,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 95,
          "id_rol" => 1,
          "id_permiso" => 118,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 96,
          "id_rol" => 1,
          "id_permiso" => 87,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 97,
          "id_rol" => 1,
          "id_permiso" => 88,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 98,
          "id_rol" => 1,
          "id_permiso" => 89,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 99,
          "id_rol" => 1,
          "id_permiso" => 90,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 100,
          "id_rol" => 1,
          "id_permiso" => 91,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 101,
          "id_rol" => 1,
          "id_permiso" => 92,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 102,
          "id_rol" => 1,
          "id_permiso" => 93,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 103,
          "id_rol" => 1,
          "id_permiso" => 94,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 104,
          "id_rol" => 1,
          "id_permiso" => 95,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 105,
          "id_rol" => 1,
          "id_permiso" => 96,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 106,
          "id_rol" => 1,
          "id_permiso" => 97,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 107,
          "id_rol" => 1,
          "id_permiso" => 98,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 108,
          "id_rol" => 1,
          "id_permiso" => 99,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 109,
          "id_rol" => 1,
          "id_permiso" => 100,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 110,
          "id_rol" => 1,
          "id_permiso" => 101,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 111,
          "id_rol" => 1,
          "id_permiso" => 102,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 112,
          "id_rol" => 1,
          "id_permiso" => 103,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 113,
          "id_rol" => 1,
          "id_permiso" => 104,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 114,
          "id_rol" => 1,
          "id_permiso" => 105,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 115,
          "id_rol" => 1,
          "id_permiso" => 106,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 116,
          "id_rol" => 1,
          "id_permiso" => 109,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:42:49",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 128,
          "id_rol" => 2,
          "id_permiso" => 67,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 129,
          "id_rol" => 2,
          "id_permiso" => 13,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 130,
          "id_rol" => 2,
          "id_permiso" => 14,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 131,
          "id_rol" => 2,
          "id_permiso" => 15,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 132,
          "id_rol" => 2,
          "id_permiso" => 16,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 133,
          "id_rol" => 2,
          "id_permiso" => 17,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 134,
          "id_rol" => 2,
          "id_permiso" => 18,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 135,
          "id_rol" => 2,
          "id_permiso" => 19,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 136,
          "id_rol" => 2,
          "id_permiso" => 20,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 137,
          "id_rol" => 2,
          "id_permiso" => 21,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 138,
          "id_rol" => 2,
          "id_permiso" => 22,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 139,
          "id_rol" => 2,
          "id_permiso" => 23,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 140,
          "id_rol" => 2,
          "id_permiso" => 24,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 141,
          "id_rol" => 2,
          "id_permiso" => 25,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 142,
          "id_rol" => 2,
          "id_permiso" => 26,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 143,
          "id_rol" => 2,
          "id_permiso" => 27,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 144,
          "id_rol" => 2,
          "id_permiso" => 28,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 145,
          "id_rol" => 2,
          "id_permiso" => 1,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 146,
          "id_rol" => 2,
          "id_permiso" => 2,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 147,
          "id_rol" => 2,
          "id_permiso" => 3,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 148,
          "id_rol" => 2,
          "id_permiso" => 4,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 149,
          "id_rol" => 2,
          "id_permiso" => 5,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 150,
          "id_rol" => 2,
          "id_permiso" => 6,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 151,
          "id_rol" => 2,
          "id_permiso" => 7,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 152,
          "id_rol" => 2,
          "id_permiso" => 8,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 153,
          "id_rol" => 2,
          "id_permiso" => 9,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 154,
          "id_rol" => 2,
          "id_permiso" => 10,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 155,
          "id_rol" => 2,
          "id_permiso" => 11,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 156,
          "id_rol" => 2,
          "id_permiso" => 12,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 157,
          "id_rol" => 2,
          "id_permiso" => 61,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 158,
          "id_rol" => 2,
          "id_permiso" => 62,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 159,
          "id_rol" => 2,
          "id_permiso" => 63,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 160,
          "id_rol" => 2,
          "id_permiso" => 64,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 161,
          "id_rol" => 2,
          "id_permiso" => 65,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 162,
          "id_rol" => 2,
          "id_permiso" => 66,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 163,
          "id_rol" => 2,
          "id_permiso" => 79,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 164,
          "id_rol" => 2,
          "id_permiso" => 36,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 165,
          "id_rol" => 2,
          "id_permiso" => 37,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 166,
          "id_rol" => 2,
          "id_permiso" => 38,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 167,
          "id_rol" => 2,
          "id_permiso" => 39,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 168,
          "id_rol" => 2,
          "id_permiso" => 40,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 169,
          "id_rol" => 2,
          "id_permiso" => 41,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 170,
          "id_rol" => 2,
          "id_permiso" => 42,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 171,
          "id_rol" => 2,
          "id_permiso" => 43,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 172,
          "id_rol" => 2,
          "id_permiso" => 29,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 173,
          "id_rol" => 2,
          "id_permiso" => 30,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 174,
          "id_rol" => 2,
          "id_permiso" => 31,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 175,
          "id_rol" => 2,
          "id_permiso" => 32,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 176,
          "id_rol" => 2,
          "id_permiso" => 33,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 177,
          "id_rol" => 2,
          "id_permiso" => 34,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 178,
          "id_rol" => 2,
          "id_permiso" => 35,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 179,
          "id_rol" => 2,
          "id_permiso" => 68,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 180,
          "id_rol" => 2,
          "id_permiso" => 69,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 181,
          "id_rol" => 2,
          "id_permiso" => 70,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 182,
          "id_rol" => 2,
          "id_permiso" => 71,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 183,
          "id_rol" => 2,
          "id_permiso" => 72,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 184,
          "id_rol" => 2,
          "id_permiso" => 73,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 185,
          "id_rol" => 2,
          "id_permiso" => 74,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 186,
          "id_rol" => 2,
          "id_permiso" => 75,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 187,
          "id_rol" => 2,
          "id_permiso" => 76,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 188,
          "id_rol" => 2,
          "id_permiso" => 77,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 189,
          "id_rol" => 2,
          "id_permiso" => 46,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 190,
          "id_rol" => 2,
          "id_permiso" => 47,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 191,
          "id_rol" => 2,
          "id_permiso" => 48,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 192,
          "id_rol" => 2,
          "id_permiso" => 49,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 193,
          "id_rol" => 2,
          "id_permiso" => 50,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 194,
          "id_rol" => 2,
          "id_permiso" => 51,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 195,
          "id_rol" => 2,
          "id_permiso" => 52,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 196,
          "id_rol" => 2,
          "id_permiso" => 53,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 197,
          "id_rol" => 2,
          "id_permiso" => 54,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 198,
          "id_rol" => 2,
          "id_permiso" => 55,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 199,
          "id_rol" => 2,
          "id_permiso" => 56,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 200,
          "id_rol" => 2,
          "id_permiso" => 57,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 201,
          "id_rol" => 2,
          "id_permiso" => 58,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 202,
          "id_rol" => 2,
          "id_permiso" => 59,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 203,
          "id_rol" => 2,
          "id_permiso" => 60,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 204,
          "id_rol" => 2,
          "id_permiso" => 78,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 205,
          "id_rol" => 2,
          "id_permiso" => 107,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 206,
          "id_rol" => 2,
          "id_permiso" => 108,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 207,
          "id_rol" => 2,
          "id_permiso" => 80,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 208,
          "id_rol" => 2,
          "id_permiso" => 81,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 209,
          "id_rol" => 2,
          "id_permiso" => 82,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 210,
          "id_rol" => 2,
          "id_permiso" => 83,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 211,
          "id_rol" => 2,
          "id_permiso" => 84,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 212,
          "id_rol" => 2,
          "id_permiso" => 85,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 213,
          "id_rol" => 2,
          "id_permiso" => 86,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 214,
          "id_rol" => 2,
          "id_permiso" => 110,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 215,
          "id_rol" => 2,
          "id_permiso" => 111,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 216,
          "id_rol" => 2,
          "id_permiso" => 112,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 217,
          "id_rol" => 2,
          "id_permiso" => 113,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 218,
          "id_rol" => 2,
          "id_permiso" => 114,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 219,
          "id_rol" => 2,
          "id_permiso" => 115,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 220,
          "id_rol" => 2,
          "id_permiso" => 116,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 221,
          "id_rol" => 2,
          "id_permiso" => 117,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 222,
          "id_rol" => 2,
          "id_permiso" => 87,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 223,
          "id_rol" => 2,
          "id_permiso" => 88,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 224,
          "id_rol" => 2,
          "id_permiso" => 89,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 225,
          "id_rol" => 2,
          "id_permiso" => 90,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 226,
          "id_rol" => 2,
          "id_permiso" => 91,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 227,
          "id_rol" => 2,
          "id_permiso" => 92,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 228,
          "id_rol" => 2,
          "id_permiso" => 93,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 229,
          "id_rol" => 2,
          "id_permiso" => 94,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 230,
          "id_rol" => 2,
          "id_permiso" => 95,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 231,
          "id_rol" => 2,
          "id_permiso" => 96,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 232,
          "id_rol" => 2,
          "id_permiso" => 97,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 233,
          "id_rol" => 2,
          "id_permiso" => 98,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 234,
          "id_rol" => 2,
          "id_permiso" => 99,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 235,
          "id_rol" => 2,
          "id_permiso" => 100,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 236,
          "id_rol" => 2,
          "id_permiso" => 101,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 237,
          "id_rol" => 2,
          "id_permiso" => 102,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 238,
          "id_rol" => 2,
          "id_permiso" => 103,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 239,
          "id_rol" => 2,
          "id_permiso" => 104,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 240,
          "id_rol" => 2,
          "id_permiso" => 105,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 241,
          "id_rol" => 2,
          "id_permiso" => 106,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 242,
          "id_rol" => 2,
          "id_permiso" => 109,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:50:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 255,
          "id_rol" => 3,
          "id_permiso" => 67,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 256,
          "id_rol" => 3,
          "id_permiso" => 13,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 257,
          "id_rol" => 3,
          "id_permiso" => 14,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 258,
          "id_rol" => 3,
          "id_permiso" => 15,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 259,
          "id_rol" => 3,
          "id_permiso" => 16,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 260,
          "id_rol" => 3,
          "id_permiso" => 17,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 261,
          "id_rol" => 3,
          "id_permiso" => 18,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 262,
          "id_rol" => 3,
          "id_permiso" => 19,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 263,
          "id_rol" => 3,
          "id_permiso" => 20,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 264,
          "id_rol" => 3,
          "id_permiso" => 21,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 265,
          "id_rol" => 3,
          "id_permiso" => 22,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 266,
          "id_rol" => 3,
          "id_permiso" => 23,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 267,
          "id_rol" => 3,
          "id_permiso" => 24,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 268,
          "id_rol" => 3,
          "id_permiso" => 25,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 269,
          "id_rol" => 3,
          "id_permiso" => 26,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 270,
          "id_rol" => 3,
          "id_permiso" => 27,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 271,
          "id_rol" => 3,
          "id_permiso" => 28,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 272,
          "id_rol" => 3,
          "id_permiso" => 1,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 273,
          "id_rol" => 3,
          "id_permiso" => 2,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 274,
          "id_rol" => 3,
          "id_permiso" => 3,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 275,
          "id_rol" => 3,
          "id_permiso" => 4,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 276,
          "id_rol" => 3,
          "id_permiso" => 5,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 277,
          "id_rol" => 3,
          "id_permiso" => 6,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 278,
          "id_rol" => 3,
          "id_permiso" => 7,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 279,
          "id_rol" => 3,
          "id_permiso" => 8,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 280,
          "id_rol" => 3,
          "id_permiso" => 9,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 281,
          "id_rol" => 3,
          "id_permiso" => 10,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 282,
          "id_rol" => 3,
          "id_permiso" => 11,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 283,
          "id_rol" => 3,
          "id_permiso" => 12,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 284,
          "id_rol" => 3,
          "id_permiso" => 61,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 285,
          "id_rol" => 3,
          "id_permiso" => 62,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 286,
          "id_rol" => 3,
          "id_permiso" => 63,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 287,
          "id_rol" => 3,
          "id_permiso" => 64,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 288,
          "id_rol" => 3,
          "id_permiso" => 65,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 289,
          "id_rol" => 3,
          "id_permiso" => 66,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 290,
          "id_rol" => 3,
          "id_permiso" => 79,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 291,
          "id_rol" => 3,
          "id_permiso" => 36,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 292,
          "id_rol" => 3,
          "id_permiso" => 37,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 293,
          "id_rol" => 3,
          "id_permiso" => 38,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 294,
          "id_rol" => 3,
          "id_permiso" => 39,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 295,
          "id_rol" => 3,
          "id_permiso" => 40,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 296,
          "id_rol" => 3,
          "id_permiso" => 41,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 297,
          "id_rol" => 3,
          "id_permiso" => 42,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 298,
          "id_rol" => 3,
          "id_permiso" => 43,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 299,
          "id_rol" => 3,
          "id_permiso" => 29,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 300,
          "id_rol" => 3,
          "id_permiso" => 30,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 301,
          "id_rol" => 3,
          "id_permiso" => 31,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 302,
          "id_rol" => 3,
          "id_permiso" => 32,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 303,
          "id_rol" => 3,
          "id_permiso" => 33,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 304,
          "id_rol" => 3,
          "id_permiso" => 34,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 305,
          "id_rol" => 3,
          "id_permiso" => 35,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 306,
          "id_rol" => 3,
          "id_permiso" => 68,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 307,
          "id_rol" => 3,
          "id_permiso" => 69,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 308,
          "id_rol" => 3,
          "id_permiso" => 70,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 309,
          "id_rol" => 3,
          "id_permiso" => 71,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 310,
          "id_rol" => 3,
          "id_permiso" => 72,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 311,
          "id_rol" => 3,
          "id_permiso" => 73,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 312,
          "id_rol" => 3,
          "id_permiso" => 74,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 313,
          "id_rol" => 3,
          "id_permiso" => 75,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 314,
          "id_rol" => 3,
          "id_permiso" => 76,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 315,
          "id_rol" => 3,
          "id_permiso" => 77,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 316,
          "id_rol" => 3,
          "id_permiso" => 46,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 317,
          "id_rol" => 3,
          "id_permiso" => 47,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 318,
          "id_rol" => 3,
          "id_permiso" => 48,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 319,
          "id_rol" => 3,
          "id_permiso" => 49,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 320,
          "id_rol" => 3,
          "id_permiso" => 50,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 321,
          "id_rol" => 3,
          "id_permiso" => 51,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 322,
          "id_rol" => 3,
          "id_permiso" => 52,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 323,
          "id_rol" => 3,
          "id_permiso" => 53,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 324,
          "id_rol" => 3,
          "id_permiso" => 54,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 325,
          "id_rol" => 3,
          "id_permiso" => 55,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 326,
          "id_rol" => 3,
          "id_permiso" => 56,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 327,
          "id_rol" => 3,
          "id_permiso" => 57,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 328,
          "id_rol" => 3,
          "id_permiso" => 58,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 329,
          "id_rol" => 3,
          "id_permiso" => 59,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 330,
          "id_rol" => 3,
          "id_permiso" => 60,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 331,
          "id_rol" => 3,
          "id_permiso" => 78,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 332,
          "id_rol" => 3,
          "id_permiso" => 107,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 333,
          "id_rol" => 3,
          "id_permiso" => 108,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 334,
          "id_rol" => 3,
          "id_permiso" => 87,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 335,
          "id_rol" => 3,
          "id_permiso" => 88,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 336,
          "id_rol" => 3,
          "id_permiso" => 89,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 337,
          "id_rol" => 3,
          "id_permiso" => 90,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 338,
          "id_rol" => 3,
          "id_permiso" => 91,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 339,
          "id_rol" => 3,
          "id_permiso" => 92,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 340,
          "id_rol" => 3,
          "id_permiso" => 93,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 341,
          "id_rol" => 3,
          "id_permiso" => 94,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 342,
          "id_rol" => 3,
          "id_permiso" => 95,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 343,
          "id_rol" => 3,
          "id_permiso" => 96,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 344,
          "id_rol" => 3,
          "id_permiso" => 97,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 345,
          "id_rol" => 3,
          "id_permiso" => 98,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 346,
          "id_rol" => 3,
          "id_permiso" => 99,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 347,
          "id_rol" => 3,
          "id_permiso" => 100,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 348,
          "id_rol" => 3,
          "id_permiso" => 101,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 349,
          "id_rol" => 3,
          "id_permiso" => 102,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 350,
          "id_rol" => 3,
          "id_permiso" => 103,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 351,
          "id_rol" => 3,
          "id_permiso" => 104,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 352,
          "id_rol" => 3,
          "id_permiso" => 105,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 353,
          "id_rol" => 3,
          "id_permiso" => 106,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 354,
          "id_rol" => 3,
          "id_permiso" => 109,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:52:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 382,
          "id_rol" => 4,
          "id_permiso" => 67,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 383,
          "id_rol" => 4,
          "id_permiso" => 13,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 384,
          "id_rol" => 4,
          "id_permiso" => 14,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 385,
          "id_rol" => 4,
          "id_permiso" => 15,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 386,
          "id_rol" => 4,
          "id_permiso" => 16,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 387,
          "id_rol" => 4,
          "id_permiso" => 17,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 388,
          "id_rol" => 4,
          "id_permiso" => 18,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 389,
          "id_rol" => 4,
          "id_permiso" => 19,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 390,
          "id_rol" => 4,
          "id_permiso" => 20,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 391,
          "id_rol" => 4,
          "id_permiso" => 21,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 392,
          "id_rol" => 4,
          "id_permiso" => 22,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 393,
          "id_rol" => 4,
          "id_permiso" => 23,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 394,
          "id_rol" => 4,
          "id_permiso" => 24,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 395,
          "id_rol" => 4,
          "id_permiso" => 25,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 396,
          "id_rol" => 4,
          "id_permiso" => 26,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 397,
          "id_rol" => 4,
          "id_permiso" => 27,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 398,
          "id_rol" => 4,
          "id_permiso" => 28,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 399,
          "id_rol" => 4,
          "id_permiso" => 1,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 400,
          "id_rol" => 4,
          "id_permiso" => 2,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 401,
          "id_rol" => 4,
          "id_permiso" => 3,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 402,
          "id_rol" => 4,
          "id_permiso" => 4,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 403,
          "id_rol" => 4,
          "id_permiso" => 5,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 404,
          "id_rol" => 4,
          "id_permiso" => 6,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 405,
          "id_rol" => 4,
          "id_permiso" => 7,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 406,
          "id_rol" => 4,
          "id_permiso" => 8,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 407,
          "id_rol" => 4,
          "id_permiso" => 9,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 408,
          "id_rol" => 4,
          "id_permiso" => 10,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 409,
          "id_rol" => 4,
          "id_permiso" => 11,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 410,
          "id_rol" => 4,
          "id_permiso" => 12,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 411,
          "id_rol" => 4,
          "id_permiso" => 61,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 412,
          "id_rol" => 4,
          "id_permiso" => 62,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 413,
          "id_rol" => 4,
          "id_permiso" => 63,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 414,
          "id_rol" => 4,
          "id_permiso" => 64,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 415,
          "id_rol" => 4,
          "id_permiso" => 65,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 416,
          "id_rol" => 4,
          "id_permiso" => 66,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 417,
          "id_rol" => 4,
          "id_permiso" => 79,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 418,
          "id_rol" => 4,
          "id_permiso" => 54,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 419,
          "id_rol" => 4,
          "id_permiso" => 87,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 420,
          "id_rol" => 4,
          "id_permiso" => 88,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 421,
          "id_rol" => 4,
          "id_permiso" => 89,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 422,
          "id_rol" => 4,
          "id_permiso" => 90,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 423,
          "id_rol" => 4,
          "id_permiso" => 91,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 424,
          "id_rol" => 4,
          "id_permiso" => 92,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 425,
          "id_rol" => 4,
          "id_permiso" => 93,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 426,
          "id_rol" => 4,
          "id_permiso" => 94,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:53:11",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 445,
          "id_rol" => 5,
          "id_permiso" => 67,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 446,
          "id_rol" => 5,
          "id_permiso" => 13,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 447,
          "id_rol" => 5,
          "id_permiso" => 14,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 448,
          "id_rol" => 5,
          "id_permiso" => 15,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 449,
          "id_rol" => 5,
          "id_permiso" => 16,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 450,
          "id_rol" => 5,
          "id_permiso" => 17,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 451,
          "id_rol" => 5,
          "id_permiso" => 18,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 452,
          "id_rol" => 5,
          "id_permiso" => 19,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 453,
          "id_rol" => 5,
          "id_permiso" => 20,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 454,
          "id_rol" => 5,
          "id_permiso" => 21,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 455,
          "id_rol" => 5,
          "id_permiso" => 22,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 456,
          "id_rol" => 5,
          "id_permiso" => 23,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 457,
          "id_rol" => 5,
          "id_permiso" => 24,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 458,
          "id_rol" => 5,
          "id_permiso" => 25,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 459,
          "id_rol" => 5,
          "id_permiso" => 26,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 460,
          "id_rol" => 5,
          "id_permiso" => 27,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 461,
          "id_rol" => 5,
          "id_permiso" => 28,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 462,
          "id_rol" => 5,
          "id_permiso" => 1,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 463,
          "id_rol" => 5,
          "id_permiso" => 2,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 464,
          "id_rol" => 5,
          "id_permiso" => 3,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 465,
          "id_rol" => 5,
          "id_permiso" => 4,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 466,
          "id_rol" => 5,
          "id_permiso" => 5,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 467,
          "id_rol" => 5,
          "id_permiso" => 6,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 468,
          "id_rol" => 5,
          "id_permiso" => 7,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 469,
          "id_rol" => 5,
          "id_permiso" => 8,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 470,
          "id_rol" => 5,
          "id_permiso" => 9,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 471,
          "id_rol" => 5,
          "id_permiso" => 10,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 472,
          "id_rol" => 5,
          "id_permiso" => 11,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 473,
          "id_rol" => 5,
          "id_permiso" => 12,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 474,
          "id_rol" => 5,
          "id_permiso" => 61,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 475,
          "id_rol" => 5,
          "id_permiso" => 62,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 476,
          "id_rol" => 5,
          "id_permiso" => 63,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 477,
          "id_rol" => 5,
          "id_permiso" => 64,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 478,
          "id_rol" => 5,
          "id_permiso" => 65,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 479,
          "id_rol" => 5,
          "id_permiso" => 66,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 480,
          "id_rol" => 5,
          "id_permiso" => 79,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 481,
          "id_rol" => 5,
          "id_permiso" => 54,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 482,
          "id_rol" => 5,
          "id_permiso" => 80,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 483,
          "id_rol" => 5,
          "id_permiso" => 81,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 484,
          "id_rol" => 5,
          "id_permiso" => 82,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 485,
          "id_rol" => 5,
          "id_permiso" => 83,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 486,
          "id_rol" => 5,
          "id_permiso" => 84,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 487,
          "id_rol" => 5,
          "id_permiso" => 85,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 488,
          "id_rol" => 5,
          "id_permiso" => 86,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 489,
          "id_rol" => 5,
          "id_permiso" => 110,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 490,
          "id_rol" => 5,
          "id_permiso" => 111,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 491,
          "id_rol" => 5,
          "id_permiso" => 112,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 492,
          "id_rol" => 5,
          "id_permiso" => 113,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 493,
          "id_rol" => 5,
          "id_permiso" => 114,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 494,
          "id_rol" => 5,
          "id_permiso" => 115,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 495,
          "id_rol" => 5,
          "id_permiso" => 116,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 496,
          "id_rol" => 5,
          "id_permiso" => 117,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:55:21",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 539,
          "id_rol" => 7,
          "id_permiso" => 37,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:56:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 540,
          "id_rol" => 7,
          "id_permiso" => 39,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:56:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 541,
          "id_rol" => 7,
          "id_permiso" => 42,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:56:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 542,
          "id_rol" => 7,
          "id_permiso" => 29,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:56:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 543,
          "id_rol" => 7,
          "id_permiso" => 31,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:56:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 544,
          "id_rol" => 7,
          "id_permiso" => 33,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:56:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 545,
          "id_rol" => 7,
          "id_permiso" => 34,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:56:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 546,
          "id_rol" => 7,
          "id_permiso" => 86,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:56:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 547,
          "id_rol" => 7,
          "id_permiso" => 110,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:56:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 548,
          "id_rol" => 7,
          "id_permiso" => 111,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:56:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 549,
          "id_rol" => 7,
          "id_permiso" => 112,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:56:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 550,
          "id_rol" => 7,
          "id_permiso" => 113,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:56:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 551,
          "id_rol" => 7,
          "id_permiso" => 114,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:56:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 552,
          "id_rol" => 7,
          "id_permiso" => 115,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:56:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 553,
          "id_rol" => 7,
          "id_permiso" => 87,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:56:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 554,
          "id_rol" => 7,
          "id_permiso" => 94,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:56:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 555,
          "id_rol" => 7,
          "id_permiso" => 98,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:56:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 556,
          "id_rol" => 7,
          "id_permiso" => 99,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:56:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 557,
          "id_rol" => 7,
          "id_permiso" => 101,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:56:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 570,
          "id_rol" => 8,
          "id_permiso" => 61,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:18",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 571,
          "id_rol" => 8,
          "id_permiso" => 62,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:18",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 572,
          "id_rol" => 8,
          "id_permiso" => 63,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:18",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 573,
          "id_rol" => 8,
          "id_permiso" => 64,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:18",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 574,
          "id_rol" => 8,
          "id_permiso" => 65,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:18",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 575,
          "id_rol" => 8,
          "id_permiso" => 66,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:18",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 576,
          "id_rol" => 8,
          "id_permiso" => 79,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:18",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 577,
          "id_rol" => 8,
          "id_permiso" => 36,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:18",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 578,
          "id_rol" => 8,
          "id_permiso" => 37,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:18",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 579,
          "id_rol" => 8,
          "id_permiso" => 41,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:18",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 580,
          "id_rol" => 8,
          "id_permiso" => 42,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:18",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 581,
          "id_rol" => 8,
          "id_permiso" => 46,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:18",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 582,
          "id_rol" => 8,
          "id_permiso" => 47,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:18",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 583,
          "id_rol" => 8,
          "id_permiso" => 48,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:18",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 584,
          "id_rol" => 8,
          "id_permiso" => 49,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:18",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 585,
          "id_rol" => 8,
          "id_permiso" => 50,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:18",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 586,
          "id_rol" => 8,
          "id_permiso" => 95,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:18",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 587,
          "id_rol" => 8,
          "id_permiso" => 96,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:18",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 588,
          "id_rol" => 8,
          "id_permiso" => 100,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:18",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 589,
          "id_rol" => 8,
          "id_permiso" => 101,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:18",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 601,
          "id_rol" => 9,
          "id_permiso" => 37,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 602,
          "id_rol" => 9,
          "id_permiso" => 51,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 603,
          "id_rol" => 9,
          "id_permiso" => 52,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 604,
          "id_rol" => 9,
          "id_permiso" => 96,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 605,
          "id_rol" => 9,
          "id_permiso" => 102,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:36",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 608,
          "id_rol" => 10,
          "id_permiso" => 84,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:55",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 609,
          "id_rol" => 10,
          "id_permiso" => 85,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:55",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 610,
          "id_rol" => 10,
          "id_permiso" => 86,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:55",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 611,
          "id_rol" => 10,
          "id_permiso" => 110,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:55",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 612,
          "id_rol" => 10,
          "id_permiso" => 111,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:55",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 613,
          "id_rol" => 10,
          "id_permiso" => 112,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:55",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 614,
          "id_rol" => 10,
          "id_permiso" => 113,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:55",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 615,
          "id_rol" => 10,
          "id_permiso" => 114,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:55",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 616,
          "id_rol" => 10,
          "id_permiso" => 115,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:55",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 617,
          "id_rol" => 10,
          "id_permiso" => 116,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => 1,
          "created_at" => "2022-11-02 15:57:55",
          "updated_at" => null,
          "deleted_at" => null
        ],
        [
          "id" => 618,
          "id_rol" => 6,
          "id_permiso" => 42,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 619,
          "id_rol" => 6,
          "id_permiso" => 29,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 620,
          "id_rol" => 6,
          "id_permiso" => 30,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 621,
          "id_rol" => 6,
          "id_permiso" => 31,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 622,
          "id_rol" => 6,
          "id_permiso" => 33,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 623,
          "id_rol" => 6,
          "id_permiso" => 34,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 624,
          "id_rol" => 6,
          "id_permiso" => 72,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 625,
          "id_rol" => 6,
          "id_permiso" => 73,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 626,
          "id_rol" => 6,
          "id_permiso" => 74,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 627,
          "id_rol" => 6,
          "id_permiso" => 75,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 628,
          "id_rol" => 6,
          "id_permiso" => 76,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 629,
          "id_rol" => 6,
          "id_permiso" => 77,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 630,
          "id_rol" => 6,
          "id_permiso" => 81,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 631,
          "id_rol" => 6,
          "id_permiso" => 86,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 632,
          "id_rol" => 6,
          "id_permiso" => 110,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 633,
          "id_rol" => 6,
          "id_permiso" => 111,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 634,
          "id_rol" => 6,
          "id_permiso" => 112,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 635,
          "id_rol" => 6,
          "id_permiso" => 113,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 636,
          "id_rol" => 6,
          "id_permiso" => 114,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 637,
          "id_rol" => 6,
          "id_permiso" => 115,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 638,
          "id_rol" => 6,
          "id_permiso" => 87,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 639,
          "id_rol" => 6,
          "id_permiso" => 91,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 640,
          "id_rol" => 6,
          "id_permiso" => 92,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 641,
          "id_rol" => 6,
          "id_permiso" => 93,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 642,
          "id_rol" => 6,
          "id_permiso" => 94,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 643,
          "id_rol" => 6,
          "id_permiso" => 98,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 644,
          "id_rol" => 6,
          "id_permiso" => 99,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ],
        [
          "id" => 645,
          "id_rol" => 6,
          "id_permiso" => 101,
          "id_usuario_crear" => 1,
          "id_usuario_modifica" => null,
          "created_at" => "2022-11-07 21:27:36",
          "updated_at" => "2022-11-07 21:27:36",
          "deleted_at" => null
        ]
      ];
		  DB::table('permisos_roles')->insert($permisos_roles);
    }
}
