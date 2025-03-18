<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeederTypeProduct extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('type_products')-> insert([
            [
                'id' => 1,
                'name' => 'Bánh mặn',
                'description' => 'Nếu từng bị mê hoặc bởi các loại tarlet ngọt thì chắn chắn bạn không thể bỏ qua những loại tarlet mặn. Ngoài hình dáng bắt mắt, lớp vỏ bánh giòn giòn cùng với nhân mặn như thịt gà, nấm, thịt heo, … của bánh sẽ chinh phục bất cứ ai dùng thử.',
                'image' => 'banh-man-thu-vi-nhat-1.jpg',
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'id' => 2,
                'name' => 'Bánh ngọt',
                'description' => 'Bánh ngọt là một loại thức ăn thường dưới hình thức món bánh dạng bánh mì từ bột nhào, được nướng lên dùng để tráng miệng. Bánh ngọt có nhiều loại, có thể phân loại dựa theo nguyên liệu và kỹ thuật chế biến như bánh ngọt làm từ lúa mì, bơ, bánh ngọt dạng bọt biển.',
                'image' => '20131108144733.jpg',
                'created_at' => '2016-10-12 02:16:15',
                'updated_at' => '2016-10-13 01:38:35'
            ],
            [
                'id' => 3,
                'name' => 'Bánh trái cây',
                'description' => 'Bánh trái cây, hay còn gọi là bánh hoa quả, là một món ăn chơi đặc biệt mang phong cách Huế.',
                'image' => 'banhtraicay.jpg',
                'created_at' => '2016-10-18 00:33:33',
                'updated_at' => '2016-10-15 07:25:27'
            ],
            [
                'id' => 4,
                'name' => 'Bánh kem',
                'description' => 'Với người Việt Nam thì bánh ngọt nói chung đều hay được quy về bánh bông lan – một loại tráng miệng bông xốp, ăn không hoặc được phủ kem lên thành bánh kem.',
                'image' => 'banhkem.jpg',
                'created_at' => '2016-10-26 03:29:19',
                'updated_at' => '2016-10-26 02:22:22'
            ],
            [
                'id' => 5,
                'name' => 'Bánh crepe',
                'description' => 'Crepe là một món bánh nổi tiếng của Pháp.',
                'image' => 'crepe.jpg',
                'created_at' => '2016-10-28 04:00:00',
                'updated_at' => '2016-10-27 04:00:23'
            ],
            [
                'id' => 6,
                'name' => 'Bánh Pizza',
                'description' => 'Pizza đã không chỉ còn là một món ăn được ưa chuộng khắp thế giới mà còn là một phần di sản văn hóa ẩm thực châu Âu.',
                'image' => 'pizza.jpg',
                'created_at' => '2016-10-25 17:19:00',
                'updated_at' => null
            ],
            [
                'id' => 7,
                'name' => 'Bánh su kem',
'description' => 'Bánh su kem là món bánh ngọt ở dạng kem có xuất xứ từ nước Pháp.',
                'image' => 'sukemdau.jpg',
                'created_at' => '2016-10-25 17:19:00',
                'updated_at' => null
            ]
            ]);
    }
}
