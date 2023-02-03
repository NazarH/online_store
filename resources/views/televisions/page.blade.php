<x-base.base>
    <x-slot:title>
        OnlineStore - {{$television->name}}
        </x-slot>
        <div class="login-back" id="authBack">
            <a href="" name="top"></a>
            <a href="#top" id="pageTop"></a>
        </div>
        <x-header.header :top_banner="$top_banner"></x-header.header>
        <div class="average">
            <x-product.info :product="$television" class="book-img"></x-product.info>
            <div class="product-items">
                <div class="features">
                    <div class="feature__name">
                        <div>
                            Характеристики
                        </div>
                        <div>
                            {{$_SERVER['REQUEST_URI'] === '/notebooks/'.$television->id ? 'Ноутбук'
                            : ($_SERVER['REQUEST_URI'] === '/televisions/'.$television->id ? 'Телевізор'
                            : ($_SERVER['REQUEST_URI'] === '/books/'.$television->id ? 'Книга'
                            : ($_SERVER['REQUEST_URI'] === '/mobile-phones/'.$television->id ? 'Телефон' : 0)))}}
                        </div>
                        <div>
                            {{$television->name}}
                        </div>
                        <div>
                            ({{$television->code}})
                        </div>
                    </div>
                    <div class="features__items">
                        <div class="features__block">
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Діагональ екрану
                                </div>
                                <div class="features__item-feature">
                                    {{$television->diagonal}}"
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Розширення
                                </div>
                                <div class="features__item-feature">
                                    {{$television->expansion}}
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Тип телевізору
                                </div>
                                <div class="features__item-feature">
                                    {{$television->type}}
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Операційна система
                                </div>
                                <div class="features__item-feature">
                                    {{$television->os}}
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Технології
                                </div>
                                <div class="features__item-feature">
                                    {{$television->technologies}}
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Затримка
                                </div>
                                <div class="features__item-feature">
                                    {{$television->response_time}} ms
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Країна реєстрації бренду
                                </div>
                                <div class="features__item-feature">
                                    {{$television->country}}
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Оперативна пам'ять
                                </div>
                                <div class="features__item-feature">
                                    {{$television->ram_total}} GB
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Об'єм постійної пам'яті
                                </div>
                                <div class="features__item-feature">
                                    {{$television->storage}} GB
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Динамік
                                </div>
                                <div class="features__item-feature">
                                    {{$television->audio_system}} W
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Підтримка
                                </div>
                                <div class="features__item-feature">
                                    {{$television->sound_tech}}
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Контрасність
                                </div>
                                <div class="features__item-feature">
                                    {{$television->contrast}}
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Формати відео
                                </div>
                                <div class="features__item-feature">
                                    {{$television->video_formats}}
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Формати аудіо
                                </div>
                                <div class="features__item-feature">
                                    {{$television->audio_formats}}
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Формати зображення
                                </div>
                                <div class="features__item-feature">
                                    {{$television->img_formats}}
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Додаткові роз'єми
                                </div>
                                <div class="features__item-feature">
                                    {{$television->add_connect}}
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Частота оновлення екрану
                                </div>
                                <div class="features__item-feature">
                                    {{$television->refresh_rate}} Hz
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Яркість
                                </div>
                                <div class="features__item-feature">
                                    {{$television->brightness}}
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Частота WiFi
                                </div>
                                <div class="features__item-feature">
                                    {{$television->wifi}}
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Версія Bluetooth
                                </div>
                                <div class="features__item-feature">
                                    {{$television->bluetooth}}
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Габарити з підставкою
                                </div>
                                <div class="features__item-feature">
                                    {{$television->dim_with_stand}} mm
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Габарити без підставки
                                </div>
                                <div class="features__item-feature">
                                    {{$television->dim_without_stand}} mm
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Вага з підставкою
                                </div>
                                <div class="features__item-feature">
                                    {{$television->weight_with_stand}} kg
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Вага без підставки
                                </div>
                                <div class="features__item-feature">
                                    {{$television->weight_without_stand}} kg
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Комплект поставки
                                </div>
                                <div class="features__item-feature">
                                    {{$television->kit}}
                                </div>
                            </div>
                            <div class="features__item indent">
                                <div class="features__item-name">
                                    Гарантія
                                </div>
                                <div class="features__item-feature">
                                    {{$television->guarantee}}
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
                            <x-review.form :product="$television"></x-review.form>
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
