<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Токус Bloom')</title>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@300;400;500;600;700&family=Russo+One&display=swap" rel="stylesheet">
    <style>
/* ===== RESET & BASE STYLES ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: 'Albert Sans', sans-serif;
    color: #292966;
    line-height: 1.6;
    background-color: #ffffff;
    overflow-x: hidden;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

/* ===== COMPACT HEADER STYLES ===== */
.header {
    background-color: #333333;
    padding: 35px 0;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
    box-shadow: 0 7px 8px rgba(0, 0, 0, 0.1);
}

.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.logo {
    color: white;
    font-size: 27px;
    font-weight: bold;
    text-decoration: none;
    font-family: 'Russo One', sans-serif;
    letter-spacing: 0.5px;
    white-space: nowrap;
    flex-shrink: 0;
}

.nav-menu {
    display: flex;
    list-style: none;
    gap: 20px;
    margin: 0;
    padding: 0;
    flex-wrap: nowrap;
}

.nav-menu a {
    color: white;
    text-decoration: none;
    font-weight: 600;
    font-size: 15px;
    transition: all 0.2s ease;
    font-family: 'Albert Sans', sans-serif;
    text-transform: uppercase;
    letter-spacing: 0.2px;
    white-space: nowrap;
    padding: 4px 0;
}

.nav-menu a:hover {
    color: #A3A3CC;
}

.auth-buttons {
    display: flex;
    gap: 10px;
    flex-shrink: 0;
}
.auth-btn {
    color: white;
    text-decoration: none;
    padding: 8px 16px;
    border: 1px solid white;
    border-radius: 4px;
    transition: all 0.2s ease;
    font-family: 'Albert Sans', sans-serif;
    font-weight: 600;
    font-size: 17px;
    white-space: nowrap;
}

.auth-btn:hover {
    background-color: white;
    color: #333333;
}

/* Адаптивность */
@media (max-width: 768px) {
    .header-content {
        flex-wrap: wrap;
        gap: 0px;
    }
    
    .nav-menu {
        order: 3;
        width: 100%;
        justify-content: center;
        gap: 15px;
    }
}

/* ===== HERO SECTION ===== */
.hero {
    margin-top: 80px;
    padding: 100px 0;
    text-align: center;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    position: relative;
}

.hero-content {
    position: relative;
    z-index: 2;
}

.hero-image {
    width: 300px;
    height: 200px;
    margin: 0 auto 30px;
    background-color: #A3A3CC;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 600;
    font-size: 18px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.hero h1 {
    font-size: 48px;
    margin-bottom: 30px;
    font-weight: 700;
    font-family: 'Russo One', sans-serif;
    color: #292966;
    line-height: 1.2;
}

.cta-button {
    display: inline-block;
    background-color: #292966;
    color: white;
    padding: 16px 40px;
    text-decoration: none;
    border-radius: 10px;
    font-weight: 600;
    font-size: 18px;
    transition: all 0.3s ease;
    font-family: 'Albert Sans', sans-serif;
    border: none;
    cursor: pointer;
    box-shadow: 0 4px 15px rgba(41, 41, 102, 0.3);
}

.cta-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(41, 41, 102, 0.5);
    background-color: #1a1a4d;
}

/* ===== SECTION TITLES ===== */
.section-title {
    font-family: 'Russo One', sans-serif;
    font-size: 48px;
    text-align: center;
    margin-bottom: 60px;
    color: #292966;
    position: relative;
    padding: 0 20px;
}

/* ===== PRODUCTS SECTION ===== */
.products-section {
    padding: 100px 0;
    position: relative;
}

.products-section + .products-section {
    margin-top: 40px;
}

.products-section:nth-child(even) {
    background-color: #ffffff;
}

/* ===== PRODUCTS GRID ===== */
.products-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    margin-bottom: 30px;
}

/* ===== CLICKABLE PRODUCT CARDS ===== */
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
    position: relative;
    min-height: 360px;
    display: flex;
    flex-direction: column;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    cursor: pointer;
}

.product-card-link:hover .product-card {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
}

/* Отключаем pointer-events для содержимого карточки */
.product-card > *:not(.product-button) {
    pointer-events: none;
}

.product-image {
    width: 100%;
    height: 200px;
    background-color: #A3A3CC;
    border-radius: 8px;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 600;
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

.product-price {
    font-family: 'Albert Sans', sans-serif;
    font-weight: 700;
    font-size: 20px;
    color: #292966;
    margin-bottom: 15px;
}

/* Кнопка заказа - отдельно кликабельная */
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
    position: relative;
    z-index: 10;
}

.product-button:hover {
    background-color: #9292c2;
    transform: translateY(-2px);
}

/* Кнопка "Смотреть больше" */
.section-footer {
    display: flex;
    justify-content: flex-end;
    margin-top: 20px;
}

.view-more-link {
    color: #292966;
    text-decoration: none;
    font-family: 'Albert Sans', sans-serif;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 24px;
    border: 2px solid #292966;
    border-radius: 8px;
}

.view-more-link:hover {
    color: #A3A3CC;
    border-color: #A3A3CC;
    transform: translateY(-2px);
}

/* ===== FOOTER STYLES ===== */
.footer {
    background-color: #333333;
    color: white;
    padding: 50px 0 25px;
    margin-top: 80px;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
}

