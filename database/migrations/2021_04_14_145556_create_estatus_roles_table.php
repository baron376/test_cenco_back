<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatusRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estatus_roles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable()->index();
            $table->text('descripcion')->nullable();
            $table->integer('id_usuario_crear')->nullable();
            $table->integer('id_usuario_modifica')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        DB::statement('create fulltext index estatus_roles_fulltext_descripcion on estatus_roles(descripcion);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estatus_roles');
    }
}
