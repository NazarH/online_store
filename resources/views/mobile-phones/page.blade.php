<x-base.base>
    <x-slot:title>
        OnlineStore - {{$phone->name}}
        </x-slot>
        <div class="login-back" id="authBack">
            <a href="" name="top"></a>
            <a href="#top" id="pageTop"></a>
        </div>
        <x-header.header :top_banner="$top_banner"></x-header.header>
        <div class="average">
            <x-product.info :product="$phone" class="book-img"></x-product.info>
            <div class="product-items">
                <div class="features">
                    <div class="feature__name">
                        <div>
                            Характеристики
                        </div>
                        <div>
                            {{$_SERVER['REQUEST_URI'] === '/notebooks/'.$phone->id ? 'Ноутбук'
                            : ($_SERVER['REQUEST_URI'] === '/televisions/'.$phone->id ? 'Телевізор'
                            : ($_SERVER['REQUEST_URI'] === '/books/'.$phone->id ? 'Книга'
                            : ($_SERVER['REQUEST_URI'] === '/mobile-phones/'.$phone->id ? 'Телефон' : 0)))}}
                        </div>
                        <div>
                            {{$phone->name}}
                        </div>
                        <div>
                            ({{$phone->code}})
                        </div>
                    </div>
                    <div class="features__items">
                        <div class="features__block">
                            <div class="features__title">
                                Стандарт зв'язку/інтернет
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Стандарт зв'язку
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->standard}}
                                </div>
                            </div>
                            <div class="features__title">
                                Дисплей
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Діагональ екрану
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->diagonal}}"
                                </div>
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Розширення дисплею
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->expansion}}
                                </div>
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Тип матриці
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->type}}
                                </div>
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Частота оновлення екрану
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->refresh_rate}} Hz
                                </div>
                            </div>
                            <div class="features__title">
                                SIM-карти
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Кількість SIM-карт
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->sim_count}}
                                </div>
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Розмір SIM-карт
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->sim_size}}
                                </div>
                            </div>
                            <div class="features__title">
                                Функції пам'яті
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Оперативна пам'ять
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->ram_memory}} GB
                                </div>
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Вбудована пам'ять
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->storage}}
                                </div>
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Формат підтримуваних карток пам'яті
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->card_type}}
                                </div>
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Максимальний обсяг підтримуваної картки пам'яті
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->max_card_memory}}
                                </div>
                            </div>
                            <div class="features__title">
                                Операційна система
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Операційна система
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->os}}
                                </div>
                            </div>
                            <div class="features__title">
                                Фронтальна камера
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Фронтальна камера
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->front_mp}} Mp
                                </div>
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Запис відео фронтальної камери
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->front_video}} Mp
                                </div>
                            </div>
                            <div class="features__title">
                                Процессор
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Назва процессору
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->processor_name}}
                                </div>
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Тип ядра
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->core_type}}
                                </div>
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Відеоядро
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->video_card}}
                                </div>
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Кількість ядер
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->core_count}}
                                </div>
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Частота
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->frequency}} Ghz
                                </div>
                            </div>
                            <div class="features__title">
                                Основна камера
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Кількість мегапікселів основної камери
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->main_mp}} Mp
                                </div>
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Особливості основної камери
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->main_features}}
                                </div>
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Запис відео основної камери
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->main_video}}
                                </div>
                            </div>
                            <div class="features__title">
                                Живлення
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Ємність акумулятора
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->battery}} M*h
                                </div>
                            </div>
                            <div class="features__title">
                                Матеріали
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Матеріал корпусу
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->material}}
                                </div>
                            </div>
                            <div class="features__title">
                                Роз'єми
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Роз'єми
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->connectors}}
                                </div>
                            </div>
                            <div class="features__title">
                                Розміри
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Вага
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->weight}} g
                                </div>
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Пропорції
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->dimensions}} mm
                                </div>
                            </div>
                            <div class="features__title">
                                Додатково
                            </div>
                            <div class="features__item">
                                <div class="features__item-name">
                                    Гарантія
                                </div>
                                <div class="features__item-feature">
                                    {{$phone->guarantee}} місяців
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
                            <x-review.form :product="$phone"></x-review.form>
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