.footer-nav {
    display: flex;
    list-style: none;
    gap: 30px;
    flex-wrap: wrap;
}

.footer-nav a {
    color: white;
    text-decoration: none;
    font-family: 'Albert Sans', sans-serif;
    font-weight: 500;
    transition: all 0.3s ease;
    font-size: 14px;
}

.footer-nav a:hover {
    color: #A3A3CC;
}

.social-text {
    font-family: 'Albert Sans', sans-serif;
    font-weight: 500;
    font-size: 16px;
}

.footer-bottom {
    text-align: center;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    font-family: 'Albert Sans', sans-serif;
    font-size: 14px;
    color: rgba(255, 255, 255, 0.7);
}

/* ===== RESPONSIVE DESIGN ===== */
@media (max-width: 1200px) {
    .products-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }
    
    .section-title {
        font-size: 44px;
        margin-bottom: 50px;
    }
    
    .products-section {
        padding: 90px 0;
    }
}

@media (max-width: 992px) {
    .container {
        padding: 0 20px;
    }
    
    .nav-menu {
        gap: 25px;
    }
    
    .section-title {
        font-size: 40px;
        margin-bottom: 45px;
    }
    
    .products-section {
        padding: 80px 0;
    }
    
    .products-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
    
    .footer-content {
        flex-direction: column;
        gap: 25px;
        text-align: center;
    }
    
    .social-text {
        text-align: center;
    }
}

@media (max-width: 768px) {
    .header-content {
        flex-direction: column;
        gap: 20px;
    }
    
    .nav-menu {
        gap: 20px;
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .auth-buttons {
        gap: 10px;
    }
    
    .hero {
        margin-top: 140px;
        padding: 80px 0;
    }
    
    .hero h1 {
        font-size: 36px;
    }
    
    .hero-image {
        width: 250px;
        height: 150px;
    }
    
    .cta-button {
        padding: 14px 35px;
        font-size: 16px;
    }
    
    .section-title {
        font-size: 36px;
        margin-bottom: 40px;
        padding: 0 15px;
    }
    
    .products-section {
        padding: 70px 0;
    }
    
    .products-grid {
        grid-template-columns: 1fr;
        max-width: 400px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .section-footer {
        justify-content: center;
    }
    
    .footer-nav {
        gap: 20px;
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 15px;
    }
    
    .logo {
        font-size: 24px;
    }
    
    .nav-menu {
        gap: 15px;
    }
    
    .nav-menu a {
        font-size: 14px;
    }
    
    .auth-btn {
        padding: 8px 18px;
        font-size: 13px;
    }
    
    .hero {
        margin-top: 160px;
        padding: 60px 0;
    }
    
    .hero h1 {
        font-size: 28px;
    }
    
    .hero-image {
        width: 200px;
        height: 120px;
        font-size: 16px;
    }
    
    .cta-button {
        padding: 12px 30px;
        font-size: 15px;
    }
    
    .section-title {
        font-size: 32px;
        margin-bottom: 35px;
    }
    
    .products-section {
        padding: 60px 0;
    }
    
    .product-card {
        padding: 18px;
        min-height: 340px;
    }
    
    .product-image {
        height: 180px;
    }
}

/* ===== UTILITY CLASSES ===== */
.text-center {
    text-align: center;
}

.mb-20 {
    margin-bottom: 20px;
}

.mt-20 {
    margin-top: 20px;
}

.hidden {
    display: none;
}

/* ===== LOADING STATES ===== */
.loading {
    opacity: 0.7;
    pointer-events: none;
}

.loading::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 20px;
    height: 20px;
    border: 2px solid #f3f3f3;
    border-top: 2px solid #292966;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: translate(-50%, -50%) rotate(0deg); }
    100% { transform: translate(-50%, -50%) rotate(360deg); }
}

main {
    margin-top: 120px; /* Отступ для фиксированного header */
}

.catalog-page {
    margin-top: 100; /* Убираем отступ у каталога */
}

    /* Основной отступ для фиксированного header */
    .catalog-page {
        margin-top: 120px !important;
        min-height: 100vh;
    }

    /* Верхняя часть над карточками */
    .catalog-top-section {
        background-color: #ffffff;
        padding: 40px 0 20px; /* Уменьшили нижний отступ */
    }

    .catalog-header {
        text-align: center;
        padding: 30px 0;
    }

    .catalog-main-title {
        font-family: 'Russo One', sans-serif;
        font-size: 52px;
        color: #292966;
        margin-bottom: 25px; /* Увеличили расстояние между заголовком и подзаголовком */
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

    /* Контейнер для полоски */
    .catalog-divider-container {
        background-color: #ffffff;
        padding: 0;
    }

    /* Полоска между подзаголовком и каталогом */
    .catalog-divider {
        height: 2px;
        background-color: #292966;
        width: 100%;
        margin: 0;
    }

    .catalog-products-section {
        padding: 30px 0 60px; /* Отступ после полоски */
        background-color: #ffffff;
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
        margin: 0 auto;
    }

    </style>
</head>
<body>
    {{-- Подключаем шапку --}}
    @include('components.header')
    
    <main>
        {{-- Содержимое страницы --}}
        @yield('content')
    </main>
    
    {{-- Подключаем подвал --}}
    @include('components.footer')
</body>
</html>