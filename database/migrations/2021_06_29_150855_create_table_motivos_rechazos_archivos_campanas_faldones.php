<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMotivosRechazosArchivosCampanasFaldones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rechazos_archivos_campanas_faldones', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_rechazo')->nullable()->index();
            $table->integer('estatus')->nullable()->index();
            $table->string('nombre')->nullable()->index();
            $table->string('descripcion')->nullable()->index();
            $table->string('validacion')->nullable()->index();
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
        Schema::dropIfExists('rechazos_archivos_campanas_faldones');
    }
}
