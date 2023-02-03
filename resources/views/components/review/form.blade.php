<form action="{{route('pages.review', $_SERVER['REQUEST_URI'])}}" class="review__form" id="reviewForm" method="post">
    @csrf
    <div>
        <div></div>
        <div class="review__close" onclick="reviewFunc()">×</div>
    </div>
    <div>
        <div>
            Ім'я користувача
        </div>
        <div>
            {{Auth::user()->name.' '.Auth::user()->surname}}
        </div>
    </div>
    <div>
        <div>
            Поле для відгуку
        </div>
        <textarea name="review" id="" cols="30" rows="10" class="review__area"></textarea>
    </div>
    <div>
        <div>
            Переваги
        </div>
        <input name='benefits' type="text" class="review__items">
    </div>
    <div>
        <div>
            Недоліки
        </div>
        <input name='disadvantages' type="text" class="review__items">
    </div>
    <button type="submit">
        Залишити відгук
    </button>
</form>
