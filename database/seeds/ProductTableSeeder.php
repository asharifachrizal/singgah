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
            'cart_id' => 1,            
            'product_name_id' => 1,
            'quantity' => 1,
            'orientation' => '1080 x 1080',
            'size' => '1080 x 1080',
            'duration' => 60,
            'target_audience' => 'remaja',
            'deadline' => 'Selasa',
            'briefURL' => 'url url url',
            'progress' => 'on progress',            
        ]);

        

        
    }
}
