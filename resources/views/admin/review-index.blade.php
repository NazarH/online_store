@extends('layouts.admin')
@section('content')

<div class="container">
    <table class="table">
        <tr>
            <th>Відгук</th>
            <th>Товар (код)</th>
            <th>Користувач (id)</th>
            <th></th>
        </tr>
        @unless(empty($reviews))
            @foreach($reviews as $review)
                <tr>
                    <td class="item-name view-review" title="{{$review->review}}">{{$review->review}}</td>
                    <td class="item-center">{{$review->notebook_id !== null ? $review->notebook[0]->code
                            : ($review->book_id !== null ? $review->book[0]->code
                            : ($review->phone_id !== null ? $review->phone[0]->code
                            : ($review->television_id !== null ? $review->tv[0]->code : '')))}}</td>
                    <td class="item-center">{{$review->user[0]->id}}</td>
                    <td class="table-buttons">
                        <a href="{{route('admin.review.accept', $review->id)}}">Прийняти</a>
                        <form action="{{route('admin.review.delete', $review->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Відхилити">
                        </form>
                    </td>
                </tr>
            @endforeach
        @endunless
    </table>
</div>

@endsection
