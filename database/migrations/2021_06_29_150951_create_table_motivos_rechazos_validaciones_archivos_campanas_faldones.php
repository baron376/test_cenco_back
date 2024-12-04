<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMotivosRechazosValidacionesArchivosCampanasFaldones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rechazos_validaciones_archivos_campanas_faldones', function (Blueprint $table) {
            $table->id();
            $table->integer('id_archivo')->nullable()->index('rechazos_validaciones_id_archivo');
            $table->integer('id_rechazos_archivos_campanas_faldones')->nullable()->index('rechazos_validaciones_id_rechazos_archivos');
            $table->string('descripcion')->nullable()->index('rechazos_validaciones_description');
            $table->string('numero_fila')->nullable()->index('rechazos_validaciones_numero_fila');
            $table->string('campo_asociado')->nullable()->index('rechazos_validaciones_campo_asociado');
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
        Schema::dropIfExists('rechazos_validaciones_archivos_campanas_faldones');
    }
}
