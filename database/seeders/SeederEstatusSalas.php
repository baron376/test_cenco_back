<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederEstatusSalas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estatus_salas')->insert([
            ['id' =>1 , 'nombre'=>'Activa' , 'descripcion'=>' salas Activas '  , 'id_usuario_crear'=>1 , 'id_usuario_modifica'=>1, 'created_at' => '15/04/21','updated_at' => '15/04/21'],
            ['id' =>2 , 'nombre'=>'Inactiva' , 'descripcion'=>' salas inactivas '  , 'id_usuario_crear'=>1 , 'id_usuario_modifica'=>1, 'created_at' => '15/04/21','updated_at' => '15/04/21'],
        ]);
    }
}
