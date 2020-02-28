<?php

use Illuminate\Database\Seeder;

class ProductImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createSampleProductImage();
    }

    public function createSampleProductImage()
    {
        DB::table('product_images')->insert([
            'product_id' => '10',
            'img_path' => 'products/product-9.jpg',
            'type' => '1'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '10',
            'img_path' => 'products/product-9.jpg',
            'type' => '2'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '11',
            'img_path' => 'products/product-8.jpg',
            'type' => '1'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '11',
            'img_path' => 'products/product-8.jpg',
            'type' => '2'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '12',
            'img_path' => 'products/product-7.jpg',
            'type' => '1'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '12',
            'img_path' => 'products/product-7.jpg',
            'type' => '2'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '1',
            'img_path' => 'products/product-1.jpg',
            'type' => '1'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '1',
            'img_path' => 'products/product-A.jpg',
            'type' => '2'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '2',
            'img_path' => 'products/product-2.jpg',
            'type' => '1'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '2',
            'img_path' => 'products/product-B.jpg',
            'type' => '2'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '3',
            'img_path' => 'products/product-3.jpg',
            'type' => '1'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '3',
            'img_path' => 'products/product-C.jpg',
            'type' => '2'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '4',
            'img_path' => 'products/product-4.jpg',
            'type' => '1'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '4',
            'img_path' => 'products/product-1.jpg',
            'type' => '2'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '5',
            'img_path' => 'products/product-5.jpg',
            'type' => '1'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '5',
            'img_path' => 'products/product-5.jpg',
            'type' => '2'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '6',
            'img_path' => 'products/product-6.jpg',
            'type' => '1'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '6',
            'img_path' => 'products/product-6.jpg',
            'type' => '2'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '7',
            'img_path' => 'products/product-7.jpg',
            'type' => '1'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '7',
            'img_path' => 'products/product-7.jpg',
            'type' => '2'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '8',
            'img_path' => 'products/product-8.jpg',
            'type' => '1'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '8',
            'img_path' => 'products/product-8.jpg',
            'type' => '2'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '9',
            'img_path' => 'products/product-9.jpg',
            'type' => '1'
        ]);

        DB::table('product_images')->insert([
            'product_id' => '9',
            'img_path' => 'products/product-9.jpg',
            'type' => '2'
        ]);
    }
}
