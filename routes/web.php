<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatalogController;


// Главная страница
Route::get('/', [HomeController::class, 'index']);

// Страницы категорий
Route::get('/gifts', [ProductController::class, 'category'])->name('gifts');
Route::get('/bouquets', [ProductController::class, 'category'])->name('bouquets');
Route::get('/box-flowers', [ProductController::class, 'category'])->name('box-flowers');
Route::get('/promotions', [ProductController::class, 'category'])->name('promotions');
Route::get('/certificates', [ProductController::class, 'category'])->name('certificates');

// Страница отдельного товара
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

// Остальные страницы
Route::get('/about', function () {
    return view('about');
});

Route::get('/roses', function () {
    return view('categories.roses');
});

// Каталоги
Route::get('/gifts', [CatalogController::class, 'gifts'])->name('gifts');
Route::get('/bouquets', [CatalogController::class, 'bouquets'])->name('bouquets');
Route::get('/box-flowers', [CatalogController::class, 'boxFlowers'])->name('box-flowers');

// Временные маршруты для авторизации
Route::get('/login', function () {
    return "Страница входа - будет добавлена позже";
});

Route::get('/register', function () {
    return "Страница регистрации - будет добавлена позже";
});