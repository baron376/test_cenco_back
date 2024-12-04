<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePromotorasMuebles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotoras_muebles', function (Blueprint $table) {
            if (!Schema::hasTable('promotoras_muebles')) {
                $table->id();
                $table->integer('id_promotoras')->nullable()->index();
                $table->string('nombre')->nullable()->index();
                $table->string('name_archivo')->nullable();
                $table->string('medida')->nullable();
                $table->string('url')->nullable();
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
        Schema::dropIfExists('promotoras_muebles');
    }
}
