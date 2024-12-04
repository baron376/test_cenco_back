<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederAlertaArchivosCampanasFaldones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alerts = array (
        	[
        		"cod_alerta" => 1,
        		"estatus" => 1,
                "nombre" => 'La columna Numero de fila del registro no es un numero valido',
        		"descripcion" => ' Validacion que certifica que el numero de fila del registro sea un numero entero',
        		"validacion" => 'gettype($numeroFila) === "integer"?true:false',
        		"created_at" => now(),
                'updated_at' => now(),
        	],
            [
        		"cod_alerta" => 2,
        		"estatus" => 1,
                "nombre" => 'La columna Numero de fila del registro se encuentra en blanco',
        		"descripcion" => 'Validacion que certifica que el numero de fila del registro no se encuentre en blanco',
        		"validacion" => '$numeroFila === null',
        		"created_at" => now(),
                'updated_at' => now(),
        	],
            [
        		"cod_alerta" => 3,
        		"estatus" => 1,
                "nombre" => 'La columna cadena del registro se encuentra en blanco',
        		"descripcion" => 'Validacion que certifica que la cadena del registro no se encuentre en blanco',
        		"validacion" => '$cadena === null',
        		"created_at" => now(),
                'updated_at' => now(),
        	],
            [
        		"cod_alerta" => 4,
        		"estatus" => 1,
                "nombre" => 'La columnna cadena del registro no se encuentra registrada en el sistema',
        		"descripcion" => 'Validacion que certifica que la cadena del registro , se encuentre entre los registros del sistema',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
            [
        		"cod_alerta" => 5,
        		"estatus" => 1,
                "nombre" => 'La columna cadena del registro no es una palabra valida',
        		"descripcion" => 'Validacion que certifica que la cadena del registro sea un tipo de dato String',
        		"validacion" => 'gettype($cadena) === "string"?true:false',
        		"created_at" => now(),
                'updated_at' => now(),
        	],
            [
        		"cod_alerta" => 6,
        		"estatus" => 1,
                "nombre" => 'La columna local del registro se encuentra en blanco',
        		"descripcion" => 'Validacion que certifica que el local del registro no se encuentre en blanco',
        		"validacion" => '$cadena === null',
        		"created_at" => now(),
                'updated_at' => now(),
        	],
            [
        		"cod_alerta" => 7,
        		"estatus" => 1,
                "nombre" => 'La columnna local del registro no se encuentra registrada en el sistema',
        		"descripcion" => 'Valida que los registros en la columna local esten registrados en el sistema',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 8,
        		"estatus" => 1,
                "nombre" => 'La columnna medio del registro  se encuentra en blanco',
        		"descripcion" => 'Valida que los registros en la columna medio no se encuentren en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 9,
        		"estatus" => 1,
                "nombre" => 'La columnna medio del registro no sen encuntra registrada en el sistema ',
        		"descripcion" => 'Valida que los registros en la columna medio se encuentren registradas en el sistema',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 10,
        		"estatus" => 0,
                "nombre" => 'La columnna tipo medio del registro  se encuentra en blanco',
        		"descripcion" => 'Valida que los registros en la columna tipo medio no se encuentren en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 11,
        		"estatus" => 0,
                "nombre" => 'La columnna tipo medio del registro no sen encuntra registrada en el sistema ',
        		"descripcion" => 'Valida que los registros en la columna tipo medio se encuentren registradas en el sistema',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 12,
        		"estatus" => 1,
                "nombre" => 'La columnna tipo volante catalogo del registro  se encuentra en blanco',
        		"descripcion" => 'Valida que los registros en la columna tipo volante catalogo no se encuentren en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 13,
        		"estatus" => 1,
                "nombre" => 'La columnna tipo volante catalogo del registro no sen encuntra registrada en el sistema ',
        		"descripcion" => 'Valida que los registros en la columna tipo volante catalogo se encuentren registradas en el sistema',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 14,
        		"estatus" => 0,
                "nombre" => 'La columnna numero de promoción del registro no es numero valido',
        		"descripcion" => 'Valida que los registros en la columna numero de promoción sea un numero entero',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 15,
        		"estatus" => 0,
                "nombre" => 'La columnna numero de promoción del registro se encuentra en blanco',
        		"descripcion" => 'Valida que los registros en la columna numero de promoción no se encuentre en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 16,
        		"estatus" => 1,
                "nombre" => 'La columnna sección del registro  se encuentra en blanco',
        		"descripcion" => 'Valida que los registros en la columna sección no se encuentren en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 17,
        		"estatus" => 1,
                "nombre" => 'La columnna sección  del registro no sen encuntra registrada en el sistema ',
        		"descripcion" => 'Valida que los registros en la columna sección se encuentren registradas en el sistema',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 18,
        		"estatus" => 1,
                "nombre" => 'La columnna nombre generico de la promocion del registro  se encuentra en blanco',
        		"descripcion" => 'Valida que los registros en la columna nombre generico de la promocion no se encuentren en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 19,
        		"estatus" => 1,
                "nombre" => 'La columnna sap del registro  se encuentra en blanco',
        		"descripcion" => 'Valida que los registros en la columna sap no se encuentren en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 20,
        		"estatus" => 1,
                "nombre" => 'La columnna sap del registro  no es numero valido',
        		"descripcion" => 'Valida que los registros en la columna sap sea un numero entero',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 21,
        		"estatus" => 1,
                "nombre" => 'La columnna cod_barra del registro  se encuentra en blanco',
        		"descripcion" => 'Valida que los registros en la columna cod_barra no se encuentren en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 22,
        		"estatus" => 1,
                "nombre" => 'La columnna cod_barra del registro  no es numero valido',
        		"descripcion" => 'Valida que los registros en la columna cod_barra sea un numero entero',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 23,
        		"estatus" => 1,
                "nombre" => 'La columnna umb del registro  se encuentra en blanco',
        		"descripcion" => 'Valida que los registros en la columna umb no se encuentren en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
            [
        		"cod_alerta" => 24,
        		"estatus" => 1,
                "nombre" => 'La columnna descripción del registro  se encuentra en blanco',
        		"descripcion" => 'Valida que los registros en la columna descripción no se encuentren en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 25,
        		"estatus" => 1,
                "nombre" => 'La columnna precio_referencia_moda del registro  se encuentra en blanco',
        		"descripcion" => 'Valida que los registros en la columna precio_referencia_moda no se encuentren en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 26,
        		"estatus" => 1,
                "nombre" => 'La columnna precio_referencia_moda del registro  no es numero valido',
        		"descripcion" => 'Valida que los registros en la columna precio_referencia_moda sea un numero entero',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 27,
        		"estatus" => 1,
                "nombre" => 'La columnna tipo_promo del registro se encuentran en blanco',
        		"descripcion" => 'Valida que los registros en la columna tipo_promo no se encuentren en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 28,
        		"estatus" => 1,
                "nombre" => 'La columnna tipo_promo  del registro no se encuentra registrada en el sistema ',
        		"descripcion" => 'Valida que los registros en la columna tipo_promo se encuentren registradas en el sistema',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 29,
        		"estatus" => 1,
                "nombre" => 'La columnna combinacion del registro se encuentran en blanco',
        		"descripcion" => 'Valida que los registros en la columna combinacion no se encuentren en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 30,
        		"estatus" => 1,
                "nombre" => 'La columnna tmp del registro se encuentran en blanco',
        		"descripcion" => 'Valida que los registros en la columna tmp no se encuentren en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 31,
        		"estatus" => 1,
                "nombre" => 'La columnna tc del registro se encuentran en blanco',
        		"descripcion" => 'Valida que los registros en la columna tmp combinacion no se encuentren en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 32,
        		"estatus" => 1,
                "nombre" => 'La columnna fecha_inicio_promo del registro se encuentran en blanco',
        		"descripcion" => 'Valida que los registros en la columna fecha_inicio_promo combinacion no se encuentren en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_alerta" => 33,
        		"estatus" => 1,
                "nombre" => 'La columnna fecha_termino_promo del registro se encuentran en blanco',
        		"descripcion" => 'Valida que los registros en la columna fecha_termino_promo combinacion no se encuentren en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
        );
        DB::table('alerta_archivos_campanas_faldones')->insert($alerts);
    }
}
