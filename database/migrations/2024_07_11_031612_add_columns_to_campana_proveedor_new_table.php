<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToCampanaProveedorNewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('campana_proveedor_new', function (Blueprint $table) {
            $table->string('id_sub_seccion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('campana_proveedor_new', function (Blueprint $table) {
            $table->dropColumn('id_sub_seccion');
        });
    }
}
