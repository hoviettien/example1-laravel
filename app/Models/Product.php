<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Bill_detail;


class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function billDetails(): HasMany
    {
        return $this->hasMany(Bill_detail::class, 'id_product', 'id');
    }
}
