<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NayeemFurnitureMart;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;




Route::get('/', [NayeemFurnitureMart::class, 'index'])->name('home');
Route::get('/shop', [NayeemFurnitureMart::class, 'shop'])->name('shop');
Route::get('/about', [NayeemFurnitureMart::class, 'about'])->name('about');
Route::get('/services', [NayeemFurnitureMart::class, 'service'])->name('services');
Route::get('/blog', [NayeemFurnitureMart::class, 'blog'])->name('blog');
Route::get('/contact', [NayeemFurnitureMart::class, 'contact'])->name('contact');

Route::get('/add-cart', [CartController::class, 'index'])->name('add.cart');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/add-product', [ProductController::class, 'index'])->name('add.product');
    Route::post('/new-product', [ProductController::class, 'create'])->name('new.product');
    Route::get('/manage-product', [ProductController::class, 'manage'])->name('manage.product');
    Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('edit.product');
    Route::post('/update-product/{id}', [ProductController::class, 'update'])->name('update.product');
    Route::get('/delete-product/{id}', [ProductController::class, 'delete'])->name('delete.product');


});
