<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Type_products extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image'];

}
