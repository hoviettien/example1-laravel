<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bill_detail extends Model
{
    use HasFactory;

    protected $fillable = ['bill_id', 'product_id', 'quantity', 'unit_price'];

    public function bill()
    {
        return $this->belongsTo(bills::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
