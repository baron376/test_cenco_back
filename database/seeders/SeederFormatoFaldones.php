<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederFormatoFaldones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $formato_tipo = array(
            [
                "id" => 1,
                "nombre" => "Faldon A4.4",
                "descripcion" => "Faldon A4.4",
                "qr_disponible" => 1,
                "orientacion"=>'landscape',
                "id_estatus_formato_tipo" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-05-29 23:49:22",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2,
                "nombre" => "Faldon A4",
                "descripcion" => "Faldon A4",
                "qr_disponible" => 0,
                "orientacion"=>'portrait',
                "id_estatus_formato_tipo" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-05-29 23:49:22",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 3,
                "nombre" => "Faldon A4.8",
                "descripcion" => "Faldon A4.8",
                "qr_disponible" => 0,
                "orientacion"=>'portrait',
                "id_estatus_formato_tipo" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-05-29 23:49:22",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 4,
                "nombre" => "Faldon Electro A4.4",
                "descripcion" => "Faldon Electro A4.4",
                "qr_disponible" => 0,
                "orientacion"=>'landscape',
                "id_estatus_formato_tipo" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-05-29 23:49:22",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 5,
                "nombre" => "Faldon Electro A4",
                "descripcion" => "Faldon Electro A4",
                "qr_disponible" => 0,
                "orientacion"=>'portrait',
                "id_estatus_formato_tipo" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-05-29 23:49:22",
                "updated_at" => null,
                "deleted_at" => null
            ]
        );

        DB::table('formato_tipo')->insert($formato_tipo);
    }
}
