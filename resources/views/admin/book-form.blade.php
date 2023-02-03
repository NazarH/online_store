<x-admin.admin-nav>
    <x-slot:title>
        OnlineStore - create notebook
        </x-slot>
        @php
            $path = empty($book) ? 'admin.book.form' : 'admin.book.edit';
            $id = empty($book) ? '' : $book->id;
        @endphp
        <form action="{{route($path, $id)}}" class="create-form mobile-form" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <div>
                    <div class="create-form__title">Назва</div>
                    <div class="create-form__item">
                        <div>Назва книги</div>
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
                    <div class="create-form__title">Автор та видавництво</div>
                    <div class="create-form__item">
                        <div>Автор книги</div>
                        <input type="text" placeholder="Джонсон Борис" name="author"
                               value="{{empty($phone) ? old('author') : $phone->author}}">
                    </div>
                    @error('author')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Видавництво</div>
                        <input type="text" placeholder="Vivat" name="publishing"
                               value="{{empty($phone) ? old('publishing') : $phone->publishing}}">
                    </div>
                    @error('publishing')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Рік видання</div>
                        <input type="text" placeholder="2019" name="year"
                               value="{{empty($phone) ? old('year') : $phone->year}}">
                    </div>
                    @error('year')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Країна-виготовник</div>
                        <input type="text" placeholder="Україна" name="country_man"
                               value="{{empty($phone) ? old('country_man') : $phone->country_man}}">
                    </div>
                    @error('country_man')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Країна реєстрації бренду</div>
                        <input type="text" placeholder="Україна" name="country_reg"
                               value="{{empty($phone) ? old('country_reg') : $phone->country_reg}}">
                    </div>
                    @error('country_reg')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__title">Характеристики книги</div>
                    <div class="create-form__item">
                        <div>Кількість сторінок</div>
                        <input type="text" placeholder="400" name="pages_numb"
                               value="{{empty($phone) ? old('pages_numb') : $phone->pages_numb}}">
                    </div>
                    @error('pages_numb')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Вага</div>
                        <input type="text" placeholder="460" name="weight"
                               value="{{empty($phone) ? old('weight') : $phone->weight}}">
                    </div>
                    @error('weight')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Формат книги, мм</div>
                        <input type="text" placeholder="150х205х30" name="format"
                               value="{{empty($phone) ? old('format') : $phone->format}}">
                    </div>
                    @error('format')
                    <p class="red right">{{$message}}</p>
                    @enderror
                </div>
                <div class="create-form__images">
                    <div class="create-form__title">Ціна</div>
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
                               value="{{empty($book) ? '' : $book->discount}}">
                    </div>
                    <div class="create-form__title">
                        Завантажити фото
                        <input type="file" name="images[]" multiple>
                        @unless(empty($book))
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
                <button type="submit" class="create-form__submit">{{empty($book) ? 'Create' : 'Update'}}</button>
            </div>
        </form>
</x-admin.admin-nav>
