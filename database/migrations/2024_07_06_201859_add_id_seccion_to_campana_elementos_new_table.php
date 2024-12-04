<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdSeccionToCampanaElementosNewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('campana_elementos_new', function (Blueprint $table) {
            $table->unsignedBigInteger('id_seccion')->nullable();
            $table->unsignedBigInteger('id_tp_camapana')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('campana_elementos_new', function (Blueprint $table) {
            $table->dropColumn('id_seccion');
            $table->dropColumn('id_tp_camapana');

        });
    }
}
