@extends('layouts.app')

@section('title', 'Подарки - Токус Bloom')

@section('content')
    <div class="catalog-page">
        <!-- Верхняя часть над карточками -->
        <section class="catalog-top-section">
            <div class="container">
                <div class="catalog-header">
                    <h1 class="catalog-main-title">Подарки</h1>
                    <p class="catalog-main-subtitle">Листайте, вдохновляйтесь, дарите!</p>
                </div>
            </div>
        </section>


        
        <!-- Полоска между подзаголовком и каталогом -->
        <div class="catalog-divider-container">
            <div class="container">
                <div class="catalog-divider"></div>
            </div>
        </div>


        <!-- Сетка товаров -->
        <section class="catalog-products-section">
            <div class="container">
                <div class="products-grid">
                    @foreach($products as $product)
                    <a href="{{ route('product.show', $product['id']) }}" class="product-card-link">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('images/products/' . $product['image']) }}" alt="{{ $product['title'] }}"
                                     onerror="this.style.display='none'; this.parentNode.innerHTML='Изображение товара';">
                            </div>
                            <h3 class="product-title">{{ $product['title'] }}</h3>
                            <p class="product-description">{{ $product['description'] }}</p>
                            <div class="product-price">{{ number_format($product['price'], 0, '', ' ') }} ₽</div>
                            <button class="product-button" onclick="event.preventDefault(); event.stopPropagation(); addToCart({{ $product['id'] }})">Заказать</button>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection

@section('styles')
<style>
    /* ОЧЕНЬ ВАЖНО: Увеличиваем отступ для фиксированного header */
    .catalog-page {
        margin-top: 120px !important; /* Увеличиваем отступ */
        min-height: 100vh;
    }

    /* Верхняя часть над карточками */
    .catalog-top-section {
        background-color: #ffffff;
        padding: 40px 0;
        border-bottom: 3px solid #292966;
        margin-bottom: 40px;
    }

    .catalog-header {
        text-align: center;
        padding: 30px 0;
    }

    .catalog-main-title {
        font-family: 'Russo One', sans-serif;
        font-size: 52px;
        color: #292966;
        margin-bottom: 15px;
        text-transform: uppercase;
        letter-spacing: 2px;
        line-height: 1.2;
    }

    .catalog-main-subtitle {
        font-family: 'Albert Sans', sans-serif;
        font-size: 22px;
        color: #666;
        font-style: italic;
        margin: 0;
        line-height: 1.6;
        font-weight: 500;
    }

    .catalog-products-section {
        padding: 20px 0 60px;
        background-color: #ffffff;
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
        margin: 0 auto;
    }

    /* Остальные стили карточек остаются без изменений */
    .product-card-link {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    .product-card {
        background-color: #B8B8B8;
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        min-height: 380px;
        display: flex;
        flex-direction: column;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        cursor: pointer;
    }

    .product-card-link:hover .product-card {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .product-card > *:not(.product-button) {
        pointer-events: none;
    }

    .product-image {
        width: 100%;
        height: 200px;
        background-color: #A3A3CC;
        border-radius: 8px;
        margin-bottom: 15px;
        overflow: hidden;
        position: relative;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    .product-card-link:hover .product-image img {
        transform: scale(1.05);
    }

    .product-title {
        font-family: 'Albert Sans', sans-serif;
        font-weight: 600;
        font-size: 16px;
        margin-bottom: 10px;
        color: #292966;
        line-height: 1.3;
    }

    .product-description {
        font-family: 'Albert Sans', sans-serif;
        font-size: 14px;
        color: #666;
        margin-bottom: 15px;
        line-height: 1.4;
        flex-grow: 1;
    }

    .product-price {
        font-family: 'Albert Sans', sans-serif;
        font-weight: 700;
        font-size: 20px;
        color: #292966;
        margin-bottom: 15px;
    }

    .product-button {
        background-color: #A3A3CC;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 6px;
        font-family: 'Albert Sans', sans-serif;
        font-weight: 600;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: auto;
        pointer-events: auto;
    }

    .product-button:hover {
        background-color: #9292c2;
        transform: translateY(-2px);
    }

    /* Адаптивность */
    @media (max-width: 1200px) {
        .products-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
    }

    @media (max-width: 992px) {
        .products-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .catalog-main-title {
            font-size: 44px;
        }
        
        .catalog-main-subtitle {
            font-size: 20px;
        }
    }

    @media (max-width: 768px) {
        .catalog-page {
            margin-top: 140px !important;
        }
        
        .products-grid {
            grid-template-columns: 1fr;
            max-width: 400px;
        }
        
        .catalog-main-title {
            font-size: 36px;
        }
        
        .catalog-main-subtitle {
            font-size: 18px;
        }
    }

    @media (max-width: 480px) {
        .catalog-page {
            margin-top: 160px !important;
        }
        
        .catalog-main-title {
            font-size: 32px;
        }
        
        .catalog-main-subtitle {
            font-size: 16px;
        }
    }

</style>
@endsection

@section('scripts')
<script>
function addToCart(productId) {
    alert('Товар добавлен в корзину!');
    console.log('Добавлен товар с ID:', productId);
}
</script>
@endsection