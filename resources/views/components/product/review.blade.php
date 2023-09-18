<div class="review">
    <div class="review__name">
        <div>
            {{$review->user[0]->name.' '.$review->user[0]->surname}}
        </div>
        <div>
            {{str_replace('-', '.', substr($review->created_at, 0, 10))}}
        </div>
    </div>
    <div class="review__content">
        <div>
            {{$review->review}}
        </div>
        <div class="review__item">
            <div>
                Переваги:
            </div>
            <div>
                {{$review->benefits}}
            </div>
        </div>
        <div class="review__item">
            <div>
                Недоліки:
            </div>
            <div>
                {{$review->disadvantages}}
            </div>
        </div>
    </div>
</div>
