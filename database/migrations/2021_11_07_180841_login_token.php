<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LoginToken extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verify_login_token', function (Blueprint $table) {
            $table->id();
            $table->longText('hast_email')->nullable();
            $table->longText('app_token')->nullable();
            $table->longText('token_user')->nullable();
            $table->integer('type_register')->nullable();
            $table->timestamps();
        });
        DB::statement('create fulltext index verify_login_token_hast_email_app_token_token_user on verify_login_token(hast_email,app_token,token_user);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verify_login_token');
    }
}
