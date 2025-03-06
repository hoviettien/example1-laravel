<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB; // Thêm dòng này vào

class ProductsTableSeeder extends Seeder
{
    // public function run()
    // {
    //     DB::table('products')->insert([
    //         [
    //             'name' => 'Laptop Gaming',
    //             'price' => 25000000,
    //             'image' => 'laptop-gaming.jpg',
    //             'category_id' => 1,
    //             'created_at' => now(),
    //             'updated_at' => now(),
    //         ],
    //         [
    //             'name' => 'Điện thoại iPhone 15',
    //             'price' => 30000000,
    //             'image' => 'iphone15.jpg',
    //             'category_id' => 2,
    //             'created_at' => now(),
    //             'updated_at' => now(),
    //         ],
    //         [
    //             'name' => 'Smart TV 55 inch',
    //             'price' => 15000000,
    //             'image' => 'smart-tv.jpg',
    //             'category_id' => 3,
    //             'created_at' => now(),
    //             'updated_at' => now(),
    //         ]
    //     ]);
    // }
    public function run(): void
    {
        $faker =   Faker::create();
        foreach (range(1,100) as $index){
            DB::table('products')->insert([
                    'name' => $faker->word,
                    'price' => $faker->randomFloat(2,10,100),
                    'image' => $faker->imageUrl(200,200,'products'),
                    'category_id' => rand(1,30),
                    'created_at' => now(),
                    'updated_at' => now(),
            ]);
        }
    }
}
