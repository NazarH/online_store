<x-base.base>
    <x-slot:title>
        OnlineStore - корзина
        </x-slot>
        <x-header.header :top_banner="$top_banner"></x-header.header>
            @php
                $price = 0;
            @endphp
        <div class="average">
            <div class="container">
                @if(empty($basket))
                    <div class="empty-basket">
                        Корзина пуста
                    </div>
                @endif
                @unless(empty($basket))
                    @foreach($basket as $item)
                        @php
                            $price += $item->price;
                        @endphp
                        <x-product.basket :item="$item"></x-product.basket>
                    @endforeach
                        <div class="total-amount">
                            Загальна сумма: <nav>{{$price}}₴</nav>
                        </div>
                        <a href="{{asset('/orders')}}" class="basket-form">
                            <button class="basket-btn">
                                Оформити замовлення
                            </button>
                        </a>
                @endunless
            </div>
        </div>
        <x-footer.footer></x-footer.footer>
</x-base.base>
