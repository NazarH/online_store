<x-admin.admin-nav>
    <x-slot:title>
        OnlineStore - create notebook
        </x-slot>
        @php
            $path = empty($phone) ? 'admin.mobile.form' : 'admin.mobile.edit';
            $id = empty($phone) ? '' : $phone->id;
        @endphp
        <form action="{{route($path, $id)}}" class="create-form mobile-form" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <div>
                    <div class="create-form__title">Назва</div>
                    <div class="create-form__item">
                        <div>Назва телефону</div>
                        <input type="text" placeholder="" name="name"
                               value="{{empty($phone) ? old('name') : $phone->name}}">
                    </div>
                    @error('name')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Код товару</div>
                        <input type="text" placeholder="" name="code"
                               value="{{empty($phone) ? old('code') : $phone->code}}">
                    </div>
                    @error('code')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">Екран</div>
                    <div class="create-form__item">
                        <div>Діагональ екрану</div>
                        <input type="text" placeholder="6.4" name="diagonal"
                               value="{{empty($phone) ? old('diagonal') : $phone->diagonal}}">
                    </div>
                    @error('diagonal')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Тип матриці</div>
                        <input type="text" placeholder="Super AMOLED" name="type"
                               value="{{empty($phone) ? old('type') : $phone->type}}">
                    </div>
                    @error('type')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Розширення дисплею</div>
                        <input type="text" placeholder="2400x1080" name="expansion"
                               value="{{empty($phone) ? old('expansion') : $phone->expansion}}">
                    </div>
                    @error('expansion')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Частота оновлення, Гц</div>
                        <input type="text" placeholder="90" name="refresh_rate"
                               value="{{empty($phone) ? old('refresh_rate') : $phone->refresh_rate}}">
                    </div>
                    @error('refresh_rate')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">Процессор</div>
                    <div class="create-form__item">
                        <div>Назва процесора</div>
                        <input type="text" placeholder="MediaTek Helio G80" name="processor_name"
                               value="{{empty($phone) ? old('processor_name') : $phone->processor_name}}">
                    </div>
                    @error('processor_name')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Тип ядра</div>
                        <input type="text" placeholder="Cortex-A75 (64bit) + Cortex-A55 (64bit)" name="core_type"
                               value="{{empty($phone) ? old('core_type') : $phone->core_type}}">
                    </div>
                    @error('core_type')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Кількість ядер</div>
                        <input type="text" placeholder="8" name="core_count"
                               value="{{empty($phone) ? old('core_count') : $phone->core_count}}">
                    </div>
                    @error('core_count')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Частота, ГГц</div>
                        <input type="text" placeholder="2.0 + 1.8" name="frequency"
                               value="{{empty($phone) ? old('frequency') : $phone->frequency}}">
                    </div>
                    @error('frequency')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Відеоядро</div>
                        <input type="text" placeholder="ARM Mali-G52 MC2" name="video_card"
                               value="{{empty($phone) ? old('video_card') : $phone->video_card}}">
                    </div>
                    @error('video_card')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">Функції пам'яті</div>
                    <div class="create-form__item">
                        <div>Об'єм оперативної пам'яті</div>
                        <input type="text" placeholder="6" name="ram_memory"
                               value="{{empty($phone) ? old('ram_memory') : $phone->ram_memory}}">
                    </div>
                    @error('ram_memory')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Об'єм накопичувачів</div>
                        <input type="text" placeholder="128GB" name="storage"
                               value="{{empty($phone) ? old('storage') : $phone->storage}}">
                    </div>
                    @error('storage')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Формат підтримуваних карт пам'яті</div>
                        <input type="text" placeholder="microSD" name="card_type"
                               value="{{empty($phone) ? old('card_type') : $phone->card_type}}">
                    </div>
                    @error('card_type')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Максимальний об'єм карт пам'яті</div>
                        <input type="text" placeholder="1TB" name="max_card_memory"
                               value="{{empty($phone) ? old('max_card_memory') : $phone->max_card_memory}}">
                    </div>
                    @error('max_card_memory')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">SIM-карти</div>
                    <div class="create-form__item">
                        <div>Кількість SIM-карт</div>
                        <input type="text" placeholder="2" name="sim_count"
                               value="{{empty($phone) ? old('sim_count') : $phone->sim_count}}">
                    </div>
                    @error('sim_count')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Розмір SIM-карт</div>
                        <input type="text" placeholder="Nano-SIM" name="sim_size"
                               value="{{empty($phone) ? old('sim_size') : $phone->sim_size}}">
                    </div>
                    @error('sim_size')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Стандарт зв'язку</div>
                        <input type="text" placeholder="2G, 3G, 4G, 5G" name="standard"
                               value="{{empty($phone) ? old('standard') : $phone->standard}}">
                    </div>
                    @error('standard')
                    <p class="red right">{{$message}}</p>
                    @enderror
                </div>
                <div class="create-form__images">
                    <div class="create-form__title">Операційна система</div>
                    <div class="create-form__item">
                        <div>Операційна система</div>
                        <input type="text" placeholder="Android" name="os"
                               value="{{empty($phone) ? old('os') : $phone->os}}">
                    </div>
                    @error('os')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">Камери</div>
                    <div class="create-form__item">
                        <div>Кількість мегапікселів основної камери, Мп</div>
                        <input type="text" placeholder="64 + 8 + 2 + 2" name="main_mp"
                               value="{{empty($phone) ? old('main_mp') : $phone->main_mp}}">
                    </div>
                    @error('main_mp')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Особливості основної камери</div>
                        <input type="text" placeholder="Автофокус,спалах..." name="main_features"
                               value="{{empty($phone) ? old('main_features') : $phone->main_features}}">
                    </div>
                    @error('main_features')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Запис відео основної камери</div>
                        <input type="text" placeholder="FullHD/1920х1080/стереозвук" name="main_video"
                               value="{{empty($phone) ? old('main_video') : $phone->main_video}}">
                    </div>
                    @error('main_video')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Кількість мегапікселів фронтальної камери</div>
                        <input type="text" placeholder="20" name="front_mp"
                               value="{{empty($phone) ? old('front_mp') : $phone->front_mp}}">
                    </div>
                    @error('front_mp')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Запис відео фронтальної камери</div>
                        <input type="text" placeholder="FullHD/1920х1080/стереозвук" name="front_video"
                               value="{{empty($phone) ? old('front_video') : $phone->front_video}}">
                    </div>
                    @error('front_video')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">Акумулятор</div>
                    <div class="create-form__item">
                        <div>Ємність акумулятора, мА*ч</div>
                        <input type="text" placeholder="5000" name="battery"
                               value="{{empty($phone) ? old('battery') : $phone->battery}}">
                    </div>
                    @error('battery')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">Матеріали та вага</div>
                    <div class="create-form__item">
                        <div>Матеріал корпусу</div>
                        <input type="text" placeholder="Пластик" name="material"
                               value="{{empty($phone) ? old('material') : $phone->material}}">
                    </div>
                    @error('material')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Вага, г</div>
                        <input type="text" placeholder="180" name="weight"
                               value="{{empty($phone) ? old('weight') : $phone->weight}}">
                    </div>
                    @error('weight')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Габарити</div>
                        <input type="text" placeholder="74 х 159.3 х 8.4" name="dimensions"
                               value="{{empty($phone) ? old('dimensions') : $phone->dimensions}}">
                    </div>
                    @error('dimensions')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">Роз'єми</div>
                    <div class="create-form__item">
                        <div>Роз'єми</div>
                        <input type="text" placeholder="3.5 mm Mini-Jack, USB Type-C" name="connectors"
                               value="{{empty($phone) ? old('connectors') : $phone->connectors}}">
                    </div>
                    @error('connectors')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">Гарантія та ціна</div>
                    <div class="create-form__item">
                        <div>Гарантія</div>
                        <input type="text" placeholder="24" name="guarantee"
                               value="{{empty($phone) ? old('guarantee') : $phone->guarantee}}">
                    </div>
                    @error('guarantee')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Ціна</div>
                        <input type="text" placeholder="0" name="price"
                               value="{{empty($phone) ? old('price') : $phone->price}}">
                    </div>
                    @error('price')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Знижка</div>
                        <input type="text" placeholder="0" name="discount"
                               value="{{empty($phone) ? '' : $phone->discount}}">
                    </div>
                    <div class="create-form__title">
                        Завантажити фото
                        <input type="file" name="images[]" multiple>
                        @unless(empty($phone))
                            <div class="image-block">
                                @foreach($images as $image)
                                    <div id='{{$image->id}}'>
                                        <img src="{{asset('/storage/'.$image->image_url)}}" class="image-item  image-phone">
                                        <img src="{{asset('images/x-icon.png')}}" class="image-item-delete" onclick="imgDel({{$image->id}})">
                                    </div>
                                @endforeach
                            </div>
                        @endunless
                    </div>
                </div>
            </div>
            <div class="create-form__subm-block">
                <button type="submit" class="create-form__submit">{{empty($phone) ? 'Create' : 'Update'}}</button>
            </div>
        </form>
</x-admin.admin-nav>
