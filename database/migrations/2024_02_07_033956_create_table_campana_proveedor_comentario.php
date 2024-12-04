<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCampanaProveedorComentario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campana_proveedor_comentario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_campana')->nullable()->index();
            $table->string('comentario')->nullable()->index();
            $table->integer('id_usuario_crear')->nullable();
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
        Schema::dropIfExists('campana_proveedor_comentario');
    }
}
