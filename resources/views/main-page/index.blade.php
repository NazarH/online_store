@extends('layouts.base')
@section('content')
    <div class="average">
        <div class="container">
            <div class="content__banners">
                @foreach ($block_banners as $key => $block_banner)
                    <div id='banner-item-{{ $key }}' class="content__banner-block"
                        style="display: {{ $key !== 0 ? 'none;' : 'flex;' }}">
                        <div class="press-left" onclick="pressLeft({{ $key }}, {{ count($block_banners) }})">
                            ❰
                        </div>
                        <a class="content__banner" href="/products/{{$block_banner->link}}"
                            style="color: {{ $block_banner->text_color }}; background: {{ $block_banner->back_color }};">
                            <div>
                                {{ $block_banner->text }}
                            </div>
                        </a>
                        <div class="press-right" onclick="pressRight({{ $key }}, {{ count($block_banners) }})">
                            ❱
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="content__bottom">
                <div class="content__items">
                    <div class="content__title">Недавно переглянуті товари:</div>
                    <div class="viewed__rev-products">

                    </div>
                </div>
                <div class="content__items">
                    <div class="content__title">Топ 5 найпопулярніших товарів:</div>
                    <div class="content__products">

                    </div>
                </div>
                <div class="content__items">
                    <div class="content__title">Реклама:</div>
                    <div class="content__products">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
