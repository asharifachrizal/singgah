<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCartCategory();
    }

    public function createCartCategory()
    {
        $faker = Faker::create();

        DB::table('carts')->insert([
            'user_id' => 1,
            'status' => 0,
            'outputURL' => 'url url url',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);

        DB::table('carts')->insert([
            'user_id' => 1,
            'status' => 1,
            'outputURL' => 'url url url',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);

        DB::table('carts')->insert([
            'user_id' => 1,
            'status' => 2,
            'outputURL' => 'url url url',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('carts')->insert([
            'user_id' => 1,
            'status' => 3,
            'outputURL' => 'url url url',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('carts')->insert([
            'user_id' => 1,
            'status' => 4,
            'outputURL' => 'url url url',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);

        
    }
}
