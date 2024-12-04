<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederSubMenu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$sub_menu = array(
			[
				"id" => 1,
				"id_modulo" => 1,
				"nombre" => "Cadenas",
				"descripcion" => "Las cadenas de Cencosud",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 22:51:11",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 2,
				"id_modulo" => 1,
				"nombre" => "Salas",
				"descripcion" => "Los locales de encosud",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 22:51:11",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 3,
				"id_modulo" => 1,
				"nombre" => "Sesiones",
				"descripcion" => "Las sesiones delos locales de Cencosud",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 22:51:11",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 4,
				"id_modulo" => 2,
				"nombre" => "Usuarios",
				"descripcion" => "Denifinicion de los usuarios del sistema",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 22:51:11",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 5,
				"id_modulo" => 2,
				"nombre" => "Roles",
				"descripcion" => "Las Roles de Cencosud",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 22:51:11",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 6,
				"id_modulo" => 3,
				"nombre" => "Crear Nueva",
				"descripcion" => "Crear Nueva Campaña",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 22:51:11",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 7,
				"id_modulo" => 3,
				"nombre" => "Administrar",
				"descripcion" => "Promotoras de Proveedores",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 22:51:11",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 8,
				"id_modulo" => 3,
				"nombre" => "Subir Propuesta",
				"descripcion" => "Carga las propuestas",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 22:51:11",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 9,
				"id_modulo" => 3,
				"nombre" => "Incidencias",
				"descripcion" => "Se reflejaran las incidencias cargadas en proceso de campña",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 22:51:11",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 10,
				"id_modulo" => 3,
				"nombre" => "Aprobar Marca",
				"descripcion" => "Aprobacion de marcas de proveedores",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 22:51:11",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 11,
				"id_modulo" => 3,
				"nombre" => "Crear Campaña Interna",
				"descripcion" => "Crea las campañas internas",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 22:51:11",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 12,
				"id_modulo" => 3,
				"nombre" => "Mantencion",
				"descripcion" => "Mantencion de Campañas",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 22:51:11",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 13,
				"id_modulo" => 5,
				"nombre" => "Mis Campañas",
				"descripcion" => "Campañas de proveedores",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 22:51:11",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 14,
				"id_modulo" => 5,
				"nombre" => "Mis Incidencias",
				"descripcion" => "Incidencias de Proveedores",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 22:51:11",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 15,
				"id_modulo" => 5,
				"nombre" => "Usuarios",
				"descripcion" => "Usuarios de Proveedores",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 22:51:11",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 16,
				"id_modulo" => 5,
				"nombre" => "Promotoras",
				"descripcion" => "Promotoras de Proveedores",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 22:51:11",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 17,
				"id_modulo" => 4,
				"nombre" => "Crear Campaña",
				"descripcion" => "Crea campañas de faldones",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 22:51:11",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 18,
				"id_modulo" => 4,
				"nombre" => "Administrar",
				"descripcion" => "Administracion de faldones",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 22:51:11",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 19,
				"id_modulo" => 4,
				"nombre" => "Formatos",
				"descripcion" => "Formatos de faldones",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 22:51:11",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				"id" => 20,
				"id_modulo" => 4,
				"nombre" => "Faldones Express",
				"descripcion" => "Creamos faldones Express",
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2021-04-21 22:51:11",
				"updated_at" => null,
				"deleted_at" => null
			]
		);
		DB::table('sub_menu')->insert($sub_menu);
    }
}
