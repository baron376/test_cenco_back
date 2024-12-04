<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederEstatusRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estatus_roles')->insert([
            ['id' =>1 , 'nombre'=>'Activo' , 'descripcion'=>' roles Activos '  , 'id_usuario_crear'=>1 , 'id_usuario_modifica'=>1, 'created_at' => '15/04/21','updated_at' => '15/04/21'],
            ['id' =>2 , 'nombre'=>'Inactivo' , 'descripcion'=>' roles inactivos '  , 'id_usuario_crear'=>1 , 'id_usuario_modifica'=>1, 'created_at' => '15/04/21','updated_at' => '15/04/21'],
        ]);
    }
}
