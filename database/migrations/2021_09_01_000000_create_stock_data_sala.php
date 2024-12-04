<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockDataSala extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_data_sala', function (Blueprint $table) {
            $table->id();
            $table->integer('id_cadena')->nullable()->index();
            $table->integer('id_campana_faldon')->nullable()->index();
            $table->integer('id_sala')->nullable()->index();
            $table->integer('id_archivos_faldones_data')->nullable()->index();
            $table->integer('stock')->nullable()->index();
            $table->integer('id_usuario_crear')->nullable();
            $table->integer('id_usuario_modifica')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_data_sala');
    }
}
