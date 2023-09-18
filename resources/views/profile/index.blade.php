@extends('layouts.base')
@section('content')

        <div class="average aver-profile">
            <div class="container profile-contain">
                <div class="list">
                    <div onclick="personalView()" id="personalInfo">
                        Особиста інформація
                    </div>
                    <div onclick="ordersView()" id="ordersInfo">
                        Список замовлень
                    </div>
                </div>
                <form action="{{route('profile.personal', Auth::user()->id)}}" method='post' class="personal" id="personal">
                    @csrf
                    <div class="personal__title margin">
                        ПІБ та номер телефону
                    </div>
                    <div>
                        <div>
                            Ім'я
                        </div>
                        <div>
                            <input type="text" name="name" value="{{Auth::user()->name}}">
                        </div>
                    </div>
                    <div>
                        <div>
                            Прізвище
                        </div>
                        <div>
                            <input type="text" name="surname" value="{{Auth::user()->surname}}">
                        </div>
                    </div>
                    <div>
                        <div>
                            По батькові
                        </div>
                        <div>
                            <input type="text" name="patronymic" value="{{Auth::user()->patronymic}}">
                        </div>
                    </div>
                    <div>
                        <div>
                            Номер телефону
                        </div>
                        <div>
                            <input type="text" name="mobile_number" value="{{Auth::user()->mobile_number}}">
                        </div>
                    </div>
                    <div class="personal__title">
                        Адреса
                    </div>
                    <div>
                        <div>
                            Місто
                        </div>
                        <div>
                            <input type="text" name="city" value="{{Auth::user()->city}}">
                        </div>
                    </div>
                    <div>
                        <div>
                            Вулиця
                        </div>
                        <div>
                            <input type="text" name="street" value="{{Auth::user()->street}}">
                        </div>
                    </div>
                    <div>
                        <div>
                            Будинок
                        </div>
                        <div>
                            <input type="text" name="house" value="{{Auth::user()->house}}">
                        </div>
                    </div>
                    <div>
                        <div>
                            Квартира
                        </div>
                        <div>
                            <input type="text" name="flat" value="{{Auth::user()->flat}}">
                        </div>
                    </div>
                    <div class="personal__title">
                        Email та пароль
                    </div>
                    <div>
                        <div>
                            Електронна адреса
                        </div>
                        <div>
                            <input type="email" name="email" value="{{Auth::user()->email}}">
                        </div>
                    </div>
                    <div>
                        <div>
                            Новий пароль
                        </div>
                        <div>
                            <input type="password" name="password" value="">
                        </div>
                    </div>
                    <button type="submit">Зберегти</button>
                </form>
                <div class="orders" id="orders">
                    @foreach($orders as $order)
                        <div class="profile-order {{$order->verify === '1' ? 'profile-order-green' : 'profile-order-red'}}">
                            <div>
                                <div>
                                    Номер замовлення
                                </div>
                                <div>
                                    {{$order->id}}
                                </div>
                            </div>
                            <div>
                                <div>
                                    Код товару
                                </div>
                                <div>
                                    {{$order->product_code}}
                                </div>
                            </div>
                            <div>
                                <div>
                                    Ціна товару
                                </div>
                                <div>
                                    {{$order->price}}₴
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="temp" id="temp"></div>
            </div>
        </div>

@endsection
