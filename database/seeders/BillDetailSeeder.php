<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bill_Detail;

class BillDetailSeeder extends Seeder
{
    public function run()
    {
        Bill_Detail::create([
            'bill_id' => 1,
            'product_id' => 1,
            'quantity' => 2,
            'unit_price' => 50000
        ]);
    }
}
