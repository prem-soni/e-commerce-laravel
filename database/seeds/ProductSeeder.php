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
                'name'=>'Redmi',
                'price'=>'120$',
                'discription'=>'A samrtphone with 4 gb ram with much more',
                'category'=>'mobile',
                'gallery'=>'https://global.appmifile.com/webfile/globalimg/samantha/E7T/E7T-BLUE.jpg',   
               ],
               [
                'name'=>'sony',
                'price'=>'150$',
                'discription'=>'A samrtphone with 8 gb ram with much more',
                'category'=>'mobile',
                'gallery'=>'https://www.gizmochina.com/wp-content/uploads/2020/02/Sony-Xperia-10-II-1-500x500.jpg',     
               ],
               
            ]);
        }
}
