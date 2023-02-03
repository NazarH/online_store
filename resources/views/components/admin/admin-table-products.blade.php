<div class="container">
    <table class="table">
        <tr>
            <th class="item-center">Код товару</th>
            <th>Кількість замовлень</th>
        </tr>
        @unless(empty($orders))
            @foreach($orders as $key => $value)
                <tr>
                    <td class="item-center">{{$key}}</td>
                    <td class="item-center">{{$value}}</td>
                </tr>
            @endforeach
        @endunless
    </table>
</div>
