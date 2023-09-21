<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=1280">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/main-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product/products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/search.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/basket.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/order.css') }}">

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/banner.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/profile.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/basket.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/product.js') }}"></script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body id="app">
    <div class="wrapper">
        <div class="header">
            <header-component
                        :top-banner='@json($top_banner)'
                        :auth-user='@json($user)'
                        :server='@json('http://127.0.0.1:8000/')'
                        csrf="{{ csrf_token() }}"
            />
        </div>

        <div class="content">
            @yield('content')
        </div>

        <footer-component></footer-component>
    </div>
</body>

</html>
