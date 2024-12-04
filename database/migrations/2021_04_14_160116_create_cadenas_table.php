<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadenas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable()->index();
            $table->text('descripcion')->nullable();
            $table->integer('qr_disponible')->nullable()->index();
            $table->integer('id_estatus_cadenas')->nullable()->index();
            $table->integer('id_usuario_crear')->nullable();
            $table->integer('id_usuario_modifica')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement('create fulltext index cadenas_fulltext_descripcion on cadenas(descripcion);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadenas');
    }
}
