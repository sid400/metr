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
</body>
</html>
