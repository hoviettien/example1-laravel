<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bills extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'date_order', 'total', 'payment', 'note'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function billDetails()
    {
        return $this->hasMany(Bill_detail::class);
    }
}
