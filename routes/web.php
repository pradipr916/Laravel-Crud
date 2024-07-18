<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product/create',[ProductController::class,'create'])->name('products.create');
Route::post('/product',[ProductController::class,'store'])->name('products.store');
