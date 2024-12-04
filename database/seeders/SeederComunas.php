<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederComunas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comunas = array (
			[
				"id" => 1,
				"comuna_nombre" => "Arica",
				"id_provincia" => 1
			],
			[
				"id" => 2,
				"comuna_nombre" => "Camarones",
				"id_provincia" => 1
			],
			[
				"id" => 3,
				"comuna_nombre" => "General Lagos",
				"id_provincia" => 2
			],
			[
				"id" => 4,
				"comuna_nombre" => "Putre",
				"id_provincia" => 2
			],
			[
				"id" => 5,
				"comuna_nombre" => "Alto Hospicio",
				"id_provincia" => 3
			],
			[
				"id" => 6,
				"comuna_nombre" => "Iquique",
				"id_provincia" => 3
			],
			[
				"id" => 7,
				"comuna_nombre" => "Camiña",
				"id_provincia" => 4
			],
			[
				"id" => 8,
				"comuna_nombre" => "Colchane",
				"id_provincia" => 4
			],
			[
				"id" => 9,
				"comuna_nombre" => "Huara",
				"id_provincia" => 4
			],
			[
				"id" => 10,
				"comuna_nombre" => "Pica",
				"id_provincia" => 4
			],
			[
				"id" => 11,
				"comuna_nombre" => "Pozo Almonte",
				"id_provincia" => 4
			],
			[
				"id" => 12,
				"comuna_nombre" => "Antofagasta",
				"id_provincia" => 5
			],
			[
				"id" => 13,
				"comuna_nombre" => "Mejillones",
				"id_provincia" => 5
			],
			[
				"id" => 14,
				"comuna_nombre" => "Sierra Gorda",
				"id_provincia" => 5
			],
			[
				"id" => 15,
				"comuna_nombre" => "Taltal",
				"id_provincia" => 5
			],
			[
				"id" => 16,
				"comuna_nombre" => "Calama",
				"id_provincia" => 6
			],
			[
				"id" => 17,
				"comuna_nombre" => "Ollague",
				"id_provincia" => 6
			],
			[
				"id" => 18,
				"comuna_nombre" => "San Pedro de Atacama",
				"id_provincia" => 6
			],
			[
				"id" => 19,
				"comuna_nombre" => "María Elena",
				"id_provincia" => 7
			],
			[
				"id" => 20,
				"comuna_nombre" => "Tocopilla",
				"id_provincia" => 7
			],
			[
				"id" => 21,
				"comuna_nombre" => "Chañaral",
				"id_provincia" => 8
			],
			[
				"id" => 22,
				"comuna_nombre" => "Diego de Almagro",
				"id_provincia" => 8
			],
			[
				"id" => 23,
				"comuna_nombre" => "Caldera",
				"id_provincia" => 9
			],
			[
				"id" => 24,
				"comuna_nombre" => "Copiapó",
				"id_provincia" => 9
			],
			[
				"id" => 25,
				"comuna_nombre" => "Tierra Amarilla",
				"id_provincia" => 9
			],
			[
				"id" => 26,
				"comuna_nombre" => "Alto del Carmen",
				"id_provincia" => 10
			],
			[
				"id" => 27,
				"comuna_nombre" => "Freirina",
				"id_provincia" => 10
			],
			[
				"id" => 28,
				"comuna_nombre" => "Huasco",
				"id_provincia" => 10
			],
			[
				"id" => 29,
				"comuna_nombre" => "Vallenar",
				"id_provincia" => 10
			],
			[
				"id" => 30,
				"comuna_nombre" => "Canela",
				"id_provincia" => 11
			],
			[
				"id" => 31,
				"comuna_nombre" => "Illapel",
				"id_provincia" => 11
			],
			[
				"id" => 32,
				"comuna_nombre" => "Los Vilos",
				"id_provincia" => 11
			],
			[
				"id" => 33,
				"comuna_nombre" => "Salamanca",
				"id_provincia" => 11
			],
			[
				"id" => 34,
				"comuna_nombre" => "Andacollo",
				"id_provincia" => 12
			],
			[
				"id" => 35,
				"comuna_nombre" => "Coquimbo",
				"id_provincia" => 12
			],
			[
				"id" => 36,
				"comuna_nombre" => "La Higuera",
				"id_provincia" => 12
			],
			[
				"id" => 37,
				"comuna_nombre" => "La Serena",
				"id_provincia" => 12
			],
			[
				"id" => 38,
				"comuna_nombre" => "Paihuaco",
				"id_provincia" => 12
			],
			[
				"id" => 39,
				"comuna_nombre" => "Vicuña",
				"id_provincia" => 12
			],
			[
				"id" => 40,
				"comuna_nombre" => "Combarbalá",
				"id_provincia" => 13
			],
			[
				"id" => 41,
				"comuna_nombre" => "Monte Patria",
				"id_provincia" => 13
			],
			[
				"id" => 42,
				"comuna_nombre" => "Ovalle",
				"id_provincia" => 13
			],
			[
				"id" => 43,
				"comuna_nombre" => "Punitaqui",
				"id_provincia" => 13
			],
			[
				"id" => 44,
				"comuna_nombre" => "Río Hurtado",
				"id_provincia" => 13
			],
			[
				"id" => 45,
				"comuna_nombre" => "Isla de Pascua",
				"id_provincia" => 14
			],
			[
				"id" => 46,
				"comuna_nombre" => "Calle Larga",
				"id_provincia" => 15
			],
			[
				"id" => 47,
				"comuna_nombre" => "Los Andes",
				"id_provincia" => 15
			],
			[
				"id" => 48,
				"comuna_nombre" => "Rinconada",
				"id_provincia" => 15
			],
			[
				"id" => 49,
				"comuna_nombre" => "San Esteban",
				"id_provincia" => 15
			],
			[
				"id" => 50,
				"comuna_nombre" => "La Ligua",
				"id_provincia" => 16
			],
			[
				"id" => 51,
				"comuna_nombre" => "Papudo",
				"id_provincia" => 16
			],
			[
				"id" => 52,
				"comuna_nombre" => "Petorca",
				"id_provincia" => 16
			],
			[
				"id" => 53,
				"comuna_nombre" => "Zapallar",
				"id_provincia" => 16
			],
			[
				"id" => 54,
				"comuna_nombre" => "Hijuelas",
				"id_provincia" => 17
			],
			[
				"id" => 55,
				"comuna_nombre" => "La Calera",
				"id_provincia" => 17
			],
			[
				"id" => 56,
				"comuna_nombre" => "La Cruz",
				"id_provincia" => 17
			],
			[
				"id" => 57,
				"comuna_nombre" => "Limache",
				"id_provincia" => 17
			],
			[
				"id" => 58,
				"comuna_nombre" => "Nogales",
				"id_provincia" => 17
			],
			[
				"id" => 59,
				"comuna_nombre" => "Olmué",
				"id_provincia" => 17
			],
			[
				"id" => 60,
				"comuna_nombre" => "Quillota",
				"id_provincia" => 17
			],
			[
				"id" => 61,
				"comuna_nombre" => "Algarrobo",
				"id_provincia" => 18
			],
			[
				"id" => 62,
				"comuna_nombre" => "Cartagena",
				"id_provincia" => 18
			],
			[
				"id" => 63,
				"comuna_nombre" => "El Quisco",
				"id_provincia" => 18
			],
			[
				"id" => 64,
				"comuna_nombre" => "El Tabo",
				"id_provincia" => 18
			],
			[
				"id" => 65,
				"comuna_nombre" => "San Antonio",
				"id_provincia" => 18
			],
			[
				"id" => 66,
				"comuna_nombre" => "Santo Domingo",
				"id_provincia" => 18
			],
			[
				"id" => 67,
				"comuna_nombre" => "Catemu",
				"id_provincia" => 19
			],
			[
				"id" => 68,
				"comuna_nombre" => "Llaillay",
				"id_provincia" => 19
			],
			[
				"id" => 69,
				"comuna_nombre" => "Panquehue",
				"id_provincia" => 19
			],
			[
				"id" => 70,
				"comuna_nombre" => "Putaendo",
				"id_provincia" => 19
			],
			[
				"id" => 71,
				"comuna_nombre" => "San Felipe",
				"id_provincia" => 19
			],
			[
				"id" => 72,
				"comuna_nombre" => "Santa María",
				"id_provincia" => 19
			],
			[
				"id" => 73,
				"comuna_nombre" => "Casablanca",
				"id_provincia" => 20
			],
			[
				"id" => 74,
				"comuna_nombre" => "Concón",
				"id_provincia" => 20
			],
			[
				"id" => 75,
				"comuna_nombre" => "Juan Fernández",
				"id_provincia" => 20
			],
			[
				"id" => 76,
				"comuna_nombre" => "Puchuncaví",
				"id_provincia" => 20
			],
			[
				"id" => 77,
				"comuna_nombre" => "Quilpué",
				"id_provincia" => 20
			],
			[
				"id" => 78,
				"comuna_nombre" => "Quintero",
				"id_provincia" => 20
			],
			[
				"id" => 79,
				"comuna_nombre" => "Valparaíso",
				"id_provincia" => 20
			],
			[
				"id" => 80,
				"comuna_nombre" => "Villa Alemana",
				"id_provincia" => 20
			],
			[
				"id" => 81,
				"comuna_nombre" => "Viña del Mar",
				"id_provincia" => 20
			],
			[
				"id" => 82,
				"comuna_nombre" => "Colina",
				"id_provincia" => 21
			],
			[
				"id" => 83,
				"comuna_nombre" => "Lampa",
				"id_provincia" => 21
			],
			[
				"id" => 84,
				"comuna_nombre" => "Tiltil",
				"id_provincia" => 21
			],
			[
				"id" => 85,
				"comuna_nombre" => "Pirque",
				"id_provincia" => 22
			],
			[
				"id" => 86,
				"comuna_nombre" => "Puente Alto",
				"id_provincia" => 22
			],
			[
				"id" => 87,
				"comuna_nombre" => "San José de Maipo",
				"id_provincia" => 22
			],
			[
				"id" => 88,
				"comuna_nombre" => "Buin",
				"id_provincia" => 23
			],
			[
				"id" => 89,
				"comuna_nombre" => "Calera de Tango",
				"id_provincia" => 23
			],
			[
				"id" => 90,
				"comuna_nombre" => "Paine",
				"id_provincia" => 23
			],
			[
				"id" => 91,
				"comuna_nombre" => "San Bernardo",
				"id_provincia" => 23
			],
			[
				"id" => 92,
				"comuna_nombre" => "Alhué",
				"id_provincia" => 24
			],
			[
				"id" => 93,
				"comuna_nombre" => "Curacaví",
				"id_provincia" => 24
			],
			[
				"id" => 94,
				"comuna_nombre" => "María Pinto",
				"id_provincia" => 24
			],
			[
				"id" => 95,
				"comuna_nombre" => "Melipilla",
				"id_provincia" => 24
			],
			[
				"id" => 96,
				"comuna_nombre" => "San Pedro",
				"id_provincia" => 24
			],
			[
				"id" => 97,
				"comuna_nombre" => "Cerrillos",
				"id_provincia" => 25
			],
			[
				"id" => 98,
				"comuna_nombre" => "Cerro Navia",
				"id_provincia" => 25
			],
			[
				"id" => 99,
				"comuna_nombre" => "Conchalí",
				"id_provincia" => 25
			],
			[
				"id" => 100,
				"comuna_nombre" => "El Bosque",
				"id_provincia" => 25
			],
			[
				"id" => 101,
				"comuna_nombre" => "Estación Central",
				"id_provincia" => 25
			],
			[
				"id" => 102,
				"comuna_nombre" => "Huechuraba",
				"id_provincia" => 25
			],
			[
				"id" => 103,
				"comuna_nombre" => "Independencia",
				"id_provincia" => 25
			],
			[
				"id" => 104,
				"comuna_nombre" => "La Cisterna",
				"id_provincia" => 25
			],
			[
				"id" => 105,
				"comuna_nombre" => "La Granja",
				"id_provincia" => 25
			],
			[
				"id" => 106,
				"comuna_nombre" => "La Florida",
				"id_provincia" => 25
			],
			[
				"id" => 107,
				"comuna_nombre" => "La Pintana",
				"id_provincia" => 25
			],
			[
				"id" => 108,
				"comuna_nombre" => "La Reina",
				"id_provincia" => 25
			],
			[
				"id" => 109,
				"comuna_nombre" => "Las Condes",
				"id_provincia" => 25
			],
			[
				"id" => 110,
				"comuna_nombre" => "Lo Barnechea",
				"id_provincia" => 25
			],
			[
				"id" => 111,
				"comuna_nombre" => "Lo Espejo",
				"id_provincia" => 25
			],
			[
				"id" => 112,
				"comuna_nombre" => "Lo Prado",
				"id_provincia" => 25
			],
			[
				"id" => 113,
				"comuna_nombre" => "Macul",
				"id_provincia" => 25
			],
			[
				"id" => 114,
				"comuna_nombre" => "Maipú",
				"id_provincia" => 25
			],
			[
				"id" => 115,
				"comuna_nombre" => "Ñuñoa",
				"id_provincia" => 25
			],
			[
				"id" => 116,
				"comuna_nombre" => "Pedro Aguirre Cerda",
				"id_provincia" => 25
			],
			[
				"id" => 117,
				"comuna_nombre" => "Peñalolén",
				"id_provincia" => 25
			],
			[
				"id" => 118,
				"comuna_nombre" => "Providencia",
				"id_provincia" => 25
			],
			[
				"id" => 119,
				"comuna_nombre" => "Pudahuel",
				"id_provincia" => 25
			],
			[
				"id" => 120,
				"comuna_nombre" => "Quilicura",
				"id_provincia" => 25
			],
			[
				"id" => 121,
				"comuna_nombre" => "Quinta Normal",
				"id_provincia" => 25
			],
			[
				"id" => 122,
				"comuna_nombre" => "Recoleta",
				"id_provincia" => 25
			],
			[
				"id" => 123,
				"comuna_nombre" => "Renca",
				"id_provincia" => 25
			],
			[
				"id" => 124,
				"comuna_nombre" => "San Miguel",
				"id_provincia" => 25
			],
			[
				"id" => 125,
				"comuna_nombre" => "San Joaquín",
				"id_provincia" => 25
			],
			[
				"id" => 126,
				"comuna_nombre" => "San Ramón",
				"id_provincia" => 25
			],
			[
				"id" => 127,
				"comuna_nombre" => "Santiago",
				"id_provincia" => 25
			],
			[
				"id" => 128,
				"comuna_nombre" => "Vitacura",
				"id_provincia" => 25
			],
			[
				"id" => 129,
				"comuna_nombre" => "El Monte",
				"id_provincia" => 26
			],
			[
				"id" => 130,
				"comuna_nombre" => "Isla de Maipo",
				"id_provincia" => 26
			],
			[
				"id" => 131,
				"comuna_nombre" => "Padre Hurtado",
				"id_provincia" => 26
			],
			[
				"id" => 132,
				"comuna_nombre" => "Peñaflor",
				"id_provincia" => 26
			],
			[
				"id" => 133,
				"comuna_nombre" => "Talagante",
				"id_provincia" => 26
			],
			[
				"id" => 134,
				"comuna_nombre" => "Codegua",
				"id_provincia" => 27
			],
			[
				"id" => 135,
				"comuna_nombre" => "Coínco",
				"id_provincia" => 27
			],
			[
				"id" => 136,
				"comuna_nombre" => "Coltauco",
				"id_provincia" => 27
			],
			[
				"id" => 137,
				"comuna_nombre" => "Doñihue",
				"id_provincia" => 27
			],
			[
				"id" => 138,
				"comuna_nombre" => "Graneros",
				"id_provincia" => 27
			],
			[
				"id" => 139,
				"comuna_nombre" => "Las Cabras",
				"id_provincia" => 27
			],
			[
				"id" => 140,
				"comuna_nombre" => "Machalí",
				"id_provincia" => 27
			],
			[
				"id" => 141,
				"comuna_nombre" => "Malloa",
				"id_provincia" => 27
			],
			[
				"id" => 142,
				"comuna_nombre" => "Mostazal",
				"id_provincia" => 27
			],
			[
				"id" => 143,
				"comuna_nombre" => "Olivar",
				"id_provincia" => 27
			],
			[
				"id" => 144,
				"comuna_nombre" => "Peumo",
				"id_provincia" => 27
			],
			[
				"id" => 145,
				"comuna_nombre" => "Pichidegua",
				"id_provincia" => 27
			],
			[
				"id" => 146,
				"comuna_nombre" => "Quinta de Tilcoco",
				"id_provincia" => 27
			],
			[
				"id" => 147,
				"comuna_nombre" => "Rancagua",
				"id_provincia" => 27
			],
			[
				"id" => 148,
				"comuna_nombre" => "Rengo",
				"id_provincia" => 27
			],
			[
				"id" => 149,
				"comuna_nombre" => "Requínoa",
				"id_provincia" => 27
			],
			[
				"id" => 150,
				"comuna_nombre" => "San Vicente de Tagua Tagua",
				"id_provincia" => 27
			],
			[
				"id" => 151,
				"comuna_nombre" => "La Estrella",
				"id_provincia" => 28
			],
			[
				"id" => 152,
				"comuna_nombre" => "Litueche",
				"id_provincia" => 28
			],
			[
				"id" => 153,
				"comuna_nombre" => "Marchihue",
				"id_provincia" => 28
			],
			[
				"id" => 154,
				"comuna_nombre" => "Navidad",
				"id_provincia" => 28
			],
			[
				"id" => 155,
				"comuna_nombre" => "Peredones",
				"id_provincia" => 28
			],
			[
				"id" => 156,
				"comuna_nombre" => "Pichilemu",
				"id_provincia" => 28
			],
			[
				"id" => 157,
				"comuna_nombre" => "Chépica",
				"id_provincia" => 29
			],
			[
				"id" => 158,
				"comuna_nombre" => "Chimbarongo",
				"id_provincia" => 29
			],
			[
				"id" => 159,
				"comuna_nombre" => "Lolol",
				"id_provincia" => 29
			],
			[
				"id" => 160,
				"comuna_nombre" => "Nancagua",
				"id_provincia" => 29
			],
			[
				"id" => 161,
				"comuna_nombre" => "Palmilla",
				"id_provincia" => 29
			],
			[
				"id" => 162,
				"comuna_nombre" => "Peralillo",
				"id_provincia" => 29
			],
			[
				"id" => 163,
				"comuna_nombre" => "Placilla",
				"id_provincia" => 29
			],
			[
				"id" => 164,
				"comuna_nombre" => "Pumanque",
				"id_provincia" => 29
			],
			[
				"id" => 165,
				"comuna_nombre" => "San Fernando",
				"id_provincia" => 29
			],
			[
				"id" => 166,
				"comuna_nombre" => "Santa Cruz",
				"id_provincia" => 29
			],
			[
				"id" => 167,
				"comuna_nombre" => "Cauquenes",
				"id_provincia" => 30
			],
			[
				"id" => 168,
				"comuna_nombre" => "Chanco",
				"id_provincia" => 30
			],
			[
				"id" => 169,
				"comuna_nombre" => "Pelluhue",
				"id_provincia" => 30
			],
			[
				"id" => 170,
				"comuna_nombre" => "Curicó",
				"id_provincia" => 31
			],
			[
				"id" => 171,
				"comuna_nombre" => "Hualañé",
				"id_provincia" => 31
			],
			[
				"id" => 172,
				"comuna_nombre" => "Licantén",
				"id_provincia" => 31
			],
			[
				"id" => 173,
				"comuna_nombre" => "Molina",
				"id_provincia" => 31
			],
			[
				"id" => 174,
				"comuna_nombre" => "Rauco",
				"id_provincia" => 31
			],
			[
				"id" => 175,
				"comuna_nombre" => "Romeral",
				"id_provincia" => 31
			],
			[
				"id" => 176,
				"comuna_nombre" => "Sagrada Familia",
				"id_provincia" => 31
			],
			[
				"id" => 177,
				"comuna_nombre" => "Teno",
				"id_provincia" => 31
			],
			[
				"id" => 178,
				"comuna_nombre" => "Vichuquén",
				"id_provincia" => 31
			],
			[
				"id" => 179,
				"comuna_nombre" => "Colbún",
				"id_provincia" => 32
			],
			[
				"id" => 180,
				"comuna_nombre" => "Linares",
				"id_provincia" => 32
			],
			[
				"id" => 181,
				"comuna_nombre" => "Longaví",
				"id_provincia" => 32
			],
			[
				"id" => 182,
				"comuna_nombre" => "Parral",
				"id_provincia" => 32
			],
			[
				"id" => 183,
				"comuna_nombre" => "Retiro",
				"id_provincia" => 32
			],
			[
				"id" => 184,
				"comuna_nombre" => "San Javier",
				"id_provincia" => 32
			],
			[
				"id" => 185,
				"comuna_nombre" => "Villa Alegre",
				"id_provincia" => 32
			],
			[
				"id" => 186,
				"comuna_nombre" => "Yerbas Buenas",
				"id_provincia" => 32
			],
			[
				"id" => 187,
				"comuna_nombre" => "Constitución",
				"id_provincia" => 33
			],
			[
				"id" => 188,
				"comuna_nombre" => "Curepto",
				"id_provincia" => 33
			],
			[
				"id" => 189,
				"comuna_nombre" => "Empedrado",
				"id_provincia" => 33
			],
			[
				"id" => 190,
				"comuna_nombre" => "Maule",
				"id_provincia" => 33
			],
			[
				"id" => 191,
				"comuna_nombre" => "Pelarco",
				"id_provincia" => 33
			],
			[
				"id" => 192,
				"comuna_nombre" => "Pencahue",
				"id_provincia" => 33
			],
			[
				"id" => 193,
				"comuna_nombre" => "Río Claro",
				"id_provincia" => 33
			],
			[
				"id" => 194,
				"comuna_nombre" => "San Clemente",
				"id_provincia" => 33
			],
			[
				"id" => 195,
				"comuna_nombre" => "San Rafael",
				"id_provincia" => 33
			],
			[
				"id" => 196,
				"comuna_nombre" => "Talca",
				"id_provincia" => 33
			],
			[
				"id" => 197,
				"comuna_nombre" => "Arauco",
				"id_provincia" => 34
			],
			[
				"id" => 198,
				"comuna_nombre" => "Cañete",
				"id_provincia" => 34
			],
			[
				"id" => 199,
				"comuna_nombre" => "Contulmo",
				"id_provincia" => 34
			],
			[
				"id" => 200,
				"comuna_nombre" => "Curanilahue",
				"id_provincia" => 34
			],
			[
				"id" => 201,
				"comuna_nombre" => "Lebu",
				"id_provincia" => 34
			],
			[
				"id" => 202,
				"comuna_nombre" => "Los Álamos",
				"id_provincia" => 34
			],
			[
				"id" => 203,
				"comuna_nombre" => "Tirúa",
				"id_provincia" => 34
			],
			[
				"id" => 204,
				"comuna_nombre" => "Alto Biobío",
				"id_provincia" => 35
			],
			[
				"id" => 205,
				"comuna_nombre" => "Antuco",
				"id_provincia" => 35
			],
			[
				"id" => 206,
				"comuna_nombre" => "Cabrero",
				"id_provincia" => 35
			],
			[
				"id" => 207,
				"comuna_nombre" => "Laja",
				"id_provincia" => 35
			],
			[
				"id" => 208,
				"comuna_nombre" => "Los Ángeles",
				"id_provincia" => 35
			],
			[
				"id" => 209,
				"comuna_nombre" => "Mulchén",
				"id_provincia" => 35
			],
			[
				"id" => 210,
				"comuna_nombre" => "Nacimiento",
				"id_provincia" => 35
			],
			[
				"id" => 211,
				"comuna_nombre" => "Negrete",
				"id_provincia" => 35
			],
			[
				"id" => 212,
				"comuna_nombre" => "Quilaco",
				"id_provincia" => 35
			],
			[
				"id" => 213,
				"comuna_nombre" => "Quilleco",
				"id_provincia" => 35
			],
			[
				"id" => 214,
				"comuna_nombre" => "San Rosendo",
				"id_provincia" => 35
			],
			[
				"id" => 215,
				"comuna_nombre" => "Santa Bárbara",
				"id_provincia" => 35
			],
			[
				"id" => 216,
				"comuna_nombre" => "Tucapel",
				"id_provincia" => 35
			],
			[
				"id" => 217,
				"comuna_nombre" => "Yumbel",
				"id_provincia" => 35
			],
			[
				"id" => 218,
				"comuna_nombre" => "Chiguayante",
				"id_provincia" => 36
			],
			[
				"id" => 219,
				"comuna_nombre" => "Concepción",
				"id_provincia" => 36
			],
			[
				"id" => 220,
				"comuna_nombre" => "Coronel",
				"id_provincia" => 36
			],
			[
				"id" => 221,
				"comuna_nombre" => "Florida",
				"id_provincia" => 36
			],
			[
				"id" => 222,
				"comuna_nombre" => "Hualpén",
				"id_provincia" => 36
			],
			[
				"id" => 223,
				"comuna_nombre" => "Hualqui",
				"id_provincia" => 36
			],
			[
				"id" => 224,
				"comuna_nombre" => "Lota",
				"id_provincia" => 36
			],
			[
				"id" => 225,
				"comuna_nombre" => "Penco",
				"id_provincia" => 36
			],
			[
				"id" => 226,
				"comuna_nombre" => "San Pedro de La Paz",
				"id_provincia" => 36
			],
			[
				"id" => 227,
				"comuna_nombre" => "Santa Juana",
				"id_provincia" => 36
			],
			[
				"id" => 228,
				"comuna_nombre" => "Talcahuano",
				"id_provincia" => 36
			],
			[
				"id" => 229,
				"comuna_nombre" => "Tomé",
				"id_provincia" => 36
			],
			[
				"id" => 230,
				"comuna_nombre" => "Bulnes",
				"id_provincia" => 37
			],
			[
				"id" => 231,
				"comuna_nombre" => "Chillán",
				"id_provincia" => 37
			],
			[
				"id" => 232,
				"comuna_nombre" => "Chillán Viejo",
				"id_provincia" => 37
			],
			[
				"id" => 233,
				"comuna_nombre" => "Cobquecura",
				"id_provincia" => 37
			],
			[
				"id" => 234,
				"comuna_nombre" => "Coelemu",
				"id_provincia" => 37
			],
			[
				"id" => 235,
				"comuna_nombre" => "Coihueco",
				"id_provincia" => 37
			],
			[
				"id" => 236,
				"comuna_nombre" => "El Carmen",
				"id_provincia" => 37
			],
			[
				"id" => 237,
				"comuna_nombre" => "Ninhue",
				"id_provincia" => 37
			],
			[
				"id" => 238,
				"comuna_nombre" => "Ñiquen",
				"id_provincia" => 37
			],
			[
				"id" => 239,
				"comuna_nombre" => "Pemuco",
				"id_provincia" => 37
			],
			[
				"id" => 240,
				"comuna_nombre" => "Pinto",
				"id_provincia" => 37
			],
			[
				"id" => 241,
				"comuna_nombre" => "Portezuelo",
				"id_provincia" => 37
			],
			[
				"id" => 242,
				"comuna_nombre" => "Quillón",
				"id_provincia" => 37
			],
			[
				"id" => 243,
				"comuna_nombre" => "Quirihue",
				"id_provincia" => 37
			],
			[
				"id" => 244,
				"comuna_nombre" => "Ránquil",
				"id_provincia" => 37
			],
			[
				"id" => 245,
				"comuna_nombre" => "San Carlos",
				"id_provincia" => 37
			],
			[
				"id" => 246,
				"comuna_nombre" => "San Fabián",
				"id_provincia" => 37
			],
			[
				"id" => 247,
				"comuna_nombre" => "San Ignacio",
				"id_provincia" => 37
			],
			[
				"id" => 248,
				"comuna_nombre" => "San Nicolás",
				"id_provincia" => 37
			],
			[
				"id" => 249,
				"comuna_nombre" => "Treguaco",
				"id_provincia" => 37
			],
			[
				"id" => 250,
				"comuna_nombre" => "Yungay",
				"id_provincia" => 37
			],
			[
				"id" => 251,
				"comuna_nombre" => "Carahue",
				"id_provincia" => 38
			],
			[
				"id" => 252,
				"comuna_nombre" => "Cholchol",
				"id_provincia" => 38
			],
			[
				"id" => 253,
				"comuna_nombre" => "Cunco",
				"id_provincia" => 38
			],
			[
				"id" => 254,
				"comuna_nombre" => "Curarrehue",
				"id_provincia" => 38
			],
			[
				"id" => 255,
				"comuna_nombre" => "Freire",
				"id_provincia" => 38
			],
			[
				"id" => 256,
				"comuna_nombre" => "Galvarino",
				"id_provincia" => 38
			],
			[
				"id" => 257,
				"comuna_nombre" => "Gorbea",
				"id_provincia" => 38
			],
			[
				"id" => 258,
				"comuna_nombre" => "Lautaro",
				"id_provincia" => 38
			],
			[
				"id" => 259,
				"comuna_nombre" => "Loncoche",
				"id_provincia" => 38
			],
			[
				"id" => 260,
				"comuna_nombre" => "Melipeuco",
				"id_provincia" => 38
			],
			[
				"id" => 261,
				"comuna_nombre" => "Nueva Imperial",
				"id_provincia" => 38
			],
			[
				"id" => 262,
				"comuna_nombre" => "Padre Las Casas",
				"id_provincia" => 38
			],
			[
				"id" => 263,
				"comuna_nombre" => "Perquenco",
				"id_provincia" => 38
			],
			[
				"id" => 264,
				"comuna_nombre" => "Pitrufquén",
				"id_provincia" => 38
			],
			[
				"id" => 265,
				"comuna_nombre" => "Pucón",
				"id_provincia" => 38
			],
			[
				"id" => 266,
				"comuna_nombre" => "Saavedra",
				"id_provincia" => 38
			],
			[
				"id" => 267,
				"comuna_nombre" => "Temuco",
				"id_provincia" => 38
			],
			[
				"id" => 268,
				"comuna_nombre" => "Teodoro Schmidt",
				"id_provincia" => 38
			],
			[
				"id" => 269,
				"comuna_nombre" => "Toltén",
				"id_provincia" => 38
			],
			[
				"id" => 270,
				"comuna_nombre" => "Vilcún",
				"id_provincia" => 38
			],
			[
				"id" => 271,
				"comuna_nombre" => "Villarrica",
				"id_provincia" => 38
			],
			[
				"id" => 272,
				"comuna_nombre" => "Angol",
				"id_provincia" => 39
			],
			[
				"id" => 273,
				"comuna_nombre" => "Collipulli",
				"id_provincia" => 39
			],
			[
				"id" => 274,
				"comuna_nombre" => "Curacautín",
				"id_provincia" => 39
			],
			[
				"id" => 275,
				"comuna_nombre" => "Ercilla",
				"id_provincia" => 39
			],
			[
				"id" => 276,
				"comuna_nombre" => "Lonquimay",
				"id_provincia" => 39
			],
			[
				"id" => 277,
				"comuna_nombre" => "Los Sauces",
				"id_provincia" => 39
			],
			[
				"id" => 278,
				"comuna_nombre" => "Lumaco",
				"id_provincia" => 39
			],
			[
				"id" => 279,
				"comuna_nombre" => "Purén",
				"id_provincia" => 39
			],
			[
				"id" => 280,
				"comuna_nombre" => "Renaico",
				"id_provincia" => 39
			],
			[
				"id" => 281,
				"comuna_nombre" => "Traiguén",
				"id_provincia" => 39
			],
			[
				"id" => 282,
				"comuna_nombre" => "Victoria",
				"id_provincia" => 39
			],
			[
				"id" => 283,
				"comuna_nombre" => "Corral",
				"id_provincia" => 40
			],
			[
				"id" => 284,
				"comuna_nombre" => "Lanco",
				"id_provincia" => 40
			],
			[
				"id" => 285,
				"comuna_nombre" => "Los Lagos",
				"id_provincia" => 40
			],
			[
				"id" => 286,
				"comuna_nombre" => "Máfil",
				"id_provincia" => 40
			],
			[
				"id" => 287,
				"comuna_nombre" => "Mariquina",
				"id_provincia" => 40
			],
			[
				"id" => 288,
				"comuna_nombre" => "Paillaco",
				"id_provincia" => 40
			],
			[
				"id" => 289,
				"comuna_nombre" => "Panguipulli",
				"id_provincia" => 40
			],
			[
				"id" => 290,
				"comuna_nombre" => "Valdivia",
				"id_provincia" => 40
			],
			[
				"id" => 291,
				"comuna_nombre" => "Futrono",
				"id_provincia" => 41
			],
			[
				"id" => 292,
				"comuna_nombre" => "La Unión",
				"id_provincia" => 41
			],
			[
				"id" => 293,
				"comuna_nombre" => "Lago Ranco",
				"id_provincia" => 41
			],
			[
				"id" => 294,
				"comuna_nombre" => "Río Bueno",
				"id_provincia" => 41
			],
			[
				"id" => 295,
				"comuna_nombre" => "Ancud",
				"id_provincia" => 42
			],
			[
				"id" => 296,
				"comuna_nombre" => "Castro",
				"id_provincia" => 42
			],
			[
				"id" => 297,
				"comuna_nombre" => "Chonchi",
				"id_provincia" => 42
			],
			[
				"id" => 298,
				"comuna_nombre" => "Curaco de Vélez",
				"id_provincia" => 42
			],
			[
				"id" => 299,
				"comuna_nombre" => "Dalcahue",
				"id_provincia" => 42
			],
			[
				"id" => 300,
				"comuna_nombre" => "Puqueldón",
				"id_provincia" => 42
			],
			[
				"id" => 301,
				"comuna_nombre" => "Queilén",
				"id_provincia" => 42
			],
			[
				"id" => 302,
				"comuna_nombre" => "Quemchi",
				"id_provincia" => 42
			],
			[
				"id" => 303,
				"comuna_nombre" => "Quellón",
				"id_provincia" => 42
			],
			[
				"id" => 304,
				"comuna_nombre" => "Quinchao",
				"id_provincia" => 42
			],
			[
				"id" => 305,
				"comuna_nombre" => "Calbuco",
				"id_provincia" => 43
			],
			[
				"id" => 306,
				"comuna_nombre" => "Cochamó",
				"id_provincia" => 43
			],
			[
				"id" => 307,
				"comuna_nombre" => "Fresia",
				"id_provincia" => 43
			],
			[
				"id" => 308,
				"comuna_nombre" => "Frutillar",
				"id_provincia" => 43
			],
			[
				"id" => 309,
				"comuna_nombre" => "Llanquihue",
				"id_provincia" => 43
			],
			[
				"id" => 310,
				"comuna_nombre" => "Los Muermos",
				"id_provincia" => 43
			],
			[
				"id" => 311,
				"comuna_nombre" => "Maullín",
				"id_provincia" => 43
			],
			[
				"id" => 312,
				"comuna_nombre" => "Puerto Montt",
				"id_provincia" => 43
			],
			[
				"id" => 313,
				"comuna_nombre" => "Puerto Varas",
				"id_provincia" => 43
			],
			[
				"id" => 314,
				"comuna_nombre" => "Osorno",
				"id_provincia" => 44
			],
			[
				"id" => 315,
				"comuna_nombre" => "Puero Octay",
				"id_provincia" => 44
			],
			[
				"id" => 316,
				"comuna_nombre" => "Purranque",
				"id_provincia" => 44
			],
			[
				"id" => 317,
				"comuna_nombre" => "Puyehue",
				"id_provincia" => 44
			],
			[
				"id" => 318,
				"comuna_nombre" => "Río Negro",
				"id_provincia" => 44
			],
			[
				"id" => 319,
				"comuna_nombre" => "San Juan de la Costa",
				"id_provincia" => 44
			],
			[
				"id" => 320,
				"comuna_nombre" => "San Pablo",
				"id_provincia" => 44
			],
			[
				"id" => 321,
				"comuna_nombre" => "Chaitén",
				"id_provincia" => 45
			],
			[
				"id" => 322,
				"comuna_nombre" => "Futaleufú",
				"id_provincia" => 45
			],
			[
				"id" => 323,
				"comuna_nombre" => "Hualaihué",
				"id_provincia" => 45
			],
			[
				"id" => 324,
				"comuna_nombre" => "Palena",
				"id_provincia" => 45
			],
			[
				"id" => 325,
				"comuna_nombre" => "Aisén",
				"id_provincia" => 46
			],
			[
				"id" => 326,
				"comuna_nombre" => "Cisnes",
				"id_provincia" => 46
			],
			[
				"id" => 327,
				"comuna_nombre" => "Guaitecas",
				"id_provincia" => 46
			],
			[
				"id" => 328,
				"comuna_nombre" => "Cochrane",
				"id_provincia" => 47
			],
			[
				"id" => 329,
				"comuna_nombre" => "O'higgins",
				"id_provincia" => 47
			],
			[
				"id" => 330,
				"comuna_nombre" => "Tortel",
				"id_provincia" => 47
			],
			[
				"id" => 331,
				"comuna_nombre" => "Coihaique",
				"id_provincia" => 48
			],
			[
				"id" => 332,
				"comuna_nombre" => "Lago Verde",
				"id_provincia" => 48
			],
			[
				"id" => 333,
				"comuna_nombre" => "Chile Chico",
				"id_provincia" => 49
			],
			[
				"id" => 334,
				"comuna_nombre" => "Río Ibáñez",
				"id_provincia" => 49
			],
			[
				"id" => 335,
				"comuna_nombre" => "Antártica",
				"id_provincia" => 50
			],
			[
				"id" => 336,
				"comuna_nombre" => "Cabo de Hornos",
				"id_provincia" => 50
			],
			[
				"id" => 337,
				"comuna_nombre" => "Laguna Blanca",
				"id_provincia" => 51
			],
			[
				"id" => 338,
				"comuna_nombre" => "Punta Arenas",
				"id_provincia" => 51
			],
			[
				"id" => 339,
				"comuna_nombre" => "Río Verde",
				"id_provincia" => 51
			],
			[
				"id" => 340,
				"comuna_nombre" => "San Gregorio",
				"id_provincia" => 51
			],
			[
				"id" => 341,
				"comuna_nombre" => "Porvenir",
				"id_provincia" => 52
			],
			[
				"id" => 342,
				"comuna_nombre" => "Primavera",
				"id_provincia" => 52
			],
			[
				"id" => 343,
				"comuna_nombre" => "Timaukel",
				"id_provincia" => 52
			],
			[
				"id" => 344,
				"comuna_nombre" => "Natales",
				"id_provincia" => 53
			],
			[
				"id" => 345,
				"comuna_nombre" => "Torres del Paine",
				"id_provincia" => 53
			]
		);
		DB::table('comunas')->insert($comunas);
    }
}
