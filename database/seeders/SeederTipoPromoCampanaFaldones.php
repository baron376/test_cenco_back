<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeederTipoPromoCampanaFaldones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_promo_campana_faldones')->insert([
            ['id'=>1,'nombre'=>'PRECIO' , 'descripcion'=>'Promociones a precio con todo medio de pago, solo con tarjeta cencosud o combinadas con ambos medios de pago ($2.990, $1.990,etc.)', 'created_at' => '15/04/21','updated_at' => '15/04/21'],
            ['id'=>2,'nombre'=>'DESCTO - DESCUENTO' , 'descripcion'=>'Promociones a % de descuento con todo medio de pago, solo con tarjeta cencosud o combinadas con ambos medios de pago (30%, 50%,etc.)', 'created_at' => '15/04/21','updated_at' => '15/04/21'],
            ['id'=>3,'nombre'=>'PACK' , 'descripcion'=>'Promociones con combinaciones tipo "Pack" MxN o Mx$ con todo medio de pago, solo con tarjeta cencosud o combinadas con ambos medios de pago (2x $1000, 2x1,3x2, etc.)', 'created_at' => '15/04/21','updated_at' => '15/04/21'],
            //['id'=>3,'nombre'=>'PACK Mx$' , 'descripcion'=>'Promociones con combinaciones tipo "Pack" MxN o Mx$ con todo medio de pago, solo con tarjeta cencosud o combinadas con ambos medios de pago (2x $1000, 2x1,3x2, etc.)', 'created_at' => '15/04/21','updated_at' => '15/04/21'],
            ['id'=>4,'nombre'=>'CANJE' , 'descripcion'=>'Promociones con canje de Puntos Cencosud, tambien pudiendo incluir un precio como copago (5.000 puntos cencosud; 10.000 puntos cencosud + $9.990)', 'created_at' => '15/04/21','updated_at' => '15/04/21'],
            ['id'=>5,'nombre'=>'DESCTO 2DA UN - DESCTO 2DA U' , 'descripcion'=>'Promociones a % de descuento llevando un segundo producto con todo medio de pago, solo con tarjeta cencosud o combinadas con ambos medios de pago (segunda unidad 60% descuento)', 'created_at' => '15/04/21','updated_at' => '15/04/21'],
            ['id'=>6,'nombre'=>'PRECIO 2DA UN - PRECIO 2DA U' , 'descripcion'=>'Promociones a precio llevando un segundo producto con todo medio de pago, solo con tarjeta cencosud o combinadas con ambos medios de pago (segunda unidad $990)', 'created_at' => '15/04/21','updated_at' => '15/04/21'],
            ['id'=>7,'nombre'=>'DESDE' , 'descripcion'=>'Promociones a precio que contienen producto con distintos precios con un "desde" en cuanto al valor del producto con todo medio de pago, solo con tarjeta cencosud o combinadas con ambos medios de pago (Desde $2.990, $3.990,etc.)', 'created_at' => '15/04/21','updated_at' => '15/04/21'],
            ['id'=>8,'nombre'=>'PACK MXN' , 'descripcion'=>'Promociones con combinaciones tipo "Pack" MxN o Mx$ con todo medio de pago, solo con tarjeta cencosud o combinadas con ambos medios de pago (2x $1000, 2x1,3x2, etc.)', 'created_at' => '15/04/21','updated_at' => '15/04/21'],
        ]);
    }
}
