<x-base.base>
    <x-slot:title>
        OnlineStore - ноутбуки
        </x-slot>
        <x-header.header :top_banner="$top_banner"></x-header.header>
        <div class="average products-page">
            <form class="filter" method="post" action="{{route('pages.notebooks')}}">
                @csrf
                <div class="filter__title title-first">Ціна</div>
                <div class="filter__item price-item">
                    <div>
                        <input type="text" name="price_min_1" placeholder="5000">
                        <div> — </div>
                        <input type="text" name="price_max_2" placeholder="200000"> Грн
                    </div>
                </div>
                <div class="filter__title">Процессори</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="Atom" name="series_1">
                        Intel Atom
                    </div>
                    <div>
                        <input type="checkbox" value="Celeron" name="series_2">
                        Intel Celeron
                    </div>
                    <div>
                        <input type="checkbox" value="Pentium" name="series_3">
                        Intel Pentium
                    </div>
                    <div>
                        <input type="checkbox" value="i3" name="series_4">
                        Intel Core i3
                    </div>
                    <div>
                        <input type="checkbox" value="i5" name="series_5">
                        Intel Core i5
                    </div>
                    <div>
                        <input type="checkbox" value="i7" name="series_6">
                        Intel Core i7
                    </div>
                    <div>
                        <input type="checkbox" value="Athlon" name="series_7">
                        AMD Athlon
                    </div>
                    <div>
                        <input type="checkbox" value="Ryzen 3" name="series_8">
                        AMD Ryzen 3
                    </div>
                    <div>
                        <input type="checkbox" value="Ryzen 5" name="series_9">
                        AMD Ryzen 5
                    </div>
                    <div>
                        <input type="checkbox" value="Ryzen 7" name="series_10">
                        AMD Ryzen 7
                    </div>
                </div>
                <div class="filter__title">Діагональ екрану</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="11.6" name="diagonal_1">
                        11.6"
                    </div>
                    <div>
                        <input type="checkbox" value="13" name="diagonal_2">
                        13.3"
                    </div>
                    <div>
                        <input type="checkbox" value="14" name="diagonal_3">
                        14.1"
                    </div>
                    <div>
                        <input type="checkbox" value="15.6" name="diagonal_4">
                        15.6"
                    </div>
                    <div>
                        <input type="checkbox" value="16" name="diagonal_5">
                        16"
                    </div>
                    <div>
                        <input type="checkbox" value="17" name="diagonal_6">
                        17"
                    </div>
                </div>
                <div class="filter__title">Об'єм оперативної пам'яті</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="4" name="ram_memory_1">
                        4
                    </div>
                    <div>
                        <input type="checkbox" value="8" name="ram_memory_2">
                        8
                    </div>
                    <div>
                        <input type="checkbox" value="12" name="ram_memory_3">
                        12
                    </div>
                    <div>
                        <input type="checkbox" value="16" name="ram_memory_4">
                        16
                    </div>
                    <div>
                        <input type="checkbox" value="24" name="ram_memory_5">
                        24
                    </div>
                    <div>
                        <input type="checkbox" value="32" name="ram_memory_6">
                        32
                    </div>
                    <div>
                        <input type="checkbox" value="64" name="ram_memory_7">
                        64
                    </div>
                </div>
                <div class="filter__title">Слотів оперативної пам'яті</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="1" name="slots_1">
                        1
                    </div>
                    <div>
                        <input type="checkbox" value="2" name="slots_2">
                        2
                    </div>
                    <div>
                        <input type="checkbox" value="4" name="slots_3">
                        4
                    </div>
                </div>
                <div class="filter__title">Об'єм SSD</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="64" name="ssd_1">
                        64 GB
                    </div>
                    <div>
                        <input type="checkbox" value="128" name="ssd_2">
                        128 GB
                    </div>
                    <div>
                        <input type="checkbox" value="256" name="ssd_3">
                        256 GB
                    </div>
                    <div>
                        <input type="checkbox" value="512" name="ssd_4">
                        512 GB
                    </div>
                    <div>
                        <input type="checkbox" value="1000" name="ssd_5">
                        1 TB
                    </div>
                    <div>
                        <input type="checkbox" value="2000" name="ssd_6">
                        2 TB
                    </div>
                </div>
                <div class="filter__title">Об'єм HDD</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="500" name="hdd_1">
                        500 GB
                    </div>
                    <div>
                        <input type="checkbox" value="1000" name="hdd_2">
                        1 TB
                    </div>
                    <div>
                        <input type="checkbox" value="2000" name="hdd_3">
                        2 TB
                    </div>
                    <div>
                        <input type="checkbox" value="4000" name="hdd_4">
                        4TB
                    </div>
                </div>
                <div class="filter__title">Тип відеокарти</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" name="video_type_1" value="Немає">
                        Інтегрована
                    </div>
                    <div>
                        <input type="checkbox" name="video_type_2" value="Дискретна">
                        Дискретна
                    </div>
                </div>
                <div class="filter__title">Відеокарта</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="1650" name="video_card_1">
                        Geforce GTX 1650
                    </div>
                    <div>
                        <input type="checkbox" value="1660Ti" name="video_card_2">
                        Geforce GTX 1660Ti
                    </div>
                    <div>
                        <input type="checkbox" value="2050" name="video_card_3">
                        Geforce RTX 2050
                    </div>
                    <div>
                        <input type="checkbox" value="2060" name="video_card_4">
                        Geforce RTX 2060
                    </div>
                    <div>
                        <input type="checkbox" value="2070" name="video_card_5">
                        Geforce RTX 2070
                    </div>
                    <div>
                        <input type="checkbox" value="2080" name="video_card_6">
                        Geforce RTX 2080
                    </div>
                    <div>
                        <input type="checkbox" value="3050" name="video_card_7">
                        Geforce RTX 3050
                    </div>
                    <div>
                        <input type="checkbox" value="3050Ti" name="video_card_8">
                        Geforce RTX 3050Ti
                    </div>
                    <div>
                        <input type="checkbox" value="3060" name="video_card_9">
                        Geforce RTX 3060
                    </div>
                    <div>
                        <input type="checkbox" value="3070" name="video_card_10">
                        Geforce RTX 3070
                    </div>
                    <div>
                        <input type="checkbox" value="3080" name="video_card_11">
                        Geforce RTX 3080
                    </div>
                    <div>
                        <input type="checkbox" value="RX5300XT" name="video_card_12">
                        Radeon RX 5300M
                    </div>
                    <div>
                        <input type="checkbox" value="RX5500XT" name="video_card_13">
                        Radeon RX 5500M
                    </div>
                    <div>
                        <input type="checkbox" value="RX5600XT" name="video_card_14">
                        Radeon RX 5600M
                    </div>
                    <div>
                        <input type="checkbox" value="RX5600XT" name="video_card_15">
                        Radeon RX 5800M
                    </div>
                    <div>
                        <input type="checkbox" value="RX5800XT" name="video_card_16">
                        Radeon RX 6600M
                    </div>
                </div>
                <div class="filter__title">Об'єм відеопам'яті</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" name="video_memory_1" value="2">
                        2 GB
                    </div>
                    <div>
                        <input type="checkbox" name="video_memory_2" value="3">
                        3 GB
                    </div>
                    <div>
                        <input type="checkbox" name="video_memory_3" value="4">
                        4 GB
                    </div>
                    <div>
                        <input type="checkbox" name="video_memory_4" value="6">
                        6 GB
                    </div>
                    <div>
                        <input type="checkbox" name="video_memory_5" value="8">
                        8 GB
                    </div>
                    <div>
                        <input type="checkbox" name="video_memory_6" value="12">
                        12 GB
                    </div>
                    <div>
                        <input type="checkbox" name="video_memory_7" value="16">
                        16 GB
                    </div>
                </div>
                <div class="filter__title">Тип екрану</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" name="type_1" value="IPS">
                        IPS
                    </div>
                    <div>
                        <input type="checkbox" name="type_2" value="TN">
                        TN
                    </div>
                    <div>
                        <input type="checkbox" name="type_3" value="OLED">
                        OLED
                    </div>
                    <div>
                        <input type="checkbox" name="type_4" value="XDR">
                        XDR
                    </div>
                </div>
                <div class="filter__title">Розширення екрану</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" name="expansion_1" value="1366х768">
                        HD+ (1366х768)
                    </div>
                    <div>
                        <input type="checkbox" name="expansion_2" value="1920х1080">
                        FullHD (1920х1080)
                    </div>
                    <div>
                        <input type="checkbox" name="expansion_3" value="2560x1440">
                        2K (2560x1440)
                    </div>
                    <div>
                        <input type="checkbox" name="expansion_4" value="3840x2160">
                        4K (3840x2160)
                    </div>
                </div>
                <div class="filter__title">Частота оновлення</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" name="refresh_rate_1" value="60">
                        60 Hz
                    </div>
                    <div>
                        <input type="checkbox" name="refresh_rate_2" value="120">
                        120 Hz
                    </div>
                    <div>
                        <input type="checkbox" name="refresh_rate_3" value="144">
                        144 Hz
                    </div>
                    <div>
                        <input type="checkbox" name="refresh_rate_4" value="165">
                        165 Hz
                    </div>
                    <div>
                        <input type="checkbox" name="refresh_rate_5" value="240">
                        240 Hz
                    </div>
                    <div>
                        <input type="checkbox" name="refresh_rate_6" value="360">
                        360 Hz
                    </div>
                </div>
                <div class="filter__title">Вага</div>
                <div class="filter__item">
                    <div>
                        <input type="radio" name="weight_1" value="1">
                        < 1 kg
                    </div>
                    <div>
                        <input type="radio" name="weight_1" value="1-1.99">
                        1-2 kg
                    </div>
                    <div>
                        <input type="radio" name="weight_1" value="2-2.99">
                        2-3 kg
                    </div>
                    <div>
                        <input type="radio" name="weight_1" value="3">
                        3 kg >
                    </div>
                </div>
                <div class="filter__title">Ємність акумулятора</div>
                <div class="filter__item">
                    <div>
                        <input type="radio" name="battery_1" value="30">
                        До 30 W*h
                    </div>
                    <div>
                        <input type="radio" name="battery_1" value="30-49.99">
                        30-50 W*h
                    </div>
                    <div>
                        <input type="radio" name="battery_1" value="50-69.99">
                        50-70 W*h
                    </div>
                    <div>
                        <input type="radio" name="battery_1" value="70-89.99">
                        70-90 W*h
                    </div>
                    <div>
                        <input type="radio" name="battery_1" value="90">
                        90 W*h і більше
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
                    <form action="{{route('pages.notebooks')}}" method="post">
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
                    @if(!empty($notebooks[0]))
                        @foreach($notebooks as $notebook)
                            <x-product.product :product="$notebook"></x-product.product>
                        @endforeach
                    @else
                        <div class="product-empty">
                            Товарів немає у наявності :(
                        </div>
                    @endif
                </div>
                <div class="products__pagination">
                    @if(!empty($notebooks[0]))
                        <div>
                            {{$notebooks->links()}}
                        </div>
                    @else

                    @endif
                </div>
            </div>
        </div>
        <x-footer.footer></x-footer.footer>
</x-base.base>
