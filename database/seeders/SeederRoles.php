<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('roles')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Activamos la revisión de claves foráneas
        $roles =[
            [
                "id" => 1,
                "nombre" => "Administrador del Sistema",
                "descripcion" => "Administrador del Sistema",
                "rol_proveedor" => 0,
                "administrador" => 1,
                "id_estatus_roles" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => now(),
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2,
                "nombre" => "MARKETING EXPERIENCIAL",
                "descripcion" => "MARKETING EXPERIENCIAL",
                "rol_proveedor" => 0,
                "administrador" => 0,
                "id_estatus_roles" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => now(),
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 3,
                "nombre" => "MARKETING INSTORE",
                "descripcion" => "MARKETING INSTORE",
                "rol_proveedor" => 0,
                "administrador" => 0,
                "id_estatus_roles" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => now(),
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 4,
                "nombre" => "MARKETING CAMPAÑAS",
                "descripcion" => "MARKETING CAMPAÑAS",
                "rol_proveedor" => 0,
                "administrador" => 0,
                "id_estatus_roles" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => now(),
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 5,
                "nombre" => "MARKETING MANTENCIONES",
                "descripcion" => "MARKETING MANTENCIONES",
                "rol_proveedor" => 0,
                "administrador" => 0,
                "id_estatus_roles" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => now(),
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 6,
                "nombre" => "LOCAL (EDI]",
                "descripcion" => "LOCAL (EDI]",
                "rol_proveedor" => 0,
                "administrador" => 0,
                "id_estatus_roles" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => now(),
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 7,
                "nombre" => "DIVISIONALES Y GESTORES",
                "descripcion" => "DIVISIONALES Y GESTORES",
                "rol_proveedor" => 0,
                "administrador" => 0,
                "id_estatus_roles" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => now(),
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 8,
                "nombre" => "AREA COMERCIAL",
                "descripcion" => "AREA COMERCIAL",
                "rol_proveedor" => 0,
                "administrador" => 0,
                "id_estatus_roles" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => now(),
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 9,
                "nombre" => "PROVEEDOR COMERCIAL",
                "descripcion" => "PROVEEDOR COMERCIAL",
                "rol_proveedor" => 1,
                "administrador" => 0,
                "id_estatus_roles" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => now(),
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 10,
                "nombre" => "PROVEEDOR AGENCIA EXTERNO MANTENCIONES",
                "descripcion" => "PROVEEDOR AGENCIA EXTERNO MANTENCIONES",
                "rol_proveedor" => 0,
                "administrador" => 0,
                "id_estatus_roles" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                "created_at" => now(),
                "updated_at" => null,
                "deleted_at" => null
            ]
        ];

        DB::table('roles')->insert($roles);
    }
}
