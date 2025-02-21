<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VietTienController extends Controller
{
    public function index(){
        $title = "Đây là tiêu đề";
        $description = "Day la dog mo ta";
        return $title;
        }
}
