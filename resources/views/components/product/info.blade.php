<div class="product-info">
    <div class="product-info__images">
        <div class="product-info__main-image">
            @foreach($product->images as $key => $image)
                <img id="main-img-{{$key}}"
                     class="main-img"
                     src="{{asset('/storage/'.$image->image_url)}}"
                     alt="">
            @endforeach
        </div>
        <div class="product-info__slider">
            <div class="img-left" onclick="leftClick()">
                ❰
            </div>
            <div class="product-info__items">
                @foreach($product->images as $key => $image)
                    <div>
                        <div id="l" onclick="pressLeftImg({{count($product->images)}})"></div>
                        <img id="block-image-{{$key}}"
                             src="{{asset('/storage/'.$image->image_url)}}" alt="">
                        <div id="r" onclick="pressRightImg({{count($product->images)}})"></div>
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
                {{$_SERVER['REQUEST_URI'] === '/notebooks/'.$product->id ? 'Ноутбук'
                : ($_SERVER['REQUEST_URI'] === '/televisions/'.$product->id ? 'Телевізор'
                : ($_SERVER['REQUEST_URI'] === '/books/'.$product->id ? 'Книга'
                : ($_SERVER['REQUEST_URI'] === '/mobile-phones/'.$product->id ? 'Телефон' : 0)))}}
            </div>
            <div>
                {{$product->name}}
            </div>
            <div>
                ({{$product->code}})
            </div>
        </div>
        <div class="discount">
            {{$product->discount !== '0' ? $product->price : ''}}
        </div>
        <div class="product-info__price">
            <div>
                {{$product->discount === 0 ? $product->price : round($product->price - ($product->price*$product->discount/100))}}₴
            </div>
            <a href="{{route('order.index', ['link' => $_SERVER['REQUEST_URI'], 'id' => $product->id])}}">
                <button> Придбати </button>
            </a>
            <form action="{{route('pages.basket')}}" method="post">
                @csrf
                <input type="text" name="link" value="{{$_SERVER['REQUEST_URI']}}">
                <input type="text" name="id" value="{{$product->id}}" class='invisible'>
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
                <span>Оплата.</span> Оплата при отриманні товару, Google Pay, Карткою онлайн, Безготівкою для юридичних осіб,
                Сплатити онлайн соціальною карткою "Пакунок малюка", Безготівкою для фізичних осіб, PrivatPay,
                Apple Pay, Оплатити онлайн карткою "єПідтримка", Visa, Mastercard
            </div>
            <div>
                <span>Гарантія.</span> {{$product->guarantee}} місяців Обмін/повернення товару протягом 14 днів
            </div>
        </div>
    </div>
</div>
