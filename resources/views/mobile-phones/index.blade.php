<x-base.base>
    <x-slot:title>
        OnlineStore - мобільні телефони
        </x-slot>
        <x-header.header :top_banner="$top_banner"></x-header.header>
        <div class="average products-page">
            <form class="filter" method="post" action="">
                @csrf
                <div class="filter__title title-first">Ціна</div>
                <div class="filter__item price-item">
                    <div>
                        <input type="text" name="price_min_1" placeholder="2000" >
                        <div> — </div>
                        <input type="text" name="price_max_2" placeholder="100000"> Грн
                    </div>
                </div>
                <div class="filter__title">Розширення дисплею</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="960 х 540" name="expansion_1">
                        960 х 540
                    </div>
                    <div>
                        <input type="checkbox" value="1280 x 720" name="expansion_2">
                        1280 x 720
                    </div>
                    <div>
                        <input type="checkbox" value="1920 x 1080" name="expansion_3">
                        1920 x 1080
                    </div>
                    <div>
                        <input type="checkbox" value="2340 x 1080" name="expansion_4">
                        2340 x 1080
                    </div>
                    <div>
                        <input type="checkbox" value="2400 x 1080" name="expansion_5">
                        2400 x 1080
                    </div>
                    <div>
                        <input type="checkbox" value="2560 x 1140" name="expansion_6">
                        2560 x 1140
                    </div>
                </div>
                <div class="filter__title">Тип матриці</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="AMOLED" name="type_1">
                        AMOLED
                    </div>
                    <div>
                        <input type="checkbox" value="Super AMOLED" name="type_2">
                        Super AMOLED
                    </div>
                    <div>
                        <input type="checkbox" value="Dynamic AMOLED" name="type_3">
                        Dynamic AMOLED
                    </div>
                    <div>
                        <input type="checkbox" value="IPS" name="type_4">
                        IPS
                    </div>
                    <div>
                        <input type="checkbox" value="OLED" name="type_5">
                        OLED
                    </div>
                    <div>
                        <input type="checkbox" value="LCD" name="type_6">
                        LCD
                    </div>
                    <div>
                        <input type="checkbox" value="TFT" name="type_7">
                        TFT
                    </div>
                    <div>
                        <input type="checkbox" value="TN" name="type_8">
                        TN
                    </div>
                </div>
                <div class="filter__title">Діагональ екрану</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="6" name="diagonal_1">
                        < 6"
                    </div>
                    <div>
                        <input type="checkbox" value="6.1" name="diagonal_2">
                        6.1"
                    </div>
                    <div>
                        <input type="checkbox" value="6.2" name="diagonal_3">
                        6.2"
                    </div>
                    <div>
                        <input type="checkbox" value="6.3" name="diagonal_4">
                        6.3"
                    </div>
                    <div>
                        <input type="checkbox" value="6.4" name="diagonal_5">
                        6.4"
                    </div>
                    <div>
                        <input type="checkbox" value="6.5" name="diagonal_6">
                        6.5"
                    </div>
                    <div>
                        <input type="checkbox" value="6.6" name="diagonal_7">
                        6.6" >
                    </div>
                </div>
                <div class="filter__title">Частота оновлення екрану</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="60" name="refresh_rate_1">
                        60 Hz
                    </div>
                    <div>
                        <input type="checkbox" value="90" name="refresh_rate_2">
                        90 Hz
                    </div>
                    <div>
                        <input type="checkbox" value="120" name="refresh_rate_3">
                        120 Hz
                    </div>
                    <div>
                        <input type="checkbox" value="144" name="refresh_rate_4">
                        144 Hz
                    </div>
                </div>
                <div class="filter__title">Кількість ядер процессору</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="2" name="core_count_1">
                        < 2
                    </div>
                    <div>
                        <input type="checkbox" value="4" name="core_count_2">
                        4
                    </div>
                    <div>
                        <input type="checkbox" value="8" name="core_count_3">
                        8 >
                    </div>
                </div>
                <div class="filter__title">Оперативна пам'ять</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="2" name="ram_memory_1">
                        < 2 GB
                    </div>
                    <div>
                        <input type="checkbox" value="3" name="ram_memory_2">
                        3 GB
                    </div>
                    <div>
                        <input type="checkbox" value="4" name="ram_memory_3">
                        4 GB
                    </div>
                    <div>
                        <input type="checkbox" value="6" name="ram_memory_4">
                        6 GB
                    </div>
                    <div>
                        <input type="checkbox" value="8" name="ram_memory_5">
                        8 GB
                    </div>
                    <div>
                        <input type="checkbox" value="12" name="ram_memory_6">
                        12 GB
                    </div>
                    <div>
                        <input type="checkbox" value="16" name="diagonal_7">
                        16 GB
                    </div>
                </div>
                <div class="filter__title">Вбудована пам'ять</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="16" name="storage_1">
                        < 16 GB
                    </div>
                    <div>
                        <input type="checkbox" value="32" name="storage_2">
                        32 GB
                    </div>
                    <div>
                        <input type="checkbox" value="64" name="storage_3">
                        64 GB
                    </div>
                    <div>
                        <input type="checkbox" value="128" name="storage_4">
                        128 GB
                    </div>
                    <div>
                        <input type="checkbox" value="256" name="storage_5">
                        256 GB
                    </div>
                    <div>
                        <input type="checkbox" value="512" name="storage_6">
                        512 GB
                    </div>
                    <div>
                        <input type="checkbox" value="1TB" name="storage_7">
                        1 TB
                    </div>
                </div>
                <div class="filter__title">Операційна система</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="iOS" name="os_1">
                        iOS
                    </div>
                    <div>
                        <input type="checkbox" value="Android" name="os_2">
                        Android
                    </div>
                </div>
                <!--
                <div class="filter__title">Кількість мегапікселів основної камери</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="20" name="main_mp_1">
                        < 20 Мп
                    </div>
                    <div>
                        <input type="checkbox" value="48" name="main_mp_2">
                        48 Мп
                    </div>
                    <div>
                        <input type="checkbox" value="64" name="main_mp_3">
                        64 Мп
                    </div>
                    <div>
                        <input type="checkbox" value="100" name="main_mp_4">
                        100 Мп >
                    </div>
                </div>
                -->
                <div class="filter__title">Кількість мегапікселів фронтальної камери</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="20" name="front_mp_1">
                        < 20 Мп
                    </div>
                    <div>
                        <input type="checkbox" value="20" name="front_mp_2">
                        30 Мп
                    </div>
                    <div>
                        <input type="checkbox" value="20" name="front_mp_3">
                        40 Мп >
                    </div>
                </div>
                <div class="filter__title">Кількість SIM-карт</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="1" name="sim_count_1">
                        1
                    </div>
                    <div>
                        <input type="checkbox" value="2" name="sim_count_2">
                        2
                    </div>
                    <div>
                        <input type="checkbox" value="3" name="sim_count_3">
                        3
                    </div>
                </div>
                <div class="filter__title">Матеріал корпусу</div>
                <div class="filter__item">
                    <div>
                        <input type="checkbox" value="Металл" name="material_1">
                        Металл
                    </div>
                    <div>
                        <input type="checkbox" value="Пластик" name="material_2">
                        Пластик
                    </div>
                    <div>
                        <input type="checkbox" value="Скло" name="material_3">
                        Скло
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
                    <form action="{{route('pages.phones')}}" method="post">
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
                    @if(!empty($phones[0]))
                        @foreach($phones as $phone)
                            <x-product.product :product="$phone"></x-product.product>
                        @endforeach
                    @else
                        <div class="product-empty">
                            Товарів немає у наявності :(
                        </div>
                    @endif
                </div>
                <div class="products__pagination">
                    @if(!empty($phones[0]))
                        <div>
                            {{$phones->links()}}
                        </div>
                    @else

                    @endif
                </div>
            </div>
        </div>
        <x-footer.footer></x-footer.footer>
</x-base.base>

