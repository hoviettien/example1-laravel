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

Route::get('/detail/{id}', [PageController::class, 'getDetail']);		
Route::get('/type/{id}', [PageController::class, 'getType']);		

Route::get('/admin', [PageController::class, 'getIndexAdmin']);
Route::get('/admin-add-form', [PageController::class, 'getAdminAdd'])->name('add-product');														
Route::post('/admin-add-form', [PageController::class, 'postAdminAdd']);	
		
Route::get('/admin-edit-form/{id}', [PageController::class, 'getAdminEdit']);
Route::post('/admin-edit', [PageController::class, 'postAdminEdit']);
Route::post('/admin-delete/{id}', [PageController::class, 'postAdminDelete']);														
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/about', [PageController::class, 'aboutUs']);
