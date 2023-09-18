@extends('layouts.admin')
@section('content')

        <div class="order">
            <div class="order__title">
                Контактні дані
            </div>
            <div class="order__block">
                <div>
                    Ім'я:
                </div>
                <div>
                    {{$order[0]->name}}
                </div>
            </div>
            <div class="order__block">
                <div>
                    Фамілія:
                </div>
                <div>
                    {{$order[0]->surname}}
                </div>
            </div>
            <div class="order__block">
                <div>
                    Номер телефону:
                </div>
                <div>
                    {{$order[0]->phone_number}}
                </div>
            </div>
            <div class="order__title">
                Замовлення
            </div>
            <div class="order__block">
                <div>
                    Код товару:
                </div>
                <div>
                    {{$order[0]->product_code}}
                </div>
            </div>
            <div class="order__block">
                <div>
                    Місто:
                </div>
                <div>
                    {{$order[0]->delivery_city}}
                </div>
            </div>
            <div class="order__block">
                <div>
                    Доставка:
                </div>
                <div>
                    {{$order[0]->delivery === 'courier' ? 'Кур\'єр Нової пошти' : 'Самовивіз з Нової Пошти'}}
                </div>
            </div>
            @if($order[0]->delivery === 'courier')
                <div class="order__block">
                    <div>
                        Вулиця:
                    </div>
                    <div>
                        {{$order[0]->street}}
                    </div>
                </div>
                <div class="order__block">
                    <div>
                        Будинок, №:
                    </div>
                    <div>
                        {{$order[0]->house}}
                    </div>
                </div>
                <div class="order__block">
                    <div>
                        Квартира, №:
                    </div>
                    <div>
                        {{$order[0]->flat}}
                    </div>
                </div>
            @else
                <div class="order__block">
                    <div>
                        Адреса Нової пошти:
                    </div>
                    <div>
                        {{$order[0]->mail_address}}
                    </div>
                </div>
            @endif
            <div class="order__block">
                <div>
                    Оплата:
                </div>
                <div>
                    {{$order[0]->payment === 'self' ? 'Оплата при отриманні товару' : ''}}
                </div>
            </div>
            <div class="order__title">
                Контактні дані отримувача замовлення
            </div>
            <div class="order__block">
                <div>
                    Ім'я:
                </div>
                <div>
                    {{$order[0]->recipient_name}}
                </div>
            </div>
            <div class="order__block">
                <div>
                    Фамілія:
                </div>
                <div>
                    {{$order[0]->recipient_surname}}
                </div>
            </div>
            <div class="order__block">
                <div>
                    По батькові:
                </div>
                <div>
                    {{$order[0]->recipient_patronymic}}
                </div>
            </div>
            <div class="order__block">
                <div>
                    Номере телефону:
                </div>
                <div>
                    {{$order[0]->recipient_number}}
                </div>
            </div>
        </div>
<<<<<<< HEAD

@endsection
=======
</x-admin.admin-nav>
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
