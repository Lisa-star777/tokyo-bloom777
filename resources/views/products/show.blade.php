@extends('layouts.app')

@section('title', $product['title'] . ' - Токус Bloom')

@section('content')
    <style>
    /* Стили для детальной страницы товара */
    .product-page {
        max-width: 1200px;
        margin: 120px auto 0;
        padding: 40px 20px;
        background-color: #ffffff;
    }

    .product-main {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        margin-bottom: 80px;
        align-items: start;
    }

    .product-gallery .main-image {
        width: 100%;
        height: 600px;
        overflow: hidden;
        border-radius: 15px;
        background-color: #f8f9fa;
    }

    .product-gallery .main-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .product-details {
        padding: 20px 0;
    }

    .product-header {
        margin-bottom: 40px;
    }

    .product-title {
        font-family: 'Albert Sans', sans-serif;
        font-size: 32px;
        margin: 0 0 15px 0;
        color: #292966;
        font-weight: 600;
        line-height: 1.3;
    }

    .product-availability {
        color: #4CAF50;
        font-size: 18px;
        margin-bottom: 15px;
        font-weight: 500;
        font-family: 'Albert Sans', sans-serif;
    }

    .product-price {
        font-size: 36px;
        font-weight: bold;
        color: #292966;
        font-family: 'Albert Sans', sans-serif;
    }

    .product-info-section {
        margin-bottom: 40px;
    }

    .info-item {
        margin-bottom: 30px;
    }

    .info-item strong {
        display: block;
        margin-bottom: 8px;
        font-size: 18px;
        color: #292966;
        font-family: 'Albert Sans', sans-serif;
        font-weight: 600;
    }

    .info-item p {
        margin: 0;
        color: #666;
        font-family: 'Albert Sans', sans-serif;
        font-size: 16px;
        line-height: 1.5;
    }

    .order-button {
        background-color: #292966;
        color: white;
        border: none;
        padding: 20px 50px;
        font-size: 20px;
        font-weight: bold;
        border-radius: 8px;
        cursor: pointer;
        width: 100%;
        margin-top: 20px;
        transition: all 0.3s ease;
        font-family: 'Albert Sans', sans-serif;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .order-button:hover {
        background-color: #1a1a4d;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(41, 41, 102, 0.3);
    }

    /* Стили для блока рекомендаций */
    .product-additions {
        margin-top: 80px;
        border-top: 2px solid #e9ecef;
        padding-top: 50px;
    }

    .product-additions h2 {
        font-size: 28px;
        margin-bottom: 40px;
        color: #292966;
        font-family: 'Albert Sans', sans-serif;
        font-weight: 600;
        text-align: center;
    }

    .additions-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .addition-card {
        border: 2px solid #e9ecef;
        border-radius: 12px;
        padding: 20px;
        position: relative;
        background: white;
        transition: all 0.3s ease;
        cursor: pointer;
        text-align: center;
    }

    .addition-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        border-color: #292966;
    }

    .addition-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        color: white;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 12px;
        font-weight: bold;
        font-family: 'Albert Sans', sans-serif;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .addition-badge.top {
        background: #ff6b6b;
    }

    .addition-badge.tor {
        background: #292966;
    }

    .addition-image {
        width: 100%;
        height: 180px;
        overflow: hidden;
        border-radius: 8px;
        margin-bottom: 15px;
        background-color: #f8f9fa;
    }

    .addition-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 8px;
    }

    .addition-info h3 {
        font-size: 16px;
        margin: 0 0 10px 0;
        color: #292966;
        font-family: 'Albert Sans', sans-serif;
        font-weight: 600;
        line-height: 1.4;
    }

    .addition-price {
        font-size: 20px;
        font-weight: bold;
        color: #292966;
        font-family: 'Albert Sans', sans-serif;
        margin-bottom: 15px;
    }

    .addition-order-btn {
        background-color: #292966;
        color: white;
        border: none;
        padding: 12px 24px;
        font-size: 14px;
        border-radius: 6px;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s;
        font-family: 'Albert Sans', sans-serif;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .addition-order-btn:hover {
        background-color: #464670ff;
    }

    /* Адаптивность */
    @media (max-width: 1024px) {
        .additions-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .product-main {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .product-gallery .main-image {
            height: 400px;
        }

        .additions-grid {
            grid-template-columns: 1fr;
            max-width: 400px;
            margin: 0 auto;
        }

        .product-page {
            margin-top: 140px;
            padding: 20px 15px;
        }

        .product-title {
            font-size: 28px;
        }

        .product-price {
            font-size: 32px;
        }
    }

    @media (max-width: 480px) {
        .product-gallery .main-image {
            height: 300px;
        }

        .product-title {
            font-size: 24px;
        }

        .product-price {
            font-size: 28px;
        }

        .order-button {
            padding: 18px 30px;
            font-size: 18px;
        }

        .product-additions h2 {
            font-size: 24px;
        }
    }
    </style>

    <div class="product-page">
        <!-- Основная информация -->
        <div class="product-main">
            <div class="product-gallery">
                <div class="main-image">
                    <img src="{{ asset('images/products/' . $product['image']) }}" alt="{{ $product['title'] }}"
                         onerror="this.src='{{ asset('images/placeholder.jpg') }}'">
                </div>
            </div>

            <div class="product-details">
                <div class="product-header">
                    <h1 class="product-title">{{ $product['title'] }}</h1>
                    <div class="product-availability">В наличии</div>
                    <div class="product-price">{{ number_format($product['price'], 0, '', '.') }}</div>
                </div>

                <div class="product-info-section">
                    <div class="info-item">
                        <strong>Цветы</strong>
                        <p>{{ $product['description'] }}</p>
                    </div>

                    <div class="info-item">
                        <strong>Материалы упаковки</strong>
                        <p>{{ $product['materials'] }}</p>
                    </div>
                </div>

                <button class="order-button">ЗАКАЗАТЬ</button>
            </div>
        </div>

        <!-- Рекомендации "К букету можно добавить" -->
        <div class="product-additions">
            <h2>К букету можно добавить</h2>

            <div class="additions-grid">
                <!-- Товар 1 с бейджем  -->
                <div class="addition-card" data-product-id="2">
                    <div class="addition-image">
                        <img src="{{ asset('images/products/roses-26-peony.jpg') }}" alt="26 пионовидных роз"
                             onerror="this.src='{{ asset('images/placeholder.jpg') }}'">
                    </div>
                    <div class="addition-info">
                        <h3>26 пионовидных роз</h3>
                        <div class="addition-price">7777 ₽</div>
                    </div>
                    <button class="addition-order-btn">Заказать</button>
                </div>

                <!-- Товар 2 без бейджа -->
                <div class="addition-card" data-product-id="3">
                    <div class="addition-image">
                        <img src="{{ asset('images/products/roses-25-peony.jpg') }}" alt="25 пионовидных роз"
                             onerror="this.src='{{ asset('images/placeholder.jpg') }}'">
                    </div>
                    <div class="addition-info">
                        <h3>25 пионовидных роз</h3>
                        <div class="addition-price">7777 ₽</div>
                    </div>
                    <button class="addition-order-btn">Заказать</button>
                </div>

                <!-- Товар 3 без бейджа -->
                <div class="addition-card" data-product-id="4">
                    <div class="addition-image">
                        <img src="{{ asset('images/products/roses-25-peony-2.jpg') }}" alt="25 пионовидных роз"
                             onerror="this.src='{{ asset('images/placeholder.jpg') }}'">
                    </div>
                    <div class="addition-info">
                        <h3>25 пионовидных роз</h3>
                        <div class="addition-price">7777 ₽</div>
                    </div>
                    <button class="addition-order-btn">Заказать</button>
                </div>

                <!-- Товар 4 с бейджем ТОР -->
                <div class="addition-card" data-product-id="5">
                    <div class="addition-image">
                        <img src="{{ asset('images/products/roses-25-peony-3.jpg') }}" alt="25 пионовидных роз"
                             onerror="this.src='{{ asset('images/placeholder.jpg') }}'">
                    </div>
                    <div class="addition-info">
                        <h3>25 пионовидных роз</h3>
                        <div class="addition-price">7777 ₽</div>
                    </div>
                    <button class="addition-order-btn">Заказать</button>
                </div>

                <!-- Товар 5 с бейджем ТОР -->
                <div class="addition-card" data-product-id="6">
                    <div class="addition-image">
                        <img src="{{ asset('images/products/roses-25-peony-4.jpg') }}" alt="25 пионовидных роз"
                             onerror="this.src='{{ asset('images/placeholder.jpg') }}'">
                    </div>
                    <div class="addition-info">
                        <h3>25 пионовидных роз</h3>
                        <div class="addition-price">7777 ₽</div>
                    </div>
                    <button class="addition-order-btn">Заказать</button>
                </div>

                <!-- Товар 6 с бейджем ТОР -->
                <div class="addition-card" data-product-id="7">
                    <div class="addition-image">
                        <img src="{{ asset('images/products/roses-25-peony-5.jpg') }}" alt="25 пионовидных роз"
                             onerror="this.src='{{ asset('images/placeholder.jpg') }}'">
                    </div>
                    <div class="addition-info">
                        <h3>25 пионовидных роз</h3>
                        <div class="addition-price">7777 ₽</div>
                    </div>
                    <button class="addition-order-btn">Заказать</button>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Обработчики для кнопок "Заказать" в рекомендациях
        document.querySelectorAll('.addition-order-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.stopPropagation();
                const card = this.closest('.addition-card');
                const productId = card.getAttribute('data-product-id');

                console.log('Добавлен товар:', productId);
                alert('сработай пж');
            });
        });

        // Обработчики клика по карточкам рекомендаций
        document.querySelectorAll('.addition-card').forEach(card => {
            card.addEventListener('click', function(e) {
                if (!e.target.classList.contains('addition-order-btn')) {
                    const productId = this.getAttribute('data-product-id');
                    window.location.href = `/product/${productId}`;
                }
            });
        });

        // Обработчик кнопки "ЗАКАЗАТЬ" основного товара
        document.querySelector('.order-button').addEventListener('click', function() {
            const productId = {{ $product['id'] }};
            console.log('Заказ товара:', productId);
            alert('Тсработай пж');
        });
    });
    </script>
@endsection