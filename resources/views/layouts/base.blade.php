<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=1280">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('css/basket.css') }}">
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</head>

<body id="body">
    <div class="wrapper">
        <div class="header">
            @unless (empty($top_banner))
                <a href="/products/{{$top_banner[0]->link}}" class="header__banner"
                    style="background:{{ $top_banner[0]->back_color }}; color: {{ $top_banner[0]->text_color }}">
                    {{ $top_banner[0]->text }}
                </a>
            @endunless
            <div class="header__menu">
                <div class="header__logo">
                    <a href="/main-page">Online Store</a>
                </div>
                <div class="header__catalog" onclick="visibleMenu()">
                    <div>
                        <img src="{{ asset('images/icon-apps.svg') }}">
                        Каталог
                        <ul class="content__nav" id="menu">
                            <li>
                                <a href="/mobile-phones">
                                    <div class="content__icon-block">
                                        <img src="{{ asset('images/icon-mobile.svg') }}" alt=""
                                            class="content__icon">
                                    </div>
                                    <div class="content__item-text">
                                        Мобільні телефони
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/televisions">
                                    <div class="content__icon-block">
                                        <img src="{{ asset('images/icon-television.svg') }}" alt=""
                                            class="content__icon">
                                    </div>
                                    <div class="content__item-text">
                                        Телевізори
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/notebooks">
                                    <div class="content__icon-block">
                                        <img src="{{ asset('images/icon-laptop.svg') }}" alt=""
                                            class="content__icon">
                                    </div>
                                    <div class="content__item-text">
                                        Ноутбуки
                                    </div>

                                </a>
                            </li>
                            <li>
                                <a href="/books">
                                    <div class="content__icon-block">
                                        <img src="{{ asset('images/icon-books.svg') }}" alt=""
                                            class="content__icon">
                                    </div>
                                    <div class="content__item-text">
                                        Книги
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
                <form action="{{ route('pages.search') }}" method="get" class="header__search">
                    @csrf
                    <input name='search' type="text" placeholder="Я шукаю...">
                    <button type="submit">ЗНАЙТИ</button>
                </form>
                <div class="header__buttons">
                    <div href="" class="header__item">
                        <img src="{{ asset('images/icon-shopping-cart.svg') }}">
                        <a href="{{ route('pages.basket') }}">Корзина</a>
                    </div>
                    @if (!Auth::user())
                        <div href="" class="header__item" onclick="loginFunc()">
                            <img src="{{ asset('images/icon-user.svg') }}"> Профіль
                        </div>
                    @else
                        <div href="" class="header__item" onclick="profileFunc()">
                            <img src="{{ asset('images/icon-user.svg') }}">
                            {{ Auth::user()->name . ' ' . Auth::user()->surname }}
                        </div>
                    @endif

                </div>
            </div>
            @if (!Auth::user())
                <x-auth.register></x-auth.register>
                <x-auth.login></x-auth.login>
                <div class="login-back" id="authBack"></div>
            @else
                <x-auth.dropdown></x-auth.dropdown>
            @endif

        </div>

        <div class="content">
            @yield('content')
            <div class="content__back" id="menu_back">

            </div>
        </div>

        <div class="footer">
            <div class="footer__top">
                <ul class="footer__about">
                    <div>
                        <div class="footer__main-title">Online Store</div>
                        <div class="footer__copy">
                            Всі права захищені "Online Store"
                        </div>
                        <div class="footer__copy">
                            Copyright Ⓒ2022
                        </div>
                    </div>
                </ul>
                <ul class="footer__info">
                    <div class="footer__title">Інформація</div>
                    <li><a href="" class="footer__link">Про нас</a></li>
                    <li><a href="" class="footer__link">Блог</a></li>
                    <li><a href="" class="footer__link">Доставка і оплата</a></li>
                    <li><a href="" class="footer__link">Гарантія</a></li>
                    <li><a href="" class="footer__link">Питання та відповіді</a></li>
                </ul>
                <div class="footer__contacts">
                    <div class="footer__title">Контакти</div>
                    <div class="footer__phone">(044) 299 48 51</div>
                    <div class="footer__phone">0 800 217 643</div>
                    <div class="footer__free-numb">Безкоштовно з усіх номерів</div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
