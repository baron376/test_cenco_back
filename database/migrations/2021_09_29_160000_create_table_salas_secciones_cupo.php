<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSalasSeccionesCupo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas_secciones_cupo', function (Blueprint $table) {
            $table->id();
            $table->integer('id_sala')->nullable()->index();
            $table->integer('id_seccion')->nullable()->index();
            $table->integer('cupo_promo')->nullable()->index();
            $table->integer('id_usuario_crear')->nullable();
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
        Schema::dropIfExists('salas_secciones_cupo');
    }
}