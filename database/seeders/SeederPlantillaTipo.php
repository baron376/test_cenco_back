<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederPlantillaTipo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plantilla_tipo = array(
            [
                "id" => 1,
                "descripcion" => "Sin Plantilla",
                "qr_disponible" => 0,
                "id_estatus_plantilla_tipo" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "url_ejemplo"=>'EjemplosPlantillas/global/faldon_A4.html',
                "created_at" => "2021-05-29 23:56:03",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2,
                "descripcion" => "Jumbo",
                "qr_disponible" => 1,
                "id_estatus_plantilla_tipo" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "url_ejemplo"=>'EjemplosPlantillas/global/faldon_A4.html',
                "created_at" => "2021-05-29 23:56:03",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 3,
                "descripcion" => "Jumbo Ofertas",
                "qr_disponible" => 0,
                "id_estatus_plantilla_tipo" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "url_ejemplo"=>'EjemplosPlantillas/global/faldon_A4.html',
                "created_at" => "2021-05-29 23:56:03",
                "updated_at" => null,
                "deleted_at" => null
            ],
             [
                "id" => 4,
                "descripcion" => "Urb",
                "qr_disponible" => 0,
                "id_estatus_plantilla_tipo" => 2,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "url_ejemplo"=>'EjemplosPlantillas/global/faldon_A4.html',
                "created_at" => "2021-05-29 23:56:03",
                "updated_at" => null,
                "deleted_at" => null
             ],
             [
                "id" => 5,
                "descripcion" => "SISA",
                "qr_disponible" => 0,
                "id_estatus_plantilla_tipo" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "url_ejemplo"=>'EjemplosPlantillas/global/faldon_A4.html',
                "created_at" => "2021-05-29 23:56:03",
                "updated_at" => null,
                "deleted_at" => null
             ],
             [
                "id" => 6,
                "descripcion" => "OFERTA EXCLUSIVA CON TARJETA Y CANJE",
                "qr_disponible" => 0,
                "id_estatus_plantilla_tipo" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "url_ejemplo"=>'EjemplosPlantillas/global/faldon_A4.html',
                "created_at" => "2021-05-29 23:56:03",
                "updated_at" => null,
                "deleted_at" => null
             ], 
             [
                "id" => 7,
                "descripcion" => "TODO MEDIO DE PAGO",
                "qr_disponible" => 0,
                "id_estatus_plantilla_tipo" => 2,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "url_ejemplo"=>'EjemplosPlantillas/global/faldon_A4.html',
                "created_at" => "2021-05-29 23:56:03",
                "updated_at" => null,
                "deleted_at" => null
             ],
             
             [
                "id" => 8,
                "descripcion" => "Sin Plantilla",
                "qr_disponible" => 0,
                "id_estatus_plantilla_tipo" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "url_ejemplo"=>'EjemplosPlantillas/global/faldon_A4.html',
                "created_at" => "2021-05-29 23:56:03",
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 9,
                "descripcion" => "Electro",
                "qr_disponible" => 0,
                "id_estatus_plantilla_tipo" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "url_ejemplo"=>'EjemplosPlantillas/global/faldon_A4.html',
                "created_at" => "2021-05-29 23:56:03",
                "updated_at" => null,
                "deleted_at" => null
            ],
        );

        DB::table('plantilla_tipo')->insert($plantilla_tipo);
    }
}
