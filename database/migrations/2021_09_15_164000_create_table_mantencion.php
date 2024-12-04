<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMantencion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantencion', function (Blueprint $table) {
            $table->id();
            $table->string('asunto')->nullable()->index();
            $table->integer('id_cadena')->nullable()->index();
            $table->date('fecha_implementacion')->nullable()->index();
            $table->integer('id_proveedor')->nullable()->index();
            $table->integer('monto_cotizacion')->nullable()->index();
            $table->integer('id_sala')->nullable()->index();
            $table->integer('id_mantencion_estado')->nullable()->index();
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
        Schema::dropIfExists('mantencion');
    }
}
