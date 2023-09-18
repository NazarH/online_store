@extends('layouts.admin')
@section('content')

        <div class="container">
            <div class="table-attributes">
                <a href="{{route('admin.product.create')}}">Додати товар</a>
                <form action="" method="post">
                    @csrf
                    <input type="text" name="code" placeholder="Введіть код товару...">
                    <button type="submit">Пошук</button>
                </form>
            </div>
            <table class="table">
                <tr>
                    <th>Назва товару</th>
                    <th>Код товару</th>
                    <th>Ціна</th>
                    <th></th>
                </tr>
                @unless(empty($products))
                    @foreach($products as $product)
                        <tr>
                            <td class="item-name">{{$product->name}}</td>
                            <td>{{$product->code}}</td>
                            <td class="item-price">{{$product->price}}</td>
                            <td class="table-buttons">
                                <a href="{{route('admin.product.update', $product->id)}}">Редагувати</a>
                                <form action="" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Видалити">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endunless
            </table>
        </div>

@endsection
