<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFechaToCampanaElementosNewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('campana_elementos_new', function (Blueprint $table) {
            $table->date('fecha')->nullable(); // Puedes ajustarlo según tus necesidades (nullable, default value, etc.)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('campana_elementos_new', function (Blueprint $table) {
            Schema::table('campana_elementos_new', function (Blueprint $table) {
                $table->dropColumn('fecha');
            });
        });
    }
}
