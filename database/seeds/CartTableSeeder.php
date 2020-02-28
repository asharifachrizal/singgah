<?php

use Illuminate\Database\Seeder;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCartCategory();
    }

    public function createCartCategory()
    {
        DB::table('carts')->insert([
            'user_id' => '2',
            'product_id' => '4'
        ]);

        DB::table('carts')->insert([
            'user_id' => '2',
            'product_id' => '7'
        ]);
        
        DB::table('carts')->insert([
            'user_id' => '2',
            'product_id' => '2'
        ]);

        DB::table('carts')->insert([
            'user_id' => '3',
            'product_id' => '7'
        ]);

        DB::table('carts')->insert([
            'user_id' => '3',
            'product_id' => '9'
        ]);
    }
}
