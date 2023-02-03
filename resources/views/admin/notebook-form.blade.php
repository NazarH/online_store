<x-admin.admin-nav>
    <x-slot:title>
        OnlineStore - create notebook
        </x-slot>
        @php
            $path = empty($notebook) ? 'admin.notebook.form' : 'admin.notebook.edit';
            $id = empty($notebook) ? '' : $notebook->id;
        @endphp
        <form action="{{route($path, $id)}}" class="create-form" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <div>
                    <div class="create-form__title">Назва</div>
                    <div class="create-form__item">
                        <div>Назва ноутбуку</div>
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
                        <input type="text" placeholder="15.6" name="diagonal"
                               value="{{empty($phone) ? old('diagonal') : $phone->diagonal}}">
                    </div>
                    @error('diagonal')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Тип екрану</div>
                        <input type="text" placeholder="IPS" name="type"
                               value="{{empty($phone) ? old('type') : $phone->type}}">
                    </div>
                    @error('name')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Розширення екрану</div>
                        <input type="text" placeholder="1920x1080" name="expansion"
                               value="{{empty($phone) ? old('expansion') : $phone->expansion}}">
                    </div>
                    @error('expansion')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Частота оновлення</div>
                        <input type="text" placeholder="60" name="refresh_rate"
                               value="{{empty($phone) ? old('refresh_rate') : $phone->refresh_rate}}">
                    </div>
                    @error('refresh_rate')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">Процессор</div>
                    <div class="create-form__item">
                        <div>Серія процесору</div>
                        <input type="text" placeholder="i5" name="series"
                               value="{{empty($phone) ? old('series') : $phone->series}}">
                    </div>
                    @error('series')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Маркування процесору</div>
                        <input type="text" placeholder="11300H" name="marking"
                               value="{{empty($phone) ? old('marking') : $phone->marking}}">
                    </div>
                    @error('marking')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">Оперативна пам'ять</div>
                    <div class="create-form__item">
                        <div>Об'єм оперативної пам'яті</div>
                        <input type="text" placeholder="8" name="ram_memory"
                               value="{{empty($phone) ? old('ram_memory') : $phone->ram_memory}}">
                    </div>
                    @error('ram_memory')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Кількість слотів</div>
                        <input type="text" placeholder="2" name="slots"
                               value="{{empty($phone) ? old('slots') : $phone->slots}}">
                    </div>
                    @error('slots')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Тип оперативної пам'яті</div>
                        <input type="text" placeholder="DDR4" name="ram_type"
                               value="{{empty($phone) ? old('ram_type') : $phone->ram_type}}">
                    </div>
                    @error('ram_type')
                    <p class="red right">{{$message}}</p>
                    @enderror
                </div>
                <div class="create-form__images">
                    <div class="create-form__title">Накопичувач даних</div>
                    <div class="create-form__item">
                        <div>Об'єм SSD</div>
                        <input type="text" placeholder="256" name="ssd"
                               value="{{empty($phone) ? old('ssd') : $phone->ssd}}">
                    </div>
                    @error('ssd')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Об'єм HDD</div>
                        <input type="text" placeholder="1000" name="hdd"
                               value="{{empty($phone) ? old('hdd') : $phone->hdd}}">
                    </div>
                    @error('hdd')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Кількість відсіків 2.5" SATA</div>
                        <input type="text" placeholder="1" name="sata"
                               value="{{empty($phone) ? old('sata') : $phone->sata}}">
                    </div>
                    @error('sata')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">Відеокарта</div>
                    <div class="create-form__item">
                        <div>Об'єм відеопам'яті</div>
                        <input type="text" placeholder="4" name="video_memory"
                               value="{{empty($phone) ? old('video_memory') : $phone->video_memory}}">
                    </div>
                    @error('video_memory')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Відеоадаптер</div>
                        <input type="text" placeholder="GTX 1650" name="video_card"
                               value="{{empty($phone) ? old('video_card') : $phone->video_card}}">
                    </div>
                    @error('video_card')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">Корпус</div>
                    <div class="create-form__item">
                        <div>Вага</div>
                        <input type="text" placeholder="2.25" name="weight"
                               value="{{empty($phone) ? old('weight') : $phone->weight}}">
                    </div>
                    @error('weight')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Ємність акумулятора</div>
                        <input type="text" placeholder="45" name="battery"
                               value="{{empty($phone) ? old('battery') : $phone->battery}}">
                    </div>
                    @error('battery')
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
                               value="{{empty($notebook) ? '' : $notebook->discount}}">
                    </div>
                    <div class="create-form__title">
                        Завантажити фото
                        <input type="file" name="images[]" multiple>
                        @unless(empty($notebook))
                            <div class="image-block">
                                @foreach($images as $image)
                                    <div id='{{$image->id}}'>
                                        <img src="{{asset('/storage/'.$image->image_url)}}" class="image-item">
                                        <img src="{{asset('images/x-icon.png')}}" class="image-item-delete" onclick="imgDel({{$image->id}})">
                                    </div>
                                @endforeach
                            </div>
                        @endunless
                    </div>
                </div>
            </div>
            <div class="create-form__subm-block">
                <button type="submit" class="create-form__submit">{{empty($notebook) ? 'Create' : 'Update'}}</button>
            </div>
        </form>
</x-admin.admin-nav>
