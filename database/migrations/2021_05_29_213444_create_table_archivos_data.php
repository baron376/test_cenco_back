<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableArchivosData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos_faldones_data', function (Blueprint $table) {
            $table->id();
            $table->integer('id_archivo')->nullable()->index();
            $table->string('cadena')->nullable()->index();
            $table->string('locales')->nullable()->index();
            $table->string('medio')->nullable()->index();
            $table->string('tipo_medio')->nullable()->index();
            $table->string('tipo_volante_catalogo')->nullable()->index();
            $table->integer('n_promocion')->nullable()->index();
            $table->integer('seccion')->nullable()->index();
            $table->string('nombre_generico_promocion')->nullable()->index();
            $table->string('sap')->nullable()->index();
            $table->bigInteger('cod_barra')->nullable()->index();
            $table->string('umb')->nullable()->index();
            $table->string('descripcion')->nullable()->index();
            $table->integer('precio_referencia_moda')->nullable()->index();
            $table->string('tipo_promo')->nullable()->index();
            $table->string('combinacion')->nullable()->index();
            $table->string('tmp')->nullable()->index();
            $table->string('tc')->nullable()->index();
            $table->date('fecha_inicio_promo')->nullable()->index();
            $table->date('fecha_termino_promo')->nullable()->index();
            $table->integer('cuotas')->nullable()->index();
            $table->integer('valor_cuota')->nullable()->index();
            $table->integer('costo_total')->nullable()->index();
            $table->float('cae' , 8, 2)->nullable();
            $table->integer('puntos_cencosud')->nullable()->index();
            $table->integer('puntos_otros_medios')->nullable()->index();
            $table->integer('id_usuario_crear')->nullable();
            $table->integer('id_usuario_modifica')->nullable();
            $table->string('estatus_registro')->nullable()->index();
            $table->integer('id_campana')->nullable()->index();
            $table->integer('id_cadena')->nullable()->index();
            $table->integer('id_plantilla')->nullable()->index();
            $table->integer('id_formato')->nullable()->index();
            $table->integer('id_tipo_promo')->nullable()->index();
            $table->integer('qr')->nullable()->index();
            $table->integer('texto_largo')->nullable()->index();
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
        Schema::dropIfExists('archivos_faldones_data');
    }
}
