<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SeederToken extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $token = array(
            [
                "id" => 1,
                "app" => "front_web_cencosud",
                "passwd" => "goOp8Yjj^PwX1M%tx8bRU^oI@*%CIR",
                "token" => "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhcHAiOiJmcm9udF93ZWJfY2VuY29zdWQiLCJwYXNzd29yZCI6ImdvT3A4WWpqXlB3WDFNJXR4OGJSVV5vSUAqJUNJUiJ9.PxB2BhWwSi_cEbcgyncFleCn96uBA5Z3EdGflrcHo-Y",
                "id_usuario_crear" => 1,
                "id_usuario_modifica" => null,
                "created_at" => "2021-04-24 19:15:23",
                "updated_at" => "2021-04-24 19:15:23",
                "deleted_at" => null
            ]
        );
        DB::table('token')->insert($token);
    }
}
