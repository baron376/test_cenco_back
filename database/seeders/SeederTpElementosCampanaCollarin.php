<?php

namespace Database\Seeders;

use App\Models\TpCampana;
use App\Models\TpElementosCampana;
use Illuminate\Database\Seeder;

class SeederTpElementosCampanaCollarin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = 'COLLARÍN';
        $gondola = TpCampana::where('name', 'GONDOLA')->first();

        if ($gondola) {
            TpElementosCampana::updateOrCreate([
                'name' => $name,
                'id_tp_campana' => $gondola->id,
            ], [
                'name' => $name,
                'status' => 1,
                'id_tp_campana' => $gondola->id,
            ]);
        }
    }
}
