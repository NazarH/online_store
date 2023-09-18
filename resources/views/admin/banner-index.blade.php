<<<<<<< HEAD
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
=======
<x-admin.admin-nav>
    <x-slot:title>
        OnlineStore - banners list
        </x-slot>
        <div class="container">
            <div class="banners">
                <div class="banners__top">
                    <div class="choose">
                        <div>
                            <input type="radio" name="choose_table" onclick="addAction('{{route('admin.banner.top.create')}}')">
                            <div>
                                Верхній банер
                            </div>
                        </div>
                        <div>
                            <input type="radio" name="choose_table" onclick="addAction('{{route('admin.banner.block.create')}}')">
                            <div>
                                Блок з банерами
                            </div>
                        </div>
                    </div>
                    <form class="banners__form-top" id="banner-create" method="post">
                        @csrf
                        <input type="text" name="text" placeholder="Введіть текст банеру...">
                        <input class="input_size" type="text" name="text_color" placeholder="#FFFFFF - text">
                        <input class="input_size" type="text" name="back_color" placeholder="#000000 - back">
                        <input class="input_size" type="text" name="link" placeholder="/notebooks">
                        <button type="submit">Create</button>
                    </form>
                    <table class="table table-banner">
                        <tr>
                            <th>Текст верхнього банеру</th>
                            <th>Колір тексту</th>
                            <th>Колір банеру</th>
                            <th>Посилання</th>
                            <th></th>
                        </tr>
                        @unless(empty($top_banner))
                            <tr>
                                <td class="item-name">{{$top_banner->text}}</td>
                                <td class="table__item">{{$top_banner->text_color}}</td>
                                <td class="table__item">{{$top_banner->back_color}}</td>
                                <td class="table__item">{{$top_banner->link}}</td>
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
                                <td class="table-buttons">
                                    <form action="">
                                        <input type="submit" value="Видалити">
                                    </form>
                                </td>
                            </tr>
<<<<<<< HEAD
                        @endforeach
                    @endunless
                </table>
            </div>
            <div class="banners__main">

            </div>
        </div>
    </div>

@endsection
=======
                        @endunless
                    </table>

                    <table class="table table-banner">
                        <tr>
                            <th>Текст банерів блоку</th>
                            <th>Колір тексту</th>
                            <th>Колір банеру</th>
                            <th>Посилання</th>
                            <th></th>
                        </tr>
                        @unless(empty($block_banners))
                            @foreach($block_banners as $block_banner)
                                <tr>
                                    <td class="item-name">{{$block_banner->text}}</td>
                                    <td class="table__item">{{$block_banner->text_color}}</td>
                                    <td class="table__item">{{$block_banner->back_color}}</td>
                                    <td class="table__item">{{$block_banner->link}}</td>
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
</x-admin.admin-nav>
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
