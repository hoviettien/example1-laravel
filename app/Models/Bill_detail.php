<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bill_detail extends Model
{
    use HasFactory;

    protected $table = 'bills_detail'; 

    public function bill()
    {
        return $this->belongsTo(bills::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
