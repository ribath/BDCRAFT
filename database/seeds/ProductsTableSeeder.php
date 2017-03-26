<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'item1',
            'price'=>'80',
        ]);

        DB::table('products')->insert([
            'name'=>'item2',
            'price'=>'20',
        ]);

        DB::table('products')->insert([
            'name'=>'item3',
            'price'=>'10',
        ]);


        DB::table('products')->insert([
            'name'=>'item4',
            'price'=>'50',
        ]);


        DB::table('products')->insert([
            'name'=>'item5',
            'price'=>'40',
        ]);


        DB::table('products')->insert([
            'name'=>'item6',
            'price'=>'60',
        ]);
    }
}
