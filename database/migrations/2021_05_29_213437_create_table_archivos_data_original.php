<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableArchivosDataOriginal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos_faldon_data_original', function (Blueprint $table) {
            $table->id();
            $table->integer('id_archivo')->nullable()->index();
            $table->integer('numero_fila')->nullable()->index();
            $table->string('cadena')->nullable()->index();
            $table->string('locales')->nullable()->index();
            $table->string('medio')->nullable()->index();
            $table->string('tipo_medio')->nullable()->index();
            $table->string('tipo_volante_catalogo')->nullable()->index();
            $table->string('n_promocion')->nullable()->index();
            $table->string('seccion')->nullable()->index();
            $table->string('nombre_generico_promocion')->nullable()->index();
            $table->string('sap')->nullable()->index();
            $table->string('cod_barra')->nullable()->index();
            $table->string('umb')->nullable()->index();
            $table->string('descripcion')->nullable()->index();
            $table->string('precio_referencia_moda')->nullable()->index();
            $table->string('tipo_promo')->nullable()->index();
            $table->string('combinacion')->nullable()->index();
            $table->string('tmp')->nullable()->index();
            $table->string('tc')->nullable()->index();
            $table->string('fecha_inicio_promo')->nullable()->index();
            $table->string('fecha_termino_promo')->nullable()->index();
            $table->string('cuotas')->nullable()->index();
            $table->string('valor_cuota')->nullable()->index();
            $table->string('costo_total')->nullable()->index();
            $table->string('cae')->nullable()->index();
            $table->string('puntos_cencosud')->nullable()->index();
            $table->string('puntos_otros_medios')->nullable()->index();
            $table->integer('id_usuario_crear')->nullable();
            $table->integer('id_usuario_modifica')->nullable();
            $table->string('estatus_registro')->nullable();
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
        Schema::dropIfExists('archivos_faldon_data_original');
    }
}
