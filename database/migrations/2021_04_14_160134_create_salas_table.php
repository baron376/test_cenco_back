<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_zona')->nullable()->index();
            $table->integer('id_cadena')->nullable()->index();
            $table->integer('id_tipo')->nullable()->index();
            $table->string('cdg_local')->nullable()->index();
            $table->string('nombre_sap')->nullable()->index();
            $table->string('display_nombre_sap')->nullable()->index();
            $table->string('direccion')->nullable()->index();
            $table->integer('id_comuna')->nullable()->index();
            $table->integer('id_region')->nullable()->index();
            $table->integer('id_provincia')->nullable()->index();
            $table->integer('id_estatus_salas')->nullable()->index();
            $table->integer('cupo_total_promo')->nullable()->index();
            $table->integer('id_usuario_crear')->nullable();
            $table->integer('id_usuario_modifica')->nullable();
            //$table->integer('id_estatus_salas')->nullable();
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
        Schema::dropIfExists('salas');
    }
}
