<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEspacioZonaExhibicion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('espacio_zona_exhibicion', function (Blueprint $table) {
            $table->id();
            $table->integer('id_espacio')->nullable()->index();
            $table->integer('id_zona')->nullable()->index();
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
        Schema::dropIfExists('espacio_zona_exhibicion');
    }
}
