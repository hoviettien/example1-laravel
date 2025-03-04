<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\SchemaController;
use App\Http\Controllers\shoppeController;
use App\Http\Controllers\SingupController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Ramsey\Uuid\Type\Decimal;
use Illuminate\Support\Facades\Schema;



// Route::get('/form', function () {
//     return view('teamwork');
// });

// Route::get('/tien', function () {
//     return "ngnoagidưkngnoagid";
// });

// Route::get('/tien', [PostController::class, 'index'] );
// Route::resource('/post',PostController::class);
// Route::get('/create', [PostController::class, 'create'] );
// Route::get('/singup', [SingupController::class, 'index']);
// Route::post('/formkq', [SingupController::class, 'displayInfor']);

Route::resource('/products',ProductController::class);
Route::resource('/page',PageController::class);
Route::resource('/shoppe',shoppeController::class);


// route::get('database', function(){
//     Schema::create('loaisanpham', function($table){
//         $table -> increments('id');
//         $table -> string('ten', 200);
//         $table -> Decimal('price', 10,2);
//         $table -> string('image');
//     });
// echo "thanh cong";
// });

route::get('/products', [productsController::class, 'index']);
route::get('/schema', [SchemaController::class, 'index']);