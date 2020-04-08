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
            'user_id' => 1,
            'status' => 'actived'
        ]);

        
    }
}
