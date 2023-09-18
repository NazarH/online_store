<div class="header">
    @unless(empty($topBanner))
    <a href="{{asset($topBanner->link)}}" class="header__banner" style="background:{{$topBanner->back_color}}; color: {{$topBanner->text_color}}">
        {{$topBanner->text}}
    </a>
    @endunless
    <div class="header__menu">
        <div class="header__logo">
            <a href="/main-page">Online Store</a>
        </div>
        <div class="header__catalog" onclick="visibleMenu()">
            <div>
                <img src="{{asset('images/icon-apps.svg')}}">
                Каталог
                <ul class="content__nav" id="menu">
                    <li>
                        <a href="/mobile-phones">
                            <div class="content__icon-block">
                                <img src="{{asset('images/icon-mobile.svg')}}" alt="" class="content__icon">
                            </div>
                            <div class="content__item-text">
                                Мобільні телефони
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/televisions">
                            <div class="content__icon-block">
                                <img src="{{asset('images/icon-television.svg')}}" alt="" class="content__icon">
                            </div>
                            <div class="content__item-text">
                                Телевізори
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/notebooks">
                            <div class="content__icon-block">
                                <img src="{{asset('images/icon-laptop.svg')}}" alt="" class="content__icon">
                            </div>
                            <div class="content__item-text">
                                Ноутбуки
                            </div>

                        </a>
                    </li>
                    <li>
                        <a href="/books">
                            <div class="content__icon-block">
                                <img src="{{asset('images/icon-books.svg')}}" alt="" class="content__icon">
                            </div>
                            <div class="content__item-text">
                                Книги
                            </div>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
        <form action="{{route('pages.search')}}" method="get" class="header__search">
            @csrf
            <input name='search' type="text" placeholder="Я шукаю...">
            <button type="submit">ЗНАЙТИ</button>
        </form>
        <div class="header__buttons">
            <div href="" class="header__item">
                <img src="{{asset('images/icon-shopping-cart.svg')}}">
                <a href="{{route('pages.basket')}}">Корзина</a>
            </div>
            @if(!Auth::user())
                <div href="" class="header__item" onclick="loginFunc()">
                    <img src="{{asset('images/icon-user.svg')}}"> Профіль
                </div>
            @else
                <div href="" class="header__item" onclick="profileFunc()">
                    <img src="{{asset('images/icon-user.svg')}}"> {{Auth::user()->name.' '.Auth::user()->surname}}
                </div>
            @endif

        </div>
    </div>
        @if(!Auth::user())
            <x-auth.register></x-auth.register>
            <x-auth.login></x-auth.login>
            <div class="login-back" id="authBack"></div>
        @else
            <x-auth.dropdown></x-auth.dropdown>
        @endif

</div>
