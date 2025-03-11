<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('slides')->insert([
            ['id' => 1, 'link' => '', 'image' => 'banner1.jpg'],
            ['id' => 2, 'link' => '', 'image' => 'banner2.jpg'],
            ['id' => 3, 'link' => '', 'image' => 'banner3.jpg'],
            ['id' => 4, 'link' => '', 'image' => 'banner4.jpg'],
        ]);
    }
}
