<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTurnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turnos', function (Blueprint $table) {
            if (!Schema::hasTable('turnos')) {
                $table->id();
                $table->string('nombre')->nullable()->index();
                $table->text('descripcion')->nullable();
                $table->integer('id_usuario_crear')->nullable();
                $table->integer('id_usuario_modifica')->nullable();
                $table->timestamps();
                $table->softDeletes();
            }      
        });
        DB::statement('create fulltext index mturnos_fulltext_descripcion on turnos(descripcion);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turnos');
    }
}
