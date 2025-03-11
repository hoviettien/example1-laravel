<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        $new_product = Product::where('new',  1)->paginate(perPage: 4);
        $promotion_product = Product::where('promotion_price', '>', 0)->orderBy('promotion_price', 'desc')->paginate(perPage:4);
        return view('page.trangchu', compact('slide', 'new_product', 'promotion_product'));
    }
}
