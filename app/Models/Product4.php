<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product4 extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type_product_id', 'description', 'unit_price', 'promotion_price', 'image', 'quantity'];

    public function typeProduct()
    {
        return $this->belongsTo(Type_products::class);
    }

    public function billDetails()
    {
        return $this->hasMany(Bill_detail::class);
    }
}
