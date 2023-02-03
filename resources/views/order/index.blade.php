<x-base.base>
    <x-slot:title>
        OnlineStore - особистий кабінет
        </x-slot>
        @php
                $name = empty(Auth::user()->name) ? '': Auth::user()->name;
                $surname = empty(Auth::user()->surname) ? '' : Auth::user()->surname;
                $patronymic = empty(Auth::user()->patronymic) ? '' : Auth::user()->patronymic;
                $number = empty(Auth::user()->mobile_number) ? '' : Auth::user()->mobile_number;
                $city = empty(Auth::user()->city) ? '' : Auth::user()->city;
                $street = empty(Auth::user()->street) ? '' : Auth::user()->street;
                $house = empty(Auth::user()->house) ? '' : Auth::user()->house;
                $flat = empty(Auth::user()->flat) ? '' : Auth::user()->flat;

                $price = 0;
                $product_code = '';
        @endphp
        <div class="container">
            <form action="{{route('order.post')}}" class="order" method="post">
                @csrf
                <div class="order__header">
                    <a href="{{asset('/main-page')}}">OnlineStore</a>
                </div>
                <div class="order__content">
                    <div class="order__left">
                        <div class="order__title">
                            Оформлення замовлення
                        </div>
                        <div class="order__block first">
                            <div>
                                Ваші контактні дані
                            </div>
                            <div>
                                <div>
                                    <div>
                                        Фамілія
                                    </div>
                                    <input type="text" name="surname" value="{{$surname}}">
                                </div>
                                <div>
                                    <div>
                                        Ім'я
                                    </div>
                                    <input type="text" name="name" value="{{$name}}">
                                </div>
                                <div>
                                    <div>
                                        Мобільний номер
                                    </div>
                                    <input type="text" name="phone_number" value="{{$number}}">
                                </div>
                            </div>
                        </div>
                        <div class="order__title">
                            Замовлення
                        </div>
                        <div class="order__block">
                            <div>
                                Товари
                            </div>
                            @foreach($product as $item)
                                @php
                                   $price += $item->discount === 0 ? $item->price : round($item->price - ($item->price*$item->discount/100));
                                   $product_code = $product_code.'('.$item->code.') ';
                                @endphp
                                <div class="order__item">
                                    <div>
                                        <div class="order__item-image">
                                            <img src="{{asset('/storage/'.$item->images[0]->image_url)}}" alt="">
                                        </div>
                                        <div class="order__item-block">
                                            <div>
                                                <a href="{{$_SERVER['REQUEST_URI'] === '/orders' ? asset($item->link.$item->id)
                                                            : asset($product->link)}}">{{$item->name}}</a>
                                            </div>
                                            <div>
                                                ({{$item->code}})
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order__item-block center-text">
                                        <div>
                                            Ціна
                                        </div>
                                        <div>
                                            {{$item->discount === 0 ? $item->price : round($item->price - ($item->price*$item->discount/100))}}₴
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="order__block">
                            <div>
                                Доставка
                            </div>
                            <div>
                                <div class="order__city">
                                    <div>
                                        Місто
                                    </div>
                                    <input type="text" name='delivery_city' value="{{$city}}">
                                </div>
                            </div>
                            <div>
                                <div class="order__radio">
                                    <div>
                                        <input type="radio" name="delivery" value="self-pickup" onclick="showOrderHidden1()">
                                    </div>
                                    <div>
                                        Самовивіз з Нової Пошти
                                    </div>
                                </div>
                            </div>
                            <div class="order__hidden hidden-first" id="orderHidden1">
                                <div>
                                    <div>
                                       Адреса Нової пошти
                                    </div>
                                    <input type="text" name="mail_address">
                                </div>
                            </div>
                            <div>
                                <div class="order__radio">
                                    <div>
                                        <input type="radio" name="delivery" value="courier" onclick="showOrderHidden2()">
                                    </div>
                                    <div>
                                        Кур'єр Нової пошта
                                    </div>
                                </div>
                            </div>
                            <div class="order__hidden" id="orderHidden2">
                                <div>
                                    <div>
                                        Вулиця
                                    </div>
                                    <input type="text" name="street" value="{{$street}}">
                                </div>
                                <div>
                                    <div>
                                        Будинок
                                    </div>
                                    <input type="text" name="house" value="{{$house}}">
                                </div>
                                <div>
                                    <div>
                                        Квартира
                                    </div>
                                    <input type="text" name="flat" value="{{$flat}}">
                                </div>
                            </div>
                        </div>
                        <div class="order__block">
                            <div>
                                Оплата
                            </div>
                            <div>
                                <div class="order__radio">
                                    <div>
                                        <input type="radio" name="payment" checked>
                                    </div>
                                    <div>
                                        Оплата при отриманні товару
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order__block">
                            <div>
                                Контактні дані отримувача замовлення
                            </div>
                            <div>
                                <div>
                                    <div>
                                        Ім'я
                                    </div>
                                    <input type="text" name="recipient_name" value="{{$name}}">
                                </div>
                                <div>
                                    <div>
                                        Фамілія
                                    </div>
                                    <input type="text" name="recipient_surname" value="{{$surname}}">
                                </div>
                                <div>
                                    <div>
                                        По батькові
                                    </div>
                                    <input type="text" name="recipient_patronymic" value="{{$patronymic}}">
                                </div>
                                <div>
                                    <div>
                                        Мобільний номер
                                    </div>
                                    <input type="text" name="recipient_number" value="{{$number}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order__right">
                        <div class="order__total">
                            <div class="order__title-2">
                                Разом
                            </div>
                            <div>
                                <div>
                                    ({{count($product)}}) товар на сумму
                                </div>
                                <div>
                                    {{$price}}₴
                                </div>
                            </div>
                            <div>
                                <div>
                                    Вартість доставки
                                </div>
                                <div>
                                    за тарифами перевізника
                                </div>
                            </div>
                            <div>
                                <div>
                                    До сплати
                                </div>
                                <div>
                                        {{$price}}₴
                                </div>
                            </div>
                            <input type="text" value="{{trim($product_code)}}" name='product_code' class="hidden">
                            <input type="text" name="price" class="hidden" value="{{$price}}">
                            <div class="order__form">
                                <button type="submit" >Замовлення підтверджую</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
</x-base.base>


