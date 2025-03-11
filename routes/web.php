<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\product1Controller;
use Illuminate\Support\Facades\Route;
use App\Models\Slide;

Route::get('/trangchu', function () {
    return view('page.trangchu');
});

Route::get('/product',[product1Controller::class,'table']);
Route::get('/page', [PageController::class, 'getIndex']);