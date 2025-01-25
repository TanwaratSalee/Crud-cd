<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductsController::class, 'index'])->name('product.index');

// หน้าแสดงฟอร์ม
Route::get('/create', [ProductsController::class, 'create'])->name('product.create');

Route::post('/store', [ProductsController::class, 'store'])->name('product.store');

// ใช้สำหรับการลบข้อมูล
Route::delete('/products/{product}', [ProductsController::class, 'destroy'])->name('product.destroy');

Route::get('/products/{product}/edit', [ProductsController::class, 'edit'])->name('product.edit');

Route::put('/products/{product}', [ProductsController::class, 'update'])->name('product.update');