<?php

use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createSampleSlider();
    }

    public function createSampleSlider()
    {
        DB::table('sliders')->insert([
            'title' => 'Contoh Judul 1',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem provident consequuntur esse quidem vero odit,',
            'slider_path' => 'uploads/sliders/slider-1.png',
            'button_text' => 'Beli Sekarang',
            'button_color' => '#000000'
        ]);

        DB::table('sliders')->insert([
            'title' => 'Contoh Judul 2',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem provident consequuntur esse quidem vero odit,',
            'slider_path' => 'uploads/sliders/slider-2.png',
            'button_text' => 'Beli Sekarang',
            'button_color' => '#000000'
        ]);

        DB::table('sliders')->insert([
            'title' => 'Contoh Judul 3',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem provident consequuntur esse quidem vero odit,',
            'slider_path' => 'uploads/sliders/slider-3.jpg',
            'button_text' => 'Beli Sekarang',
            'button_color' => '#000000'
        ]);

        DB::table('sliders')->insert([
            'title' => 'Contoh Judul 4',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem provident consequuntur esse quidem vero odit,',
            'slider_path' => 'uploads/sliders/slider-4.jpg',
            'button_text' => 'Beli Sekarang',
            'button_color' => '#000000'
        ]);
    }
}
