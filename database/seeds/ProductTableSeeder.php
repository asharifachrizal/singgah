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

        DB::table('products')->insert([
            'name' => 'Selling W/ Talking',
            'slug' => 'selling-w/-talking',
            'category_id' => '2',
            'description' => 'Ini contoh deskripsi desain buku',
            'price' => '30000',
        ]);

        DB::table('products')->insert([
            'name' => 'On My Own',
            'slug' => 'on-my-own',
            'category_id' => '3',
            'description' => 'Ini contoh deskripsi desain buku',
            'price' => '15000',
        ]);

        DB::table('products')->insert([
            'name' => 'Three Summer',
            'slug' => 'three-summer',
            'category_id' => '2',
            'description' => 'Ini contoh deskripsi desain pamflet',
            'price' => '3000',
        ]);

        DB::table('products')->insert([
            'name' => 'February',
            'slug' => 'february',
            'category_id' => '1',
            'description' => 'Ini contoh deskripsi desain undangan',
            'price' => '3000',
        ]);

        DB::table('products')->insert([
            'name' => 'Will you?',
            'slug' => 'will-you',
            'category_id' => '3',
            'description' => 'Ini contoh deskripsi desain batik',
            'price' => '58000',
        ]);

        DB::table('products')->insert([
            'name' => 'Superman',
            'slug' => 'superman',
            'category_id' => '2',
            'description' => 'Ini contoh deskripsi desain sketsa',
            'price' => '45000',
        ]);

        DB::table('products')->insert([
            'name' => 'Love Quote',
            'slug' => 'love-quote',
            'category_id' => '3',
            'description' => 'Ini contoh deskripsi desain digital',
            'price' => '22000',
        ]);

        DB::table('products')->insert([
            'name' => 'Handle to Me',
            'slug' => 'handle-to-me',
            'category_id' => '3',
            'description' => 'Ini contoh deskripsi desain karikatur',
            'price' => '17500',
        ]);

        DB::table('products')->insert([
            'name' => 'Side By Side',
            'slug' => 'side-by-side',
            'category_id' => '2',
            'description' => 'Ini contoh deskripsi desain logo',
            'price' => '78000',
        ]);

        DB::table('products')->insert([
            'name' => 'Dont Let Me Down',
            'slug' => 'dont-let-me-down',
            'category_id' => '2',
            'description' => 'Ini contoh deskripsi desain banner',
            'price' => '92500',
        ]);
    }
}
