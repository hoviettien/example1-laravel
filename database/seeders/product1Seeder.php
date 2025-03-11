<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class product1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Bánh Crepe Sầu riêng',
                'id_type' => 5,
                'description' => '<p>B&aacute;nh crepe sầu ri&ecirc;ng nh&agrave; l&agrave;m, thơm ngon, bổ dưỡng</p>',
                'unit_price' => 150000,
                'promotion_price' => 10000,
                'image' => '1430967449-pancake-sau-rieng-6.jpg',
                'unit' => 'hộp',
                'new' => 1,
                'created_at' => '2016-10-26 03:00:16',
                'updated_at' => '2021-07-02 04:21:18',
            ],
            [
                'id' => 2,
                'name' => 'Bánh Crepe Chocolate',
                'id_type' => 6,
                'description' => '',
                'unit_price' => 180000,
                'promotion_price' => 160000,
                'image' => 'crepe-chocolate.jpg',
                'unit' => 'hộp',
                'new' => 1,
                'created_at' => '2016-10-26 03:00:16',
                'updated_at' => '2016-10-24 22:11:00',
            ],
            [
                'id' => 3,
                'name' => 'Bánh Crepe Sầu riêng - Chuối',
                'id_type' => 5,
                'description' => '',
                'unit_price' => 150000,
                'promotion_price' => 120000,
                'image' => 'crepe-chuoi.jpg',
                'unit' => 'hộp',
                'new' => 0,
                'created_at' => '2016-10-26 03:00:16',
                'updated_at' => '2016-10-24 22:11:00',
            ],
            [
                'id' => 4,
                'name' => 'Bánh Crepe Đào',
                'id_type' => 5,
                'description' => '',
                'unit_price' => 160000,
                'promotion_price' => 0,
                'image' => 'crepe-dao.jpg',
                'unit' => 'hộp',
                'new' => 0,
                'created_at' => '2016-10-26 03:00:16',
                'updated_at' => '2016-10-24 22:11:00',
            ],
            [
                'id' => 5,
                'name' => 'Bánh Crepe Dâu',
                'id_type' => 5,
                'description' => '',
                'unit_price' => 160000,
                'promotion_price' => 0,
                'image' => 'crepedau.jpg',
                'unit' => 'hộp',
                'new' => 0,
                'created_at' => '2016-10-26 03:00:16',
                'updated_at' => '2016-10-24 22:11:00',
            ],
            [
                'id' => 6,
                'name' => 'Bánh Crepe Pháp',
                'id_type' => 5,
                'description' => '',
                'unit_price' => 200000,
                'promotion_price' => 180000,
                'image' => 'crepe-phap.jpg',
                'unit' => 'hộp',
                'new' => 0,
                'created_at' => '2016-10-26 03:00:16',
'updated_at' => '2016-10-24 22:11:00',
            ],
            [
                'id' => 7,
                'name' => 'Bánh Crepe Táo',
                'id_type' => 5,
                'description' => '',
                'unit_price' => 160000,
                'promotion_price' => 0,
                'image' => 'crepe-tao.jpg',
                'unit' => 'hộp',
                'new' => 1,
                'created_at' => '2016-10-26 03:00:16',
                'updated_at' => '2016-10-24 22:11:00',
            ],
            [
                'id' => 8,
                'name' => 'Bánh Crepe Trà xanh',
                'id_type' => 5,
                'description' => '',
                'unit_price' => 160000,
                'promotion_price' => 150000,
                'image' => 'crepe-traxanh.jpg',
                'unit' => 'hộp',
                'new' => 0,
                'created_at' => '2016-10-26 03:00:16',
                'updated_at' => '2016-10-24 22:11:00',
            ],
            [
                'id' => 9,
                'name' => 'Bánh Crepe Sầu riêng và Dứa',
                'id_type' => 5,
                'description' => '',
                'unit_price' => 160000,
                'promotion_price' => 150000,
                'image' => 'saurieng-dua.jpg',
                'unit' => 'hộp',
                'new' => 0,
                'created_at' => '2016-10-26 03:00:16',
                'updated_at' => '2016-10-24 22:11:00',
            ],
            [
                'id' => 11,
                'name' => 'Bánh Gato Trái cây Việt Quất',
                'id_type' => 3,
                'description' => '',
                'unit_price' => 250000,
                'promotion_price' => 0,
                'image' => '544bc48782741.png',
                'unit' => 'cái',
                'new' => 0,
                'created_at' => '2016-10-12 02:00:00',
                'updated_at' => '2016-10-27 02:24:00',
            ],
            // Thêm các dòng dữ liệu còn lại tương tự ở đây
        ]);
    }
}
