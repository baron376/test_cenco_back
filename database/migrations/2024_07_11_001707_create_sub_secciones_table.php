<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubSeccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('sub_secciones')) {
            Schema::create('sub_secciones', function (Blueprint $table) {
                $table->id();
                $table->string('nombre')->nullable()->index();
                $table->unsignedBigInteger('seccion_id');
                $table->string('cdg_int_seccion')->nullable()->index();
                $table->boolean('estatus')->default(true); 
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_secciones');
    }
}
