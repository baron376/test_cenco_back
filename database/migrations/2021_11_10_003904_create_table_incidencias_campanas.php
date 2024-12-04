<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableIncidenciasCampanas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias_campanas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_campana')->nullable()->index();
            $table->integer('id_campana_proveedor')->nullable()->index();
            $table->integer('id_campana_promotora')->nullable()->index();
            $table->longText('descripcion_incidencia')->nullable();
            $table->integer('id_usuario_crear')->nullable();
            $table->integer('id_usuario_modifica')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('incidencias_campanas');
    }
}
