@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="table-attributes">
            <form action="{{ route('admin.category.create') }}" class="banners__form-top" id="banner-create" method="post">
                @csrf
                <input type="text" name="name" placeholder="Введіть назву категорії...">
                <button type="submit">Створити</button>
            </form>
        </div>
        <table class="table">
            <tr>
                <th>Назва категорії</th>
                <th></th>
            </tr>
            @unless (empty($categories))
                @foreach ($categories as $category)
                    <tr>
                        <td class="item-name">{{ $category->name }}</td>
                        <td>
                            <form action="" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Видалити">
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endunless
        </table>
    </div>

@endsection
