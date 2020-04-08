<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createSampleProduct();
    }

    public function createSampleProduct()
    {
        DB::table('products')->insert([
            'name' => 'Masterpiece',
            'slug' => 'masterpiece',
            'category_id' => '1',
            'description' => 'Ini contoh deskripsi desain baju',
            'price' => '10000',
        ]);

        DB::table('products')->insert([
            'name' => 'I Wont Do It',
            'slug' => 'i-wont-do-it',
            'category_id' => '1',
            'description' => 'Ini contoh deskripsi desain poster',
            'price' => '5000',
        ]);

        
    }
}
