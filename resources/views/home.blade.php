@extends('layouts.app')

@section('title', 'Токус Bloom - Подарок, который не завянет')

@section('content')
    <!-- Hero -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <!-- Картинка сертификата -->
            <div class="hero-image">
                
            </div>
            <h1>ПОДАРОК, КОТОРЫЙ НЕ ЗАВЯНЕТ</h1>
            <!-- Кнопка под картинкой -->
            <a href="/certificates" class="cta-button">Купить сертификат</a>
        </div>
    </div>
</section>


    <!-- АКЦИИ -->
<section class="products-section">
    <div class="container">
        <h2 class="section-title">Акции</h2>
        <div class="products-grid">
            <!-- Карточка 1 -->
            <a href="{{ route('product.show', 1) }}" class="product-card-link">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/products/gift1.jpg') }}" alt="Роскошный букет роз" 
                             onerror="this.style.display='none'; this.parentNode.innerHTML='Изображение товара';">
                    </div>
                    <h3 class="product-title">25 плечевидных роз</h3>
                    <div class="product-price">7777 ₽</div>
                    <button class="product-button" onclick="event.preventDefault(); event.stopPropagation(); alert('Товар добавлен в корзину!')">Заказать</button>
                </div>
            </a>
            
            <!-- Карточка 2 -->
            <a href="{{ route('product.show', 2) }}" class="product-card-link">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/products/gift2.jpg') }}" alt="Эксклюзивный букет" 
                             onerror="this.style.display='none'; this.parentNode.innerHTML='Изображение товара';">
                    </div>
                    <h3 class="product-title">26 плечевидных роз</h3>
                    <div class="product-price">7777 ₽</div>
                    <button class="product-button" onclick="event.preventDefault(); event.stopPropagation(); alert('Товар добавлен в корзину!')">Заказать</button>
                </div>
            </a>
            
            <!-- Карточка 3 -->
            <a href="{{ route('product.show', 3) }}" class="product-card-link">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/products/gift3.jpg') }}" alt="Свадебный букет" 
                             onerror="this.style.display='none'; this.parentNode.innerHTML='Изображение товара';">
                    </div>
                    <h3 class="product-title">25 плечевидных роз</h3>
                    <div class="product-price">7777 ₽</div>
                    <button class="product-button" onclick="event.preventDefault(); event.stopPropagation(); alert('Товар добавлен в корзину!')">Заказать</button>
                </div>
            </a>
            
            <!-- Карточка 4 -->
            <a href="{{ route('product.show', 4) }}" class="product-card-link">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/products/gift4.jpg') }}" alt="Праздничная композиция" 
                             onerror="this.style.display='none'; this.parentNode.innerHTML='Изображение товара';">
                    </div>
                    <h3 class="product-title">25 плечевидных роз</h3>
                    <div class="product-price">7777 ₽</div>
                    <button class="product-button" onclick="event.preventDefault(); event.stopPropagation(); alert('Товар добавлен в корзину!')">Заказать</button>
                </div>
            </a>
        </div>
    </div>
</section>



    <!-- БУКЕТЫ -->
<section class="products-section">
    <div class="container">
        <h2 class="section-title">Букеты</h2>
        <div class="products-grid">
            <!-- Карточка 1 -->
            <a href="{{ route('product.show', 1) }}" class="product-card-link">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/products/gift1.jpg') }}" alt="Роскошный букет роз" 
                             onerror="this.style.display='none'; this.parentNode.innerHTML='Изображение товара';">
                    </div>
                    <h3 class="product-title">25 плечевидных роз</h3>
                    <div class="product-price">7777 ₽</div>
                    <button class="product-button" onclick="event.preventDefault(); event.stopPropagation(); alert('Товар добавлен в корзину!')">Заказать</button>
                </div>
            </a>
            
            <!-- Карточка 2 -->
            <a href="{{ route('product.show', 2) }}" class="product-card-link">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/products/gift2.jpg') }}" alt="Эксклюзивный букет" 
                             onerror="this.style.display='none'; this.parentNode.innerHTML='Изображение товара';">
                    </div>
                    <h3 class="product-title">26 плечевидных роз</h3>
                    <div class="product-price">7777 ₽</div>
                    <button class="product-button" onclick="event.preventDefault(); event.stopPropagation(); alert('Товар добавлен в корзину!')">Заказать</button>
                </div>
            </a>
            
            <!-- Карточка 3 -->
            <a href="{{ route('product.show', 3) }}" class="product-card-link">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/products/gift3.jpg') }}" alt="Свадебный букет" 
                             onerror="this.style.display='none'; this.parentNode.innerHTML='Изображение товара';">
                    </div>
                    <h3 class="product-title">25 плечевидных роз</h3>
                    <div class="product-price">7777 ₽</div>
                    <button class="product-button" onclick="event.preventDefault(); event.stopPropagation(); alert('Товар добавлен в корзину!')">Заказать</button>
                </div>
            </a>
            
            <!-- Карточка 4 -->
            <a href="{{ route('product.show', 4) }}" class="product-card-link">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/products/gift4.jpg') }}" alt="Праздничная композиция" 
                             onerror="this.style.display='none'; this.parentNode.innerHTML='Изображение товара';">
                    </div>
                    <h3 class="product-title">25 плечевидных роз</h3>
                    <div class="product-price">7777 ₽</div>
                    <button class="product-button" onclick="event.preventDefault(); event.stopPropagation(); alert('Товар добавлен в корзину!')">Заказать</button>
                </div>
            </a>
        </div>
        <div class="section-footer">
            <a href="{{ route('bouquets') }}" class="view-more-link">Смотреть больше ❤</a>
        </div>
    </div>
