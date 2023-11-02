<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fast Box - @yield('title')</title>

    <!-- Favicon -->
    <link href="{{ asset('import/assets/img/car_logo.png') }}" rel="icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('import/assets/css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/resetpassword.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <main>
        <div class="container">
          @yield('content')
        </div>
    </main>
</body>
</html>

