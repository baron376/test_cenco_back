<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFaldonExpress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faldon_express', function (Blueprint $table) {
            $table->id();
            $table->integer('id_campana_estado')->nullable()->index();
            $table->integer('id_cadena')->nullable()->index();
            $table->string('cadena')->nullable()->index();
            $table->string('id_sala')->nullable()->index();
            $table->string('locales')->nullable()->index();
            $table->integer('id_medio_campana_faldones')->nullable()->index();
            $table->string('medio')->nullable()->index();
            //$table->integer('id_tipo_medio_campana_faldones')->nullable();
            $table->string('tipo_medio')->nullable()->index();
            //$table->integer('id_tipo_volante_catalogo_campana_faldones')->nullable();
            $table->string('tipo_volante_catalogo')->nullable()->index();
            $table->integer('n_promocion')->nullable()->index();
            $table->integer('id_seccion')->nullable()->index();
            $table->string('seccion')->nullable()->index();
            $table->string('nombre_generico_promocion')->nullable()->index();
            $table->string('sap')->nullable()->index();
            $table->bigInteger('cod_barra')->nullable()->index();
            $table->integer('id_umb_faldones')->nullable()->index();
            $table->string('umb')->nullable()->index();
            $table->string('descripcion')->nullable()->index();
            $table->integer('precio_referencia_moda')->nullable()->index();
            $table->integer('id_tipo_promo')->nullable()->index();
            $table->string('tipo_promo')->nullable()->index();
            $table->integer('id_combinacion')->nullable()->index();
            $table->string('combinacion')->nullable()->index();
            $table->integer('tmp')->nullable()->index();
            $table->integer('tc')->nullable()->index();
            $table->integer('qr')->nullable()->index();
            $table->integer('texto_largo')->nullable()->index();
            $table->date('fecha_inicio_promo')->nullable()->index();
            $table->date('fecha_termino_promo')->nullable()->index();
            $table->integer('id_formato')->nullable()->index();
            $table->string('formato')->nullable()->index();
            $table->integer('id_plantilla')->nullable()->index();
            $table->string('plantilla')->nullable()->index();
            // $table->string('uso_catalogo')->nullable();
            // $table->string('explicacion')->nullable();
            // $table->string('cruce')->nullable();
            $table->integer('cuotas')->nullable()->index();
            $table->integer('valor_cuota')->nullable()->index();
            $table->integer('costo_total')->nullable()->index();
            $table->float('cae')->nullable()->index();
            $table->integer('id_usuario_crear')->nullable();
            $table->integer('id_usuario_modifica')->nullable();
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
        Schema::dropIfExists('faldon_express');
    }
}
