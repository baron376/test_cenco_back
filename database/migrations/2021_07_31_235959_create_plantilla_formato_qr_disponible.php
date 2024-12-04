<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantillaFormatoQrDisponible extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadena_plantilla_formato_tipo_promo_texto', function (Blueprint $table) {
            $table->id();
            $table->integer('id_cadena')->nullable()->index();
            $table->integer('id_plantilla')->nullable()->index();
            $table->integer('id_formato')->nullable()->index();
            $table->integer('id_tipo_promo')->nullable()->index();
            $table->integer('texto_largo')->nullable()->index();
            $table->integer('qr')->nullable()->index();
            $table->string('plantilla_blade_pdf')->nullable();
            $table->string('url_ejemplo')->nullable();
            $table->integer('id_usuario_crear')->nullable();
            $table->integer('id_usuario_modifica')->nullable();
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
        Schema::dropIfExists('cadena_plantilla_formato_tipo_promo_texto');
    }
}