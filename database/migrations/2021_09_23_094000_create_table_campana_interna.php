<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCampanaInterna extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campana_interna', function (Blueprint $table) {
            $table->id();
            $table->integer('id_cadena')->nullable()->index();
            $table->integer('id_etapa')->nullable()->index();
            $table->string('nombre')->nullable()->index();
            $table->date('desde')->nullable()->index();
            $table->date('hasta')->nullable()->index();
            $table->integer('id_instalador')->nullable()->index();
            $table->integer('id_sesion')->nullable()->index();
            $table->integer('id_zona')->nullable()->index();
            $table->integer('id_tipo')->nullable()->index();
            $table->string('descripcion')->nullable()->index();
            $table->integer('id_estado_campana')->nullable()->index();
            $table->integer('id_status_campana')->nullable()->index();
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
        Schema::dropIfExists('campana_interna');
    }
}
