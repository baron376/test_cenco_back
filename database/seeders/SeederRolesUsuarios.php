<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederRolesUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
      	DB::table('roles_usuarios')->truncate();
      	DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Activamos la revisión de claves foráneas
        $roles_usuarios = [
            [
                "id" => 1,
                "id_rol" => 1,
                "id_usuario" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => "2015-04-21 00:00:00",
                "updated_at" => "2015-04-21 00:00:00"
            ],
            [
                "id" => 17,
                "id_rol" => 6,
                "id_usuario" => 10439,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 18,
                "id_rol" => 6,
                "id_usuario" => 10440,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 19,
                "id_rol" => 6,
                "id_usuario" => 10441,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 20,
                "id_rol" => 6,
                "id_usuario" => 10442,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 21,
                "id_rol" => 6,
                "id_usuario" => 10443,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 22,
                "id_rol" => 6,
                "id_usuario" => 10444,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 23,
                "id_rol" => 6,
                "id_usuario" => 10445,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 24,
                "id_rol" => 6,
                "id_usuario" => 10446,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 25,
                "id_rol" => 6,
                "id_usuario" => 10447,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 26,
                "id_rol" => 6,
                "id_usuario" => 10448,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 27,
                "id_rol" => 6,
                "id_usuario" => 10449,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 28,
                "id_rol" => 6,
                "id_usuario" => 10450,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 29,
                "id_rol" => 6,
                "id_usuario" => 10451,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 30,
                "id_rol" => 6,
                "id_usuario" => 10452,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 31,
                "id_rol" => 6,
                "id_usuario" => 10453,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 32,
                "id_rol" => 6,
                "id_usuario" => 10454,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 33,
                "id_rol" => 6,
                "id_usuario" => 10455,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 34,
                "id_rol" => 6,
                "id_usuario" => 10456,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 35,
                "id_rol" => 6,
                "id_usuario" => 10457,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 36,
                "id_rol" => 6,
                "id_usuario" => 10458,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 37,
                "id_rol" => 6,
                "id_usuario" => 10459,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 38,
                "id_rol" => 6,
                "id_usuario" => 10460,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 39,
                "id_rol" => 6,
                "id_usuario" => 10461,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 40,
                "id_rol" => 6,
                "id_usuario" => 10462,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 41,
                "id_rol" => 6,
                "id_usuario" => 10463,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 42,
                "id_rol" => 6,
                "id_usuario" => 10464,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 43,
                "id_rol" => 6,
                "id_usuario" => 10465,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 44,
                "id_rol" => 6,
                "id_usuario" => 10466,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 45,
                "id_rol" => 6,
                "id_usuario" => 10467,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 46,
                "id_rol" => 6,
                "id_usuario" => 10468,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 47,
                "id_rol" => 6,
                "id_usuario" => 10469,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 48,
                "id_rol" => 6,
                "id_usuario" => 10470,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 49,
                "id_rol" => 6,
                "id_usuario" => 10471,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 50,
                "id_rol" => 6,
                "id_usuario" => 10472,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 51,
                "id_rol" => 6,
                "id_usuario" => 10473,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 52,
                "id_rol" => 6,
                "id_usuario" => 10474,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 53,
                "id_rol" => 6,
                "id_usuario" => 10475,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 54,
                "id_rol" => 6,
                "id_usuario" => 10476,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 55,
                "id_rol" => 6,
                "id_usuario" => 10477,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 56,
                "id_rol" => 6,
                "id_usuario" => 10478,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 57,
                "id_rol" => 6,
                "id_usuario" => 10479,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 58,
                "id_rol" => 6,
                "id_usuario" => 10480,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 59,
                "id_rol" => 6,
                "id_usuario" => 10481,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 60,
                "id_rol" => 6,
                "id_usuario" => 10482,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 61,
                "id_rol" => 6,
                "id_usuario" => 10483,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 62,
                "id_rol" => 6,
                "id_usuario" => 10484,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 63,
                "id_rol" => 6,
                "id_usuario" => 10485,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 64,
                "id_rol" => 6,
                "id_usuario" => 10486,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 65,
                "id_rol" => 6,
                "id_usuario" => 10487,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 66,
                "id_rol" => 6,
                "id_usuario" => 10488,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 67,
                "id_rol" => 6,
                "id_usuario" => 10489,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 68,
                "id_rol" => 6,
                "id_usuario" => 10490,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 69,
                "id_rol" => 6,
                "id_usuario" => 10491,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 70,
                "id_rol" => 6,
                "id_usuario" => 10492,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 71,
                "id_rol" => 6,
                "id_usuario" => 10493,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 72,
                "id_rol" => 6,
                "id_usuario" => 10494,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 73,
                "id_rol" => 6,
                "id_usuario" => 10495,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 74,
                "id_rol" => 6,
                "id_usuario" => 10496,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 75,
                "id_rol" => 6,
                "id_usuario" => 10497,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 76,
                "id_rol" => 6,
                "id_usuario" => 10498,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 77,
                "id_rol" => 6,
                "id_usuario" => 10499,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 78,
                "id_rol" => 6,
                "id_usuario" => 10500,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 79,
                "id_rol" => 6,
                "id_usuario" => 10501,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 80,
                "id_rol" => 6,
                "id_usuario" => 10502,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 81,
                "id_rol" => 6,
                "id_usuario" => 10503,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 82,
                "id_rol" => 6,
                "id_usuario" => 10504,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 83,
                "id_rol" => 6,
                "id_usuario" => 10505,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 84,
                "id_rol" => 6,
                "id_usuario" => 10506,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 85,
                "id_rol" => 6,
                "id_usuario" => 10499,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 86,
                "id_rol" => 6,
                "id_usuario" => 10508,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 87,
                "id_rol" => 6,
                "id_usuario" => 10509,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 88,
                "id_rol" => 6,
                "id_usuario" => 10510,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 89,
                "id_rol" => 6,
                "id_usuario" => 10511,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 90,
                "id_rol" => 6,
                "id_usuario" => 10512,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 91,
                "id_rol" => 6,
                "id_usuario" => 10513,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 92,
                "id_rol" => 6,
                "id_usuario" => 10514,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 93,
                "id_rol" => 6,
                "id_usuario" => 10515,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 94,
                "id_rol" => 6,
                "id_usuario" => 10516,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 95,
                "id_rol" => 6,
                "id_usuario" => 10517,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 96,
                "id_rol" => 6,
                "id_usuario" => 10518,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 97,
                "id_rol" => 6,
                "id_usuario" => 10519,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 98,
                "id_rol" => 6,
                "id_usuario" => 10520,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 99,
                "id_rol" => 6,
                "id_usuario" => 10521,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 100,
                "id_rol" => 6,
                "id_usuario" => 10522,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 101,
                "id_rol" => 6,
                "id_usuario" => 10523,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 102,
                "id_rol" => 6,
                "id_usuario" => 10524,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 103,
                "id_rol" => 6,
                "id_usuario" => 10525,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 104,
                "id_rol" => 6,
                "id_usuario" => 10526,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 105,
                "id_rol" => 6,
                "id_usuario" => 10527,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 106,
                "id_rol" => 6,
                "id_usuario" => 10528,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 107,
                "id_rol" => 6,
                "id_usuario" => 10529,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 108,
                "id_rol" => 6,
                "id_usuario" => 10530,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 109,
                "id_rol" => 6,
                "id_usuario" => 10531,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 110,
                "id_rol" => 6,
                "id_usuario" => 10532,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 111,
                "id_rol" => 6,
                "id_usuario" => 10533,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 112,
                "id_rol" => 6,
                "id_usuario" => 10534,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 113,
                "id_rol" => 6,
                "id_usuario" => 10535,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 114,
                "id_rol" => 6,
                "id_usuario" => 10536,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 115,
                "id_rol" => 6,
                "id_usuario" => 10537,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 116,
                "id_rol" => 6,
                "id_usuario" => 10538,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 117,
                "id_rol" => 6,
                "id_usuario" => 10539,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 118,
                "id_rol" => 6,
                "id_usuario" => 10540,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 119,
                "id_rol" => 6,
                "id_usuario" => 10541,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 120,
                "id_rol" => 6,
                "id_usuario" => 10542,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 121,
                "id_rol" => 6,
                "id_usuario" => 10543,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 122,
                "id_rol" => 6,
                "id_usuario" => 10544,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 123,
                "id_rol" => 6,
                "id_usuario" => 10545,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 124,
                "id_rol" => 6,
                "id_usuario" => 10546,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 125,
                "id_rol" => 6,
                "id_usuario" => 10547,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 126,
                "id_rol" => 6,
                "id_usuario" => 10548,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 127,
                "id_rol" => 6,
                "id_usuario" => 10549,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 128,
                "id_rol" => 6,
                "id_usuario" => 10550,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 129,
                "id_rol" => 6,
                "id_usuario" => 10551,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 130,
                "id_rol" => 6,
                "id_usuario" => 10552,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 131,
                "id_rol" => 6,
                "id_usuario" => 10553,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 132,
                "id_rol" => 6,
                "id_usuario" => 10554,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 133,
                "id_rol" => 6,
                "id_usuario" => 10555,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 134,
                "id_rol" => 6,
                "id_usuario" => 10556,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 135,
                "id_rol" => 6,
                "id_usuario" => 10557,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 136,
                "id_rol" => 6,
                "id_usuario" => 10558,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 137,
                "id_rol" => 6,
                "id_usuario" => 10559,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 138,
                "id_rol" => 6,
                "id_usuario" => 10560,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 139,
                "id_rol" => 6,
                "id_usuario" => 10561,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 140,
                "id_rol" => 6,
                "id_usuario" => 10562,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 141,
                "id_rol" => 6,
                "id_usuario" => 10563,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 142,
                "id_rol" => 6,
                "id_usuario" => 10564,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 143,
                "id_rol" => 6,
                "id_usuario" => 10565,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 144,
                "id_rol" => 6,
                "id_usuario" => 10566,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 145,
                "id_rol" => 6,
                "id_usuario" => 10567,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 146,
                "id_rol" => 6,
                "id_usuario" => 10568,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 147,
                "id_rol" => 6,
                "id_usuario" => 10569,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 148,
                "id_rol" => 6,
                "id_usuario" => 10570,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 149,
                "id_rol" => 6,
                "id_usuario" => 10571,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 150,
                "id_rol" => 6,
                "id_usuario" => 10572,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 151,
                "id_rol" => 6,
                "id_usuario" => 10573,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 152,
                "id_rol" => 6,
                "id_usuario" => 10574,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 153,
                "id_rol" => 6,
                "id_usuario" => 10575,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 154,
                "id_rol" => 6,
                "id_usuario" => 10576,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 155,
                "id_rol" => 6,
                "id_usuario" => 10577,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 156,
                "id_rol" => 6,
                "id_usuario" => 10578,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 157,
                "id_rol" => 6,
                "id_usuario" => 10579,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 158,
                "id_rol" => 6,
                "id_usuario" => 10580,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 159,
                "id_rol" => 6,
                "id_usuario" => 10581,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 160,
                "id_rol" => 6,
                "id_usuario" => 10582,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 161,
                "id_rol" => 6,
                "id_usuario" => 10564,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 162,
                "id_rol" => 6,
                "id_usuario" => 10584,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 163,
                "id_rol" => 6,
                "id_usuario" => 10585,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 164,
                "id_rol" => 6,
                "id_usuario" => 10586,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 165,
                "id_rol" => 6,
                "id_usuario" => 10587,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 166,
                "id_rol" => 6,
                "id_usuario" => 10588,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 167,
                "id_rol" => 6,
                "id_usuario" => 10589,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 168,
                "id_rol" => 6,
                "id_usuario" => 10590,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 169,
                "id_rol" => 6,
                "id_usuario" => 10591,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 170,
                "id_rol" => 6,
                "id_usuario" => 10592,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 171,
                "id_rol" => 6,
                "id_usuario" => 10593,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 172,
                "id_rol" => 6,
                "id_usuario" => 10594,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 173,
                "id_rol" => 6,
                "id_usuario" => 10595,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 174,
                "id_rol" => 6,
                "id_usuario" => 10596,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 175,
                "id_rol" => 6,
                "id_usuario" => 10597,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 176,
                "id_rol" => 6,
                "id_usuario" => 10598,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 177,
                "id_rol" => 6,
                "id_usuario" => 10599,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 178,
                "id_rol" => 6,
                "id_usuario" => 10600,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 179,
                "id_rol" => 6,
                "id_usuario" => 10601,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 180,
                "id_rol" => 6,
                "id_usuario" => 10602,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 181,
                "id_rol" => 6,
                "id_usuario" => 10603,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 182,
                "id_rol" => 6,
                "id_usuario" => 10604,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 183,
                "id_rol" => 6,
                "id_usuario" => 10605,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 184,
                "id_rol" => 6,
                "id_usuario" => 10606,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 185,
                "id_rol" => 6,
                "id_usuario" => 10607,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 186,
                "id_rol" => 6,
                "id_usuario" => 10608,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 187,
                "id_rol" => 6,
                "id_usuario" => 10609,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 188,
                "id_rol" => 6,
                "id_usuario" => 10610,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 189,
                "id_rol" => 6,
                "id_usuario" => 10611,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 190,
                "id_rol" => 6,
                "id_usuario" => 10612,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 191,
                "id_rol" => 6,
                "id_usuario" => 10613,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 192,
                "id_rol" => 6,
                "id_usuario" => 10614,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 193,
                "id_rol" => 6,
                "id_usuario" => 10615,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 194,
                "id_rol" => 6,
                "id_usuario" => 10616,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 195,
                "id_rol" => 6,
                "id_usuario" => 10617,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 196,
                "id_rol" => 6,
                "id_usuario" => 10618,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 197,
                "id_rol" => 6,
                "id_usuario" => 10619,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 198,
                "id_rol" => 6,
                "id_usuario" => 10620,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 199,
                "id_rol" => 6,
                "id_usuario" => 10621,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 200,
                "id_rol" => 6,
                "id_usuario" => 10622,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 201,
                "id_rol" => 6,
                "id_usuario" => 10623,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 202,
                "id_rol" => 6,
                "id_usuario" => 10624,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 203,
                "id_rol" => 6,
                "id_usuario" => 10625,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 204,
                "id_rol" => 6,
                "id_usuario" => 10626,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 205,
                "id_rol" => 6,
                "id_usuario" => 10627,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 206,
                "id_rol" => 6,
                "id_usuario" => 10628,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 207,
                "id_rol" => 6,
                "id_usuario" => 10629,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 208,
                "id_rol" => 6,
                "id_usuario" => 10630,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 209,
                "id_rol" => 6,
                "id_usuario" => 10631,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 210,
                "id_rol" => 6,
                "id_usuario" => 10632,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 211,
                "id_rol" => 6,
                "id_usuario" => 10633,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 212,
                "id_rol" => 6,
                "id_usuario" => 10634,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 213,
                "id_rol" => 6,
                "id_usuario" => 10635,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 214,
                "id_rol" => 6,
                "id_usuario" => 10636,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 215,
                "id_rol" => 6,
                "id_usuario" => 10637,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 216,
                "id_rol" => 6,
                "id_usuario" => 10638,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 217,
                "id_rol" => 6,
                "id_usuario" => 10639,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 218,
                "id_rol" => 6,
                "id_usuario" => 10640,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 219,
                "id_rol" => 6,
                "id_usuario" => 10641,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 220,
                "id_rol" => 6,
                "id_usuario" => 10642,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 221,
                "id_rol" => 6,
                "id_usuario" => 10643,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 222,
                "id_rol" => 6,
                "id_usuario" => 10644,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 223,
                "id_rol" => 6,
                "id_usuario" => 10645,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 224,
                "id_rol" => 6,
                "id_usuario" => 10646,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 225,
                "id_rol" => 6,
                "id_usuario" => 10647,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 226,
                "id_rol" => 6,
                "id_usuario" => 10648,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 227,
                "id_rol" => 6,
                "id_usuario" => 10649,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 228,
                "id_rol" => 6,
                "id_usuario" => 10650,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 229,
                "id_rol" => 6,
                "id_usuario" => 10651,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 230,
                "id_rol" => 6,
                "id_usuario" => 10652,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 231,
                "id_rol" => 6,
                "id_usuario" => 10653,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 232,
                "id_rol" => 6,
                "id_usuario" => 10654,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 233,
                "id_rol" => 6,
                "id_usuario" => 10655,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 234,
                "id_rol" => 6,
                "id_usuario" => 10656,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 235,
                "id_rol" => 6,
                "id_usuario" => 10657,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 236,
                "id_rol" => 6,
                "id_usuario" => 10658,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 237,
                "id_rol" => 6,
                "id_usuario" => 10659,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 238,
                "id_rol" => 6,
                "id_usuario" => 10660,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 239,
                "id_rol" => 6,
                "id_usuario" => 10661,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 240,
                "id_rol" => 6,
                "id_usuario" => 10662,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 241,
                "id_rol" => 6,
                "id_usuario" => 10663,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 242,
                "id_rol" => 6,
                "id_usuario" => 10664,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 243,
                "id_rol" => 6,
                "id_usuario" => 10665,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 244,
                "id_rol" => 6,
                "id_usuario" => 10759,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 245,
                "id_rol" => 6,
                "id_usuario" => 10666,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 246,
                "id_rol" => 6,
                "id_usuario" => 10667,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 247,
                "id_rol" => 6,
                "id_usuario" => 10668,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 248,
                "id_rol" => 6,
                "id_usuario" => 10669,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 249,
                "id_rol" => 6,
                "id_usuario" => 10670,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 250,
                "id_rol" => 6,
                "id_usuario" => 10671,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 251,
                "id_rol" => 6,
                "id_usuario" => 10672,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 252,
                "id_rol" => 6,
                "id_usuario" => 10673,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 253,
                "id_rol" => 6,
                "id_usuario" => 10674,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 254,
                "id_rol" => 6,
                "id_usuario" => 10675,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 255,
                "id_rol" => 6,
                "id_usuario" => 10676,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 256,
                "id_rol" => 6,
                "id_usuario" => 10677,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 257,
                "id_rol" => 6,
                "id_usuario" => 10678,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 258,
                "id_rol" => 6,
                "id_usuario" => 10679,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 259,
                "id_rol" => 6,
                "id_usuario" => 10680,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 260,
                "id_rol" => 6,
                "id_usuario" => 10681,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 261,
                "id_rol" => 6,
                "id_usuario" => 10682,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 262,
                "id_rol" => 6,
                "id_usuario" => 10683,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 263,
                "id_rol" => 6,
                "id_usuario" => 10684,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 264,
                "id_rol" => 6,
                "id_usuario" => 10685,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 265,
                "id_rol" => 6,
                "id_usuario" => 10686,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 266,
                "id_rol" => 6,
                "id_usuario" => 10687,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 267,
                "id_rol" => 6,
                "id_usuario" => 10688,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 268,
                "id_rol" => 6,
                "id_usuario" => 10689,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 269,
                "id_rol" => 6,
                "id_usuario" => 10690,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 270,
                "id_rol" => 6,
                "id_usuario" => 10691,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 271,
                "id_rol" => 6,
                "id_usuario" => 10692,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 272,
                "id_rol" => 6,
                "id_usuario" => 10693,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 273,
                "id_rol" => 6,
                "id_usuario" => 10694,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 274,
                "id_rol" => 6,
                "id_usuario" => 10695,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 275,
                "id_rol" => 6,
                "id_usuario" => 10696,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 276,
                "id_rol" => 6,
                "id_usuario" => 10697,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 277,
                "id_rol" => 6,
                "id_usuario" => 10698,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 278,
                "id_rol" => 6,
                "id_usuario" => 10699,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 279,
                "id_rol" => 6,
                "id_usuario" => 10700,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 280,
                "id_rol" => 6,
                "id_usuario" => 10701,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 281,
                "id_rol" => 6,
                "id_usuario" => 10702,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 282,
                "id_rol" => 6,
                "id_usuario" => 10703,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 283,
                "id_rol" => 6,
                "id_usuario" => 10704,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 284,
                "id_rol" => 6,
                "id_usuario" => 10705,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 285,
                "id_rol" => 6,
                "id_usuario" => 10706,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 286,
                "id_rol" => 6,
                "id_usuario" => 10707,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 287,
                "id_rol" => 6,
                "id_usuario" => 10708,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 288,
                "id_rol" => 6,
                "id_usuario" => 10709,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 289,
                "id_rol" => 6,
                "id_usuario" => 10710,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 290,
                "id_rol" => 6,
                "id_usuario" => 10711,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 291,
                "id_rol" => 6,
                "id_usuario" => 10712,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 292,
                "id_rol" => 6,
                "id_usuario" => 10713,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 293,
                "id_rol" => 6,
                "id_usuario" => 10714,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 294,
                "id_rol" => 6,
                "id_usuario" => 10715,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 295,
                "id_rol" => 6,
                "id_usuario" => 10716,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 296,
                "id_rol" => 6,
                "id_usuario" => 10717,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 297,
                "id_rol" => 6,
                "id_usuario" => 10718,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 298,
                "id_rol" => 6,
                "id_usuario" => 10719,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 299,
                "id_rol" => 6,
                "id_usuario" => 10720,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 300,
                "id_rol" => 6,
                "id_usuario" => 10721,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 301,
                "id_rol" => 6,
                "id_usuario" => 10722,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 302,
                "id_rol" => 6,
                "id_usuario" => 10723,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 303,
                "id_rol" => 6,
                "id_usuario" => 10724,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 304,
                "id_rol" => 6,
                "id_usuario" => 10725,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 305,
                "id_rol" => 6,
                "id_usuario" => 10726,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 306,
                "id_rol" => 6,
                "id_usuario" => 10727,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 307,
                "id_rol" => 6,
                "id_usuario" => 10728,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 308,
                "id_rol" => 6,
                "id_usuario" => 10729,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 309,
                "id_rol" => 6,
                "id_usuario" => 10730,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 310,
                "id_rol" => 6,
                "id_usuario" => 10731,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 311,
                "id_rol" => 6,
                "id_usuario" => 10732,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 312,
                "id_rol" => 6,
                "id_usuario" => 10733,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 313,
                "id_rol" => 6,
                "id_usuario" => 10734,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 314,
                "id_rol" => 6,
                "id_usuario" => 10735,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 315,
                "id_rol" => 6,
                "id_usuario" => 10736,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 316,
                "id_rol" => 6,
                "id_usuario" => 10737,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 317,
                "id_rol" => 6,
                "id_usuario" => 10738,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 318,
                "id_rol" => 6,
                "id_usuario" => 10739,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 319,
                "id_rol" => 6,
                "id_usuario" => 10740,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 320,
                "id_rol" => 6,
                "id_usuario" => 10741,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 321,
                "id_rol" => 6,
                "id_usuario" => 10742,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 322,
                "id_rol" => 6,
                "id_usuario" => 10743,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 323,
                "id_rol" => 6,
                "id_usuario" => 10744,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 324,
                "id_rol" => 6,
                "id_usuario" => 10745,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 325,
                "id_rol" => 6,
                "id_usuario" => 10746,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 326,
                "id_rol" => 6,
                "id_usuario" => 10747,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 327,
                "id_rol" => 6,
                "id_usuario" => 10748,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 328,
                "id_rol" => 6,
                "id_usuario" => 10749,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 329,
                "id_rol" => 6,
                "id_usuario" => 10750,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 330,
                "id_rol" => 6,
                "id_usuario" => 10751,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 331,
                "id_rol" => 6,
                "id_usuario" => 10752,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 332,
                "id_rol" => 6,
                "id_usuario" => 10753,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 333,
                "id_rol" => 6,
                "id_usuario" => 10754,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 334,
                "id_rol" => 6,
                "id_usuario" => 10755,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 335,
                "id_rol" => 6,
                "id_usuario" => 10756,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 336,
                "id_rol" => 6,
                "id_usuario" => 10757,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 337,
                "id_rol" => 6,
                "id_usuario" => 10758,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 338,
                "id_rol" => 6,
                "id_usuario" => 10759,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 339,
                "id_rol" => 6,
                "id_usuario" => 10760,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 340,
                "id_rol" => 6,
                "id_usuario" => 10761,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 341,
                "id_rol" => 6,
                "id_usuario" => 10762,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 342,
                "id_rol" => 6,
                "id_usuario" => 10763,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 343,
                "id_rol" => 6,
                "id_usuario" => 10764,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 344,
                "id_rol" => 6,
                "id_usuario" => 10765,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 345,
                "id_rol" => 6,
                "id_usuario" => 10474,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 346,
                "id_rol" => 6,
                "id_usuario" => 10766,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 347,
                "id_rol" => 6,
                "id_usuario" => 10767,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 348,
                "id_rol" => 6,
                "id_usuario" => 10768,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 349,
                "id_rol" => 6,
                "id_usuario" => 10769,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 350,
                "id_rol" => 6,
                "id_usuario" => 10770,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 351,
                "id_rol" => 6,
                "id_usuario" => 10771,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 352,
                "id_rol" => 6,
                "id_usuario" => 10772,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 353,
                "id_rol" => 6,
                "id_usuario" => 10773,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 354,
                "id_rol" => 6,
                "id_usuario" => 10774,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 355,
                "id_rol" => 6,
                "id_usuario" => 10775,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 356,
                "id_rol" => 6,
                "id_usuario" => 10776,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 357,
                "id_rol" => 6,
                "id_usuario" => 10777,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 358,
                "id_rol" => 6,
                "id_usuario" => 10778,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 359,
                "id_rol" => 6,
                "id_usuario" => 10779,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 360,
                "id_rol" => 6,
                "id_usuario" => 10780,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 361,
                "id_rol" => 6,
                "id_usuario" => 10781,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 362,
                "id_rol" => 6,
                "id_usuario" => 10782,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 363,
                "id_rol" => 6,
                "id_usuario" => 10783,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 364,
                "id_rol" => 6,
                "id_usuario" => 10784,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 365,
                "id_rol" => 6,
                "id_usuario" => 10785,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 366,
                "id_rol" => 6,
                "id_usuario" => 10786,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 367,
                "id_rol" => 6,
                "id_usuario" => 10787,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 368,
                "id_rol" => 6,
                "id_usuario" => 10788,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 369,
                "id_rol" => 6,
                "id_usuario" => 10789,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 370,
                "id_rol" => 6,
                "id_usuario" => 10790,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 371,
                "id_rol" => 6,
                "id_usuario" => 10791,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 372,
                "id_rol" => 6,
                "id_usuario" => 10478,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 373,
                "id_rol" => 6,
                "id_usuario" => 10793,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 374,
                "id_rol" => 6,
                "id_usuario" => 10794,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 375,
                "id_rol" => 6,
                "id_usuario" => 10795,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 376,
                "id_rol" => 6,
                "id_usuario" => 10796,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 377,
                "id_rol" => 6,
                "id_usuario" => 10797,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 378,
                "id_rol" => 6,
                "id_usuario" => 10798,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 379,
                "id_rol" => 6,
                "id_usuario" => 10799,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 380,
                "id_rol" => 6,
                "id_usuario" => 10800,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 381,
                "id_rol" => 6,
                "id_usuario" => 10801,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 382,
                "id_rol" => 6,
                "id_usuario" => 10802,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 383,
                "id_rol" => 6,
                "id_usuario" => 10803,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 384,
                "id_rol" => 6,
                "id_usuario" => 10804,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 385,
                "id_rol" => 6,
                "id_usuario" => 10805,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 386,
                "id_rol" => 6,
                "id_usuario" => 10806,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 387,
                "id_rol" => 6,
                "id_usuario" => 10807,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 388,
                "id_rol" => 6,
                "id_usuario" => 10808,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 389,
                "id_rol" => 6,
                "id_usuario" => 10809,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 390,
                "id_rol" => 6,
                "id_usuario" => 10810,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 391,
                "id_rol" => 6,
                "id_usuario" => 10811,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 392,
                "id_rol" => 6,
                "id_usuario" => 10812,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 393,
                "id_rol" => 6,
                "id_usuario" => 10813,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 394,
                "id_rol" => 6,
                "id_usuario" => 10814,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 395,
                "id_rol" => 6,
                "id_usuario" => 10815,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 396,
                "id_rol" => 6,
                "id_usuario" => 10816,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 397,
                "id_rol" => 6,
                "id_usuario" => 10817,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 398,
                "id_rol" => 6,
                "id_usuario" => 10818,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 399,
                "id_rol" => 6,
                "id_usuario" => 10819,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 400,
                "id_rol" => 6,
                "id_usuario" => 10820,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 401,
                "id_rol" => 6,
                "id_usuario" => 10821,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 402,
                "id_rol" => 6,
                "id_usuario" => 10822,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 403,
                "id_rol" => 6,
                "id_usuario" => 10823,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 404,
                "id_rol" => 6,
                "id_usuario" => 10824,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 405,
                "id_rol" => 6,
                "id_usuario" => 10825,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 406,
                "id_rol" => 6,
                "id_usuario" => 10826,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 407,
                "id_rol" => 6,
                "id_usuario" => 10827,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 408,
                "id_rol" => 6,
                "id_usuario" => 10828,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 409,
                "id_rol" => 6,
                "id_usuario" => 10829,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 410,
                "id_rol" => 6,
                "id_usuario" => 10830,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 411,
                "id_rol" => 6,
                "id_usuario" => 10831,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 412,
                "id_rol" => 6,
                "id_usuario" => 10832,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 413,
                "id_rol" => 6,
                "id_usuario" => 10833,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 414,
                "id_rol" => 6,
                "id_usuario" => 10834,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 415,
                "id_rol" => 6,
                "id_usuario" => 10835,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 416,
                "id_rol" => 6,
                "id_usuario" => 10836,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 417,
                "id_rol" => 6,
                "id_usuario" => 10837,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 418,
                "id_rol" => 6,
                "id_usuario" => 10838,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 419,
                "id_rol" => 6,
                "id_usuario" => 10839,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 420,
                "id_rol" => 6,
                "id_usuario" => 10840,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 421,
                "id_rol" => 6,
                "id_usuario" => 10841,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 422,
                "id_rol" => 6,
                "id_usuario" => 10842,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 423,
                "id_rol" => 6,
                "id_usuario" => 10485,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 424,
                "id_rol" => 6,
                "id_usuario" => 10843,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 425,
                "id_rol" => 6,
                "id_usuario" => 10844,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 426,
                "id_rol" => 6,
                "id_usuario" => 10845,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 427,
                "id_rol" => 6,
                "id_usuario" => 10846,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 428,
                "id_rol" => 6,
                "id_usuario" => 10847,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 429,
                "id_rol" => 6,
                "id_usuario" => 10848,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 430,
                "id_rol" => 6,
                "id_usuario" => 10849,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 431,
                "id_rol" => 6,
                "id_usuario" => 10850,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 432,
                "id_rol" => 6,
                "id_usuario" => 10851,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 433,
                "id_rol" => 6,
                "id_usuario" => 10852,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 434,
                "id_rol" => 6,
                "id_usuario" => 10853,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 435,
                "id_rol" => 6,
                "id_usuario" => 10854,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 436,
                "id_rol" => 6,
                "id_usuario" => 10855,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 437,
                "id_rol" => 6,
                "id_usuario" => 10856,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 438,
                "id_rol" => 6,
                "id_usuario" => 10857,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 439,
                "id_rol" => 6,
                "id_usuario" => 10858,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 440,
                "id_rol" => 6,
                "id_usuario" => 10859,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 441,
                "id_rol" => 6,
                "id_usuario" => 10860,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 442,
                "id_rol" => 6,
                "id_usuario" => 10861,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 443,
                "id_rol" => 6,
                "id_usuario" => 10862,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 444,
                "id_rol" => 6,
                "id_usuario" => 10863,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 445,
                "id_rol" => 6,
                "id_usuario" => 10864,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 446,
                "id_rol" => 6,
                "id_usuario" => 10865,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 447,
                "id_rol" => 6,
                "id_usuario" => 10866,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 448,
                "id_rol" => 6,
                "id_usuario" => 10867,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 449,
                "id_rol" => 6,
                "id_usuario" => 10868,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 450,
                "id_rol" => 6,
                "id_usuario" => 10869,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 451,
                "id_rol" => 6,
                "id_usuario" => 10870,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 452,
                "id_rol" => 6,
                "id_usuario" => 10871,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 453,
                "id_rol" => 6,
                "id_usuario" => 10872,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 454,
                "id_rol" => 6,
                "id_usuario" => 10873,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 455,
                "id_rol" => 6,
                "id_usuario" => 10874,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 456,
                "id_rol" => 6,
                "id_usuario" => 10657,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 457,
                "id_rol" => 6,
                "id_usuario" => 10876,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 458,
                "id_rol" => 6,
                "id_usuario" => 10877,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 459,
                "id_rol" => 6,
                "id_usuario" => 10878,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 460,
                "id_rol" => 6,
                "id_usuario" => 10879,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 461,
                "id_rol" => 6,
                "id_usuario" => 10880,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 462,
                "id_rol" => 6,
                "id_usuario" => 10881,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 463,
                "id_rol" => 6,
                "id_usuario" => 10882,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 464,
                "id_rol" => 6,
                "id_usuario" => 10883,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 465,
                "id_rol" => 6,
                "id_usuario" => 10884,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 466,
                "id_rol" => 6,
                "id_usuario" => 10885,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 467,
                "id_rol" => 6,
                "id_usuario" => 10886,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 468,
                "id_rol" => 6,
                "id_usuario" => 10887,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 469,
                "id_rol" => 6,
                "id_usuario" => 10888,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 470,
                "id_rol" => 6,
                "id_usuario" => 10889,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 471,
                "id_rol" => 6,
                "id_usuario" => 10890,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 472,
                "id_rol" => 6,
                "id_usuario" => 10891,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 473,
                "id_rol" => 6,
                "id_usuario" => 10892,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 474,
                "id_rol" => 6,
                "id_usuario" => 10534,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 475,
                "id_rol" => 6,
                "id_usuario" => 10894,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 476,
                "id_rol" => 6,
                "id_usuario" => 10895,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 477,
                "id_rol" => 6,
                "id_usuario" => 10896,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 478,
                "id_rol" => 6,
                "id_usuario" => 10897,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 479,
                "id_rol" => 6,
                "id_usuario" => 10898,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 480,
                "id_rol" => 6,
                "id_usuario" => 10899,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 481,
                "id_rol" => 6,
                "id_usuario" => 10900,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 482,
                "id_rol" => 6,
                "id_usuario" => 10901,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 483,
                "id_rol" => 6,
                "id_usuario" => 10902,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 484,
                "id_rol" => 6,
                "id_usuario" => 10903,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 485,
                "id_rol" => 6,
                "id_usuario" => 10904,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 486,
                "id_rol" => 6,
                "id_usuario" => 10905,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 487,
                "id_rol" => 6,
                "id_usuario" => 10906,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 488,
                "id_rol" => 6,
                "id_usuario" => 10907,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 489,
                "id_rol" => 6,
                "id_usuario" => 10908,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 490,
                "id_rol" => 6,
                "id_usuario" => 10909,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 491,
                "id_rol" => 6,
                "id_usuario" => 10910,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 492,
                "id_rol" => 6,
                "id_usuario" => 10911,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 493,
                "id_rol" => 6,
                "id_usuario" => 10912,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 494,
                "id_rol" => 6,
                "id_usuario" => 10913,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 495,
                "id_rol" => 6,
                "id_usuario" => 10914,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 496,
                "id_rol" => 6,
                "id_usuario" => 10915,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 497,
                "id_rol" => 6,
                "id_usuario" => 10916,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 498,
                "id_rol" => 6,
                "id_usuario" => 10917,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 499,
                "id_rol" => 6,
                "id_usuario" => 10918,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 500,
                "id_rol" => 6,
                "id_usuario" => 10919,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 501,
                "id_rol" => 6,
                "id_usuario" => 10920,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 502,
                "id_rol" => 6,
                "id_usuario" => 10921,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 503,
                "id_rol" => 6,
                "id_usuario" => 10922,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 504,
                "id_rol" => 6,
                "id_usuario" => 10923,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 505,
                "id_rol" => 6,
                "id_usuario" => 10924,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 506,
                "id_rol" => 6,
                "id_usuario" => 10925,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 507,
                "id_rol" => 6,
                "id_usuario" => 10926,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 508,
                "id_rol" => 6,
                "id_usuario" => 10927,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 509,
                "id_rol" => 6,
                "id_usuario" => 10928,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 510,
                "id_rol" => 6,
                "id_usuario" => 10929,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 511,
                "id_rol" => 6,
                "id_usuario" => 10930,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 512,
                "id_rol" => 6,
                "id_usuario" => 10931,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 513,
                "id_rol" => 6,
                "id_usuario" => 10932,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 514,
                "id_rol" => 6,
                "id_usuario" => 10933,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 515,
                "id_rol" => 6,
                "id_usuario" => 10934,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 516,
                "id_rol" => 6,
                "id_usuario" => 10935,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 517,
                "id_rol" => 6,
                "id_usuario" => 10936,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 518,
                "id_rol" => 6,
                "id_usuario" => 10937,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 519,
                "id_rol" => 6,
                "id_usuario" => 10938,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 520,
                "id_rol" => 6,
                "id_usuario" => 10939,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 521,
                "id_rol" => 6,
                "id_usuario" => 10940,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 522,
                "id_rol" => 6,
                "id_usuario" => 10941,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 523,
                "id_rol" => 6,
                "id_usuario" => 10942,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 524,
                "id_rol" => 6,
                "id_usuario" => 10943,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 525,
                "id_rol" => 6,
                "id_usuario" => 10944,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 526,
                "id_rol" => 6,
                "id_usuario" => 10466,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 527,
                "id_rol" => 6,
                "id_usuario" => 10945,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 528,
                "id_rol" => 6,
                "id_usuario" => 10946,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 529,
                "id_rol" => 6,
                "id_usuario" => 10947,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 530,
                "id_rol" => 6,
                "id_usuario" => 10948,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 531,
                "id_rol" => 6,
                "id_usuario" => 10949,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 532,
                "id_rol" => 6,
                "id_usuario" => 10950,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 533,
                "id_rol" => 6,
                "id_usuario" => 10951,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 534,
                "id_rol" => 6,
                "id_usuario" => 10952,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 535,
                "id_rol" => 6,
                "id_usuario" => 10953,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 536,
                "id_rol" => 6,
                "id_usuario" => 10954,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 537,
                "id_rol" => 6,
                "id_usuario" => 10955,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 538,
                "id_rol" => 6,
                "id_usuario" => 10956,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 539,
                "id_rol" => 6,
                "id_usuario" => 10957,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 540,
                "id_rol" => 6,
                "id_usuario" => 10958,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 541,
                "id_rol" => 6,
                "id_usuario" => 10959,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 542,
                "id_rol" => 6,
                "id_usuario" => 10960,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 543,
                "id_rol" => 6,
                "id_usuario" => 10961,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 544,
                "id_rol" => 6,
                "id_usuario" => 10962,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 545,
                "id_rol" => 6,
                "id_usuario" => 10963,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 546,
                "id_rol" => 6,
                "id_usuario" => 10964,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 547,
                "id_rol" => 6,
                "id_usuario" => 10965,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 548,
                "id_rol" => 6,
                "id_usuario" => 10966,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 549,
                "id_rol" => 6,
                "id_usuario" => 10967,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 550,
                "id_rol" => 6,
                "id_usuario" => 10968,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 551,
                "id_rol" => 6,
                "id_usuario" => 10969,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 552,
                "id_rol" => 6,
                "id_usuario" => 10970,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 553,
                "id_rol" => 6,
                "id_usuario" => 10971,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 554,
                "id_rol" => 6,
                "id_usuario" => 10972,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 555,
                "id_rol" => 6,
                "id_usuario" => 10973,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 556,
                "id_rol" => 6,
                "id_usuario" => 10974,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 557,
                "id_rol" => 6,
                "id_usuario" => 10975,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 558,
                "id_rol" => 6,
                "id_usuario" => 10976,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 559,
                "id_rol" => 6,
                "id_usuario" => 10977,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 560,
                "id_rol" => 6,
                "id_usuario" => 10978,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 561,
                "id_rol" => 6,
                "id_usuario" => 10979,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 562,
                "id_rol" => 6,
                "id_usuario" => 10980,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 563,
                "id_rol" => 6,
                "id_usuario" => 10981,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 564,
                "id_rol" => 6,
                "id_usuario" => 10982,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 565,
                "id_rol" => 6,
                "id_usuario" => 10983,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 566,
                "id_rol" => 6,
                "id_usuario" => 10984,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 567,
                "id_rol" => 6,
                "id_usuario" => 10985,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 568,
                "id_rol" => 6,
                "id_usuario" => 10986,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 569,
                "id_rol" => 6,
                "id_usuario" => 10932,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 570,
                "id_rol" => 6,
                "id_usuario" => 10987,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 571,
                "id_rol" => 6,
                "id_usuario" => 10988,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 572,
                "id_rol" => 6,
                "id_usuario" => 10989,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 573,
                "id_rol" => 6,
                "id_usuario" => 10990,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 574,
                "id_rol" => 6,
                "id_usuario" => 10991,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 575,
                "id_rol" => 6,
                "id_usuario" => 10992,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 576,
                "id_rol" => 6,
                "id_usuario" => 10993,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 577,
                "id_rol" => 6,
                "id_usuario" => 10994,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 578,
                "id_rol" => 6,
                "id_usuario" => 10995,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 579,
                "id_rol" => 6,
                "id_usuario" => 10996,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 580,
                "id_rol" => 6,
                "id_usuario" => 10997,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 581,
                "id_rol" => 6,
                "id_usuario" => 10998,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 582,
                "id_rol" => 6,
                "id_usuario" => 10999,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 583,
                "id_rol" => 6,
                "id_usuario" => 11000,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 584,
                "id_rol" => 6,
                "id_usuario" => 11001,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 585,
                "id_rol" => 6,
                "id_usuario" => 11002,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 586,
                "id_rol" => 6,
                "id_usuario" => 11003,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 587,
                "id_rol" => 6,
                "id_usuario" => 10710,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 588,
                "id_rol" => 6,
                "id_usuario" => 11005,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 589,
                "id_rol" => 6,
                "id_usuario" => 11006,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 590,
                "id_rol" => 6,
                "id_usuario" => 11007,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 591,
                "id_rol" => 6,
                "id_usuario" => 11008,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 592,
                "id_rol" => 6,
                "id_usuario" => 11009,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 593,
                "id_rol" => 6,
                "id_usuario" => 11010,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 594,
                "id_rol" => 6,
                "id_usuario" => 11011,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 595,
                "id_rol" => 6,
                "id_usuario" => 11012,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 596,
                "id_rol" => 6,
                "id_usuario" => 11013,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 597,
                "id_rol" => 6,
                "id_usuario" => 11014,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 598,
                "id_rol" => 6,
                "id_usuario" => 11015,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 599,
                "id_rol" => 6,
                "id_usuario" => 11016,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 600,
                "id_rol" => 6,
                "id_usuario" => 11017,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 601,
                "id_rol" => 6,
                "id_usuario" => 11018,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 602,
                "id_rol" => 6,
                "id_usuario" => 11019,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 603,
                "id_rol" => 6,
                "id_usuario" => 11020,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 604,
                "id_rol" => 6,
                "id_usuario" => 11021,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 605,
                "id_rol" => 6,
                "id_usuario" => 10890,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 606,
                "id_rol" => 6,
                "id_usuario" => 11023,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 607,
                "id_rol" => 6,
                "id_usuario" => 11024,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 608,
                "id_rol" => 6,
                "id_usuario" => 11025,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 609,
                "id_rol" => 6,
                "id_usuario" => 11026,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 610,
                "id_rol" => 6,
                "id_usuario" => 10924,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 611,
                "id_rol" => 6,
                "id_usuario" => 11028,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 612,
                "id_rol" => 6,
                "id_usuario" => 11029,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 613,
                "id_rol" => 6,
                "id_usuario" => 11030,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 614,
                "id_rol" => 6,
                "id_usuario" => 11031,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 615,
                "id_rol" => 6,
                "id_usuario" => 11032,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 616,
                "id_rol" => 6,
                "id_usuario" => 11033,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 617,
                "id_rol" => 6,
                "id_usuario" => 11034,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 618,
                "id_rol" => 6,
                "id_usuario" => 11035,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 619,
                "id_rol" => 6,
                "id_usuario" => 11036,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 620,
                "id_rol" => 6,
                "id_usuario" => 11037,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 621,
                "id_rol" => 6,
                "id_usuario" => 11038,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 622,
                "id_rol" => 6,
                "id_usuario" => 11039,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 623,
                "id_rol" => 6,
                "id_usuario" => 11040,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 624,
                "id_rol" => 6,
                "id_usuario" => 11041,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 625,
                "id_rol" => 6,
                "id_usuario" => 11042,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 626,
                "id_rol" => 6,
                "id_usuario" => 11043,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 627,
                "id_rol" => 6,
                "id_usuario" => 11044,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 628,
                "id_rol" => 6,
                "id_usuario" => 11045,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 629,
                "id_rol" => 6,
                "id_usuario" => 11046,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 630,
                "id_rol" => 6,
                "id_usuario" => 11047,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 631,
                "id_rol" => 6,
                "id_usuario" => 11048,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 632,
                "id_rol" => 6,
                "id_usuario" => 11049,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 633,
                "id_rol" => 6,
                "id_usuario" => 11050,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 634,
                "id_rol" => 6,
                "id_usuario" => 11051,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 635,
                "id_rol" => 6,
                "id_usuario" => 11052,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 636,
                "id_rol" => 6,
                "id_usuario" => 11053,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 637,
                "id_rol" => 6,
                "id_usuario" => 11054,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 638,
                "id_rol" => 6,
                "id_usuario" => 11055,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 639,
                "id_rol" => 6,
                "id_usuario" => 11056,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 640,
                "id_rol" => 6,
                "id_usuario" => 11057,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 641,
                "id_rol" => 6,
                "id_usuario" => 11058,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 642,
                "id_rol" => 6,
                "id_usuario" => 11059,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 643,
                "id_rol" => 6,
                "id_usuario" => 11060,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 644,
                "id_rol" => 6,
                "id_usuario" => 11061,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 645,
                "id_rol" => 6,
                "id_usuario" => 11062,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 646,
                "id_rol" => 6,
                "id_usuario" => 11063,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 647,
                "id_rol" => 6,
                "id_usuario" => 11064,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 648,
                "id_rol" => 6,
                "id_usuario" => 11065,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 649,
                "id_rol" => 6,
                "id_usuario" => 11066,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 650,
                "id_rol" => 6,
                "id_usuario" => 11067,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 651,
                "id_rol" => 6,
                "id_usuario" => 11068,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 652,
                "id_rol" => 6,
                "id_usuario" => 11069,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 653,
                "id_rol" => 6,
                "id_usuario" => 11070,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 654,
                "id_rol" => 6,
                "id_usuario" => 11071,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 655,
                "id_rol" => 6,
                "id_usuario" => 11072,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 656,
                "id_rol" => 6,
                "id_usuario" => 11073,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 657,
                "id_rol" => 6,
                "id_usuario" => 11074,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 658,
                "id_rol" => 6,
                "id_usuario" => 11075,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 659,
                "id_rol" => 6,
                "id_usuario" => 11076,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 660,
                "id_rol" => 6,
                "id_usuario" => 11077,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 661,
                "id_rol" => 6,
                "id_usuario" => 11078,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 662,
                "id_rol" => 6,
                "id_usuario" => 11079,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 663,
                "id_rol" => 6,
                "id_usuario" => 11080,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 664,
                "id_rol" => 6,
                "id_usuario" => 11081,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 665,
                "id_rol" => 6,
                "id_usuario" => 11082,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 666,
                "id_rol" => 6,
                "id_usuario" => 11083,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 667,
                "id_rol" => 6,
                "id_usuario" => 11084,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 668,
                "id_rol" => 6,
                "id_usuario" => 11085,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 669,
                "id_rol" => 6,
                "id_usuario" => 10950,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 670,
                "id_rol" => 6,
                "id_usuario" => 11086,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 671,
                "id_rol" => 6,
                "id_usuario" => 11087,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 672,
                "id_rol" => 6,
                "id_usuario" => 11088,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 673,
                "id_rol" => 6,
                "id_usuario" => 11089,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 674,
                "id_rol" => 6,
                "id_usuario" => 11090,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 675,
                "id_rol" => 6,
                "id_usuario" => 11091,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 676,
                "id_rol" => 6,
                "id_usuario" => 11092,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 677,
                "id_rol" => 6,
                "id_usuario" => 11093,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 678,
                "id_rol" => 6,
                "id_usuario" => 11094,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 679,
                "id_rol" => 6,
                "id_usuario" => 11095,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 680,
                "id_rol" => 6,
                "id_usuario" => 11096,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 681,
                "id_rol" => 6,
                "id_usuario" => 11097,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 682,
                "id_rol" => 6,
                "id_usuario" => 11098,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 683,
                "id_rol" => 6,
                "id_usuario" => 11099,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 684,
                "id_rol" => 6,
                "id_usuario" => 11100,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 685,
                "id_rol" => 6,
                "id_usuario" => 11101,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 686,
                "id_rol" => 6,
                "id_usuario" => 11102,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 687,
                "id_rol" => 6,
                "id_usuario" => 11103,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 688,
                "id_rol" => 6,
                "id_usuario" => 11104,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 689,
                "id_rol" => 6,
                "id_usuario" => 11105,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 690,
                "id_rol" => 6,
                "id_usuario" => 11106,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 691,
                "id_rol" => 6,
                "id_usuario" => 11107,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 692,
                "id_rol" => 6,
                "id_usuario" => 11108,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 693,
                "id_rol" => 6,
                "id_usuario" => 11109,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 694,
                "id_rol" => 6,
                "id_usuario" => 11110,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 695,
                "id_rol" => 6,
                "id_usuario" => 11111,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 696,
                "id_rol" => 6,
                "id_usuario" => 11112,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 697,
                "id_rol" => 6,
                "id_usuario" => 11113,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 698,
                "id_rol" => 6,
                "id_usuario" => 11114,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 699,
                "id_rol" => 6,
                "id_usuario" => 11115,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 700,
                "id_rol" => 6,
                "id_usuario" => 11116,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 701,
                "id_rol" => 6,
                "id_usuario" => 11117,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 702,
                "id_rol" => 6,
                "id_usuario" => 11118,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 703,
                "id_rol" => 6,
                "id_usuario" => 11119,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 704,
                "id_rol" => 6,
                "id_usuario" => 11120,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 705,
                "id_rol" => 6,
                "id_usuario" => 11121,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 706,
                "id_rol" => 6,
                "id_usuario" => 11122,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 707,
                "id_rol" => 6,
                "id_usuario" => 11123,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 708,
                "id_rol" => 6,
                "id_usuario" => 11124,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 709,
                "id_rol" => 6,
                "id_usuario" => 11125,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 710,
                "id_rol" => 6,
                "id_usuario" => 11126,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 711,
                "id_rol" => 6,
                "id_usuario" => 11123,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 712,
                "id_rol" => 6,
                "id_usuario" => 11124,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 713,
                "id_rol" => 6,
                "id_usuario" => 11125,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 714,
                "id_rol" => 6,
                "id_usuario" => 11126,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 715,
                "id_rol" => 6,
                "id_usuario" => 10592,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 716,
                "id_rol" => 6,
                "id_usuario" => 11128,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 717,
                "id_rol" => 6,
                "id_usuario" => 11129,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 718,
                "id_rol" => 6,
                "id_usuario" => 11130,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 719,
                "id_rol" => 6,
                "id_usuario" => 11131,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 720,
                "id_rol" => 6,
                "id_usuario" => 11132,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 721,
                "id_rol" => 6,
                "id_usuario" => 11133,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 722,
                "id_rol" => 6,
                "id_usuario" => 11134,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 723,
                "id_rol" => 6,
                "id_usuario" => 11135,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 724,
                "id_rol" => 6,
                "id_usuario" => 11136,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 725,
                "id_rol" => 6,
                "id_usuario" => 11137,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 726,
                "id_rol" => 6,
                "id_usuario" => 11138,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 727,
                "id_rol" => 6,
                "id_usuario" => 11139,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 728,
                "id_rol" => 6,
                "id_usuario" => 11140,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 729,
                "id_rol" => 6,
                "id_usuario" => 11141,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 730,
                "id_rol" => 6,
                "id_usuario" => 11142,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 731,
                "id_rol" => 6,
                "id_usuario" => 11143,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 732,
                "id_rol" => 6,
                "id_usuario" => 11144,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 733,
                "id_rol" => 6,
                "id_usuario" => 11145,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 734,
                "id_rol" => 6,
                "id_usuario" => 11146,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 735,
                "id_rol" => 6,
                "id_usuario" => 11147,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 736,
                "id_rol" => 6,
                "id_usuario" => 11148,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 737,
                "id_rol" => 6,
                "id_usuario" => 11149,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 738,
                "id_rol" => 6,
                "id_usuario" => 11150,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 739,
                "id_rol" => 6,
                "id_usuario" => 11151,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 740,
                "id_rol" => 6,
                "id_usuario" => 11152,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 741,
                "id_rol" => 6,
                "id_usuario" => 11153,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 742,
                "id_rol" => 6,
                "id_usuario" => 11154,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 743,
                "id_rol" => 6,
                "id_usuario" => 11155,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 744,
                "id_rol" => 6,
                "id_usuario" => 11156,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 745,
                "id_rol" => 6,
                "id_usuario" => 11157,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 746,
                "id_rol" => 6,
                "id_usuario" => 11158,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 747,
                "id_rol" => 6,
                "id_usuario" => 11159,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 748,
                "id_rol" => 6,
                "id_usuario" => 11160,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 749,
                "id_rol" => 6,
                "id_usuario" => 11161,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 750,
                "id_rol" => 6,
                "id_usuario" => 11162,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 751,
                "id_rol" => 6,
                "id_usuario" => 11163,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 752,
                "id_rol" => 6,
                "id_usuario" => 11164,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 753,
                "id_rol" => 6,
                "id_usuario" => 11165,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 754,
                "id_rol" => 6,
                "id_usuario" => 1625,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 755,
                "id_rol" => 6,
                "id_usuario" => 1626,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 756,
                "id_rol" => 6,
                "id_usuario" => 1627,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 757,
                "id_rol" => 6,
                "id_usuario" => 1628,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 758,
                "id_rol" => 6,
                "id_usuario" => 1629,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 759,
                "id_rol" => 6,
                "id_usuario" => 1630,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 760,
                "id_rol" => 6,
                "id_usuario" => 1631,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 761,
                "id_rol" => 6,
                "id_usuario" => 1632,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 762,
                "id_rol" => 6,
                "id_usuario" => 1633,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 763,
                "id_rol" => 6,
                "id_usuario" => 1634,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 764,
                "id_rol" => 6,
                "id_usuario" => 1635,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 765,
                "id_rol" => 6,
                "id_usuario" => 1636,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 766,
                "id_rol" => 6,
                "id_usuario" => 1637,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 767,
                "id_rol" => 6,
                "id_usuario" => 1638,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 768,
                "id_rol" => 6,
                "id_usuario" => 1639,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 769,
                "id_rol" => 6,
                "id_usuario" => 1640,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 770,
                "id_rol" => 6,
                "id_usuario" => 1641,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 771,
                "id_rol" => 6,
                "id_usuario" => 1642,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 772,
                "id_rol" => 6,
                "id_usuario" => 1643,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 773,
                "id_rol" => 6,
                "id_usuario" => 1644,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 774,
                "id_rol" => 6,
                "id_usuario" => 1645,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 775,
                "id_rol" => 6,
                "id_usuario" => 1646,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 776,
                "id_rol" => 6,
                "id_usuario" => 1647,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 777,
                "id_rol" => 6,
                "id_usuario" => 1648,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 778,
                "id_rol" => 6,
                "id_usuario" => 1649,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 779,
                "id_rol" => 6,
                "id_usuario" => 1650,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 780,
                "id_rol" => 6,
                "id_usuario" => 1651,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 781,
                "id_rol" => 6,
                "id_usuario" => 1652,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 782,
                "id_rol" => 6,
                "id_usuario" => 1653,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 783,
                "id_rol" => 6,
                "id_usuario" => 1654,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 784,
                "id_rol" => 6,
                "id_usuario" => 1655,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 785,
                "id_rol" => 6,
                "id_usuario" => 1656,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 786,
                "id_rol" => 6,
                "id_usuario" => 1657,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 787,
                "id_rol" => 6,
                "id_usuario" => 1658,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 788,
                "id_rol" => 6,
                "id_usuario" => 1659,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 789,
                "id_rol" => 6,
                "id_usuario" => 1660,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 790,
                "id_rol" => 6,
                "id_usuario" => 1661,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 791,
                "id_rol" => 6,
                "id_usuario" => 1662,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 792,
                "id_rol" => 6,
                "id_usuario" => 1663,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 793,
                "id_rol" => 6,
                "id_usuario" => 1664,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 794,
                "id_rol" => 6,
                "id_usuario" => 1665,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 795,
                "id_rol" => 6,
                "id_usuario" => 1666,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 796,
                "id_rol" => 6,
                "id_usuario" => 1667,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 797,
                "id_rol" => 6,
                "id_usuario" => 1668,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 798,
                "id_rol" => 6,
                "id_usuario" => 1669,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 799,
                "id_rol" => 6,
                "id_usuario" => 1670,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 800,
                "id_rol" => 6,
                "id_usuario" => 1671,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 801,
                "id_rol" => 6,
                "id_usuario" => 1672,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 802,
                "id_rol" => 6,
                "id_usuario" => 1673,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 803,
                "id_rol" => 6,
                "id_usuario" => 1674,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 804,
                "id_rol" => 6,
                "id_usuario" => 1675,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 805,
                "id_rol" => 6,
                "id_usuario" => 1676,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 806,
                "id_rol" => 6,
                "id_usuario" => 1677,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 807,
                "id_rol" => 6,
                "id_usuario" => 1678,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 808,
                "id_rol" => 6,
                "id_usuario" => 1679,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 809,
                "id_rol" => 6,
                "id_usuario" => 1680,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 810,
                "id_rol" => 6,
                "id_usuario" => 1681,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 811,
                "id_rol" => 6,
                "id_usuario" => 1682,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 812,
                "id_rol" => 6,
                "id_usuario" => 1683,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 813,
                "id_rol" => 6,
                "id_usuario" => 1684,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 814,
                "id_rol" => 6,
                "id_usuario" => 1685,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 815,
                "id_rol" => 6,
                "id_usuario" => 1686,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 816,
                "id_rol" => 6,
                "id_usuario" => 1687,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 817,
                "id_rol" => 6,
                "id_usuario" => 1688,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 818,
                "id_rol" => 6,
                "id_usuario" => 1689,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 819,
                "id_rol" => 6,
                "id_usuario" => 1690,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 820,
                "id_rol" => 6,
                "id_usuario" => 1691,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 821,
                "id_rol" => 6,
                "id_usuario" => 1692,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 822,
                "id_rol" => 6,
                "id_usuario" => 1693,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 823,
                "id_rol" => 6,
                "id_usuario" => 1694,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 824,
                "id_rol" => 6,
                "id_usuario" => 1695,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 825,
                "id_rol" => 6,
                "id_usuario" => 1696,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 826,
                "id_rol" => 6,
                "id_usuario" => 1697,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 827,
                "id_rol" => 6,
                "id_usuario" => 1698,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 828,
                "id_rol" => 6,
                "id_usuario" => 1699,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 829,
                "id_rol" => 6,
                "id_usuario" => 1700,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 830,
                "id_rol" => 6,
                "id_usuario" => 1701,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 831,
                "id_rol" => 6,
                "id_usuario" => 1702,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 832,
                "id_rol" => 6,
                "id_usuario" => 1703,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 833,
                "id_rol" => 6,
                "id_usuario" => 1704,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 834,
                "id_rol" => 6,
                "id_usuario" => 1705,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 835,
                "id_rol" => 6,
                "id_usuario" => 1706,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 836,
                "id_rol" => 6,
                "id_usuario" => 1707,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 837,
                "id_rol" => 6,
                "id_usuario" => 1708,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 838,
                "id_rol" => 6,
                "id_usuario" => 1709,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 839,
                "id_rol" => 6,
                "id_usuario" => 1710,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 840,
                "id_rol" => 6,
                "id_usuario" => 1711,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 841,
                "id_rol" => 6,
                "id_usuario" => 1712,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 842,
                "id_rol" => 6,
                "id_usuario" => 1713,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 843,
                "id_rol" => 6,
                "id_usuario" => 1714,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 844,
                "id_rol" => 6,
                "id_usuario" => 1715,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 845,
                "id_rol" => 6,
                "id_usuario" => 1716,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 846,
                "id_rol" => 6,
                "id_usuario" => 1717,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 847,
                "id_rol" => 6,
                "id_usuario" => 1718,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 848,
                "id_rol" => 6,
                "id_usuario" => 1719,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 849,
                "id_rol" => 6,
                "id_usuario" => 1720,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 850,
                "id_rol" => 6,
                "id_usuario" => 1721,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 851,
                "id_rol" => 6,
                "id_usuario" => 1722,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 852,
                "id_rol" => 6,
                "id_usuario" => 1723,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 853,
                "id_rol" => 6,
                "id_usuario" => 1724,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 854,
                "id_rol" => 6,
                "id_usuario" => 1725,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 855,
                "id_rol" => 6,
                "id_usuario" => 1726,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 856,
                "id_rol" => 6,
                "id_usuario" => 1727,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 857,
                "id_rol" => 6,
                "id_usuario" => 1728,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 858,
                "id_rol" => 6,
                "id_usuario" => 1729,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 859,
                "id_rol" => 6,
                "id_usuario" => 1730,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 860,
                "id_rol" => 6,
                "id_usuario" => 1731,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 861,
                "id_rol" => 6,
                "id_usuario" => 1732,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 862,
                "id_rol" => 6,
                "id_usuario" => 1733,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 863,
                "id_rol" => 6,
                "id_usuario" => 1734,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 864,
                "id_rol" => 6,
                "id_usuario" => 1735,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 865,
                "id_rol" => 6,
                "id_usuario" => 1736,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 866,
                "id_rol" => 6,
                "id_usuario" => 1737,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 867,
                "id_rol" => 6,
                "id_usuario" => 1738,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 868,
                "id_rol" => 6,
                "id_usuario" => 1739,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 869,
                "id_rol" => 6,
                "id_usuario" => 1740,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 870,
                "id_rol" => 6,
                "id_usuario" => 1741,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 871,
                "id_rol" => 6,
                "id_usuario" => 1742,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 872,
                "id_rol" => 6,
                "id_usuario" => 1743,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 873,
                "id_rol" => 6,
                "id_usuario" => 1744,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 874,
                "id_rol" => 6,
                "id_usuario" => 1745,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 875,
                "id_rol" => 6,
                "id_usuario" => 1746,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 876,
                "id_rol" => 6,
                "id_usuario" => 1747,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 877,
                "id_rol" => 6,
                "id_usuario" => 1748,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 878,
                "id_rol" => 6,
                "id_usuario" => 1749,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 879,
                "id_rol" => 6,
                "id_usuario" => 1750,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 880,
                "id_rol" => 6,
                "id_usuario" => 1751,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 881,
                "id_rol" => 6,
                "id_usuario" => 1752,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 882,
                "id_rol" => 6,
                "id_usuario" => 1753,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 883,
                "id_rol" => 6,
                "id_usuario" => 1754,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 884,
                "id_rol" => 6,
                "id_usuario" => 1755,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 885,
                "id_rol" => 6,
                "id_usuario" => 1756,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 886,
                "id_rol" => 6,
                "id_usuario" => 1757,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 887,
                "id_rol" => 6,
                "id_usuario" => 1758,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 888,
                "id_rol" => 6,
                "id_usuario" => 1759,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 889,
                "id_rol" => 6,
                "id_usuario" => 1760,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 890,
                "id_rol" => 6,
                "id_usuario" => 1761,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 891,
                "id_rol" => 6,
                "id_usuario" => 1762,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 892,
                "id_rol" => 6,
                "id_usuario" => 1763,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 893,
                "id_rol" => 6,
                "id_usuario" => 1764,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 894,
                "id_rol" => 6,
                "id_usuario" => 1765,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 895,
                "id_rol" => 6,
                "id_usuario" => 1766,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 896,
                "id_rol" => 6,
                "id_usuario" => 1767,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 897,
                "id_rol" => 6,
                "id_usuario" => 1768,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 898,
                "id_rol" => 6,
                "id_usuario" => 1769,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 899,
                "id_rol" => 6,
                "id_usuario" => 1770,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 900,
                "id_rol" => 6,
                "id_usuario" => 1771,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 901,
                "id_rol" => 6,
                "id_usuario" => 1772,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 902,
                "id_rol" => 6,
                "id_usuario" => 1773,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 903,
                "id_rol" => 6,
                "id_usuario" => 1774,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 904,
                "id_rol" => 6,
                "id_usuario" => 1775,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 905,
                "id_rol" => 6,
                "id_usuario" => 1776,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 906,
                "id_rol" => 6,
                "id_usuario" => 1777,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 907,
                "id_rol" => 6,
                "id_usuario" => 1778,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 908,
                "id_rol" => 6,
                "id_usuario" => 1779,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 909,
                "id_rol" => 6,
                "id_usuario" => 1780,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 910,
                "id_rol" => 6,
                "id_usuario" => 1781,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 911,
                "id_rol" => 6,
                "id_usuario" => 1782,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 912,
                "id_rol" => 6,
                "id_usuario" => 1783,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 913,
                "id_rol" => 6,
                "id_usuario" => 1784,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 914,
                "id_rol" => 6,
                "id_usuario" => 1785,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 915,
                "id_rol" => 6,
                "id_usuario" => 1786,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 916,
                "id_rol" => 6,
                "id_usuario" => 1787,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 917,
                "id_rol" => 6,
                "id_usuario" => 1788,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 918,
                "id_rol" => 6,
                "id_usuario" => 1789,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 919,
                "id_rol" => 6,
                "id_usuario" => 1790,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 920,
                "id_rol" => 6,
                "id_usuario" => 1791,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 921,
                "id_rol" => 6,
                "id_usuario" => 1792,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 922,
                "id_rol" => 6,
                "id_usuario" => 1793,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 923,
                "id_rol" => 6,
                "id_usuario" => 1794,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 924,
                "id_rol" => 6,
                "id_usuario" => 1795,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 925,
                "id_rol" => 6,
                "id_usuario" => 1796,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 926,
                "id_rol" => 6,
                "id_usuario" => 1797,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 927,
                "id_rol" => 6,
                "id_usuario" => 1798,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 928,
                "id_rol" => 6,
                "id_usuario" => 1799,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 929,
                "id_rol" => 6,
                "id_usuario" => 1800,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 930,
                "id_rol" => 6,
                "id_usuario" => 1801,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 931,
                "id_rol" => 6,
                "id_usuario" => 1802,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 932,
                "id_rol" => 6,
                "id_usuario" => 1803,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 933,
                "id_rol" => 6,
                "id_usuario" => 1804,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 934,
                "id_rol" => 6,
                "id_usuario" => 1805,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 935,
                "id_rol" => 6,
                "id_usuario" => 1806,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 936,
                "id_rol" => 6,
                "id_usuario" => 1807,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 937,
                "id_rol" => 6,
                "id_usuario" => 1808,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 938,
                "id_rol" => 6,
                "id_usuario" => 1809,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 939,
                "id_rol" => 6,
                "id_usuario" => 1810,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 940,
                "id_rol" => 6,
                "id_usuario" => 1811,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 941,
                "id_rol" => 6,
                "id_usuario" => 1812,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 942,
                "id_rol" => 6,
                "id_usuario" => 1813,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 943,
                "id_rol" => 6,
                "id_usuario" => 1814,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 944,
                "id_rol" => 6,
                "id_usuario" => 1815,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 945,
                "id_rol" => 6,
                "id_usuario" => 1816,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 946,
                "id_rol" => 6,
                "id_usuario" => 1817,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 947,
                "id_rol" => 6,
                "id_usuario" => 1818,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 948,
                "id_rol" => 6,
                "id_usuario" => 1819,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 949,
                "id_rol" => 6,
                "id_usuario" => 1820,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 950,
                "id_rol" => 6,
                "id_usuario" => 1821,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 951,
                "id_rol" => 6,
                "id_usuario" => 1822,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 952,
                "id_rol" => 6,
                "id_usuario" => 1823,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 953,
                "id_rol" => 6,
                "id_usuario" => 1824,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 954,
                "id_rol" => 6,
                "id_usuario" => 1825,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 955,
                "id_rol" => 6,
                "id_usuario" => 1826,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 956,
                "id_rol" => 6,
                "id_usuario" => 1827,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 957,
                "id_rol" => 6,
                "id_usuario" => 1828,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 958,
                "id_rol" => 6,
                "id_usuario" => 1829,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 959,
                "id_rol" => 6,
                "id_usuario" => 1830,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 960,
                "id_rol" => 6,
                "id_usuario" => 1831,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 961,
                "id_rol" => 6,
                "id_usuario" => 1832,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 962,
                "id_rol" => 6,
                "id_usuario" => 1833,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 963,
                "id_rol" => 6,
                "id_usuario" => 1834,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 964,
                "id_rol" => 6,
                "id_usuario" => 1835,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 965,
                "id_rol" => 6,
                "id_usuario" => 1836,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 966,
                "id_rol" => 6,
                "id_usuario" => 1837,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 967,
                "id_rol" => 6,
                "id_usuario" => 1838,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 968,
                "id_rol" => 6,
                "id_usuario" => 1839,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 969,
                "id_rol" => 6,
                "id_usuario" => 1840,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 970,
                "id_rol" => 6,
                "id_usuario" => 1841,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 971,
                "id_rol" => 6,
                "id_usuario" => 1842,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 972,
                "id_rol" => 6,
                "id_usuario" => 1843,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 973,
                "id_rol" => 6,
                "id_usuario" => 1844,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 974,
                "id_rol" => 6,
                "id_usuario" => 1845,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 975,
                "id_rol" => 6,
                "id_usuario" => 1846,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 976,
                "id_rol" => 6,
                "id_usuario" => 1847,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 977,
                "id_rol" => 6,
                "id_usuario" => 1848,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 978,
                "id_rol" => 6,
                "id_usuario" => 1849,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 979,
                "id_rol" => 6,
                "id_usuario" => 1850,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 980,
                "id_rol" => 6,
                "id_usuario" => 1851,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 981,
                "id_rol" => 6,
                "id_usuario" => 1852,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 982,
                "id_rol" => 6,
                "id_usuario" => 1853,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 983,
                "id_rol" => 6,
                "id_usuario" => 1854,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 984,
                "id_rol" => 6,
                "id_usuario" => 1855,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 985,
                "id_rol" => 6,
                "id_usuario" => 1856,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 986,
                "id_rol" => 6,
                "id_usuario" => 1857,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 987,
                "id_rol" => 6,
                "id_usuario" => 1858,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 988,
                "id_rol" => 6,
                "id_usuario" => 1859,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 989,
                "id_rol" => 6,
                "id_usuario" => 1860,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 990,
                "id_rol" => 6,
                "id_usuario" => 1861,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 991,
                "id_rol" => 6,
                "id_usuario" => 1862,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 992,
                "id_rol" => 6,
                "id_usuario" => 1863,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 993,
                "id_rol" => 6,
                "id_usuario" => 1864,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 994,
                "id_rol" => 6,
                "id_usuario" => 1865,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 995,
                "id_rol" => 6,
                "id_usuario" => 1866,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 996,
                "id_rol" => 6,
                "id_usuario" => 1867,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 997,
                "id_rol" => 6,
                "id_usuario" => 1868,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 998,
                "id_rol" => 6,
                "id_usuario" => 1869,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 999,
                "id_rol" => 6,
                "id_usuario" => 1870,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1000,
                "id_rol" => 6,
                "id_usuario" => 1871,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1001,
                "id_rol" => 6,
                "id_usuario" => 1872,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1002,
                "id_rol" => 6,
                "id_usuario" => 1873,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1003,
                "id_rol" => 6,
                "id_usuario" => 1874,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1004,
                "id_rol" => 6,
                "id_usuario" => 1875,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1005,
                "id_rol" => 6,
                "id_usuario" => 1876,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1006,
                "id_rol" => 6,
                "id_usuario" => 1877,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1007,
                "id_rol" => 6,
                "id_usuario" => 1878,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1008,
                "id_rol" => 6,
                "id_usuario" => 1879,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1009,
                "id_rol" => 6,
                "id_usuario" => 1880,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1010,
                "id_rol" => 6,
                "id_usuario" => 1881,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1011,
                "id_rol" => 6,
                "id_usuario" => 1882,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1012,
                "id_rol" => 6,
                "id_usuario" => 1883,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1013,
                "id_rol" => 6,
                "id_usuario" => 1884,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1014,
                "id_rol" => 6,
                "id_usuario" => 1885,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1015,
                "id_rol" => 6,
                "id_usuario" => 1886,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1016,
                "id_rol" => 6,
                "id_usuario" => 1887,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1017,
                "id_rol" => 6,
                "id_usuario" => 1888,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1018,
                "id_rol" => 6,
                "id_usuario" => 1889,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1019,
                "id_rol" => 6,
                "id_usuario" => 1890,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1020,
                "id_rol" => 6,
                "id_usuario" => 1891,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1021,
                "id_rol" => 6,
                "id_usuario" => 1892,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1022,
                "id_rol" => 6,
                "id_usuario" => 1893,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1023,
                "id_rol" => 6,
                "id_usuario" => 1894,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1024,
                "id_rol" => 6,
                "id_usuario" => 1895,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1025,
                "id_rol" => 6,
                "id_usuario" => 1896,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1026,
                "id_rol" => 6,
                "id_usuario" => 1897,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1027,
                "id_rol" => 6,
                "id_usuario" => 1898,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1028,
                "id_rol" => 6,
                "id_usuario" => 1899,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1029,
                "id_rol" => 6,
                "id_usuario" => 1900,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1030,
                "id_rol" => 6,
                "id_usuario" => 1901,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1031,
                "id_rol" => 6,
                "id_usuario" => 1902,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1032,
                "id_rol" => 6,
                "id_usuario" => 1903,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1033,
                "id_rol" => 6,
                "id_usuario" => 1904,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1034,
                "id_rol" => 6,
                "id_usuario" => 1905,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1035,
                "id_rol" => 6,
                "id_usuario" => 1906,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1036,
                "id_rol" => 6,
                "id_usuario" => 1907,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1037,
                "id_rol" => 6,
                "id_usuario" => 1908,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1038,
                "id_rol" => 6,
                "id_usuario" => 1909,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1039,
                "id_rol" => 6,
                "id_usuario" => 1910,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1040,
                "id_rol" => 6,
                "id_usuario" => 1911,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1041,
                "id_rol" => 6,
                "id_usuario" => 1912,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1042,
                "id_rol" => 6,
                "id_usuario" => 1913,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1043,
                "id_rol" => 6,
                "id_usuario" => 1914,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1044,
                "id_rol" => 6,
                "id_usuario" => 1915,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1045,
                "id_rol" => 6,
                "id_usuario" => 1916,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1046,
                "id_rol" => 6,
                "id_usuario" => 1917,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1047,
                "id_rol" => 6,
                "id_usuario" => 1918,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1048,
                "id_rol" => 6,
                "id_usuario" => 1919,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1049,
                "id_rol" => 1,
                "id_usuario" => 11166,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1050,
                "id_rol" => 1,
                "id_usuario" => 11167,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1051,
                "id_rol" => 1,
                "id_usuario" => 11168,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1052,
                "id_rol" => 1,
                "id_usuario" => 11169,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1053,
                "id_rol" => 1,
                "id_usuario" => 11170,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1054,
                "id_rol" => 1,
                "id_usuario" => 11171,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1055,
                "id_rol" => 1,
                "id_usuario" => 11172,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1056,
                "id_rol" => 1,
                "id_usuario" => 11174,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1057,
                "id_rol" => 2,
                "id_usuario" => 11166,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1058,
                "id_rol" => 2,
                "id_usuario" => 11167,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1059,
                "id_rol" => 2,
                "id_usuario" => 11168,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1060,
                "id_rol" => 2,
                "id_usuario" => 11169,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1061,
                "id_rol" => 2,
                "id_usuario" => 11170,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1062,
                "id_rol" => 2,
                "id_usuario" => 11171,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1063,
                "id_rol" => 2,
                "id_usuario" => 11172,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 1064,
                "id_rol" => 2,
                "id_usuario" => 11174,
                "id_usuario_crear" => null,
                "id_usuario_modifica" => null,
                "created_at" => null,
                "updated_at" => null
            ]
        ];

        DB::table('roles_usuarios')->insert($roles_usuarios);
    }
}
