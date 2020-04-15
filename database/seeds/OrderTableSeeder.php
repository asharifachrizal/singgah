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
            'user_id' => 3,
            'product_id' => 1,
            'quantity' => 1,
            'orientation' => '1080 x 1080',
            'size' => '1080 x 1080',
            'duration' => 60,
            'target_audience' => 'remaja',
            'deadline' => 'Selasa',
            'font' => 'Arial, Calibri',
            'color' => 'Merah, Kuning',
            'style' => 'Asik',
            'output' => 'PNG, PSD',
            'price' => null,
            'status' => 0,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),


        ]);
    }
}
