<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <scrip src="{{ asset('js/app.js') }}"></scrip>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/METR-main.css') }}">
    <title>METR</title>
</head>
<body>
<div id="METR">
    <div class="wrapper-gray">
        <section class="main">
            <div class="header">
                <div class="header_logo">
                    <img src="{{ asset('img/logo/metr.svg') }}" alt="">
                </div>
                <div class="header_burger"></div>
                <div class="header_navbar">
                    <a href="#" class="M_btn-main header_navbar-link"><span>о компании</span></a>
                    <a href="#" class="M_btn-main header_navbar-link"><span>портфолио</span></a>
                    <a href="#" class="M_btn-main header_navbar-link"><span>цены</span></a>
                    <a href="#" class="M_btn-main header_navbar-link"><span>отзывы</span></a>
                    <a href="#" class="M_btn-main header_navbar-link"><span>контакты</span></a>
                </div>
            </div>
            <div class="M_H1 main_text">Студия дизайна лучших интерьеров</div>
            <a href="#" class="M_btn-order main_order">Заказать проект</a>
            <div class="main_social">
                <div class="M_btn-icon M_btn-icon-instagramm main_social-icon"></div>
                <div class="M_btn-icon M_btn-icon-vkontakte main_social-icon"></div>
            </div>
        </section>
    </div>
    <section class="about">
        <div class="about_elem about_elem-1">
            <img class="about_img about_img-1" src="{{asset('public/img/about/2_1.jpg')}}" alt="">
        </div>
        <div class="about_elem about_elem-2">
            <img class="about_img about_img-2" src="{{asset('public/img/about/2_2.jpg')}}" alt="">
        </div>
        <div class="about_elem about_elem-3">
            <img class="about_img about_img-3" src="{{asset('public/img/about/2_3.jpg')}}" alt="">
        </div>
        <div class="about_elem about_elem-4">
            <p class="about_header M_H1">О компании</p>
        </div>
        <div class="about_elem about_elem-5">
            <p class="about_text  about_text-1 M_H2">Наша компания была создана в 2016 году в Белгороде, затем мы
                открыли офис в Москве и в Санкт-Петербурге.
                Сейчас открываемся в Екатеринбурге. </p>
        </div>
        <div class="about_elem about_elem-6">
            <p class="about_text M_H2">Если в вашем городе нет нашего офиса, мы готовы вам помочь онлайн!</p>
        </div>
        <div class="about_elem about_elem-7">
            <p class="about_text M_H2">В нашей команде работают только профессиональные дизайнеры с многолетним опытом,
                так что вы можете
                быть уверены в качестве нашей работы.</p>
        </div>
        <div class="about_elem about_elem-9">
            <img class="about_img about_img-4" src="{{asset('public/img/about/2_4.jpg')}}" alt="">
        </div>
    </section>
    <div class="wrapper-gray">
        <section class="order">
            <div class="order_block">

                <div class="order_frame">
                    <p class="order_text M_H1">Закажите <br> дизайн-проект вашего интерьера
                        у&nbsp;нас и&nbsp;живите
                        в&nbsp;доме своей мечты</p>
                    <a href="#" class="M_btn-order order_btn">Заказать проект</a>

                </div>
            </div>
        </section>
    </div>
    <section class="portfolio">
        <h1 class="M_H1 portfolio_header">Портфолио</h1>
        <div class="portfolio_navbar">
            <a href="" class="portfolio_navbar-link M_btn-select M_btn-selectActive">Все проекты</a>
            <a href="" class="portfolio_navbar-link M_btn-select">Спальня</a>
            <a href="" class="portfolio_navbar-link M_btn-select">Кухня</a>
            <a href="" class="portfolio_navbar-link M_btn-select">Гостиная</a>
            <a href="" class="portfolio_navbar-link M_btn-select">Кабинет</a>
        </div>
        <div class="portfolio_showcase"></div>

    </section>
    <div class="wrapper-gray">
        <section class="prices">
            <h1 class="prices_header">Цены</h1>
            <div class="prices_wrapper">
                <div class="prices_cart">
                    <h2 class="M_H1 prices_cart-header">Лайт</h2>
                    <p class="M_H2 prices_cart-condition">500 ₽ / м2</p>
                    <p class="M_text prices_cart-text">3D дизайн проект</p>
                    <p class="M_text prices_cart-text">Рекомендации
                        по декорированию помещений</p>
                    <a href="" class="M_btn-order prices_cart-order">Заказать проект</a>
                </div>
                <div class="prices_cart">
                    <h2 class="M_H1 prices_cart-header">Стандарт</h2>
                    <p class="M_H2 prices_cart-condition">1500 ₽ / м2</p>
                    <p class="M_text prices_cart-text">3D дизайн проект</p>
                    <p class="M_text prices_cart-text">Рекомендации
                        по декорированию помещений</p>
                    <p class="M_text prices_cart-text">Личная консультация дизайнера</p>
                    <a href="" class="M_btn-order prices_cart-order">Заказать проект</a>
                </div>
                <div class="prices_cart">
                    <h2 class="M_H1 prices_cart-header">Люкс</h2>
                    <p class="M_H2 prices_cart-condition">3000 ₽ / м2</p>
                    <p class="M_text prices_cart-text">3D дизайн проект</p>
                    <p class="M_text prices_cart-text">Рекомендации
                        по декорированию помещений</p>
                    <p class="M_text prices_cart-text">Личная консультация дизайнера</p>
                    <p class="M_text prices_cart-text">Скетч дизайна ещё одного помещения</p>
                    <a href="" class="M_btn-order prices_cart-order">Заказать проект</a>
                </div>
            </div>
        </section>
    </div>
    <section class="reviews"></section>
    <div class="wrapper-gray">
        <section class="contacts">
            <h1 class="contacts_header">Контакты</h1>
            <div class="contacts_wrapper">
                <h2 class="M_H1 contacts_S_header contacts_S_header-1">Оставьте заявку
                    на&nbsp;разработку проекта</h2>
                <div class="contacts_wrapper_form">
                    <input type="text" class="contacts_input M_input M_text" placeholder="Имя">
                    <input type="text" class="contacts_input M_input M_text" placeholder="Телефон">
                    <textarea class="contacts_textarea M_textarea M_text" name="" id="" cols="30" rows="7"></textarea>
                    <a href="" class="M_btn-order contacts_btn">Заказать проект</a>
                    <p class="contacts_conditions M_text">Нажимая на кнопку, я даю согласие на обработку персональных
                        данных</p>
                </div>
                <h2 class="M_H1 contacts_S_header contacts_S_header-2">Или свяжитесь с нами самостоятельно</h2>
            </div>

        </section>
        <footer>
            <h1 class="M_H1 footer_header">Всегда на связи</h1>
            <div class="footer_wrapper">
                <div class="footer_block">
                    <span class="M_H2">+7-777-77-77</span>
                </div>
                <div class="footer_block footer_block_social">
                    <a href="#" class="M_btn-icon M_btn-icon-instagramm main_social-icon footer_social"></a>
                    <a href="#" class="M_btn-icon M_btn-icon-vkontakte main_social-icon footer_social"></a>

                </div>
                <div class="footer_block">
                    <span class="M_H2">metr@gmeil.com</span>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>
</html>
