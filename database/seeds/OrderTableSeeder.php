<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OrderTableSeeder extends Seeder
{
    /** * 
     * Run the database seeds. * 
     * 
     * @return void
     */ 
    
    public function run() {
        $this->createSampleProduct(); 
    } 
    
    public function createSampleProduct() {
        $faker = Faker::create();

        

        DB::table('orders')->insert([ 
            'cart_id' => 1,
            'product_id' => 1,
            'quantity' => 1,
            'orientation' => '1080 x 1080',
            'size' => '1080 x 1080',
            'duration' => 60,
            'target_audience' => 'remaja',
            'deadline' => 'Selasa',
            'briefURL' => 'url url url',
            'status' => 0,
            

        ]); 
    }
}
