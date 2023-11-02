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
    <link rel="stylesheet" href="{{ asset('import/assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/pickupform.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/orderdetail.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/contactus.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/aboutus.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/register.css') }}">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-body-tertiary pt-0">
            <div class="container">
                <a class="navbar-brand pt-0 w-25" href="{{ route('user.home') }}"><img src="{{ asset('import/assets/img/logo.png') }}" class="img-fluid w-75 pt-2" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white {{ Route::is('user.home') ? 'active' : ''}}" href="{{ route('user.home') }}">ပင်မစာမျက်နှာ</a>
                    </li>
                    <li class="nav-item nav-aboutus">
                        <a class="nav-link text-white {{ Route::is('user.about') ? 'active' : ''}}" href="{{ route('user.about') }}">ကုမ္ပဏီအကြောင်း</a>
                    </li>
                    <li class="nav-item nav-pickup">
                        <a class="nav-link text-white {{ Route::is('user.pickupform') ? 'active' : ''}}" href="{{ route('user.pickupform') }}" id="pickupform">ပစ္စည်းပို့ရန်</a>
                    </li>
                    <li class="nav-item nav-orderdetail">
                        <a class="nav-link text-white {{ Route::is('user.orderdetails') ? 'active' : ''}}" href="{{ route('user.orderdetails') }}" id="orderdetails">အော်ဒါအသေးစိတ်</a>
                    </li>
                    <li class="nav-item nav-contactus">
                        <a class="nav-link text-white {{ Route::is('user.contact') ? 'active' : ''}}" href="{{ route('user.contact') }}">ဆက်သွယ်ရန်</a>
                    </li>
                    @guest
                        @if (Route::has('login'))
                        <li class="nav-item nav-login ">
                            <a class="nav-link rounded" href="{{ route('login') }}">အကောင့်ဝင်ရန်</a>
                        </li>
                        @endif
                    @else
                    <li class="nav-item nav-login rounded">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        အကောင့်ထွက်ရန်
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class=" w-100 py-4 flex-shrink-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <img src="{{ asset('import/assets/img/blue_logo.png') }}" class="img-fluid w-50" alt="logo">
                    <p>Fast Box is one of the leading express delivery and <br> last mile delivery company since 2023.</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="mb-3 mt-3">ဆက်သွယ်ရန်</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fa-sharp fa-solid fa-phone"></i><a href="#" class="ms-2">09979668782</a></li>
                        <li class="mb-2"><i class="fa-sharp fa-solid fa-envelope"></i><a href="#" class="ms-2">info@fastboxdelivery.service.com</a></li>
                        <li><i class="fa-sharp fa-solid fa-location-dot"></i><a href="#" class="ms-2">အမှတ်(၁၀)၊ မြေညီထပ်၊ လှိုင်မြို့နယ်၊ ရန်ကုန်။</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-3 mt-3">စာမျက်နှာများ</h5>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-2"><a href="{{ route('user.home') }}">ပင်မစာမျက်နှာ</a></li>
                        <li class="mb-2"><a href="{{ route('user.about') }}">ကုမ္ပဏီအကြောင်း</a></li>
                        <li class="mb-2"><a href="{{ route('user.pickupform') }}">ပစ္စည်းပို့ရန်</a></li>
                        <li class="mb-2"><a href="{{ route('user.orderdetails') }}">အော်ဒါအသေးစိတ်</a></li>
                        <li><a href="{{ route('user.contact') }}">ဆက်သွယ်ရန်</a></li>
                    </ul>
                </div>
                <hr class="mt-3">
                <div class="text-center mt-3">
                    <p>Copyright © 2020: Fast Box Delivery Services. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
