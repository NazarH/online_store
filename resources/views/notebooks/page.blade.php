<x-base.base>
    <x-slot:title>
        OnlineStore - {{$notebook->name}}
        </x-slot>
        <div class="login-back" id="authBack">
            <a href="" name="top"></a>
            <a href="#top" id="pageTop"></a>
        </div>
        <x-header.header :top_banner="$top_banner"></x-header.header>

        <div class="average">
            <x-product.info :product="$notebook"></x-product.info>
            <div class="product-items">
                <div class="features">
                        <div class="feature__name">
                            <div>
                                Характеристики
                            </div>
                            <div>
                                {{$_SERVER['REQUEST_URI'] === '/notebooks/'.$notebook->id ? 'Ноутбук'
                                : ($_SERVER['REQUEST_URI'] === '/televisions/'.$notebook->id ? 'Телевізор'
                                : ($_SERVER['REQUEST_URI'] === '/books/'.$notebook->id ? 'Книга'
                                : ($_SERVER['REQUEST_URI'] === '/mobile-phones/'.$notebook->id ? 'Телефон' : 0)))}}
                            </div>
                            <div>
                                {{$notebook->name}}
                            </div>
                            <div>
                                ({{$notebook->code}})
                            </div>
                        </div>
                        <div class="features__items">
                            <div class="features__block">
                                <div class="features__title">
                                    Екран
                                </div>
                                <div class="features__item">
                                    <div class="features__item-name">
                                        Розширення екрану
                                    </div>
                                    <div class="features__item-feature">
                                        {{$notebook->expansion}}
                                    </div>
                                </div>
                                <div class="features__item">
                                    <div class="features__item-name">
                                        Тип екрану
                                    </div>
                                    <div class="features__item-feature">
                                        {{$notebook->type}}
                                    </div>
                                </div>
                                <div class="features__item">
                                    <div class="features__item-name">
                                        Частота оновлення
                                    </div>
                                    <div class="features__item-feature">
                                        {{$notebook->refresh_rate}} Hz
                                    </div>
                                </div>
                                <div class="features__title">
                                    Процессор
                                </div>
                                <div class="features__item">
                                    <div class="features__item-name">
                                        Сімейство
                                    </div>
                                    <div class="features__item-feature">
                                        {{$notebook->series === 'i3' ||  $notebook->series === 'i5' || $notebook->series === 'i7'
                                            ? 'Intel Core' : ''}}
                                    </div>
                                </div>
                                <div class="features__item">
                                    <div class="features__item-name">
                                        Маркування
                                    </div>
                                    <div class="features__item-feature">
                                        {{$notebook->series}}-{{$notebook->marking}}
                                    </div>
                                </div>
                                <div class="features__title">
                                    Оперативна пам'ять
                                </div>
                                <div class="features__item">
                                    <div class="features__item-name">
                                        Об'єм оперативної пам'яті
                                    </div>
                                    <div class="features__item-feature">
                                        {{$notebook->ram_memory}} GB
                                    </div>
                                </div>
                                <div class="features__item">
                                    <div class="features__item-name">
                                        Кількість слотів
                                    </div>
                                    <div class="features__item-feature">
                                        {{$notebook->slots}}
                                    </div>
                                </div>
                                <div class="features__item">
                                    <div class="features__item-name">
                                        Тип оперативної пам'яті
                                    </div>
                                    <div class="features__item-feature">
                                        {{$notebook->ram_type}}
                                    </div>
                                </div>
                                <div class="features__title">
                                    Накопичувач даних
                                </div>
                                <div class="features__item">
                                    <div class="features__item-name">
                                        Об'єм SSD
                                    </div>
                                    <div class="features__item-feature">
                                        {{$notebook->ssd}} GB
                                    </div>
                                </div>
                                <div class="features__item">
                                    <div class="features__item-name">
                                        Об'єм HDD
                                    </div>
                                    <div class="features__item-feature">
                                        {{$notebook->hdd === '0' ? 'Немає' : $notebook->sata.'GB'}}
                                    </div>
                                </div>
                                <div class="features__item">
                                    <div class="features__item-name">
                                        Кількість слотів SATA
                                    </div>
                                    <div class="features__item-feature">
                                        {{$notebook->sata === '0' ? 'Немає' : $notebook->sata}}
                                    </div>
                                </div>
                                <div class="features__title">
                                    Відеокарта
                                </div>
                                <div class="features__item">
                                    <div class="features__item-name">
                                        Об'єм відеопам'яті
                                    </div>
                                    <div class="features__item-feature">
                                        {{$notebook->video_memory}} GB
                                    </div>
                                </div>
                                <div class="features__item">
                                    <div class="features__item-name">
                                        Відеокарта
                                    </div>
                                    <div class="features__item-feature">
                                        {{$notebook->video_card === 'Немає' ? 'Вбудована графіка' : $notebook->video_card}}
                                    </div>
                                </div>
                                <div class="features__title">
                                    Корпус
                                </div>
                                <div class="features__item">
                                    <div class="features__item-name">
                                        Вага
                                    </div>
                                    <div class="features__item-feature">
                                        {{$notebook->weight}} kg
                                    </div>
                                </div>
                                <div class="features__item">
                                    <div class="features__item-name">
                                        Ємність акумулятора
                                    </div>
                                    <div class="features__item-feature">
                                        {{$notebook->battery}} W*h
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
                            <x-review.form :product="$notebook"></x-review.form>
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
