<x-base.base>
    <x-slot:title>
        OnlineStore - телевізори
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
                <div class="filter__title">Діагональ екрану</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="24-27" name="diagonal_1">
                        24-27"
                    </div>
                    <div>
                        <input type="checkbox" value="28-32" name="diagonal_2">
                        28-32"
                    </div>
                    <div>
                        <input type="checkbox" value="39-40" name="diagonal_3">
                        39-40"
                    </div>
                    <div>
                        <input type="checkbox" value="42-43" name="diagonal_4">
                        42-43"
                    </div>
                    <div>
                        <input type="checkbox" value="46-48" name="diagonal_5">
                        46-48"
                    </div>
                    <div>
                        <input type="checkbox" value="49-55" name="diagonal_6">
                        49-55"
                    </div>
                    <div>
                        <input type="checkbox" value="58-60" name="diagonal_7">
                        58-60"
                    </div>
                    <div>
                        <input type="checkbox" value="65-70" name="diagonal_8">
                        65-70"
                    </div>
                    <div>
                        <input type="checkbox" value="75" name="diagonal_9">
                        75" >
                    </div>
                </div>
                <div class="filter__title">Розширення екрану</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="1366х768" name="expansion_1">
                        1366х768
                    </div>
                    <div>
                        <input type="checkbox" value="1920х1080" name="expansion_2">
                        1920х1080
                    </div>
                    <div>
                        <input type="checkbox" value="3840х2160" name="expansion_3">
                        3840х2160
                    </div>
                    <div>
                        <input type="checkbox" value="7680х4320" name="expansion_4">
                        7680х4320
                    </div>
                </div>
                <div class="filter__title">Країна-виробник товару</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="Австрія" name="country_1">
                        Австрія
                    </div>
                    <div>
                        <input type="checkbox" value="Венгрія" name="country_2">
                        Венгрія
                    </div>
                    <div>
                        <input type="checkbox" value="В'єтнам" name="country_3">
                        В'єтнам
                    </div>
                    <div>
                        <input type="checkbox" value="Китай" name="country_4">
                        Китай
                    </div>
                    <div>
                        <input type="checkbox" value="Малайзія" name="country_5">
                        Малайзія
                    </div>
                    <div>
                        <input type="checkbox" value="Польша" name="country_6">
                        Польша
                    </div>
                    <div>
                        <input type="checkbox" value="Південна Корея" name="country_7">
                        Південна Корея
                    </div>
                    <div>
                        <input type="checkbox" value="Словакія" name="country_8">
                        Словакія
                    </div>
                    <div>
                        <input type="checkbox" value="Турція" name="country_9">
                        Турція
                    </div>
                    <div>
                        <input type="checkbox" value="Египет" name="country_10">
                        Египет
                    </div>
                    <div>
                        <input type="checkbox" value="Словенія" name="country_11">
                        Словенія
                    </div>
                </div>
                <div class="filter__title">Тип матриці</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="LCD" name="type_0">
                        LCD
                    </div>
                    <div>
                        <input type="checkbox" value="IPS" name="type_1">
                        IPS
                    </div>
                    <div>
                        <input type="checkbox" value="OLED" name="type_2">
                        OLED
                    </div>
                    <div>
                        <input type="checkbox" value="QLED" name="type_3">
                        QLED
                    </div>
                </div>
                <div class="filter__title">Частота оновлення екрану</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="50" name="refresh_rate_1">
                        50
                    </div>
                    <div>
                        <input type="checkbox" value="60" name="refresh_rate_2">
                        60
                    </div>
                    <div>
                        <input type="checkbox" value="100" name=refresh_rate_3">
                        100
                    </div>
                    <div>
                        <input type="checkbox" value="120" name=refresh_rate_4">
                        120 і більше
                    </div>
                </div>
                <div class="filter__title">Технології</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="HDR" name="technologies_1">
                        HDR
                    </div>
                    <div>
                        <input type="checkbox" value="VRR" name="technologies_2">
                        VRR
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
                                    @if(is_array($value))
                                        <div>
                                            {{implode('-', $value)}}
                                        </div>
                                    @else
                                        <div>
                                            {{$value === 'cheap' ? 'Ціна на зростання'
                                                : ($value === 'expensive' ? 'Ціна на спадання' : $value)}}
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
                            <a href="">
                                <button>Скинути</button>
                            </a>
                        @endunless
                    </div>
                    <form action="{{route('pages.televisions')}}" method="post">
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
                    @if(!empty($televisions[0]))
                        @foreach($televisions as $television)
                            <x-product.product :product="$television"></x-product.product>
                        @endforeach
                    @else
                        <div class="product-empty">
                            Товарів немає у наявності :(
                        </div>
                    @endif
                </div>
                <div class="products__pagination">
                    @if(!empty($televisions[0]))
                        <div>
                            {{$televisions->links()}}
                        </div>
                    @else

                    @endif
                </div>
            </div>
        </div>
        <x-footer.footer></x-footer.footer>
</x-base.base>

