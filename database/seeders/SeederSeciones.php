<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederSeciones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $secciones = [
            [
                "id" => 1,
                "numero" => 1,
                "cdg_int" => "SEC01",
                "descripcion" => "PANIFICADOS",
                "nombre" => "PANIFICADOS",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2,
                "numero" => 2,
                "cdg_int" => "SEC02",
                "descripcion" => "FIAMBRERIA",
                "nombre" => "FIAMBRERIA",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 3,
                "numero" => 3,
                "cdg_int" => "SEC03",
                "descripcion" => "LACTEOS",
                "nombre" => "LACTEOS",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 4,
                "numero" => 4,
                "cdg_int" => "SEC04",
                "descripcion" => "PESCADERIA",
                "nombre" => "PESCADERIA",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 5,
                "numero" => 5,
                "cdg_int" => "SEC05",
                "descripcion" => "CARNICERIA",
                "nombre" => "CARNICERIA",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 6,
                "numero" => 6,
                "cdg_int" => "SEC06",
                "descripcion" => "FRUTAS Y VERDURAS",
                "nombre" => "FRUTAS Y VERDURAS",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 7,
                "numero" => 7,
                "cdg_int" => "SEC07",
                "descripcion" => "ALMACEN",
                "nombre" => "ALMACEN",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 8,
                "numero" => 8,
                "cdg_int" => "SEC08",
                "descripcion" => "VINOS",
                "nombre" => "VINOS",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 9,
                "numero" => 9,
                "cdg_int" => "SEC09",
                "descripcion" => "ENVASES",
                "nombre" => "ENVASES",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 10,
                "numero" => 10,
                "cdg_int" => "SEC10",
                "descripcion" => "GALLETAS Y GOLOSINAS",
                "nombre" => "GALLETAS Y GOLOSINAS",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 11,
                "numero" => 11,
                "cdg_int" => "SEC11",
                "descripcion" => "COCKTAIL",
                "nombre" => "COCKTAIL",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 12,
                "numero" => 12,
                "cdg_int" => "SEC12",
                "descripcion" => "CAMA, BAÑO, KIDS, MALETAS",
                "nombre" => "CAMA, BAÑO, KIDS, MALETAS",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 13,
                "numero" => 13,
                "cdg_int" => "SEC13",
                "descripcion" => "FERRETERIA",
                "nombre" => "FERRETERIA",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 14,
                "numero" => 14,
                "cdg_int" => "SEC14",
                "descripcion" => "PERFUMERÍA",
                "nombre" => "PERFUMERÍA",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 15,
                "numero" => 15,
                "cdg_int" => "SEC15",
                "descripcion" => "JUGUETERÍA",
                "nombre" => "JUGUETERÍA",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 16,
                "numero" => 16,
                "cdg_int" => "SEC16",
                "descripcion" => "COCINA",
                "nombre" => "COCINA",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 17,
                "numero" => 17,
                "cdg_int" => "SEC17",
                "descripcion" => "PASTAS",
                "nombre" => "PASTAS",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 18,
                "numero" => 18,
                "cdg_int" => "SEC18",
                "descripcion" => "LIMPIEZA",
                "nombre" => "LIMPIEZA",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 19,
                "numero" => 19,
                "cdg_int" => "SEC19",
                "descripcion" => "LIBRERÍA",
                "nombre" => "LIBRERÍA",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 20,
                "numero" => 20,
                "cdg_int" => "SEC20",
                "descripcion" => "CONGELADOS",
                "nombre" => "CONGELADOS",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 21,
                "numero" => 21,
                "cdg_int" => "SEC21",
                "descripcion" => "FARMACIA",
                "nombre" => "FARMACIA",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 22,
                "numero" => 22,
                "cdg_int" => "SEC22",
                "descripcion" => "POLLOS",
                "nombre" => "POLLOS",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 23,
                "numero" => 23,
                "cdg_int" => "SEC23",
                "descripcion" => "DEPORTES \/TIEMPO LIBRE",
                "nombre" => "DEPORTES \/TIEMPO LIBRE",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 24,
                "numero" => 24,
                "cdg_int" => "SEC24",
                "descripcion" => "PILETAS Y PARRILLAS",
                "nombre" => "PILETAS Y PARRILLAS",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 25,
                "numero" => 25,
                "cdg_int" => "SEC25",
                "descripcion" => "QUESERÍA",
                "nombre" => "QUESERÍA",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 26,
                "numero" => 26,
                "cdg_int" => "SEC26",
                "descripcion" => "BOTILLERÍA\/GASEOSAS",
                "nombre" => "BOTILLERÍA\/GASEOSAS",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 27,
                "numero" => 27,
                "cdg_int" => "SEC27",
                "descripcion" => "TEXTIL VESTUARIO",
                "nombre" => "TEXTIL VESTUARIO",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 28,
                "numero" => 28,
                "cdg_int" => "SEC28",
                "descripcion" => "ROTISERÍA \/ PLATOS PREPARADOS",
                "nombre" => "ROTISERÍA \/ PLATOS PREPARADOS",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 29,
                "numero" => 29,
                "cdg_int" => "SEC29",
                "descripcion" => "LICORES",
                "nombre" => "LICORES",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 30,
                "numero" => 31,
                "cdg_int" => "SEC31",
                "descripcion" => "SNACK BAR\/ CAFETERÍA",
                "nombre" => "SNACK BAR\/ CAFETERÍA",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 31,
                "numero" => 32,
                "cdg_int" => "SEC32",
                "descripcion" => "PASTELERIA",
                "nombre" => "PASTELERIA",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 32,
                "numero" => 33,
                "cdg_int" => "SEC33",
                "descripcion" => "ELECTRÓNICA",
                "nombre" => "ELECTRÓNICA",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 33,
                "numero" => 35,
                "cdg_int" => "SEC35",
                "descripcion" => "PANADERÍA PROPIA",
                "nombre" => "PANADERÍA PROPIA",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 34,
                "numero" => 36,
                "cdg_int" => "SEC36",
                "descripcion" => "FABRICA FIAMBRES",
                "nombre" => "FABRICA FIAMBRES",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 35,
                "numero" => 37,
                "cdg_int" => "SEC37",
                "descripcion" => "RESTAURANT",
                "nombre" => "RESTAURANT",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 36,
                "numero" => 38,
                "cdg_int" => "SEC38",
                "descripcion" => "MASCOTAS",
                "nombre" => "MASCOTAS",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 37,
                "numero" => 39,
                "cdg_int" => "SEC39",
                "descripcion" => "ELECTROHOGAR",
                "nombre" => "ELECTROHOGAR",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 38,
                "numero" => 41,
                "cdg_int" => "SEC41",
                "descripcion" => "MESA Y TERRAZA",
                "nombre" => "MESA Y TERRAZA",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 39,
                "numero" => 42,
                "cdg_int" => "SEC42",
                "descripcion" => "DECO ORGANIZACIÓN",
                "nombre" => "DECO ORGANIZACIÓN",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 40,
                "numero" => 46,
                "cdg_int" => "SEC46",
                "descripcion" => "AUTOMOTOR",
                "nombre" => "AUTOMOTOR",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 41,
                "numero" => 47,
                "cdg_int" => "SEC47",
                "descripcion" => "MUEBLES",
                "nombre" => "MUEBLES",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 42,
                "numero" => 52,
                "cdg_int" => "SEC52",
                "descripcion" => "JARDÍN",
                "nombre" => "JARDÍN",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 43,
                "numero" => 53,
                "cdg_int" => "SEC53",
                "descripcion" => "ACCESORIOS DEJARDÍN",
                "nombre" => "ACCESORIOS DEJARDÍN",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 44,
                "numero" => 54,
                "cdg_int" => "SEC54",
                "descripcion" => "ELECTRODOMÉSTICOS",
                "nombre" => "ELECTRODOMÉSTICOS",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 45,
                "numero" => 55,
                "cdg_int" => "SEC55",
                "descripcion" => "NUEVAS TECNOLOGIAS",
                "nombre" => "NUEVAS TECNOLOGIAS",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 46,
                "numero" => 66,
                "cdg_int" => "SEC66",
                "descripcion" => "CERDO Y CORDERO",
                "nombre" => "CERDO Y CORDERO",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 47,
                "numero" => 69,
                "cdg_int" => "SEC69",
                "descripcion" => "PDTOS EXCENTOS",
                "nombre" => "PDTOS EXCENTOS",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 48,
                "numero" => 79,
                "cdg_int" => "SEC79",
                "descripcion" => "SER.VENTAS X CAJAS",
                "nombre" => "SER.VENTAS X CAJAS",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 49,
                "numero" => 85,
                "cdg_int" => "SEC85",
                "descripcion" => "SERVICIOS",
                "nombre" => "SERVICIOS",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 50,
                "numero" => 88,
                "cdg_int" => "SEC88",
                "descripcion" => "VENTA TELEFONICA",
                "nombre" => "VENTA TELEFONICA",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ],
            [
                "id" => 51,
                "numero" => 90,
                "cdg_int" => "SEC90",
                "descripcion" => "VARIOS",
                "nombre" => "VARIOS",
                "id_estatus_secciones" => 1,
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => 1,
                'created_at' =>'15/04/21',
                "updated_at" => null,
                "deleted_at" => null
            ]
        ];

        DB::table('secciones')->insert($secciones);
    }
}