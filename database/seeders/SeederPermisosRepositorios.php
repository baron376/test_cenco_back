<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederPermisosRepositorios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
			[
				
				"cdg" => 1101,
				"nombre" => "ver_repositorio",
				"descripcion" => "Ver repositorio",
				"permiso_proveedor" => 1,
				"id_modulo" => 11,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2023-03-24 18:43:21",
				"updated_at" => null,
				"deleted_at" => null
			],
            [
				
				"cdg" => 1102,
				"nombre" => "crear_repositorio",
				"descripcion" => "Crear repositorio",
				"permiso_proveedor" => 1,
				"id_modulo" => 11,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2023-03-24 18:43:21",
				"updated_at" => null,
				"deleted_at" => null
			],
            [
				
				"cdg" => 1103,
				"nombre" => "editar_repositorio",
				"descripcion" => "Editar repositorios",
				"permiso_proveedor" => 1,
				"id_modulo" => 11,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2023-03-24 18:43:21",
				"updated_at" => null,
				"deleted_at" => null
			],

            [
				
				"cdg" => 1104,
				"nombre" => "eliminar_repositorio",
				"descripcion" => "Eliminar repositorio",
				"permiso_proveedor" => 1,
				"id_modulo" => 11,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2023-03-24 18:43:21",
				"updated_at" => null,
				"deleted_at" => null
			],
            [
				
				"cdg" => 1105,
				"nombre" => "descargar_repositorio",
				"descripcion" => "Descargar repositorio",
				"permiso_proveedor" => 1,
				"id_modulo" => 11,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2023-03-24 18:43:21",
				"updated_at" => null,
				"deleted_at" => null
			],

			[
				
				"cdg" => 1106,
				"nombre" => "ver_macros",
				"descripcion" => "Ver repositorios de macros pertenecientes a faldones",
				"permiso_proveedor" => 1,
				"id_modulo" => 11,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2023-03-24 18:43:21",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				
				"cdg" => 1107,
				"nombre" => "ver_manuales",
				"descripcion" => "Ver repositorios de manuales pertenecientes a mantenciones",
				"permiso_proveedor" => 1,
				"id_modulo" => 11,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2023-03-24 18:43:21",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				
				"cdg" => 1108,
				"nombre" => "ver_manuales_fichas",
				"descripcion" => "Ver repositorios de manuales y fichas técnicas pertenecientes a proveedor",
				"permiso_proveedor" => 1,
				"id_modulo" => 11,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2023-03-24 18:43:21",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				
				"cdg" => 1109,
				"nombre" => "descargar_macros",
				"descripcion" => "Descargar repositorios de macros pertenecientes a faldones",
				"permiso_proveedor" => 1,
				"id_modulo" => 11,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2023-03-24 18:43:21",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				
				"cdg" => 11010,
				"nombre" => "descargar_manuales",
				"descripcion" => "Descargar repositorios de manuales pertenecientes a mantenciones",
				"permiso_proveedor" => 1,
				"id_modulo" => 11,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2023-03-24 18:43:21",
				"updated_at" => null,
				"deleted_at" => null
			],
			[
				
				"cdg" => 11011,
				"nombre" => "descargar_manuales_fichas",
				"descripcion" => "Descargar repositorios de manuales y fichas técnicas pertenecientes a manuales",
				"permiso_proveedor" => 1,
				"id_modulo" => 11,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => 0,
				"created_at" => "2023-03-24 18:43:21",
				"updated_at" => null,
				"deleted_at" => null
			],
         
        ];

            DB::table('permisos')->insert($permisos);
    }
    
}
