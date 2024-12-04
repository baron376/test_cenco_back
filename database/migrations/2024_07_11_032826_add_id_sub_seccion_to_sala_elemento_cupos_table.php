<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdSubSeccionToSalaElementoCuposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sala_elemento_cupos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_sub_seccion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sala_elemento_cupos', function (Blueprint $table) {
            $table->dropColumn('id_sub_seccion');
        });
    }
}
