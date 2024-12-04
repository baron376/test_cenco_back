<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederZonaExhibicionStore extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('zona_exhibicion')->insert([
            "id" => 12,
            "nombre" => "IN STORE MEDIA",
            "descripcion" => "IN STORE MEDIA",
            "created_at" => "2023-04-19 13:40:57",
            "updated_at" => null,
            "deleted_at" => null
        ]);

        
    }
    }

