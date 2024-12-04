<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPasswordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_password', function (Blueprint $table) {
            $table->id();
            $table->integer('id_usuario')->nullable()->index();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('usuario_password');
    }
}
