<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCampanaMaterial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campana_material', function (Blueprint $table) {
            $table->id();
            $table->integer('id_campana')->nullable()->index();
            $table->string('nombre')->nullable()->index();
            $table->string('name_archivo')->nullable()->index();
            $table->string('medida')->nullable()->index();
            $table->string('url')->nullable();
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
        Schema::dropIfExists('campana_material');
    }
}
