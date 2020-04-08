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
            'name' => 'Desain Produksi',
            'slug' => 'desain-produksi',
        ]);

        DB::table('categories')->insert([
            'name' => 'Desain Non-Produksi',
            'slug' => 'desain-non-produksi',
        ]);

        DB::table('categories')->insert([
            'name' => 'Video',
            'slug' => 'video',
        ]);
    }
}
