<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaElementoCuposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sala_elemento_cupos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sala');
            $table->unsignedBigInteger('id_elemento');
            $table->integer('n_cupos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sala_elemento_cupos');
    }
}
