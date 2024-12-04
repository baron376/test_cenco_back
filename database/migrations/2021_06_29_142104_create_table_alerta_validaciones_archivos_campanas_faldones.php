<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAlertaValidacionesArchivosCampanasFaldones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alerta_validaciones_archivos_campanas_faldones', function (Blueprint $table) {
            $table->id();
            $table->integer('id_archivo')->nullable()->index();
            $table->integer('id_alerta_archivos_campana_faldones')->nullable()->index('alerta_validaciones_id_alerta_archivos_campana_faldones');
            $table->string('descripcion')->nullable()->index();
            $table->string('numero_fila')->nullable()->index();
            $table->string('campo_asociado')->nullable()->index('alerta_validaciones_campo_asociado');
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
        Schema::dropIfExists('alerta_validaciones_archivos_campanas_faldones');
    }
}
