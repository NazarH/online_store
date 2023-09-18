<x-admin.admin-nav>
    <x-slot:title>
        OnlineStore - create notebook
        </x-slot>
        @php
            $path = empty($tv) ? 'admin.tv.form' : 'admin.tv.edit';
            $id = empty($tv) ? '' : $tv->id;
        @endphp
        <form action="{{route($path, $id)}}" class="create-form mobile-form" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <div>
                    <div class="create-form__title">Назва</div>
                    <div class="create-form__item">
                        <div>Назва телевізору</div>
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
                        <input type="text" placeholder="55" name="diagonal"
                               value="{{empty($phone) ? old('diagonal') : $phone->diagonal}}">
                    </div>
                    @error('diagonal')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Тип матриці</div>
                        <input type="text" placeholder="QLED" name="type"
                               value="{{empty($phone) ? old('type') : $phone->type}}">
                    </div>
                    @error('type')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Розширення</div>
                        <input type="text" placeholder="3840x2160" name="expansion"
                               value="{{empty($phone) ? old('expansion') : $phone->expansion}}">
                    </div>
                    @error('expansion')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Частота оновлення, Гц</div>
                        <input type="text" placeholder="60" name="refresh_rate"
                               value="{{empty($phone) ? old('refresh_rate') : $phone->refresh_rate}}">
                    </div>
                    @error('refresh_rate')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Контрасність</div>
                        <input type="text" placeholder="5000:1" name="contrast"
                               value="{{empty($phone) ? old('contrast') : $phone->contrast}}">
                    </div>
                    @error('contrast')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Технології</div>
                        <input type="text" placeholder="HDR" name="technologies"
                               value="{{empty($phone) ? old('technologies') : $phone->technologies}}">
                    </div>
                    @error('technologies')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Час відгуку, мс</div>
                        <input type="text" placeholder="6.5" name="response_time"
                               value="{{empty($phone) ? old('response_time') : $phone->response_time}}">
                    </div>
                    @error('response_time')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Яркість, кд/м²</div>
                        <input type="text" placeholder="400" name="brightness"
                               value="{{empty($phone) ? old('brightness') : $phone->brightness}}">
                    </div>
                    @error('brightness')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">Пам'ять</div>
                    <div class="create-form__item">
                        <div>Об'єм оперативної пам'яті</div>
                        <input type="text" placeholder="2" name="ram_total"
                               value="{{empty($phone) ? old('ram_total') : $phone->ram_total}}">
                    </div>
                    @error('ram_total')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Об'єм постійної пам'яті, GB</div>
                        <input type="text" placeholder="32" name="storage"
                               value="{{empty($phone) ? old('storage') : $phone->storage}}">
                    </div>
                    @error('storage')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">Аудіосистема</div>
                    <div class="create-form__item">
                        <div>Аудіосистема, Вт</div>
                        <input type="text" placeholder="15 + 15" name="audio_system"
                               value="{{empty($phone) ? old('audio_system') : $phone->audio_system}}">
                    </div>
                    @error('audio_system')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Технології звуку</div>
                        <input type="text" placeholder="Dolby Audio и DTS-HD" name="sound_tech"
                               value="{{empty($phone) ? old('sound_tech') : $phone->sound_tech}}">
                    </div>
                    @error('sound_tech')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">Формати</div>
                    <div class="create-form__item">
                        <div>Формати відео</div>
                        <input type="text" placeholder="AV1, H.265, H.264, H.263..." name="video_formats"
                               value="{{empty($phone) ? old('video_formats') : $phone->video_formats}}">
                    </div>
                    @error('video_formats')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Формати аудіо</div>
                        <input type="text" placeholder="Dolby, DTS, FLAC, AAC, AC4..." name="audio_formats"
                               value="{{empty($phone) ? old('audio_formats') : $phone->audio_formats}}">
                    </div>
                    @error('audio_formats')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Формати зображення</div>
                        <input type="text" placeholder="PNG, GIF, JPG, BMP..." name="img_formats"
                               value="{{empty($phone) ? old('img_formats') : $phone->img_formats}}">
                    </div>
                    @error('img_formats')
                    <p class="red right">{{$message}}</p>
                    @enderror
                </div>
                <div class="create-form__images">
                    <div class="create-form__title">Операційна система</div>
                    <div class="create-form__item">
                        <div>Операційна система</div>
                        <input type="text" placeholder="Android 10.0" name="os"
                               value="{{empty($phone) ? old('os') : $phone->os}}">
                    </div>
                    @error('os')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">Додаткові роз'єми</div>
                    <div class="create-form__item">
                        <div>Додаткові роз'єми</div>
                        <input type="text" placeholder="HDMI x 3, USB 2.0 x 2, Ethernet (LAN) х 1..." name="add_connect"
                               value="{{empty($phone) ? old('add_connect') : $phone->add_connect}}">
                    </div>
                    @error('add_connect')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">Зв'язок</div>
                    <div class="create-form__item">
                        <div>Частота WiFi</div>
                        <input type="text" placeholder="802.11 a/b/g/n/ac (2x2) 2.4 / 5 ГГц" name="wifi"
                               value="{{empty($phone) ? old('wifi') : $phone->wifi}}">
                    </div>
                    @error('wifi')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Версія Bluetooth</div>
                        <input type="text" placeholder="5.0, BLE" name="bluetooth"
                               value="{{empty($phone) ? old('bluetooth') : $phone->bluetooth}}">
                    </div>
                    @error('bluetooth')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">Габарити</div>
                    <div class="create-form__item">
                        <div>Габарити з підставкою, мм</div>
                        <input type="text" placeholder="1230.4 x 262 x 767" name="dim_with_stand"
                               value="{{empty($phone) ? old('dim_with_stand') : $phone->dim_with_stand}}">
                    </div>
                    @error('dim_with_stand')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Габарити без підставки, мм</div>
                        <input type="text" placeholder="1230.4 x 71.3 x 713.9" name="dim_without_stand"
                               value="{{empty($phone) ? old('dim_without_stand') : $phone->dim_without_stand}}">
                    </div>
                    @error('dim_without_stand')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Вага з підставкою, кг</div>
                        <input type="text" placeholder="14.2" name="weight_with_stand"
                               value="{{empty($phone) ? old('weight_with_stand') : $phone->weight_with_stand}}">
                    </div>
                    @error('weight_with_stand')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Вага без підставки, кг</div>
                        <input type="text" placeholder="13.94" name="weight_without_stand"
                               value="{{empty($phone) ? old('weight_without_stand') : $phone->weight_without_stand}}">
                    </div>
                    @error('weight_without_stand')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">Комплект та країна виробник</div>
                    <div class="create-form__item">
                        <div>Комплект поставки</div>
                        <input type="text" placeholder="Телевізор, пульт, ніжки, гарантійний талон..." name="kit"
                               value="{{empty($phone) ? old('kit') : $phone->kit}}">
                    </div>
                    @error('kit')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Країна виробник</div>
                        <input type="text" placeholder="Китай" name="country"
                               value="{{empty($phone) ? old('country') : $phone->country}}">
                    </div>
                    @error('country')
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
                               value="{{empty($tv) ? '' : $tv->discount}}">
                    </div>
                    <div class="create-form__title">
                        Завантажити фото
                        <input type="file" name="images[]" multiple>
                        @unless(empty($tv))
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
                <button type="submit" class="create-form__submit">{{empty($tv) ? 'Create' : 'Update'}}</button>
            </div>
        </form>
</x-admin.admin-nav>
