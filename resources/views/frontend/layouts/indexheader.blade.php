<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title', 'Chamunda Industries')</title> 
  <meta name="description" content="@yield('description', '')">
  <meta name="keywords" content="@yield('keywords', '')">
  <meta property="og:title" content="Chamunda Industries | Industrial Tanker Trailers & Bulk Transportation Solutions">
  <meta property="og:description" content="Leading manufacturer of tanker trailers, bulk carriers, and custom transport equipment. Trusted worldwide for industrial logistics solutions.">
  <meta property="og:image" content="{{ asset('frontend/images/about-us-image.jpg') }}">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:type" content="website">


  <!-- Favicons -->
  <link href="{{ asset('frontend/images/Chamunda Industries -- Icon.png') }}" rel="icon">
  <link href="{{ asset('frontend/images/Chamunda Industries -- Icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/animations.css') }}" rel="stylesheet">

</head>

<body class="@yield('body_class', '')">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

         <a href="{{ url('/') }}" class="logo height d-flex align-items-center me-auto">
      <!-- Replace the h1 with an image logo -->
      <img src="{{ asset('frontend/images/Chamunda Industries - Logo.png') }}" alt="Chamunda-Industries-Logo" class="logo-img">
    </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('/') }}" {{ Request::is('/') ? 'class=active' : '' }}>Home<br></a></li>
          <li><a href="{{ route('fronted.about') }}" {{ Request::is('about') ? 'class=active' : '' }}>About Us</a></li>
          <!-- <li><a href="services.php">Services</a></li> -->
          <!-- <li><a href="pricing.php">Pricing</a></li> -->
          <li><a href="{{ route('fronted.product', 'all') }}" {{ Request::is('product*') ? 'class=active' : '' }}>Our Products</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="{{ route('fronted.contacus') }}" {{ Request::is('contactus') ? 'class=active' : '' }}>Contact Us</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ route('fronted.contacus') }}">Get a Quote</a>

    </div>
  </header>

  <main class="main">

    @yield('content')

  </main>

  <!-- Vendor JS Files -->
  <!-- <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script> -->


  <!-- Main JS File -->
  <!-- <script src="{{ asset('frontend/js/main.js') }}"></script> -->

</body>
</html>
