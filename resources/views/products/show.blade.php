@extends('layouts.app')

@section('title', $product['title'] . ' - Токус Bloom')

@section('content')
    <div class="product-detail">
        <div class="container">
            <!-- Хлебные крошки -->
            <nav class="breadcrumb">
                <a href="/">Главная</a>
                <span class="separator">/</span>
                <a href="/{{ $product['category'] }}">{{ ucfirst($product['category']) }}</a>
                <span class="separator">/</span>
                <span class="current">{{ $product['title'] }}</span>
            </nav>

            <div class="product-detail-content">
                <div class="product-images">
                    <div class="main-image">
                        <img src="{{ asset('images/products/' . $product['image']) }}" alt="{{ $product['title'] }}"
                             onerror="this.src='{{ asset('images/placeholder.jpg') }}'">
                    </div>
                </div>

                <div class="product-info">
                    <h1 class="product-title">{{ $product['title'] }}</h1>
                    <p class="product-description">{{ $product['description'] }}</p>
                    
                    <div class="product-price">
                        <span class="price">{{ number_format($product['price'], 0, '', ' ') }} ₽</span>
                    </div>

                    <div class="product-features">
                        <h3>Особенности:</h3>
                        <ul>
                            @foreach($product['features'] as $feature)
                                <li>{{ $feature }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="product-actions">
                        <button class="add-to-cart-btn">Добавить в корзину</button>
                        <button class="buy-now-btn">Купить сейчас</button>
                    </div>
                </div>
            </div>

            <div class="product-full-description">
                <h2>Подробное описание</h2>
                <p>{{ $product['full_description'] }}</p>
            </div>
        </div>
    </div>
@endsection

@section('styles')
<style>
    .breadcrumb {
        margin: 20px 0;
        font-family: 'Albert Sans', sans-serif;
    }

    .breadcrumb a {
        color: #292966;
        text-decoration: none;
    }

    .breadcrumb a:hover {
        color: #A3A3CC;
    }

    .breadcrumb .separator {
        margin: 0 10px;
        color: #666;
    }

    .breadcrumb .current {
        color: #666;
    }

    .product-detail-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        margin: 40px 0;
    }

    .main-image {
        width: 100%;
        height: 500px;
        background-color: #B8B8B8;
        border-radius: 15px;
        overflow: hidden;
    }

    .main-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .product-title {
        font-family: 'Russo One', sans-serif;
        font-size: 32px;
        color: #292966;
        margin-bottom: 20px;
    }

    .product-description {
        font-size: 18px;
        color: #666;
        margin-bottom: 30px;
        line-height: 1.6;
    }

    .product-price .price {
        font-family: 'Albert Sans', sans-serif;
        font-size: 36px;
        font-weight: 700;
        color: #292966;
    }

    .product-features {
        margin: 30px 0;
    }

    .product-features h3 {
        font-family: 'Albert Sans', sans-serif;
        font-size: 20px;
        margin-bottom: 15px;
        color: #292966;
    }

    .product-features ul {
        list-style: none;
        padding: 0;
    }

    .product-features li {
        padding: 8px 0;
        font-family: 'Albert Sans', sans-serif;
        position: relative;
        padding-left: 25px;
    }

    .product-features li:before {
        content: '✓';
        position: absolute;
        left: 0;
        color: #A3A3CC;
        font-weight: bold;
    }

    .product-actions {
        display: flex;
        gap: 15px;
        margin-top: 30px;
    }

    .add-to-cart-btn, .buy-now-btn {
        padding: 15px 30px;
        border: none;
        border-radius: 8px;
        font-family: 'Albert Sans', sans-serif;
        font-weight: 600;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .add-to-cart-btn {
        background-color: #A3A3CC;
        color: white;
    }

    .buy-now-btn {
        background-color: #292966;
        color: white;
    }

    .add-to-cart-btn:hover, .buy-now-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .product-full-description {
        margin: 50px 0;
        padding: 30px;
        background-color: #f8f9fa;
        border-radius: 15px;
    }

    .product-full-description h2 {
        font-family: 'Russo One', sans-serif;
        color: #292966;
        margin-bottom: 20px;
    }

    .product-full-description p {
        font-family: 'Albert Sans', sans-serif;
        line-height: 1.8;
        color: #666;
    }

    @media (max-width: 768px) {
        .product-detail-content {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .main-image {
            height: 300px;
        }

        .product-actions {
            flex-direction: column;
        }
    }
</style>
@endsection