<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampanaFormatoNew extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('campana_formato_new')) {
            Schema::create('campana_formato_new', function (Blueprint $table) {
                $table->id();
                $table->integer('id_campana')->index();
                $table->integer('id_formato')->index();
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
        Schema::dropIfExists('campana_formato_new');
    }
}
