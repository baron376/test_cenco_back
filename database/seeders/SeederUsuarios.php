<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
      	DB::table('usuarios')->truncate();
      	DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Activamos la revisión de claves foráneas
        $usuarios = [
            [
                "id" => 1,
                "nombre" => "Administrador",
                "apellido" => "sistema",
                "rut" => 99999999,
                "dv" => "9",
                "email" => "admin@mzzo.com",
                "id_proveedor" => 1,
                "password" => bcrypt('Admin1234$'),
                "id_estatus_usuarios" => 1,
                "confirmado" => 1,
                "cdg_confirmacion" => "af25dcd8b6f4f0857b1c0c4c97442da7",
                "remember_token" => "27c15a8f7ec316faabbf9633407170e886eba67d5c161d64cf41ee118ede4618a1fcd889382507a8eb53f009f0f73ad705ccdeaba5e1afebecd90bccfb8f1f2f",
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "url_imagen" => "#",
                "init_adfs" => null,
                "ultimo_inicio" => "2015-04-21 00:00:00",
                "created_at" => "2015-04-21 00:00:00",
                "updated_at" => "2015-04-21 00:00:00",
                "deleted_at" => null
            ],
            [
                "id" => 11166,
                "nombre" => "DAVID",
                "apellido" => "SHIN",
                "rut" => 23337671,
                "dv" => "K",
                "email" => "david.shin@cencosud.cl",
                "id_proveedor" => null,
                "password" => null,
                "id_estatus_usuarios" => 1,
                "confirmado" => null,
                "cdg_confirmacion" => null,
                "remember_token" => null,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "url_imagen" => null,
                "init_adfs" => null,
                "ultimo_inicio" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 11167,
                "nombre" => "GUSTAVO",
                "apellido" => "MOYA",
                "rut" => 11996082,
                "dv" => "7",
                "email" => "gustavo.moya@cencosud.cl",
                "id_proveedor" => null,
                "password" => null,
                "id_estatus_usuarios" => 1,
                "confirmado" => null,
                "cdg_confirmacion" => null,
                "remember_token" => null,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "url_imagen" => null,
                "init_adfs" => null,
                "ultimo_inicio" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 11168,
                "nombre" => "ALEJANDRA",
                "apellido" => "RODRIGUEZ",
                "rut" => 10833194,
                "dv" => "1",
                "email" => "alejandra.rodriguezmuelas@cencosud.cl",
                "id_proveedor" => null,
                "password" => null,
                "id_estatus_usuarios" => 1,
                "confirmado" => null,
                "cdg_confirmacion" => null,
                "remember_token" => null,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "url_imagen" => null,
                "init_adfs" => null,
                "ultimo_inicio" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 11169,
                "nombre" => "ALEJANDRO",
                "apellido" => "GONZALEZ",
                "rut" => 11733307,
                "dv" => "8",
                "email" => "alejandro.gonzalezpizarro@cencosud.cl",
                "id_proveedor" => null,
                "password" => null,
                "id_estatus_usuarios" => 1,
                "confirmado" => null,
                "cdg_confirmacion" => null,
                "remember_token" => null,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "url_imagen" => null,
                "init_adfs" => null,
                "ultimo_inicio" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 11170,
                "nombre" => "FELIPE",
                "apellido" => "NOTON",
                "rut" => 13883350,
                "dv" => "K",
                "email" => "felipe.noton@cencosud.cl",
                "id_proveedor" => null,
                "password" => null,
                "id_estatus_usuarios" => 1,
                "confirmado" => null,
                "cdg_confirmacion" => null,
                "remember_token" => null,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "url_imagen" => null,
                "init_adfs" => null,
                "ultimo_inicio" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 11171,
                "nombre" => "MARIA ",
                "apellido" => "ANDAUR",
                "rut" => 18640942,
                "dv" => "6",
                "email" => "mariamacarena.andaur@cencosud.cl",
                "id_proveedor" => null,
                "password" => null,
                "id_estatus_usuarios" => 1,
                "confirmado" => null,
                "cdg_confirmacion" => null,
                "remember_token" => null,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "url_imagen" => null,
                "init_adfs" => null,
                "ultimo_inicio" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 11172,
                "nombre" => "ALEXIS",
                "apellido" => "ROJAS",
                "rut" => 20086072,
                "dv" => "1",
                "email" => "alexis.rojas@cencosud.cl",
                "id_proveedor" => null,
                "password" => null,
                "id_estatus_usuarios" => 1,
                "confirmado" => null,
                "cdg_confirmacion" => null,
                "remember_token" => null,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "url_imagen" => null,
                "init_adfs" => null,
                "ultimo_inicio" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 11174,
                "nombre" => "MIGUEL",
                "apellido" => "SALAS",
                "rut" => 17148248,
                "dv" => "8",
                "email" => "miguel.salassantis@cencosud.cl",
                "id_proveedor" => null,
                "password" => null,
                "id_estatus_usuarios" => 1,
                "confirmado" => null,
                "cdg_confirmacion" => null,
                "remember_token" => null,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "url_imagen" => null,
                "init_adfs" => null,
                "ultimo_inicio" => null,
                "created_at" => null,
                "updated_at" => null,
                "deleted_at" => null
            ]
        ];
        
        DB::table('usuarios')->insert($usuarios);
    
    }

}