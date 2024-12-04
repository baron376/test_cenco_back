<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCampanaInternaSalas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campana_interna_salas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_campana_interna')->nullable()->index();
            $table->integer('id_sala')->nullable()->index();
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
        Schema::dropIfExists('campana_interna_salas');
    }
}
