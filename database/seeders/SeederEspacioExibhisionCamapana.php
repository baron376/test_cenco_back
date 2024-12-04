<?php

namespace Database\Seeders;

use App\Models\EspacioExibhisionCamapana;
use App\Models\SeccionEspacio;
use App\Models\SubSeccion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederEspacioExibhisionCamapana extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nuevosEspacios = $this->getNuevosEspacios();
        $nuevosEspaciosIds = [];

        /**
         * Por alguna razon desconocida el modelo EspacioExibhisionCamapana no hace
         * las consultas o ejecuta correctamente los where siempre entregando null a
         * criterios que si tienen resultados.
         */
        DB::table('espacio_exhibicion')->whereNull('deleted_at')->update([
            'deleted_at' => (new \DateTime('now')),
        ]);

        foreach ($nuevosEspacios as $excelId => $nombreNuevoEspacio) {
            $nombreNuevoEspacio = trim($nombreNuevoEspacio);
            $espacio = DB::table('espacio_exhibicion')->where('nombre', $nombreNuevoEspacio)->first();

            $id = null;
            if ($espacio === null) {
                $id = DB::table('espacio_exhibicion')->insertGetId([
                    'nombre' => $nombreNuevoEspacio,
                    'descripcion' => $nombreNuevoEspacio,
                    'created_at' => (new \DateTime('now')),
                    'updated_at' => (new \DateTime('now')),
                    'deleted_at' => null,
                ]);
            } else {
                DB::table('espacio_exhibicion')->where('id', $espacio->id)->update([
                    'deleted_at' => null,
                ]);

                $id = $espacio->id;
            }

            $nuevosEspaciosIds[$excelId] = $id;
        }

        $nuevasSecciones = $this->getNuevasSecciones();
        $nuevasSeccionesIds = [];

        DB::table('secciones')->whereNull('deleted_at')->update([
            'deleted_at' => (new \DateTime('now')),
        ]);

        foreach ($nuevasSecciones as $excelId => $nombreNuevaSeccion) {
            $nombreNuevaSeccion = trim($nombreNuevaSeccion);
            $seccion = DB::table('secciones')->where('nombre', 'LIKE', $nombreNuevaSeccion)->first();

            $id = null;
            if ($seccion === null) {
                $id = DB::table('secciones')->insertGetId([
                    'descripcion' => $nombreNuevaSeccion,
                    'nombre' => $nombreNuevaSeccion,
                    'id_estatus_secciones' => 1,
                    'created_at' => (new \DateTime('now')),
                    'updated_at' => (new \DateTime('now')),
                    'deleted_at' => null,
                ]);
            } else {
                DB::table('secciones')->where('id', $seccion->id)->update([
                    'deleted_at' => null,
                ]);

                $id = $seccion->id;
            }

            $nuevasSeccionesIds[$excelId] = $id;
        }

        // SeccionEspacio
        DB::table('seccion_espacio')->whereNull('deleted_at')->update([
            'deleted_at' => (new \DateTime('now')),
        ]);

        $relationships = $this->getRelationship();
        $seccionEspacioIds = [];

        foreach ($relationships as $excelSubSeccionId => $ids) {
            $idEspacio = $nuevosEspaciosIds[$ids[0]];
            $idSeccion = $nuevasSeccionesIds[$ids[1]];

            $seccionEspacio = DB::table('seccion_espacio')->where('id_espacio', $idEspacio)->where('id_seccion', $idSeccion)->first();

            $id = null;
            if ($seccionEspacio === null) {
                $id = DB::table('seccion_espacio')->insertGetId([
                    'id_espacio' => $idEspacio,
                    'id_seccion' => $idSeccion,
                    'created_at' => (new \DateTime('now')),
                    'updated_at' => (new \DateTime('now')),
                    'deleted_at' => null,
                ]);
            } else {
                DB::table('seccion_espacio')->where('id', $seccionEspacio->id)->update([
                    'deleted_at' => null,
                ]);

                $id = $seccionEspacio->id;
            }

            $seccionEspacioIds[$excelSubSeccionId] = [
                'id' => $id,
                'id_espacio' => $idEspacio,
                'id_espacio' => $idSeccion,
            ];
        }
        // SeccionEspacio

        $nuevasSubSecciones = $this->getSubSecciones();
        $nuevasSubSeccionesIds = [];

        SubSeccion::whereNull('deleted_at')->update([
            'deleted_at' => (new \DateTime('now')),
        ]);

        $relationships = $this->getRelationship();

        foreach ($nuevasSubSecciones as $excelId => $nombreNuevaSeccion) {
            $nombreNuevaSeccion = trim($nombreNuevaSeccion);

            $seccionId = $nuevasSeccionesIds[$relationships[$excelId][1]];

            $subSeccion = SubSeccion::updateOrCreate([
                'nombre' => $nombreNuevaSeccion,
                'seccion_id' => $seccionId,
            ], [
                'nombre' => $nombreNuevaSeccion,
                'seccion_id' => $seccionId,
                'deleted_at' => null,
            ]);

            $nuevasSubSeccionesIds[$excelId] = $subSeccion->id;
        }

        // php artisan db:seed --class=SeederEspacioExibhisionCamapana

        /**
         * Establecer la columna cdg_int en SECXX por retrocompatibilidad.
         */
        DB::table('secciones')
            ->whereNull('cdg_int')
            ->update([
                'cdg_int' => DB::raw("CONCAT('SEC', LPAD(id, 2, '0'))"),
            ]);
    }

    public function getNuevosEspacios(): array
    {
        return [
            1 => 'PERECIBLE',
            2 => 'CONSUMO MASIVO',
            3 => 'NON FOOD',
            4 => 'IN STORE MEDIA',
        ];
    }

    public function getNuevasSecciones(): array
    {
        return [
            1 => 'PERFUMERIA',
            2 => 'LIMPIEZA',
            3 => 'ALMACEN',
            4 => 'DESAYUNO',
            5 => 'GALLETAS Y SNACK',
            6 => 'BEBESTIBLES',
            7 => 'VINOS Y LICORES',
            8 => 'LACTEOS I',
            9 => 'LACTEOS II',
            10 => 'FIAMBRES Y QUESOS',
            11 => 'CONGELADOS',
            12 => 'PANADERIA Y PASTELERIA',
            13 => 'CARNES',
            14 => 'MASCOTAS',
            15 => 'NON FOOD',
            16 => 'VEGETALES',
            17 => 'MUNDO BIO',
            18 => 'IN STORE MEDIA',
        ];
    }

    public function getSubSecciones(): array
    {
        return [
            1 => 'CAPILAR',
            2 => 'DENTAL',
            3 => 'PAÑAL BEBE',
            4 => 'CREMAS',
            5 => 'TINTUTAS',
            6 => 'ACCESORIOS / MAQUILLAJE',
            7 => 'PERFUMERIA BEBE',
            8 => 'HOMBRE',
            9 => 'FARMACIA',
            10 => 'TOALLAS FEMENINAS',
            11 => 'PAÑAL ADULTO',
            12 => 'JABONES',
            13 => 'PAPEL HIGENICO',
            14 => 'DETERGENTE',
            15 => 'LAVALOZAS ',
            16 => 'AEROSOLES / INSECTICIDAS',
            17 => 'PISO',
            18 => 'CLORO',
            19 => 'SERVILLETAS Y TOALLAS NOVA',
            20 => 'ACCESORIOS DE LIMPIEZA',
            21 => 'CONSERVAS / LEGUMBRES',
            22 => 'PASTAS / SALSAS',
            23 => 'ARROZ',
            24 => 'ACEITES / SAL',
            25 => 'COLADOS / LECHE EN POLVO',
            26 => 'HARINA / PASTELERIA Y REPOSTERIA',
            27 => 'TÉ/ CAFÉ',
            28 => 'AZUCAR / MERMELADAS',
            29 => 'CEREALES',
            30 => 'BARRAS DE CEREAL',
            31 => 'GALLETAS',
            32 => 'DULCES / CHOCOLATES',
            33 => 'SALSAS Y CONDIMENTOS',
            34 => 'SNACK / COCTAIL',
            35 => 'AGUAS',
            36 => 'JUGOS NECTAR',
            37 => 'ISOTONICAS',
            38 => 'BEBIDAS NEGRAS',
            39 => 'BEBIDAS FANTASIA',
            40 => 'CERVEZA ',
            41 => 'VINOS',
            42 => 'LICORES',
            43 => 'ESPUMANTE',
            44 => 'DESTILADOS',
            45 => 'LECHE',
            46 => 'MANJAR',
            47 => 'HUEVOS',
            48 => 'JUGOS / LECHES VEGETALES',
            49 => 'YOGURT',
            50 => 'PASTRES',
            51 => 'MANTEQUILLAS',
            52 => 'CREMAS',
            53 => 'EMBUTIDOS / JAMONES',
            54 => 'SALCHICHAS',
            55 => 'QUESOS',
            56 => 'HORTALIZAS, FFVV, ETC',
            57 => 'HAMBURGUESAS, PIZZAS, ETC',
            58 => 'PLATOS PREPARADOS',
            59 => 'HELADOS Y POSTRES',
            60 => 'PANADERIA',
            61 => 'PASTELERIA',
            62 => 'POLLO',
            63 => 'CERDO',
            64 => 'PESCADO',
            65 => 'CARNE',
            66 => 'PERROS',
            67 => 'GATOS',
            68 => 'FERRETERIA/MENAJE',
            69 => 'LIBRERÍA / LIBROS',
            70 => 'CUADERNOS',
            71 => 'COTILLON',
            72 => 'JUEGOS DE MESA',
            73 => 'JUGUETERIA / JUEGOS',
            74 => 'FRUTAS',
            75 => 'FRUTOS SECOS',
            76 => 'VERDURAS',
            77 => 'LOW CARB/SIN AZUCAR/ECO Y PET FRIENDLY',
            78 => 'VEGANO/SIN GLUTEN/NATURAL/ORGANICO',
            79 => 'SIN ALERGENO/LACTEOS/SUPLEMENTOS',
            80 => 'IN STORE MEDIA',
        ];
    }

    public function getRelationship(): array
    {
        return [
            1 => [2, 1],
            2 => [2, 1],
            3 => [2, 1],
            4 => [2, 1],
            5 => [2, 1],
            6 => [2, 1],
            7 => [2, 1],
            8 => [2, 1],
            9 => [2, 1],
            10 => [2, 1],
            11 => [2, 1],
            12 => [2, 1],
            13 => [2, 2],
            14 => [2, 2],
            15 => [2, 2],
            16 => [2, 2],
            17 => [2, 2],
            18 => [2, 2],
            19 => [2, 2],
            20 => [2, 2],
            21 => [2, 3],
            22 => [2, 3],
            23 => [2, 3],
            24 => [2, 3],
            25 => [2, 3],
            26 => [2, 3],
            27 => [2, 4],
            28 => [2, 4],
            29 => [2, 4],
            30 => [2, 4],
            31 => [2, 5],
            32 => [2, 5],
            33 => [2, 5],
            34 => [2, 5],
            35 => [2, 6],
            36 => [2, 6],
            37 => [2, 6],
            38 => [2, 6],
            39 => [2, 6],
            40 => [2, 6],
            41 => [2, 7],
            42 => [2, 7],
            43 => [2, 7],
            44 => [2, 7],
            45 => [1, 8],
            46 => [1, 8],
            47 => [1, 8],
            48 => [1, 8],
            49 => [1, 9],
            50 => [1, 9],
            51 => [1, 9],
            52 => [1, 9],
            53 => [1, 10],
            54 => [1, 10],
            55 => [1, 10],
            56 => [1, 11],
            57 => [1, 11],
            58 => [1, 11],
            59 => [1, 11],
            60 => [1, 12],
            61 => [1, 12],
            62 => [1, 13],
            63 => [1, 13],
            64 => [1, 13],
            65 => [1, 13],
            66 => [2, 14],
            67 => [2, 14],
            68 => [3, 15],
            69 => [3, 15],
            70 => [3, 15],
            71 => [3, 15],
            72 => [3, 15],
            73 => [3, 15],
            74 => [1, 16],
            75 => [2, 16],
            76 => [3, 16],
            77 => [3, 17],
            78 => [3, 17],
            79 => [3, 17],
            80 => [4, 18],
        ];
    }
}
