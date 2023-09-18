@extends('layouts.admin')
@section('content')

        <form action="" class="create-form" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <div>
                    <div class="create-form__item">
                        <div>Оберіть категорію</div>
                        <select name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="create-form__item">
                        <div>Назва товару</div>
                        <input type="text" placeholder="" name="name">
                    </div>
                    @error('name')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Код товару</div>
                        <input type="text" placeholder="" name="code">
                    </div>
                    @error('name')
                    <p class="red right">{{$message}}</p>
                    @enderror
                    <div class="create-form__item">
                        <div>Ціна</div>
                        <input type="text" placeholder="0" name="price">
                    </div>
                    <div class="create-form__item">
                        <div>Знижка</div>
                        <input type="text" placeholder="0%" name="discount">
                    </div>

                    <div class="create-form__title">
                        Завантажити фото
                        <input type="file" name="images[]" multiple>
                    </div>
                </div>
            </div>
            <div class="create-form__subm-block">
                <button type="submit" class="create-form__submit">Створити</button>
            </div>
        </form>

@endsection
