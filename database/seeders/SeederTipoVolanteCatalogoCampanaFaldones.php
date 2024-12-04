<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederTipoVolanteCatalogoCampanaFaldones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_volante_catalogo_campana_faldones')->insert([
            ['nombre'=>'ELECTRO' , 'descripcion'=>'', 'created_at' => '15/04/21','updated_at' => '15/04/21'],
            ['nombre'=>'ELECTRÓNICA' , 'descripcion'=>'', 'created_at' => '15/04/21','updated_at' => '15/04/21'],
            ['nombre'=>'NUEVAS TECNOLOGÍAS' , 'descripcion'=>'', 'created_at' => '15/04/21','updated_at' => '15/04/21']
        ]);
    }
}
