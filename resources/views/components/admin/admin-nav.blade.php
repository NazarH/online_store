<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=1920">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/create-form.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin-table.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin-banner.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin-order.css')}}">
    <script type="text/javascript" src="{{asset("js/app.js")}}" ></script>
    <title>OnlineStore - адмін-панель</title>
</head>
<body>
    <div class="admin">
        <div class="admin__nav">
            <div class="admin__user">
                <div>
                    {{Auth::user()->name.' '.Auth::user()->surname}}
                </div>
                <div>
                    <a href="/" class="main-page-redirect">Назад</a>
                </div>
            </div>
            <ul class="admin__list">
                <a href="{{route('admin.statistic.index')}}">Статистика</a>
                <a href="{{route('admin.banner.index')}}">Банери</a>
                <a href="{{route('admin.mobile.index')}}">Мобільні телефони</a>
                <a href="{{route('admin.tv.index')}}">Телевізори</a>
                <a href="{{route('admin.notebook.index')}}">Ноутбуки</a>
                <a href="{{route('admin.book.index')}}">Книги</a>
                <a href="{{route('admin.review.index')}}">Відгуки</a>
                <a href="{{route('admin.order.index')}}">Замовлення</a>
                <a href="{{route('admin.user.index')}}">Користувачі</a>
            </ul>
        </div>
        <div class="admin__content">
            {{$slot}}
        </div>
    </div>
</body>
</html>
