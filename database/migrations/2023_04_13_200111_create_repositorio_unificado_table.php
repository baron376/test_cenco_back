<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepositorioUnificadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repositorio_unificado', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->index();
            $table->string('nombre_archivo');
            $table->string('url');
            $table->integer('id_modulo')->index();
            $table->integer('descargable')->default(0)->index();
            $table->integer('id_usuario_crear')->nullable();
            $table->integer('id_usuario_modifica')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repositorio_unificado');
    }
}



