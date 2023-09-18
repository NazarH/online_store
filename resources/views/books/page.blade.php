<x-base.base>
    <x-slot:title>
        OnlineStore - {{$book->name}}
        </x-slot>
        <div class="login-back" id="authBack">
            <a href="" name="top"></a>
            <a href="#top" id="pageTop"></a>
        </div>
        <x-header.header :top_banner="$top_banner"></x-header.header>
        <div class="average">
            <x-product.info :product="$book" class="book-img"></x-product.info>
            <div class="product-items">
                <div class="features">
                    <div class="feature__name">
                        <div>
                            Характеристики
                        </div>
                        <div>
                            {{$_SERVER['REQUEST_URI'] === '/notebooks/'.$book->id ? 'Ноутбук'
                            : ($_SERVER['REQUEST_URI'] === '/televisions/'.$book->id ? 'Телевізор'
                            : ($_SERVER['REQUEST_URI'] === '/books/'.$book->id ? 'Книга'
                            : ($_SERVER['REQUEST_URI'] === '/mobile-phones/'.$book->id ? 'Телефон' : 0)))}}
                        </div>
                        <div>
                            {{$book->name}}
                        </div>
                        <div>
                            ({{$book->code}})
                        </div>
                    </div>
                    <div class="features__items">
                        <div class="features__block">
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Автор
                                </div>
                                <div class="features__item-feature">
                                    {{$book->author}}
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Видавництво
                                </div>
                                <div class="features__item-feature">
                                    {{$book->publishing}}
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Рік видання
                                </div>
                                <div class="features__item-feature">
                                    {{$book->year}}
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Кількість сторінок
                                </div>
                                <div class="features__item-feature">
                                    {{$book->pages_numb}}
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Формат книги
                                </div>
                                <div class="features__item-feature">
                                    {{$book->format}} мм
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Вага книги
                                </div>
                                <div class="features__item-feature">
                                    {{$book->weight}} г
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Країна-виробник товару
                                </div>
                                <div class="features__item-feature">
                                    {{$book->country_man}}
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Країна реєстрації бренду
                                </div>
                                <div class="features__item-feature">
                                    {{$book->country_reg}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reviews">
                    <div class="reviews__top">
                        <div class="feature__name weight">
                            Відгуки покупців
                        </div>
                        @unless(empty(Auth::user()->id))
                            <button class="reviews__button" onclick="reviewFunc()">Написати відгук</button>
                            <x-review.form :product="$book"></x-review.form>
                        @endunless
                    </div>
                    <div class="reviews_bottom">
                        @unless(empty($reviews))
                            @foreach($reviews as $review)
                                <x-product.review :review="$review"></x-product.review>
                            @endforeach
                        @endunless
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
                    @if(!empty($rev_products))
                        @foreach($rev_products as $product)
                            <x-product.product :product="$product" :link="$product->link"></x-product.product>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <x-footer.footer></x-footer.footer>
</x-base.base>
