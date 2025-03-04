<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shoppeController extends Controller
{
    public function index(){
        return view('pages.trangchu');
    }
}
