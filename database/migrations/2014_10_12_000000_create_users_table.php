<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable()->index();
            $table->string('apellido')->nullable()->index();
            $table->bigInteger('rut')->nullable()->index();
            $table->char('dv', 1)->nullable()->index();
            $table->string('email')->unique()->nullable()->index();
            $table->integer('id_proveedor')->nullable()->index();
            $table->string('password')->nullable();
            $table->integer('id_estatus_usuarios')->nullable();
            $table->smallInteger('confirmado')->nullable();
            $table->string('cdg_confirmacion')->nullable();
            $table->string('remember_token')->nullable();
            $table->integer('id_usuario_crear')->nullable();
            $table->integer('id_usuario_modifica')->nullable();
            $table->string('url_imagen')->nullable();
            $table->integer('init_adfs')->nullable();
            $table->timestamp('ultimo_inicio')->nullable()->index();
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
        Schema::dropIfExists('usuarios');
    }
}
