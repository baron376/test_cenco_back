<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederProvincias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provincias = array(
			[
				"id" => 1,
				"provincia_nombre" => "Arica",
				"id_region" => 1
			],
			[
				"id" => 2,
				"provincia_nombre" => "Parinacota",
				"id_region" => 1
			],
			[
				"id" => 3,
				"provincia_nombre" => "Iquique",
				"id_region" => 2
			],
			[
				"id" => 4,
				"provincia_nombre" => "El Tamarugal",
				"id_region" => 2
			],
			[
				"id" => 5,
				"provincia_nombre" => "Antofagasta",
				"id_region" => 3
			],
			[
				"id" => 6,
				"provincia_nombre" => "El Loa",
				"id_region" => 3
			],
			[
				"id" => 7,
				"provincia_nombre" => "Tocopilla",
				"id_region" => 3
			],
			[
				"id" => 8,
				"provincia_nombre" => "Chañaral",
				"id_region" => 4
			],
			[
				"id" => 9,
				"provincia_nombre" => "Copiapó",
				"id_region" => 4
			],
			[
				"id" => 10,
				"provincia_nombre" => "Huasco",
				"id_region" => 4
			],
			[
				"id" => 11,
				"provincia_nombre" => "Choapa",
				"id_region" => 5
			],
			[
				"id" => 12,
				"provincia_nombre" => "Elqui",
				"id_region" => 5
			],
			[
				"id" => 13,
				"provincia_nombre" => "Limarí",
				"id_region" => 5
			],
			[
				"id" => 14,
				"provincia_nombre" => "Isla de Pascua",
				"id_region" => 6
			],
			[
				"id" => 15,
				"provincia_nombre" => "Los Andes",
				"id_region" => 6
			],
			[
				"id" => 16,
				"provincia_nombre" => "Petorca",
				"id_region" => 6
			],
			[
				"id" => 17,
				"provincia_nombre" => "Quillota",
				"id_region" => 6
			],
			[
				"id" => 18,
				"provincia_nombre" => "San Antonio",
				"id_region" => 6
			],
			[
				"id" => 19,
				"provincia_nombre" => "San Felipe de Aconcagua",
				"id_region" => 6
			],
			[
				"id" => 20,
				"provincia_nombre" => "Valparaiso",
				"id_region" => 6
			],
			[
				"id" => 21,
				"provincia_nombre" => "Chacabuco",
				"id_region" => 7
			],
			[
				"id" => 22,
				"provincia_nombre" => "Cordillera",
				"id_region" => 7
			],
			[
				"id" => 23,
				"provincia_nombre" => "Maipo",
				"id_region" => 7
			],
			[
				"id" => 24,
				"provincia_nombre" => "Melipilla",
				"id_region" => 7
			],
			[
				"id" => 25,
				"provincia_nombre" => "Santiago",
				"id_region" => 7
			],
			[
				"id" => 26,
				"provincia_nombre" => "Talagante",
				"id_region" => 7
			],
			[
				"id" => 27,
				"provincia_nombre" => "Cachapoal",
				"id_region" => 8
			],
			[
				"id" => 28,
				"provincia_nombre" => "Cardenal Caro",
				"id_region" => 8
			],
			[
				"id" => 29,
				"provincia_nombre" => "Colchagua",
				"id_region" => 8
			],
			[
				"id" => 30,
				"provincia_nombre" => "Cauquenes",
				"id_region" => 9
			],
			[
				"id" => 31,
				"provincia_nombre" => "Curicó",
				"id_region" => 9
			],
			[
				"id" => 32,
				"provincia_nombre" => "Linares",
				"id_region" => 9
			],
			[
				"id" => 33,
				"provincia_nombre" => "Talca",
				"id_region" => 9
			],
			[
				"id" => 34,
				"provincia_nombre" => "Arauco",
				"id_region" => 10
			],
			[
				"id" => 35,
				"provincia_nombre" => "Bio Bío",
				"id_region" => 10
			],
			[
				"id" => 36,
				"provincia_nombre" => "Concepción",
				"id_region" => 10
			],
			[
				"id" => 37,
				"provincia_nombre" => "Ñuble",
				"id_region" => 10
			],
			[
				"id" => 38,
				"provincia_nombre" => "Cautín",
				"id_region" => 11
			],
			[
				"id" => 39,
				"provincia_nombre" => "Malleco",
				"id_region" => 11
			],
			[
				"id" => 40,
				"provincia_nombre" => "Valdivia",
				"id_region" => 12
			],
			[
				"id" => 41,
				"provincia_nombre" => "Ranco",
				"id_region" => 12
			],
			[
				"id" => 42,
				"provincia_nombre" => "Chiloé",
				"id_region" => 13
			],
			[
				"id" => 43,
				"provincia_nombre" => "Llanquihue",
				"id_region" => 13
			],
			[
				"id" => 44,
				"provincia_nombre" => "Osorno",
				"id_region" => 13
			],
			[
				"id" => 45,
				"provincia_nombre" => "Palena",
				"id_region" => 13
			],
			[
				"id" => 46,
				"provincia_nombre" => "Aisén",
				"id_region" => 14
			],
			[
				"id" => 47,
				"provincia_nombre" => "Capitán Prat",
				"id_region" => 14
			],
			[
				"id" => 48,
				"provincia_nombre" => "Coihaique",
				"id_region" => 14
			],
			[
				"id" => 49,
				"provincia_nombre" => "General Carrera",
				"id_region" => 14
			],
			[
				"id" => 50,
				"provincia_nombre" => "Antártica Chilena",
				"id_region" => 15
			],
			[
				"id" => 51,
				"provincia_nombre" => "Magallanes",
				"id_region" => 15
			],
			[
				"id" => 52,
				"provincia_nombre" => "Tierra del Fuego",
				"id_region" => 15
			],
			[
				"id" => 53,
				"provincia_nombre" => "Última Esperanza",
				"id_region" => 15
			]
		);
        DB::table('provincias')->insert($provincias);
    }
}
