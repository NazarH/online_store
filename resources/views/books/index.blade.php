<x-base.base>
    <x-slot:title>
        OnlineStore - книги
        </x-slot>
        <x-header.header :top_banner="$top_banner"></x-header.header>
        <div class="average products-page">
            <form class="filter" method="post" action="">
                @csrf
                <div class="filter__title title-first">Ціна</div>
                <div class="filter__item price-item">
                    <div>
                        <input type="text" name="price_min_1" placeholder="5000">
                        <div> — </div>
                        <input type="text" name="price_max_2" placeholder="200000"> Грн
                    </div>
                </div>
                <div class="filter__title">Країна-виробник товару</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="Великобританія" name="country_reg_1">
                        Великобританія
                    </div>
                    <div>
                        <input type="checkbox" value="Німеччина" name="country_reg_2">
                        Німеччина
                    </div>
                    <div>
                        <input type="checkbox" value="Іспанія" name="country_reg_3">
                        Іспанія
                    </div>
                    <div>
                        <input type="checkbox" value="Китай" name="country_reg_4">
                        Китай
                    </div>
                    <div>
                        <input type="checkbox" value="Литва" name="country_reg_5">
                        Литва
                    </div>
                    <div>
                        <input type="checkbox" value="США" name="country_reg_6">
                        США
                    </div>
                    <div>
                        <input type="checkbox" value="Узбекистан" name="country_reg_7">
                        Узбекистан
                    </div>
                    <div>
                        <input type="checkbox" value="Україна" name="country_reg_8">
                        Україна
                    </div>
                    <div>
                        <input type="checkbox" value="Франція" name="country_reg_9">
                        Франція
                    </div>
                </div>
                <button type="submit">
                    Застосувати
                </button>
            </form>
            <div class="products">
                <div class="products__drop-down">
                    <div class="filter-block">
                        Фільтри:
                        @unless(empty($arr))
                            @foreach($arr as $values)
                                @foreach($values as $key => $value)
                                    <div>
                                        {{$value === 'cheap' ? 'Ціна на зростання'
                                            : ($value === 'expensive' ? 'Ціна на спадання' : $value)}}
                                    </div>
                                @endforeach
                            @endforeach
                            <a href="">
                                <button>Скинути</button>
                            </a>
                        @endunless
                    </div>
                    <form action="{{route('pages.books')}}" method="post">
                        @csrf
                        <select name="list_sort" onchange="submitSort()">
                            <option value="" ></option>
                            <option value="cheap">Від дешевих до дорогих</option>
                            <option value="expensive">Від дорогих до дешевих</option>
                        </select>
                        <button type="submit" id="sort_btn"></button>
                    </form>
                </div>
                <div class="products__list">
                    @if(!empty($books[0]))
                        @foreach($books as $book)
                            <x-product.product :product="$book"></x-product.product>
                        @endforeach
                    @else
                        <div class="product-empty">
                            Товарів немає у наявності :(
                        </div>
                    @endif
                </div>
                <div class="products__pagination">
                    @if(!empty($books[0]))
                        <div>
                            {{$books->links()}}
                        </div>
                    @else

                    @endif
                </div>
            </div>
        </div>
        <x-footer.footer></x-footer.footer>
</x-base.base>

