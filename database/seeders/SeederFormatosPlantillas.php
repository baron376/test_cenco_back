<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederFormatosPlantillas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$plantillas_cadenas = array(
			[
				"id_plantilla" => 1,
				"id_formato" => 1,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" => 1,
				"id_formato" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" => 1,
				"id_formato" => 3,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" => 2,
				"id_formato" => 1,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" => 2,
				"id_formato" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" => 2,
				"id_formato" => 3,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" => 3,
				"id_formato" => 1,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" => 3,
				"id_formato" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" => 3,
				"id_formato" => 3,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],

			[
				"id_plantilla" => 3,
				"id_formato" => 4,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" => 3,
				"id_formato" => 5,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],

			[
				"id_plantilla" =>5,
				"id_formato" => 1,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" =>5,
				"id_formato" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			/*[
				"id_plantilla" =>5,
				"id_formato" => 3,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],*/
			[
				"id_plantilla" =>6,
				"id_formato" => 1,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" =>6,
				"id_formato" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" =>6,
				"id_formato" => 3,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" =>6,
				"id_formato" => 4,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" =>6,
				"id_formato" => 5,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" =>7,
				"id_formato" => 1,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" =>7,
				"id_formato" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" =>7,
				"id_formato" => 3,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" =>7,
				"id_formato" => 4,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" =>7,
				"id_formato" => 5,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" =>2,
				"id_formato" => 4,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" =>2,
				"id_formato" => 5,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			/*[
				"id_plantilla" =>5,
				"id_formato" => 4,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" =>5,
				"id_formato" => 5,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],*/

			[
				"id_plantilla" =>8,
				"id_formato" => 1,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
			[
				"id_plantilla" =>8,
				"id_formato" => 2,
				"id_usuario_crear" => 1,
				"id_usuario_modifica" => null,
				"created_at" => "2021-04-22 00:29:23",
				"updated_at" => null
            ],
        );

        DB::table('formatos_plantillas')->insert($plantillas_cadenas);
    }
}