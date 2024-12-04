<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class SeederInstaladores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instaladores')->insert([
            ['id' => 1,'nombre' => 'Siete comunicaciones'],
            ['id' => 2,'nombre' => 'Local'],
            ['id' => 3,'nombre' => 'Mixta' ]
        ]);
    }
}
