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
            'name' => 'Book',
            'slug' => 'book',
        ]);

        DB::table('categories')->insert([
            'name' => 'Poster',
            'slug' => 'poster',
        ]);

        DB::table('categories')->insert([
            'name' => 'Instagram',
            'slug' => 'instagram',
        ]);
    }
}
