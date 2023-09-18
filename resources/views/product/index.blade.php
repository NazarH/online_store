@extends('layouts.base')
@section('content')
    <div class="average">
        <div class="product-info">
            <div class="product-info__images">
                <div class="product-info__main-image">
                    @foreach ($product->images as $key => $image)
                        <img id="main-img-{{ $key }}" class="main-img"
                            src="{{ asset('/storage/' . $image->image_url) }}" alt="">
                    @endforeach
                </div>
                <div class="product-info__slider">
                    <div class="img-left" onclick="leftClick()">
                        ❰
                    </div>
                    <div class="product-info__items">
                        @foreach ($product->images as $key => $image)
                            <div>
                                <div id="l" onclick="pressLeftImg({{ count($product->images) }})"></div>
                                <img id="block-image-{{ $key }}" src="{{ asset('/storage/' . $image->image_url) }}"
                                    alt="">
                                <div id="r" onclick="pressRightImg({{ count($product->images) }})"></div>
                            </div>
                        @endforeach
                    </div>
                    <div class="img-right" onclick="rightClick()">
                        ❱
                    </div>
                </div>
            </div>
            <div class="product-info__about">
                <div class="product-info__name">
                    <div>
                        {{ $product->name }}
                    </div>
                    <div>
                        ({{ $product->code }})
                    </div>
                </div>
                <div class="discount">
                    {{ $product->discount !== '0' ? $product->price : '' }}
                </div>
                <div class="product-info__price">
                    <div>
                        {{ $product->discount === 0 ? $product->price : round($product->price - ($product->price * $product->discount) / 100) }}₴
                    </div>
                    <a href="{{ route('order.index', ['link' => $_SERVER['REQUEST_URI'], 'id' => $product->id]) }}">
                        <button> Придбати </button>
                    </a>
                    <form action="{{ route('pages.basket') }}" method="post">
                        @csrf
                        <input type="text" name="link" value="{{ $_SERVER['REQUEST_URI'] }}">
                        <input type="text" name="id" value="{{ $product->id }}" class='invisible'>
                        <button type="submit"> В корзину </button>
                    </form>
                </div>
                <div class="product-info__delivery">
                    <div>
                        <div>
                            Самовивіз із відділень поштових операторів
                        </div>
                        <div>
                            За тарифами перевізника
                        </div>
                    </div>
                    <div>
                        <div>
                            Доставка кур'єром
                        </div>
                        <div>
                            За тарифами перевізника
                        </div>
                    </div>
                </div>
                <div class="product-info__guarantees">
                    <div>
                        <span>Оплата.</span> Оплата при отриманні товару, Google Pay, Карткою онлайн, Безготівкою для
                        юридичних осіб,
                        Сплатити онлайн соціальною карткою "Пакунок малюка", Безготівкою для фізичних осіб, PrivatPay,
                        Apple Pay, Оплатити онлайн карткою "єПідтримка", Visa, Mastercard
                    </div>
                    <div>
                        <span>Гарантія.</span> 12 місяців Обмін/повернення товару протягом 14 днів
                    </div>
                </div>
            </div>
        </div>

        <div class="product-items">
            <div class="features">
                <div class="feature__name">
                    <div>
                        Характеристики
                    </div>
                    <div>
                        {{ $link }}
                    </div>
                    <div>
                        {{ $product->name }}
                    </div>
                    <div>
                        ({{ $product->code }})
                    </div>
                </div>
                <div class="features__items">
                    <div class="features__block">
                        @foreach ($product->attributes as $attribute)
                            <div class="features__item">
                                <div class="features__item-name">
                                    {{ $attribute->name }}
                                </div>
                                <div class="features__item-feature">
                                    {{ $attribute->value }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="reviews">
                <div class="reviews__top">
                    <div class="feature__name weight">
                        Відгуки покупців
                    </div>
                    {{-- @unless (empty(Auth::user()->id))
                            <button class="reviews__button" onclick="reviewFunc()">Написати відгук</button>
                            <x-review.form :product="$notebook"></x-review.form>
                        @endunless --}}
                </div>
                <div class="reviews_bottom">
                    {{-- @unless (empty($reviews))
                            @foreach ($reviews as $review)
                                <x-product.review :review="$review"></x-product.review>
                            @endforeach
                        @endunless --}}
                </div>
            </div>
        </div>
        <div class="add-inform">
            <div>
                * Увага! Всі ноутбуки продавця OnlineStore мають кирилиці на клавіатурі і
                супроводжуються офіційною гарантією від виробника! Перед встановленням
                програмного забезпечення прохання перевірити сумісність із пристроєм,
                вказаним на упаковці, документі
            </div>
            <div>
                <div>
                    * Характеристики та комплектація товару можуть змінюватися виробником без попередження.
                </div>
                <div>
                    * Огляд підготовлений на базі однієї з моделей серії. Точні специфікації дивіться у
                    вкладці "Характеристики".
                </div>
            </div>
        </div>
        <div class="viewed">
            <div class="viewed__title">
                Недавно переглянуті товари
            </div>
            <div class="viewed__rev-products">
                {{-- @if (!empty($rev_products))
                        @foreach ($rev_products as $product)
                            <x-product.product :product="$product" :link="$product->link"></x-product.product>
                        @endforeach
                    @endif --}}
            </div>
        </div>
    </div>
@endsection
