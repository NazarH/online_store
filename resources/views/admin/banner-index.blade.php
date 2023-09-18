@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="banners">
            <div class="banners__top">
                <form action="{{route('admin.banner.create')}}" class="banners__form-top" id="banner-create" method="post">
                    @csrf
                    <input type="text" name="text" placeholder="Введіть текст банеру...">
                    <input class="input_size" type="text" name="banner_type" placeholder="top / block">
                    <input class="input_size" type="text" name="text_color" placeholder="#FFFFFF - text">
                    <input class="input_size" type="text" name="back_color" placeholder="#000000 - back">
                    <input class="input_size" type="text" name="link" placeholder="Ноутбуки">
                    <button type="submit">Create</button>
                </form>
                <table class="table table-banner">
                    <tr>
                        <th>Текст банеру</th>
                        <th>Тип банеру</th>
                        <th>Колір тексту</th>
                        <th>Колір банеру</th>
                        <th>Посилання</th>
                        <th></th>
                    </tr>
                    @unless (empty($banners))
                        @foreach ($banners as $banner)
                            <tr>
                                <td class="item-name">{{ $banner->text }}</td>
                                <td class="table__item">{{ $banner->banner_type }}</td>
                                <td class="table__item">{{ $banner->text_color }}</td>
                                <td class="table__item">{{ $banner->back_color }}</td>
                                <td class="table__item">{{ $banner->link }}</td>
                                <td class="table-buttons">
                                    <form action="">
                                        <input type="submit" value="Видалити">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endunless
                </table>
            </div>
            <div class="banners__main">

            </div>
        </div>
    </div>

@endsection
