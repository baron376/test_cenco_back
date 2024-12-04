<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederRechazosArchivosCampanasFaldones extends Seeder
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
        		"cod_rechazo" => 301,
        		"estatus" => 1,
                "nombre" => 'La columna  tipo_promo se encuentra en blanco',
        		"descripcion" => ' Validacion que certifica que el tipo_promo del registro no se encuentre en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
            [
        		"cod_rechazo" => 302,
        		"estatus" => 1,
                "nombre" => 'La columna  fecha_inicio_promo se encuentra en blanco',
        		"descripcion" => ' Validacion que certifica que el fecha_inicio_promo del registro no se encuentre en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
            [
        		"cod_rechazo" => 303,
        		"estatus" => 1,
                "nombre" => 'La columna  fecha_termino_promo se encuentra en blanco',
        		"descripcion" => ' Validacion que certifica que el fecha_termino_promo del registro no se encuentre en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
            [
        		"cod_rechazo" => 304,
        		"estatus" => 1,
                "nombre" => 'La columna  fecha_inicio_promo es menor a la fecha actual ',
        		"descripcion" => ' Validacion que certifica que el fecha_inicio_promo sea mayor al dia actual',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
            [
        		"cod_rechazo" => 305,
        		"estatus" => 1,
                "nombre" => 'La columna  fecha_termino_promo es menor a la columna  fecha_inicio_promo',
        		"descripcion" => ' Validacion que certifica que el fecha_termino_promo sea mayor a la columna  fecha_inicio_promo',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_rechazo" => 306,
        		"estatus" => 1,
                "nombre" => 'Estructura del archivo erronea error en nombre de cabeceras',
        		"descripcion" => 'Esta Validacion es obligatoria , se valida q las cabeceras utilizadas para realizar el inser de los datos esten presentes en el archivo',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_rechazo" => 306,
        		"estatus" => 1,
                "nombre" => 'Estructura del archivo erronea error en nombre de cabeceras',
        		"descripcion" => 'Esta Validacion es obligatoria , se valida q las cabeceras utilizadas para realizar el inser de los datos esten presentes en el archivo',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_rechazo" => 307,
        		"estatus" => 1,
                "nombre" => 'Nombre Generico de la promoción se encuentra en blanco',
        		"descripcion" => 'Validacion que certifica que el nombre generico promoción del registro no se encuentre en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_rechazo" => 308,
        		"estatus" => 1,
                "nombre" => 'Validacion que certifica que la columna SAP del registro no se encuentre en blanco',
        		"descripcion" => 'Validacion que certifica que el SAP del registro no se encuentre en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_rechazo" => 309,
        		"estatus" => 1,
                "nombre" => 'Validacion que certifica que la columna COD BARRA del registro no se encuentre en blanco',
        		"descripcion" => 'Validacion que certifica que el COD BARRA del registro no se encuentre en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_rechazo" => 310,
        		"estatus" => 1,
                "nombre" => 'Validacion que certifica que la columna Cuotas del registro contenga un dato valido',
        		"descripcion" => 'Validacion que certifica que el campo cuotas cuando viene lleno contenga un entero',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_rechazo" => 311,
        		"estatus" => 1,
                "nombre" => 'Validacion que certifica que la columna Valor Cuotas del registro contenga un dato valido',
        		"descripcion" => 'Validacion que certifica que el campo valor cuotas cuando sea diferente de null contenga un entero',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_rechazo" => 312,
        		"estatus" => 1,
                "nombre" => 'Validacion que certifica que la columna Costo Total del registro contenga un dato valido',
        		"descripcion" => 'Validacion que certifica que el campo Costo Total cuando sea diferente de null contenga un entero',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_rechazo" => 313,
        		"estatus" => 1,
                "nombre" => 'Validacion que certifica que la columna CAE del registro contenga un dato valido',
        		"descripcion" => 'Validacion que certifica que el campo CAE cuando sea diferente de null contenga un float',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_rechazo" => 314,
        		"estatus" => 1,
                "nombre" => 'Validacion que certifica que la columna Puntos Con Tarjeta Cencosud Cuotas del registro contenga un dato valido',
        		"descripcion" => 'Validacion que certifica que el campo Puntos Con Tarjeta Cencosud cuando sea diferente de null contenga un entero',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_rechazo" => 315,
        		"estatus" => 1,
                "nombre" => 'Validacion que certifica que la columna Puntos Con Otros Medios de Pago del registro contenga un dato valido',
        		"descripcion" => 'Validacion que certifica que el campo Puntos Con Otros Medios de Pago cuando sea diferente de null contenga un entero',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_rechazo" => 316,
        		"estatus" => 1,
                "nombre" => 'La columnna tipo_promo del registro se encuentran en blanco',
        		"descripcion" => 'Valida que los registros en la columna tipo_promo no se encuentren en blanco',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
			[
        		"cod_rechazo" => 317,
        		"estatus" => 1,
                "nombre" => 'La columnna tipo_promo  del registro no se encuentra registrada en el sistema ',
        		"descripcion" => 'Valida que los registros en la columna tipo_promo se encuentren registradas en el sistema',
        		"validacion" => null,
        		"created_at" => now(),
                'updated_at' => now(),
        	],
        );
        DB::table('rechazos_archivos_campanas_faldones')->insert($alerts);
    }
}
