<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatalogController;

// Главная страница
Route::get('/', [HomeController::class, 'index'])->name('home');

// Категории товаров
Route::get('/gifts', [CatalogController::class, 'gifts'])->name('gifts');
Route::get('/bouquets', [CatalogController::class, 'bouquets'])->name('bouquets');
Route::get('/box-flowers', [CatalogController::class, 'boxFlowers'])->name('box-flowers');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
// Информационные страницы
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/certificates', function () {
    return view('certificates');
})->name('certificates');

// Страница товара
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

// Временные страницы
Route::get('/promotions', function () {
    return "Страница акций - скоро будет добавлена";
})->name('promotions');

Route::get('/login', function () {
    return "Страница входа - будет добавлена позже";
});

Route::get('/register', function () {
    return "Страница регистрации - будет добавлена позже";
});

