<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampanaMaterialNewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('campana_material_new')) {
            Schema::create('campana_material_new', function (Blueprint $table) {
                $table->bigIncrements('id');
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campana_material_new');
    }
}
