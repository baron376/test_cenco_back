<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederEstatusArchivosFaldones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estatus_archivos_faldones')->insert([
            ['id' =>1 , 'nombre'=>'Activo' , 'descripcion'=>'Archivo Activo'  , 'id_usuario_crear'=>1 , 'id_usuario_modifica'=>1, 'created_at' => '15/04/21','updated_at' => '15/04/21'],
            ['id' =>2 , 'nombre'=>'Inactivo' , 'descripcion'=>'Archivo Inactivo'  , 'id_usuario_crear'=>1 , 'id_usuario_modifica'=>1, 'created_at' => '15/04/21','updated_at' => '15/04/21'],
        ]);
    }
}
