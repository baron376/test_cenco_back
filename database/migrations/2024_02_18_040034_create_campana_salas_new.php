<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampanaSalasNew extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('campana_salas_new')) {
            Schema::create('campana_salas_new', function (Blueprint $table) {
                $table->id();
                $table->integer('id_campana')->nullable()->index();
                $table->integer('id_sala')->nullable()->index();
                $table->integer('id_usuario_crear')->nullable();
                $table->integer('id_usuario_modifica')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campana_salas_new');
    }
}
