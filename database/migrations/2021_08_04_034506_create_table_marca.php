<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMarca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable()->index();
            $table->text('representante')->nullable();
            $table->text('telefono')->nullable();
            $table->text('email')->nullable();
            $table->text('comentario')->nullable();
            $table->integer('id_estatus_marca')->nullable()->index();
            $table->integer('id_usuario_autoriza')->nullable()->index();
            $table->integer('id_usuario_crear')->nullable();
            $table->integer('id_usuario_modifica')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        DB::statement('create fulltext index marcas_fulltext_representante_telefono_email_comentario on marcas(representante,telefono,email,comentario);');
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcas');
    }
}
