<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::controller(ProductController::class)
//     ->name('products.')
//     ->prefix('products')
//     ->group(function () {
//         // Danh sách sản phẩm
//         Route::get('/', 'index')->name('index');
//         // Hiển thị form thêm sản phẩm
//         Route::get('/create', 'create')->name('create');
//         // Xử lý lưu sản phẩm mới
//         Route::post('/store', 'store')->name('store');
//         // Hiển thị form chỉnh sửa sản phẩm
//         Route::get('/{id}/edit', 'edit')->name('edit');
//         // Cập nhật sản phẩm
//         Route::put('/{id}', 'update')->name('update');
//         // Xóa sản phẩm
//         Route::delete('/{id}', 'destroy')->name('destroy');
//     });
Route::resource('/products',ProductController::class);