<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function gifts()
    {
        $products = [
            [
                'id' => 1,
                'title' => '25 плечевидных роз',
                'price' => 7777,
                'image' => 'gift1.jpg',
                'description' => 'Роскошный букет из 25 свежих плечевидных роз'
            ],
            [
                'id' => 2,
                'title' => '26 плечевидных роз',
                'price' => 7777,
                'image' => 'gift2.jpg',
                'description' => 'Эксклюзивный букет из 26 плечевидных роз'
            ],
            [
                'id' => 3,
                'title' => 'Люкс букет роз',
                'price' => 9999,
                'image' => 'gift3.jpg',
                'description' => 'Премиальный букет из отборных роз'
            ],
            [
                'id' => 4,
                'title' => 'Романтичная композиция',
                'price' => 8550,
                'image' => 'gift4.jpg',
                'description' => 'Нежная композиция для особых моментов'
            ],
            [
                'id' => 5,
                'title' => 'Свадебный букет',
                'price' => 12000,
                'image' => 'gift5.jpg',
                'description' => 'Изысканный букет для невесты'
            ],
            [
                'id' => 6,
                'title' => 'Праздничная композиция',
                'price' => 6800,
                'image' => 'gift6.jpg',
                'description' => 'Яркая композиция для праздников'
            ],
            [
                'id' => 7,
                'title' => 'Экзотические цветы',
                'price' => 15000,
                'image' => 'gift7.jpg',
                'description' => 'Редкие и экзотические цветы'
            ],
            [
                'id' => 8,
                'title' => 'Классический букет',
                'price' => 5500,
                'image' => 'gift8.jpg',
                'description' => 'Традиционный букет для любого повода'
            ]
        ];

        return view('catalog.gifts', compact('products'));
    }

    public function bouquets()
    {
        $products = [
            [
                'id' => 9,
                'title' => 'Романтичный букет роз',
                'price' => 6550,
                'image' => 'bouquet1.jpg',
                'description' => 'Нежные розы для романтического настроения'
            ],
            [
                'id' => 10,
                'title' => 'Свежий полевой букет',
                'price' => 4900,
                'image' => 'bouquet2.jpg',
                'description' => 'Яркие полевые цветы в естественной композиции'
            ],
            [
                'id' => 11,
                'title' => 'Экзотические цветы',
                'price' => 8200,
                'image' => 'bouquet3.jpg',
                'description' => 'Редкие тропические цветы для особого случая'
            ],
            [
                'id' => 12,
                'title' => 'Классические хризантемы',
                'price' => 5800,
                'image' => 'bouquet4.jpg',
                'description' => 'Элегантные хризантемы в традиционной композиции'
            ],
            [
                'id' => 13,
                'title' => 'Весенний тюльпановый букет',
                'price' => 4500,
                'image' => 'bouquet5.jpg',
                'description' => 'Свежие тюльпаны - символ весны и нежности'
            ],
            [
                'id' => 14,
                'title' => 'Свадебная композиция',
                'price' => 12500,
                'image' => 'bouquet6.jpg',
                'description' => 'Изысканный букет для самого важного дня'
            ],
            [
                'id' => 15,
                'title' => 'Летнее разноцветье',
                'price' => 6700,
                'image' => 'bouquet7.jpg',
                'description' => 'Яркая композиция из сезонных цветов'
            ],
            [
                'id' => 16,
                'title' => 'Минималистичный букет',
                'price' => 5200,
                'image' => 'bouquet8.jpg',
                'description' => 'Современный букет в стиле минимализм'
            ]
        ];

        return view('catalog.bouquets', compact('products'));
    }

    public function boxFlowers()
    {
        $products = [
            [
                'id' => 17,
                'title' => 'Красные розы в шляпной коробке',
                'price' => 7200,
                'image' => 'box1.jpg',
                'description' => 'Элегантные красные розы в стильной шляпной коробке'
            ],
            [
                'id' => 18,
                'title' => 'Нежные пионы в коробке',
                'price' => 6800,
                'image' => 'box2.jpg',
                'description' => 'Пушистые пионы в романтичной упаковке'
            ],
            [
                'id' => 19,
                'title' => 'Сборный букет в деревянной коробке',
                'price' => 8900,
                'image' => 'box3.jpg',
                'description' => 'Разнообразие цветов в экологичной деревянной коробке'
            ],
            [
                'id' => 20,
                'title' => 'Тюльпаны в прозрачной коробке',
                'price' => 5500,
                'image' => 'box4.jpg',
                'description' => 'Яркие тюльпаны в современной прозрачной упаковке'
            ],
            [
                'id' => 21,
                'title' => 'Белоснежные розы в коробке',
                'price' => 7500,
                'image' => 'box5.jpg',
                'description' => 'Чистые белые розы в минималистичной коробке'
            ],
            [
                'id' => 22,
                'title' => 'Суккуленты в геометрической коробке',
                'price' => 6200,
                'image' => 'box6.jpg',
                'description' => 'Модные суккуленты в стильной геометрической упаковке'
            ],
            [
                'id' => 23,
                'title' => 'Розовые герберы в коробке',
                'price' => 5800,
                'image' => 'box7.jpg',
                'description' => 'Яркие герберы в праздничной упаковке'
            ],
            [
                'id' => 24,
                'title' => 'Экзотические орхидеи в коробке',
                'price' => 9500,
                'image' => 'box8.jpg',
                'description' => 'Изысканные орхидеи в премиальной коробке'
            ]
        ];

        return view('catalog.box-flowers', compact('products'));
    }
}