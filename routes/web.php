<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SingupController;
use Illuminate\Support\Facades\Route;

// Route::get('/form', function () {
//     return view('singup');
// });

// Route::get('/tien', function () {
//     return "ngnoagidưkngnoagid";
// });

// Route::get('/tien', [PostController::class, 'index'] );
// Route::resource('/post',PostController::class);
// Route::get('/create', [PostController::class, 'create'] );
Route::get('/singup', [SingupController::class, 'index']);
Route::post('/formkq', [SingupController::class, 'displayInfor']);
