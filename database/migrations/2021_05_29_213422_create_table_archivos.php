<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableArchivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos_faldones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable()->index();
            $table->string('extension')->nullable()->index();
            $table->string('tamano')->nullable()->index();
            $table->integer('id_campana')->nullable()->index();
            $table->string('url')->nullable();
            $table->string('url_pdf')->nullable();
            $table->integer('id_estados_archivos_faldones')->nullable()->index();
            $table->integer('id_estatus_archivos_faldones')->nullable()->index();
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
        Schema::dropIfExists('archivos_faldones');
    }
}
