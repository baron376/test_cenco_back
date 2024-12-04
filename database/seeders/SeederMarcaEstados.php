<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederMarcaEstados extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marca_estados = array(
            [
                "id" => 1,
                "nombre" => "Espera",
                "descripcion" => "En Espera",
                "id_estatus" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-08-04 00:23:25",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2,
                "nombre" => "Aprobado",
                "descripcion" => "Aprobado",
                "id_estatus" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-08-04 00:23:25",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 3,
                "nombre" => "Rechazado",
                "descripcion" => "Rechazado",
                "id_estatus" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-08-04 00:23:25",
                "updated_at" => null,
                "deleted_at" => null
            ]
        );

        DB::table('marca_estados')->insert($marca_estados);
    }
}