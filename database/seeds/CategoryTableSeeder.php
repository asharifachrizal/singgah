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
            'name' => 'Desain Digital',
            'slug' => 'desain-digital',
        ]);

        DB::table('categories')->insert([
            'name' => 'Video Editing',
            'slug' => 'video editing',
        ]);
    }
}
