<?php

namespace App\Http\Controllers;
use App\Models\Product;


use Illuminate\Http\Request;

class Admin extends Controller
{
    public function getAdminEdit($id)
        {
            $product = Product::find($id);
            return view('pageadmin.formEdit')->with('product', $product);
        }

}
