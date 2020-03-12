<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createSampleCategory();
    }

    public function createSampleCategory()
    {
        DB::table('categories')->insert([
            'name' => 'Fashion',
            'slug' => 'fashion',
        ]);

        DB::table('categories')->insert([
            'name' => 'Elektronik',
            'slug' => 'elektronik',
        ]);

        DB::table('categories')->insert([
            'name' => 'Kamera',
            'slug' => 'kamera',
        ]);
    }
}
