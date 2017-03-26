<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['category_name'=>'T-shirt','item_name'=>'t-shirt1','price'=>'59']);
        DB::table('categories')->insert(['category_name'=>'T-shirt','item_name'=>'t-shirt2','price'=>'59']);
        DB::table('categories')->insert(['category_name'=>'T-shirt','item_name'=>'t-shirt3','price'=>'59']);
        DB::table('categories')->insert(['category_name'=>'Genji','item_name'=>'genji1','price'=>'59']);
        DB::table('categories')->insert(['category_name'=>'Genji','item_name'=>'genji2','price'=>'59']);
        DB::table('categories')->insert(['category_name'=>'Genji','item_name'=>'genji3','price'=>'59']);
        DB::table('categories')->insert(['category_name'=>'Sharee','item_name'=>'sharee1','price'=>'59']);
        DB::table('categories')->insert(['category_name'=>'Sharee','item_name'=>'sharee2','price'=>'59']);
        DB::table('categories')->insert(['category_name'=>'Sharee','item_name'=>'sharee3','price'=>'59']);
    }
}
