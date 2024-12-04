<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederModuloRepositorio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modulos')->insert([
            "id" => 11,
			"nombre" => "Repositorios",
			"descripcion" => "Modulo de repositorio unificado",
			"id_usuario_crear" => 1,
			"id_usuario_modifica" => 0,
			"created_at" => "2023-03-24 21:32:48",
			"updated_at" => null
        ]);
    }
}
