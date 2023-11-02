<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fast Box - @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('import/assets/img/car_logo.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('import/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('import/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('import/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('import/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('import/assets/css/orders.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <img id="loading-image" src="{{ asset('import/assets/img/car_logo.png') }}" alt="Loading..." />
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar">
                <a href="{{ route('admin.dashboard') }}" class="navbar-brand mx-4 mb-3">
                    <img src="{{ asset('import/assets/img/logo.png') }}" alt="Logo" class="img-fluid w-100">
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('import/assets/img/profile.png') }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                        <span style="color: #c9bbbb;">Admin</span>
                    </div>
                </div>
                
                <div class="navbar-nav w-100">
                    <a href="{{ route('admin.dashboard') }}" class="nav-item nav-link {{ Route::is('admin.dashboard') ? 'active' : ''}}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{ route('admin.user') }}" class="nav-item nav-link {{ Route::is('admin.user') ? 'active' : ''}}"><i class="fa fa-solid fa-users me-2"></i>Users</a>
                    <a href="{{ route('admin.order') }}" class="nav-item nav-link {{ Route::is('admin.order') ? 'active' : ''}}"><i class="fa fa-sharp fa-solid fa-truck me-2"></i>Orders</a>
                    <!--<a href="{{ route('user.home') }}" class="nav-item nav-link {{ Route::is('user.home') ? 'active' : ''}}"><i class="fas fa-building me-2"></i>Branches</a>-->
                    <a href="{{ route('admin.contact') }}" class="nav-item nav-link {{ Route::is('admin.contact') ? 'active' : ''}}"><i class="fa fa-solid fa-address-book me-2"></i>Contacts</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand navbar-dark sticky-top px-4 py-0" style="background-color: #07509E;">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars text-white"></i>
                </a>
                <div class="digital-clock">00:00:00</div>
                <div class="navbar-nav align-items-center ms-auto">

                    @guest
                        @if (Route::has('login'))
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif

                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <img class="rounded-circle me-lg-2" src="{{ asset('import/assets/img/profile.png') }}" alt="" style="width: 40px; height: 40px;">
                                <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endguest
                </div>
            </nav>
            <!-- Navbar End -->


            <main>
              @yield('content')
            </main>


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="rounded-top p-4" style="background-color: #07509E">
                    <p class="text-center text-white mb-0">&copy;Fast Box Delivery Service, All Right Reserved.</p>
                </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <!--<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>-->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('import/assets/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('import/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('import/assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('import/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('import/assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('import/assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('import/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('import/assets/js/main.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            clockUpdate();
            setInterval(clockUpdate, 1000);
            })

            function clockUpdate() {
            var date = new Date();
            $('.digital-clock').css({'color': '#fff', 'text-shadow': '0 0 6px #FFCE00'});
            function addZero(x) {
                if (x < 10) {
                return x = '0' + x;
                } else {
                return x;
                }
            }

            function twentyFourHour(x) {
                if (x > 24) {
                return x = x - 24;
                } else if (x == 0) {
                return x = 24;
                } else {
                return x;
                }
            }

            var h = addZero(twentyFourHour(date.getHours()));
            var m = addZero(date.getMinutes());
            var s = addZero(date.getSeconds());

            $('.digital-clock').text(h + ':' + m + ':' + s)
            }
    </script>
</body>

</html>