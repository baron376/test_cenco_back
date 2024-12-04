<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederEstadoArchivosFaldones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados_archivos_faldones')->insert([
            ['id' =>1 , 'nombre'=>'REGISTRADO' , 'descripcion'=>'El archivo fue registrado exitosamente'  , 'id_usuario_crear'=>1 , 'id_usuario_modifica'=>1, 'created_at' => '15/04/21','updated_at' => '15/04/21'],
            ['id' =>2 , 'nombre'=>'IMPORTADO' , 'descripcion'=>'La data del archivo fue guardada exitosamente'  , 'id_usuario_crear'=>1 , 'id_usuario_modifica'=>1, 'created_at' => '15/04/21','updated_at' => '15/04/21'],
            ['id' =>3 , 'nombre'=>'VALIDANDO' , 'descripcion'=>'Data del archivo se esta validando'  , 'id_usuario_crear'=>1 , 'id_usuario_modifica'=>1, 'created_at' => '15/04/21','updated_at' => '15/04/21'],
            ['id' =>4 , 'nombre'=>'VALIDADO' , 'descripcion'=>'Data del archivo ya fue validada'  , 'id_usuario_crear'=>1 , 'id_usuario_modifica'=>1, 'created_at' => '15/04/21','updated_at' => '15/04/21'],
            ['id' =>5 , 'nombre'=>'ACEPTADO' , 'descripcion'=>'Archivo Aceptado'  , 'id_usuario_crear'=>1 , 'id_usuario_modifica'=>1, 'created_at' => '15/04/21','updated_at' => '15/04/21'],
            ['id' =>6 , 'nombre'=>'RECHAZADO' , 'descripcion'=>'Archivo rechazado'  , 'id_usuario_crear'=>1 , 'id_usuario_modifica'=>1, 'created_at' => '15/04/21','updated_at' => '15/04/21'],
        ]);
    }
}
