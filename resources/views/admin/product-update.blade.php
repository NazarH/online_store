@extends('layouts.admin')
@section('content')

    <div class="container">
        <form action="{{ route('admin.product.update', $product->id) }}" class="product" method="post">
            @csrf
            <div class="product__item">
                <div class="product__name">
                    Назва
                </div>
                <input name='name' type="text" value="{{ $product->name }}">
            </div>
            <div class="product__item">
                <div class="product__name">
                    Код
                </div>
                <input name='code' type="text" value="{{ $product->code }}">
            </div>
            <div class="product__item">
                <div class="product__name">
                    Ціна
                </div>
                <input name='price' type="text" value="{{ $product->price }}">
            </div>
            <div class="product__item">
                <div class="product__name">
                    Знижка
                </div>
                <input name='discount' type="text" value="{{ $product->discount }}">
            </div>

            @unless (empty($attributes))
                @foreach ($attributes as $attribute)
                    <div class="product__item">
                        <div class="product__name">
                            {{ $attribute->name }}
                        </div>
                        <input name='value' type="text" value="{{ $attribute->value }}">
                    </div>
                @endforeach
            @endunless

            <button type="submit">
                Оновити інформацію
            </button>
        </form>

        <form action="{{ route('admin.product.add', $product->id) }}" class="attributs" method="post">
            @csrf
            <div class="attributs__item">
                <div class="attributs__text">
                    Тип
                </div>
                <input type="text" name='type' placeholder="hdd, ssd, processor, display...">
            </div>
            <div class="attributs__item">
                <div class="attributs__text">
                    Назва
                </div>
                <input type="text" name='name' placeholder="Жорсткий диск, Твердотільний накопичувач, Дисплей...">
            </div>
            <div class="attributs__item">
                <div class="attributs__text">
                    Значення
                </div>
                <input type="text" name='value' placeholder="1TB, 500GB NVMe, 1920x1080...">
            </div>
            <button type="submit">
                Додати новий атрибут
            </button>
        </form>
    </div>

@endsection
