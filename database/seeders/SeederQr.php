<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederQr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('qr')->insert([
            ['id' =>1 , 'nombre'=>'Si' , 'descripcion'=>'QR activo'  , 'id_usuario_crear'=>1 , 'id_usuario_modifica'=>1, 'created_at' => '15/04/21','updated_at' => '15/04/21'],
            ['id' =>2 , 'nombre'=>'No' , 'descripcion'=>'QR inactivo'  , 'id_usuario_crear'=>1 , 'id_usuario_modifica'=>1, 'created_at' => '15/04/21','updated_at' => '15/04/21'],
        ]);
    }
}
