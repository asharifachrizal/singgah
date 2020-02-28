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
        ]);

        DB::table('categories')->insert([
            'name' => 'Elektronik',
        ]);

        DB::table('categories')->insert([
            'name' => 'Kamera',
        ]);
    }
}
