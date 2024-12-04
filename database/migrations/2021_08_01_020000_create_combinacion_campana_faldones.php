<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCombinacionCampanaFaldones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combinacion_campana_faldones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable()->index();
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });
        DB::statement('create fulltext index combinacion_campana_faldones_fulltext_descripcion on combinacion_campana_faldones(descripcion);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('combinacion_campana_faldones');
    }
}
