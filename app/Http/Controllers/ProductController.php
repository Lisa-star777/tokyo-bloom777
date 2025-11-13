<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        // Данные товаров (замените потом на данные из БД)
        $products = [
            1 => [
                'id' => 1,
                'title' => '25 желтых тюльпанов',
                'price' => 2500,
                'category' => 'bouquets',
                'description' => '25 желтых тюльпанов',
                'full_description' => 'Свежие желтые тюльпаны, которые поднимут настроение и украсят любой интерьер.',
                'image' => 'tulips-25-yellow.jpg',
                'features' => ['Свежие цветы', 'Долгое сохранение', 'Бесплатная упаковка'],
                'materials' => 'Декоративный флористический материал',
                'in_stock' => true
            ],
            2 => [
                'id' => 2,
                'title' => '26 пионовидных роз',
                'price' => 7777,
                'category' => 'gifts',
                'description' => '26 пионовидных роз',
                'full_description' => 'Роскошные пионовидные розы с пышными бутонами.',
                'image' => 'roses-26-peony.jpg',
                'features' => ['Премиум качество', 'Эксклюзивные сорта'],
                'materials' => 'Декоративный флористический материал',
                'in_stock' => true
            ],
            // Добавьте остальные товары по аналогии
        ];

        if (!isset($products[$id])) {
            abort(404);
        }

        $product = $products[$id];
        
        // Рекомендуемые товары
        $recommendedProducts = [
            [
                'id' => 2,
                'title' => '26 пионовидных роз',
                'price' => 7777,
                'image' => 'roses-26-peony.jpg',
                'badge' => 'TOP'
            ],
            [
                'id' => 3,
                'title' => '25 пионовидных роз',
                'price' => 7777,
                'image' => 'roses-25-peony.jpg',
                'badge' => null
            ],
            [
                'id' => 4,
                'title' => '25 пионовидных роз',
                'price' => 7777,
                'image' => 'roses-25-peony-2.jpg',
                'badge' => null
            ],
            [
                'id' => 5,
                'title' => '25 пионовидных роз',
                'price' => 7777,
                'image' => 'roses-25-peony-3.jpg',
                'badge' => 'ТОР'
            ],
            [
                'id' => 6,
                'title' => '25 пионовидных роз',
                'price' => 7777,
                'image' => 'roses-25-peony-4.jpg',
                'badge' => 'ТОР'
            ],
            [
                'id' => 7,
                'title' => '25 пионовидных роз',
                'price' => 7777,
                'image' => 'roses-25-peony-5.jpg',
                'badge' => 'ТОР'
            ]
        ];
        
        return view('products.show', compact('product', 'recommendedProducts'));
    }
}