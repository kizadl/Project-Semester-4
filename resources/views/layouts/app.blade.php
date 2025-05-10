<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>HeartGuard</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/assets/img/logo.png') }}" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="{{ route('user.home') }}" class="logo d-flex align-items-center">
                <h1 class="sitename">HeartGuard.</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('user.home') }}" class="{{ Route::currentRouteName() == 'user.home' ? 'active' : '' }}">Beranda</a></li>
                    <li><a href="{{ route('user.home') }}#about">Tentang</a></li>
                    <li><a href="{{ route('user.home') }}#cards">Layanan</a></li>
                    <li><a href="{{ route('klasifikasi.create') }}#classification" class="{{ Route::currentRouteName() == 'user.klasifikasi' ? 'active' : '' }}">Klasifikasi</a></li>
                    <li><a href="{{ route('user.home') }}#contact">Kontak</a></li>
                    <li class="dropdown"><a href=""><span>Akun</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ route('login') }}">Masuk</a></li>
                            <li><a href="{{ route('register') }}">Daftar</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer id="footer" class="footer dark-background">
        <div class="container">
            <span>Copyright | All Rights Reserved</span>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/assets/js/main.js') }}"></script>

    <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.forEach(function (tooltipTriggerEl) {
        new bootstrap.Tooltip(tooltipTriggerEl);
    });
    </script>

    <script>
    const form = document.querySelector('form');
    const popupContainer = document.querySelector('.popup-container');
    const closeBtn = document.querySelector('.close-btn');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        popupContainer.classList.add('active');
    });

    closeBtn.addEventListener('click', function() {
        popupContainer.classList.remove('active');
        form.submit();
    });
    </script>
</body>

</html>
