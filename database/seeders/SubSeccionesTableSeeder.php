<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Secciones;

class SubSeccionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            'PERFUMERIA' => [
                'CAPILAR',
                'DENTAL',
                'PAÑAL BEBE',
                'CREMAS',
                'TINTUTAS',
                'ACCESORIOS / MAQUILLAJE',
                'PERFUMERIA BEBE',
                'HOMBRE',
                'FARMACIA',
                'TOALLAS FEMENINAS',
                'PAÑAL ADULTO',
                'JABONES',
                'ACTIVACION'
            ],
            'LIMPIEZA' => [
                'PAPEL HIGENICO',
                'DETERGENTE',
                'LAVALOZAS',
                'AEROSOLES / INSECTICIDAS',
                'PISO',
                'CLORO',
                'SERVILLETAS Y TOALLAS NOVA',
                'ACCESORIOS DE LIMPIEZA',
                'ACTIVACION'
            ],
            // AÑADE LAS DEMÁS SECCIONES Y CATEGORÍAS AQUÍ
            'ALMACEN' => [
                'CONSERVAS / LEGUMBRES',
                'PASTAS / SALSAS',
                'ARROZ',
                'ACEITES / SAL',
                'COLADOS / LECHE EN POLVO',
                'HARINA / PASTELERIA Y REPOSTERIA',
                'ACTIVACION'
            ],
            'DESAYUNO' => [
                'TÉ/ CAFÉ',
                'AZUCAR / MERMELADAS',
                'CEREALES',
                'BARRAS DE CEREAL',
                'ACTIVACION'
            ],
            'GALLETAS Y SNACK' => [
                'GALLETAS',
                'DULCES / CHOCOLATES',
                'SALSAS Y CONDIMENTOS',
                'SNACK / COCTAIL',
                'ACTIVACION'
            ],
            'BEBESTIBLES' => [
                'AGUAS',
                'JUGOS NECTAR',
                'ISOTONICAS',
                'BEBIDAS NEGRAS',
                'BEBIDAS FANTASIA',
                'CERVEZA',
                'ACTIVACION'
            ],
            'VINOS Y LICORES' => [
                'VINOS',
                'LICORES',
                'ESPUMANTE',
                'DESTILADOS',
                'ACTIVACION'
            ],
            'LACTEOS I' => [
                'LECHE',
                'MANJAR',
                'HUEVOS',
                'JUGOS / LECHES VEGETALES',
                'ACTIVACION'
            ],
            'LACTEOS II' => [
                'YOGURT',
                'PASTRES',
                'MANTEQUILLAS',
                'CREMAS',
                'ACTIVACION'
            ],
            'FIAMBRES Y QUESOS' => [
                'EMBUTIDOS / JAMONES',
                'SALCHICHAS',
                'QUESOS',
                'ACTIVACION'
            ],
            'CONGELADOS' => [
                'HORTALIZAS, FFVV, ETC',
                'HAMBURGUESAS, PIZZAS, ETC',
                'PLATOS PREPARADOS',
                'HELADOS Y POSTRES',
                'ACTIVACION'
            ],
            'PANADERIA Y PASTELERIA' => [
                'PANADERIA',
                'PASTELERIA',
                'ACTIVACION'
            ],
            'CARNES' => [
                'POLLO',
                'CERDO',
                'PESCADO',
                'CARNE',
                'ACTIVACION'
            ],
            'MASCOTAS' => [
                'PERROS',
                'GATOS',
                'ACTIVACION'
            ],
            'NON FOOD' => [
                'FERRETERIA/MENAJE',
                'LIBRERÍA / LIBROS',
                'CUADERNOS',
                'COTILLON',
                'JUEGOS DE MESA',
                'JUGUETERIA / JUEGOS',
                'ACTIVACION'
            ],
            'VEGETALES' => [
                'FRUTAS',
                'FRUTOS SECOS',
                'VERDURAS',
                'ACTIVACION'
            ],
            'MUNDO BIO' => [
                'LOW CARB/SIN AZUCAR/ECO Y PET FRIENDLY',
                'VEGANO/SIN GLUTEN/NATURAL/ORGANICO',
                'SIN ALERGENO/LACTEOS/SUPLEMENTOS',
                'ACTIVACION'
            ],
        ];
        $secciones = Secciones::get();

                // Insertar categorías en la base de datos
        foreach ($categorias as $seccion_nombre => $categorias_array) {
            // Buscar la seccion correspondiente
            $seccion_nombre_normalizado = strtolower(Str::ascii($seccion_nombre));
            // Buscar la seccion correspondiente
            $seccion = $secciones->filter(function ($item) use ($seccion_nombre_normalizado) {
                return strtolower(Str::ascii($item->nombre)) === $seccion_nombre_normalizado;
            })->first();

            if ($seccion) {
                foreach ($categorias_array as $categoria_nombre) {
                    DB::table('sub_secciones')->insert([
                        'nombre' => $categoria_nombre,
                        'seccion_id' => $seccion->id,
                        'cdg_int_seccion' => $seccion->cdg_int,
                        'estatus' => true, // Ajusta el valor según tus necesidades
                        'created_at' => now(),
                    ]);
                }
            }
        }
    }
}
