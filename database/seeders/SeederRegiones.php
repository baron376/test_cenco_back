<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederRegiones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['id' =>1,'region_nombre' => 'Arica y Parinacota', 'region_ordinal'=>'XV', 'id_usuario_crear' => 1, 'id_usuario_modifica' => NULL],
            ['id' =>2,'region_nombre' => 'Tarapacá', 'region_ordinal'=>'I', 'id_usuario_crear' => 1, 'id_usuario_modifica' => NULL],
            ['id' =>3,'region_nombre' => 'Antofagasta','region_ordinal'=>'II', 'id_usuario_crear' => 1, 'id_usuario_modifica' => NULL],
            ['id' =>4,'region_nombre' => 'Atacama','region_ordinal'=>'III', 'id_usuario_crear' => 1, 'id_usuario_modifica' => NULL],
            ['id' =>5,'region_nombre' => 'Coquimbo','region_ordinal'=>'IV', 'id_usuario_crear' => 1, 'id_usuario_modifica' => NULL],
            ['id' =>6,'region_nombre' => 'Valparaiso','region_ordinal'=>'V', 'id_usuario_crear' => 1, 'id_usuario_modifica' => NULL],
            ['id' =>7,'region_nombre' => 'Metropolitana de Santiago','region_ordinal'=>'RM', 'id_usuario_crear' => 1, 'id_usuario_modifica' => NULL],
            ['id' =>8,'region_nombre' => 'Libertador General Bernardo O\'Higgins','region_ordinal'=>'VI', 'id_usuario_crear' => 1, 'id_usuario_modifica' => NULL],
            ['id' =>9,'region_nombre' => 'Maule','region_ordinal'=>'VII', 'id_usuario_crear' => 1, 'id_usuario_modifica' => NULL],
            ['id' =>10,'region_nombre' =>'Biobío','region_ordinal'=>'VIII', 'id_usuario_crear' => 1, 'id_usuario_modifica' => NULL],
            ['id' =>11,'region_nombre' => 'La Araucanía','region_ordinal'=>'IX', 'id_usuario_crear' => 1, 'id_usuario_modifica' => NULL],
            ['id' =>12,'region_nombre' => 'Los Ríos','region_ordinal'=>'XIV', 'id_usuario_crear' => 1, 'id_usuario_modifica' => NULL],
            ['id' =>13,'region_nombre' => 'Los Lagos','region_ordinal'=>'X', 'id_usuario_crear' => 1, 'id_usuario_modifica' => NULL],
            ['id' =>14,'region_nombre' => 'Aisén del General Carlos Ibáñez del Campo','region_ordinal'=>'XI', 'id_usuario_crear' => 1, 'id_usuario_modifica' => NULL],
            ['id' =>15,'region_nombre' => 'Magallanes y de la Antártica Chilena','region_ordinal'=>'XII', 'id_usuario_crear' => 1, 'id_usuario_modifica' => NULL]
        );
        DB::table('regiones')->insert($data);
    }
}
