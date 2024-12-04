<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederMedioCampanaFaldones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medio_campana_faldones')->insert([
            ['nombre'=>'INTERNAS' , 'descripcion'=>'', 'created_at' => '15/04/21','updated_at' => '15/04/21']
        ]);
    }
}
