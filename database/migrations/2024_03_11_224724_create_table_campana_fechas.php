<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCampanaFechas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('campana_fechas')) {
            Schema::create('campana_fechas', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('id_campana')->nullable()->index();
                $table->date('desde')->nullable()->index();
                $table->date('hasta')->nullable()->index();
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
        Schema::dropIfExists('table_campana_fechas');
    }
}
