<<<<<<< HEAD
@extends('layouts.admin')
@section('content')

=======
<x-admin.admin-nav>
    <x-slot:title>
        OnlineStore - статистика
        </x-slot>
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
        <div class="container">
            <table class="table">
                <tr>
                    <th class="th-border">Статистика сайту</th>
                    <th></th>
                </tr>
                <tr>
                    <td class="td-first">Кількість користувачів:</td>
                    <td class="item-center">{{$users_count}}</td>
                </tr>
                <tr>
                    <td>Кількість товарів:</td>
                    <td class="item-center">{{$products_count}}</td>
                </tr>
                <tr>
                    <td>Кількість замовлень:</td>
                    <td class="item-center">{{$order_count}}</td>
                </tr>
            </table>
        </div>
        <x-admin.admin-table-products :orders="$most_popular"></x-admin.admin-table-products>
<<<<<<< HEAD

@endsection
=======
</x-admin.admin-nav>
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
