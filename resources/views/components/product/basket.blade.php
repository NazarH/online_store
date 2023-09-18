<div class="basket-item">
    <div>
        <div class="basket-image">
            <img src="{{asset('/storage/'.$item->images[0]->image_url)}}" alt="">
        </div>
        <div>
            <div>
                <a href="{{$item->link.$item->id}}">
                    {{$item->name}}
                </a>
            </div>
            <div class="basket-item__bold">
                ({{$item->code}})
            </div>
        </div>
    </div>
    <div class="basket-item__bold">
        <div>
            {{$item->price}}₴
        </div>
        <form action="{{route('pages.basket.delete', ['link'=>$item->link, 'id'=>$item->id])}}" method="post"
              class="basket-delete-form">
            <input name="link" value="{{$item->link}}">
            <input name="id" value="{{$item->id}}">
            @csrf
            <button type="submit">
                Видалити
            </button>
        </form>
    </div>
</div>
