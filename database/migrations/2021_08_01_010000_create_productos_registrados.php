<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosRegistrados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_registrados', function (Blueprint $table) {
            $table->id();
            $table->integer('id_seccion')->nullable()->index();
            $table->integer('cod_seccion')->nullable()->index();
            $table->string('nombre_generico_promocion')->nullable()->index();
            $table->string('sap')->nullable()->index();
            $table->bigInteger('cod_barra')->nullable()->index();
            $table->string('umb')->nullable()->index();
            $table->string('descripcion')->nullable()->index();
            $table->integer('precio_referencia_moda')->nullable()->index();
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
        Schema::dropIfExists('productos_registrados');
    }
}











            