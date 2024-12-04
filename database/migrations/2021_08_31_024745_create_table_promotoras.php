<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePromotoras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotoras', function (Blueprint $table) {
            if (!Schema::hasTable('promotoras')) {
                $table->id();
                $table->integer('id_cadena')->nullable()->index();
                $table->string('nombre')->nullable()->index();
                $table->date('desde')->nullable()->index();
                $table->date('hasta')->nullable()->index();
                $table->integer('id_proveedor')->nullable()->index();
                $table->integer('id_sesion')->nullable()->index();
                $table->integer('id_turnos')->nullable()->index();
                $table->boolean('entrega_regalo')->nullable();
                $table->boolean('degustacion')->nullable();
                $table->boolean('material_externo')->nullable();
                $table->string('descripcion')->nullable()->index();
                $table->boolean('concurso_asociado')->nullable();
                $table->string('doc_bases_legales')->nullable()->index();
                $table->integer('id_etapa_promotora')->nullable()->index();
                $table->integer('id_status_promotora')->nullable()->index();
                $table->integer('id_usuario_crear')->nullable();
                $table->integer('id_usuario_modifica')->nullable();
                $table->timestamps();
                $table->softDeletes();
            }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotoras');
    }
}
