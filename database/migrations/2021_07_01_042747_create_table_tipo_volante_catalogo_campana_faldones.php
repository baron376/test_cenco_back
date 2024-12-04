<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTipoVolanteCatalogoCampanaFaldones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_volante_catalogo_campana_faldones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable()->index();
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });
        DB::statement('create fulltext index tipo_volante_catalogo_campana_faldones_fulltext_descripcion on tipo_volante_catalogo_campana_faldones(descripcion);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_volante_catalogo_campana_faldones');
    }
}
