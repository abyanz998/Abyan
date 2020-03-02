<!doctype html>
<html lang="zxx" class="no-js"> <!-- INI DIGANTI WOOYY -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="shortcut icon" href="halal/img/fav.png">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="halal/css/linearicons.css">
    <link rel="stylesheet" href="halal/css/font-awesome.min.css">
    <link rel="stylesheet" href="halal/css/bootstrap.css">
    <link rel="stylesheet" href="halal/css/magnific-popup.css">
    <link rel="stylesheet" href="halal/css/nice-select.css">
    <link rel="stylesheet" href="halal/css/animate.min.css">
    <link rel="stylesheet" href="halal/css/jquery-ui.css">
    <link rel="stylesheet" href="halal/css/owl.carousel.css">
    <link rel="stylesheet" href="halal/css/main.css">

</head>
<body>

  <header id="header" id="home">
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
            <div class="menu-social-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-dribbble"></i></a>
          <a href="#"><i class="fa fa-behance"></i></a>
        </div>
          </div>
          <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
          <a class="btns" href="tel:+953 012 3654 896">+953 012 3654 896</a>
            <a class="btns" href="mailto:support@colorlib.com">support@colorlib.com</a>
            <a class="icons" href="tel:+953 012 3654 896">
              <span class="lnr lnr-phone-handset"></span>
            </a>
            <a class="icons" href="mailto:support@colorlib.com">
              <span class="lnr lnr-envelope"></span>
            </a>
          </div>
        </div>
      </div>
  </div>
    <div class="container main-menu">
      <div class="row align-items-center justify-content-between d-flex">
        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="/">Home</a></li>
          <li><a href="/chef">Chef</a></li>
          <li><a href="/upload">Menu</a></li>
          <li><a href="/statistik">Statistik</a></li>
          <li class="menu-has-children"><a href="">Blog</a>
            <ul>
              <li><a href="blog-home.html">Blog Home</a></li>
              <li><a href="blog-single.html">Blog Single</a></li>
              <li class="menu-has-children"><a href="">Level 2</a>
                <ul>
                  <li><a href="#">Item One</a></li>
                  <li><a href="#">Item Two</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="elements.html">Elements</a></li>
          <li><a href="contact.html">Contact</a></li>

          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest

        </ul>
      </nav><!-- #nav-menu-container -->
      </div>
    </div>
  </header><!-- #header -->

  @yield('content')

    <script src="halal/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
      <script src="halal/js/easing.min.js"></script>
    <script src="halal/js/hoverIntent.js"></script>
    <script src="halal/js/superfish.min.js"></script>
    <script src="halal/js/jquery.ajaxchimp.min.js"></script>
    <script src="halal/js/jquery.magnific-popup.min.js"></script>
    <script src="halal/js/jquery-ui.js"></script>
    <script src="halal/js/owl.carousel.min.js"></script>
    <script src="halal/js/jquery.nice-select.min.js"></script>
    <script src="halal/js/mail-script.js"></script>
    <script src="halal/js/main.js"></script>
</body>
</html>
