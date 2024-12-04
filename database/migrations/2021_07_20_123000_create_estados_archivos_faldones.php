<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosArchivosFaldones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados_archivos_faldones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable()->index();
            $table->text('descripcion')->nullable();
            $table->integer('id_usuario_crear')->nullable();
            $table->integer('id_usuario_modifica')->nullable();
            $table->timestamps();
        });
        DB::statement('create fulltext index estados_archivos_faldones_fulltext_descripcion on estados_archivos_faldones(descripcion);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados_archivos_faldones');
    }
}
