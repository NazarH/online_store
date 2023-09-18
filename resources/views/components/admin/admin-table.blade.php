<div class="container">
    @php
        $create_path = $_SERVER['REQUEST_URI'] === '/admin/notebooks' ? '/admin/notebook/create'
            :  ($_SERVER['REQUEST_URI'] === '/admin/tvs' ? '/admin/tv/create'
            :  ($_SERVER['REQUEST_URI'] === '/admin/books' ? '/admin/book/create'
            :  ($_SERVER['REQUEST_URI'] === '/admin/mobile-phones' ? '/admin/mobile-phone/create' : 0)));
        $search = $_SERVER['REQUEST_URI'] === '/admin/notebooks' ? 'admin.notebook.index'
            :  ($_SERVER['REQUEST_URI'] === '/admin/tvs' ? 'admin.tv.index'
            :  ($_SERVER['REQUEST_URI'] === '/admin/books' ? 'admin.book.index'
            :  ($_SERVER['REQUEST_URI'] === '/admin/mobile-phones' ? 'admin.mobile.index' : 0)));
    @endphp
    <div class="table-attributes">
        <a href="{{asset($create_path)}}">Додати товар</a>
        <form action="{{route($search)}}" method="post">
            @csrf
            <input type="text" name="code" placeholder="Введіть код товару...">
            <button type="submit">Пошук</button>
        </form>
    </div>
    <table class="table">
        <tr>
            <th>Назва товару</th>
            <th>Код товару</th>
            <th>Ціна</th>
            <th></th>
        </tr>
        @unless(empty($products))
            @foreach($products as $product)
                <tr>
                    <td class="item-name">{{$product->name}}</td>
                    <td>{{$product->code}}</td>
                    <td class="item-price">{{$product->price}}</td>
                    <td class="table-buttons">
                        @php
                            $path = $product->table === 'list_mobile_phones' ? 'admin.mobile.edit'
                                :  ($product->table === 'list_tvs' ? 'admin.tv.edit'
                                :  ($product->table === 'list_notebooks' ? 'admin.notebook.edit'
                                :  ($product->table === 'list_books' ? 'admin.book.edit' : 0)));
                        @endphp
                        <a href="{{route($path, $product->id)}}">Редагувати</a>
                        @php
                            $path_del = $product->table === 'list_mobile_phones' ? 'admin.mobile.delete'
                                :  ($product->table === 'list_tvs' ? 'admin.tv.delete'
                                :  ($product->table === 'list_notebooks' ? 'admin.notebook.delete'
                                :  ($product->table === 'list_books' ? 'admin.book.delete' : 0)));
                        @endphp
                        <form action="{{route($path_del, $product->id)}}" method="post">
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
