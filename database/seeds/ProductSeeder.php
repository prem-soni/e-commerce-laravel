<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
               [
                'name'=>'oppo A5',
                'price'=>'100$',
                'discription'=>'A samrtphone with 4 gb ram with much more',
                'category'=>'mobile',
                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/71wPwmxo2NL._SX679_.jpg',   
               ],
               [
                'name'=>'One Plus',
                'price'=>'300$',
                'discription'=>'A samrtphone with 8 gb ram with much more',
                'category'=>'mobile',
                'gallery'=>'https://cdn.dxomark.com/wp-content/uploads/medias/post-47840/oneplus8Pro.jpg',     
               ],
               
            ]);
        }
}
