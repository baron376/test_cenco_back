<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampanaZonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campana_zonas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_campana')->index();
            $table->integer('id_zona')->index();
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
        Schema::dropIfExists('campana_zonas');
    }
}
