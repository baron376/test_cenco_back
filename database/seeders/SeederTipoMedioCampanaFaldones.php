<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederTipoMedioCampanaFaldones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_medio_campana_faldones')->insert([
            ['nombre'=>'PRUEBAS' , 'descripcion'=>'', 'created_at' => '15/04/21','updated_at' => '15/04/21']
        ]);
    }
}
