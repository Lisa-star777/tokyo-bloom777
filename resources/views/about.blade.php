[file name]: views/about.blade.php
[file content begin]
@extends('layouts.app')

@section('title', 'О нас - Токус Bloom')

@section('content')
    <div class="catalog-page">
        <!-- Верхняя часть над карточками -->
        <section class="catalog-top-section">
            <div class="container">
                <div class="catalog-header">
                    <h1 class="catalog-main-title">О НАС</h1>
                </div>
            </div>
        </section>

        <!-- Полоска между заголовком и контентом -->
        <div class="catalog-divider-container">
            <div class="container">
                <div class="catalog-divider"></div>
            </div>
        </div>

        <!-- Основной контент -->
        <section class="catalog-products-section">
            <div class="container">
                <div class="about-content">
                    <h2 class="about-subtitle">Почему мы?</h2>
                    
                    <!-- Текстовая часть -->
                    <div class="about-text">
                        <p class="about-paragraph">- Потому что для нас флористика - это страсть. Мы знаем все о свежести цветов, умеем слышать ваши пожелания и создаем букеты, которые говорят без слов. Наша цель - делать ваш день ярче, а моменты - памятнее.</p>
                        <p class="about-signature"><b><em>Просто любим свое дело и дарим яркость с 2007 года.</em></b></p>
                    </div>

                    <!-- Картинка -->
                    <div class="about-image">
                        <img src="{{ asset('./src/images/Rectangle 41.png') }}" alt="Наша команда" 
                             onerror="this.style.display='none'; this.parentNode.innerHTML='<div class=image-placeholder>Здесь будет ваше изображение</div>';">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('styles')
<style>
    /* ОЧЕНЬ ВАЖНО: Увеличиваем отступ для фиксированного header */
    .catalog-page {
        margin-top: 120px !important;
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

    /* Контейнер для полоски */
    .catalog-divider-container {
        background-color: #ffffff;
        padding: 0;
    }

    /* Полоска между заголовком и контентом */
    .catalog-divider {
        height: 2px;
        background-color: #292966;
        width: 100%;
        margin: 0;
    }

    .catalog-products-section {
        padding: 20px 0 60px;
        background-color: #ffffff;
    }

    /* Стили для контента "О нас" */
    .about-content {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }

    .about-subtitle {
        font-family: 'Albert Sans', sans-serif;
        font-size: 36px; /* Увеличен в 1.5 раза */
        color: #292966;
        margin-bottom: 30px;
        font-weight: 600;
        line-height: 1.3;
    }

    /* Текстовая часть */
    .about-text {
        text-align: left;
        background-color: #B8B8B8;
        border-radius: 12px;
        padding: 50px; /* Увеличен отступ */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        margin-bottom: 40px;
    }

    .about-paragraph {
        font-family: 'Albert Sans', sans-serif;
        font-size: 24px; /* Увеличен в 2 раза (было 12px в каталоге) */
        color: #333;
        line-height: 1.6;
        margin-bottom: 30px; /* Увеличен отступ */
    }

    .about-signature {
        font-family: 'Albert Sans', sans-serif;
        font-size: 24px; /* Увеличен в 2 раза */
        color: #333;
        line-height: 1.6;
        font-style: italic;
        text-align: center;
        margin: 0;
        padding-top: 30px; /* Увеличен отступ */
        border-top: 2px solid #A3A3CC;
    }

    /* Стили для картинки */
    .about-image {
        text-align: center;
        margin-top: 40px;
    }

    .about-image img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        border: 2px solid #A3A3CC;
    }

    .image-placeholder {
        width: 100%;
        height: 300px;
        background-color: #B8B8B8;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #292966;
        font-family: 'Albert Sans', sans-serif;
        font-size: 18px;
        font-weight: 500;
        border: 2px dashed #292966;
    }

    /* Адаптивность */
    @media (max-width: 1200px) {
        .about-content {
            max-width: 700px;
        }
        
        .about-paragraph,
        .about-signature {
            font-size: 22px;
        }
    }

    @media (max-width: 992px) {
        .catalog-main-title {
            font-size: 44px;
        }
        
        .about-subtitle {
            font-size: 30px;
        }
        
        .about-content {
            max-width: 600px;
        }
        
        .about-text {
            padding: 40px;
            margin-bottom: 30px;
        }
        
        .about-paragraph,
        .about-signature {
            font-size: 20px;
        }
        
        .about-image {
            margin-top: 30px;
        }
    }

    @media (max-width: 768px) {
        .catalog-page {
            margin-top: 140px !important;
        }
        
        .catalog-main-title {
            font-size: 36px;
        }
        
        .about-subtitle {
            font-size: 26px;
            margin-bottom: 25px;
        }
        
        .about-content {
            max-width: 500px;
        }
        
        .about-text {
            padding: 30px;
            text-align: center;
            margin-bottom: 25px;
        }
        
        .about-paragraph,
        .about-signature {
            font-size: 18px;
        }
        
        .about-image {
            margin-top: 25px;
        }
        
        .image-placeholder {
            height: 250px;
            font-size: 16px;
        }
    }

    @media (max-width: 480px) {
        .catalog-page {
            margin-top: 160px !important;
        }
        
        .catalog-main-title {
            font-size: 32px;
        }
        
        .about-subtitle {
            font-size: 22px;
            margin-bottom: 20px;
        }
        
        .about-content {
            max-width: 100%;
            margin: 0 15px;
        }
        
        .about-text {
            padding: 25px;
            margin-bottom: 20px;
        }
        
        .about-paragraph,
        .about-signature {
            font-size: 16px;
        }
        
        .about-image {
            margin-top: 20px;
        }
        
        .image-placeholder {
            height: 200px;
            font-size: 14px;
        }
    }
</style>
@endsection
[file content end]