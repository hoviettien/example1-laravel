<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TongController extends Controller
{
    function tintong(Request $request){
        $sum = $request->so1 + $request->so2;
        return view('welcome', compact('welcome'));
    }
}
