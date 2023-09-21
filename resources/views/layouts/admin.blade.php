<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=1920">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/create-form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/admin-table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/admin-banner.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/admin-order.css') }}">

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/banner.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/profile.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/basket.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/product.js') }}"></script>

    <title>OnlineStore - адмін-панель</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body id='adm'>
    <div class="admin">

        <div class="admin__nav">
            <div class="admin__user">
                <div>
                    {{ Auth::user()->name . ' ' . Auth::user()->surname }}
                </div>
                <div>
                    <a href="/" class="main-page-redirect">Назад</a>
                </div>
            </div>

            <ul class="admin__list">
                <a href="{{ route('admin.banner.index') }}">Банери</a>
                <a href="{{ route('admin.category.index') }}">Категорії</a>
                <a href="{{ route('admin.product.index') }}">Товари</a>
                <a href="{{ route('admin.order.index') }}">Замовлення</a>
                <a href="{{ route('admin.user.index') }}">Користувачі</a>
            </ul>
        </div>

        <div class="admin__content">
            @yield('content')
        </div>
    </div>
</body>

</html>
