<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCampanaProveedorNew extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campana_proveedor_new', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_cadena')->nullable()->index();
            $table->string('nombre')->nullable()->index();
            $table->date('desde')->nullable()->index();
            $table->date('hasta')->nullable()->index();
            $table->integer('id_proveedor')->nullable()->index();
            $table->integer('id_formato')->nullable()->index();
            $table->integer('id_zona')->nullable()->index();
            $table->integer('id_gerencia')->nullable()->index();
            $table->integer('id_sesion')->nullable()->index();
            $table->integer('id_tipo_campana')->nullable()->index();
            $table->integer('id_visibilidad_campana')->nullable()->index();
            $table->integer('id_elemento_campana')->nullable()->index();
            $table->string('url_area_comercial')->nullable();
            $table->string('url_orden_compra')->nullable();
            $table->string('url_bases_legales')->nullable();
            //$table->integer('id_espacio_exhibicion')->nullable()->index();
            $table->integer('id_etapa')->nullable()->index();
           // $table->integer('id_zona_exhibicion')->nullable()->index();
           // $table->string('descripcion')->nullable()->index();
           // $table->boolean('material_externo')->nullable();
            $table->integer('id_estado_campana')->nullable()->index();
            $table->integer('id_status_campana')->nullable()->index();
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
        Schema::dropIfExists('table_campana_proveedor_new');
    }
}
