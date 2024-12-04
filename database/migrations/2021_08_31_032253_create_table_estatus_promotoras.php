<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEstatusPromotoras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estatus_promotoras', function (Blueprint $table) {
            if (!Schema::hasTable('estatus_promotoras')) {
                    $table->id();
                    $table->string('nombre')->nullable()->index();
                    $table->text('descripcion')->nullable();
                    $table->integer('id_usuario_crear')->nullable();
                    $table->integer('id_usuario_modifica')->nullable();
                    $table->timestamps();
                    $table->softDeletes();
            }  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estatus_promotoras');
    }
}
