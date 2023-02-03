    @php
        if (empty($link)){
            $link = '';
        }
    @endphp
<div class="item">
    <div class="item__image {{$link === '/notebooks/' || $link === '/televisions/' ? 'image-size'
                            : ($_SERVER['REQUEST_URI'] === '/notebooks' || $_SERVER['REQUEST_URI'] === '/televisions' ? 'image-size'
                            : '')}}">
        <img src="{{asset('/storage/'.$product->images[0]->image_url)}}" alt="">
    </div>
    <div class="item__name">
        <a title="{{$product->name}} ({{$product->code}})"
            href="{{asset($_SERVER['REQUEST_URI'] === '/main-page' ||  $_SERVER['PATH_INFO'] === '/search' ? $link.$product->id
                    : (preg_replace('/[^0-9]/', '', $_SERVER['REQUEST_URI']) !== "" ? $link.$product->id
                    : $_SERVER['REQUEST_URI'].'/'.$product->id))}}" id={{"productLink".str_replace(['/', '-'],'', $link).$product->id}}>
            {{$product->name}} ({{$product->code}})
        </a>
    </div>
    <div class="item__tools">
        <div>
            {{$product->price}}₴
        </div>
        <div>
            <form action="{{route('pages.basket')}}" method="post">
                @csrf
                <input type="text" name="link" value="" class='invisible' id={{"sendProductLink".str_replace(['/', '-'],'', $link).$product->id}}>
                <input type="text" name="id" value="{{$product->id}}" class='invisible'>
                <img src="{{asset('images/icon-shopping-cart-plus.svg')}}" class="item__icon" onclick="basketBtnClick({{$product->id}}, '{{str_replace(['/', '-'],'', $link)}}')">
                <button type="submit" id="{{"basketBtn".str_replace(['/', '-'],'', $link).$product->id}}"></button>
            </form>
        </div>
    </div>
</div>