</section>


    <!-- ПОДАРКИ -->
<section class="products-section">
    <div class="container">
        <h2 class="section-title">Подарки</h2>
        <div class="products-grid">
            <!-- Карточка 1 -->
            <a href="{{ route('product.show', 1) }}" class="product-card-link">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/products/gift1.jpg') }}" alt="Роскошный букет роз" 
                             onerror="this.style.display='none'; this.parentNode.innerHTML='Изображение товара';">
                    </div>
                    <h3 class="product-title">25 плечевидных роз</h3>
                    <div class="product-price">7777 ₽</div>
                    <button class="product-button" onclick="event.preventDefault(); event.stopPropagation(); alert('Товар добавлен в корзину!')">Заказать</button>
                </div>
            </a>
            
            <!-- Карточка 2 -->
            <a href="{{ route('product.show', 2) }}" class="product-card-link">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/products/gift2.jpg') }}" alt="Эксклюзивный букет" 
                             onerror="this.style.display='none'; this.parentNode.innerHTML='Изображение товара';">
                    </div>
                    <h3 class="product-title">26 плечевидных роз</h3>
                    <div class="product-price">7777 ₽</div>
                    <button class="product-button" onclick="event.preventDefault(); event.stopPropagation(); alert('Товар добавлен в корзину!')">Заказать</button>
                </div>
            </a>
            
            <!-- Карточка 3 -->
            <a href="{{ route('product.show', 3) }}" class="product-card-link">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/products/gift3.jpg') }}" alt="Свадебный букет" 
                             onerror="this.style.display='none'; this.parentNode.innerHTML='Изображение товара';">
                    </div>
                    <h3 class="product-title">25 плечевидных роз</h3>
                    <div class="product-price">7777 ₽</div>
                    <button class="product-button" onclick="event.preventDefault(); event.stopPropagation(); alert('Товар добавлен в корзину!')">Заказать</button>
                </div>
            </a>
            
            <!-- Карточка 4 -->
            <a href="{{ route('product.show', 4) }}" class="product-card-link">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/products/gift4.jpg') }}" alt="Праздничная композиция" 
                             onerror="this.style.display='none'; this.parentNode.innerHTML='Изображение товара';">
                    </div>
                    <h3 class="product-title">25 плечевидных роз</h3>
                    <div class="product-price">7777 ₽</div>
                    <button class="product-button" onclick="event.preventDefault(); event.stopPropagation(); alert('Товар добавлен в корзину!')">Заказать</button>
                </div>
            </a>
        </div>
        <div class="section-footer">
            <a href="{{ route('gifts') }}" class="view-more-link">Смотреть больше ❤</a>
        </div>
    </div>
</section>


   <!-- ЦВЕТЫ В КОРОБКАХ -->
<section class="products-section">
    <div class="container">
        <h2 class="section-title">Цветы в коробках</h2>
        <div class="products-grid">
            <!-- Карточка 1 -->
            <a href="{{ route('product.show', 1) }}" class="product-card-link">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/products/gift1.jpg') }}" alt="Роскошный букет роз" 
                             onerror="this.style.display='none'; this.parentNode.innerHTML='Изображение товара';">
                    </div>
                    <h3 class="product-title">25 плечевидных роз</h3>
                    <div class="product-price">7777 ₽</div>
                    <button class="product-button" onclick="event.preventDefault(); event.stopPropagation(); alert('Товар добавлен в корзину!')">Заказать</button>
                </div>
            </a>
            
            <!-- Карточка 2 -->
            <a href="{{ route('product.show', 2) }}" class="product-card-link">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/products/gift2.jpg') }}" alt="Эксклюзивный букет" 
                             onerror="this.style.display='none'; this.parentNode.innerHTML='Изображение товара';">
                    </div>
                    <h3 class="product-title">26 плечевидных роз</h3>
                    <div class="product-price">7777 ₽</div>
                    <button class="product-button" onclick="event.preventDefault(); event.stopPropagation(); alert('Товар добавлен в корзину!')">Заказать</button>
                </div>
            </a>
            
            <!-- Карточка 3 -->
            <a href="{{ route('product.show', 3) }}" class="product-card-link">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/products/gift3.jpg') }}" alt="Свадебный букет" 
                             onerror="this.style.display='none'; this.parentNode.innerHTML='Изображение товара';">
                    </div>
                    <h3 class="product-title">25 плечевидных роз</h3>
                    <div class="product-price">7777 ₽</div>
                    <button class="product-button" onclick="event.preventDefault(); event.stopPropagation(); alert('Товар добавлен в корзину!')">Заказать</button>
                </div>
            </a>
            
            <!-- Карточка 4 -->
            <a href="{{ route('product.show', 4) }}" class="product-card-link">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/products/gift4.jpg') }}" alt="Праздничная композиция" 
                             onerror="this.style.display='none'; this.parentNode.innerHTML='Изображение товара';">
                    </div>
                    <h3 class="product-title">25 плечевидных роз</h3>
                    <div class="product-price">7777 ₽</div>
                    <button class="product-button" onclick="event.preventDefault(); event.stopPropagation(); alert('Товар добавлен в корзину!')">Заказать</button>
                </div>
            </a>
        </div>
        <div class="section-footer">
            <a href="{{ route('box-flowers') }}" class="view-more-link">Смотреть больше ❤</a>
        </div>
    </div>
</section>



@endsection