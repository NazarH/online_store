<div class="container">
    <table class="table">
        <tr>
            <th>Номер замовлення</th>
            <th>Інформація</th>
            <th></th>
        </tr>
        @unless(empty($orders))
            @foreach($orders as $order)
                <tr>
                    <td class="item-center">{{$order->id}}</td>
                    <td class="item-center">
                        <a href="{{route('admin.order.info', $order->id)}}">Переглянути</a>
                    </td>
                    <td class="table-buttons">
                        @if($order->verify === '0')
                            <a href="{{route('admin.order.accept', $order->id)}}">Підтвердити</a>
                            <form action="{{route('admin.order.delete', $order->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Відхилити">
                            </form>
                        @else
                            <form action="" method="post">
                                <input type="button" value="" disabled>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        @endunless
    </table>
</div>
