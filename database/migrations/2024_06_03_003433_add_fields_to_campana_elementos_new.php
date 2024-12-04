<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddFieldsToCampanaElementosNew extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('campana_elementos_new', function (Blueprint $table) {
            $table->date('desde')->nullable();
            $table->date('hasta')->nullable();
            $table->unsignedBigInteger('id_sala')->nullable();
            $table->integer('cupo')->nullable();
        });

        // Insertar nueva registro en la tabla campana_estado el cual nos servira para el preguardado de las campañas con cupos.
        DB::table('campana_estado')->insert([
            'id' => 7,
            'nombre' => 'Borrador',
            'descripcion' => 'Estado Borrador',
            'id_estatus_campana_estado' => 1, 
            'id_usuario_crear' => 1, 
            'id_usuario_modifica' => null,
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('campana_elementos_new', function (Blueprint $table) {
            $table->dropColumn('desde');
            $table->dropColumn('hasta');
            $table->dropColumn('id_sala');
        });

        DB::table('campana_estado')->where('id', 7)->delete();
    }
}
