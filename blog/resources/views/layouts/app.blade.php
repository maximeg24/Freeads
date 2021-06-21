<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/">
                  <img src="{{ asset('svg/logo.svg')}}" width="50px" class="pr-3">
                </a>
                <a class="navbar-brand" href="/" class="pl-3">PubliSimple</a>
                <a href=" {{ route('ad.create') }}" class="navbar-brand">Post an ad</a>
                <a class="navbar-brand" href="Checkout/index.php">Checkout</a>
                <form class="form-inline">
                  <a href="/bar">
                        <input class="form-control mr-sm-2 typeahead form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-info my-2 my-sm-0" type="submit" style="background-color: #1FD63C;">Search</button>
                        </a>
                </form>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                    
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="navbar-brand" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="navbar-brand" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                </div>
            </div>
            </nav>

        <main class="py-0">
            @yield('content')
        </main>
    </div>
</body>
<!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5">

  <div style="background-color: #21d192;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="text-uppercase font-weight-bold">Connect to our social networks to see who we are !</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a href="https://fr-fr.facebook.com/people/Maxime-Gendreau/100008138684589">
            <img src="{{ asset('svg/facebook2.svg') }}" width="40px">
          </a>
          

          <!--Instagram-->
          <a href="https://www.instagram.com/maxime_gendreau24/?hl=fr">
            <img src="{{ asset('svg/instagram.svg') }}" width="40px">
          </a>

          <!--Youtube-->
          <a href="https://www.youtube.com/">
            <img src="{{ asset('svg/youtube.svg') }}" width="40px">
          </a>

          <!--Twitter-->
          <a href="https://twitter.com/?lang=fr">
            <img src="{{ asset('svg/twitter.svg') }}" width="40px">
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3 dark-grey-text">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">PubliSimple</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>On this site you can create ads, show the whole community your items for sale
        and quickly give them a 2nd life !</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.6416435533547!2d1.2082204148050264!3d43.53066507912569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a94b349b15e9a7%3A0x995a93cb009284ea!2s10%20Impasse%20du%20Bout%20du%20Monde%2C%2031470%20Fonsorbes!5e0!3m2!1sfr!2sfr!4v1605343671271!5m2!1sfr!2sfr" width="250" height="250" frameborder="0" style="border:black;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Products</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="annonce">Create an ad</a>
        </p>
        <p>
          <a class="dark-grey-text" href="products">Panel</a>
        </p>
        <p>
          <a class="dark-grey-text" href="login">Login</a>
        </p>
        <p>
          <a class="dark-grey-text" href="register">Register</a>
        </p>
        <p>
          <a class="dark-grey-text" href="employment">Join Us</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="footer/CGU.pdf">CGU</a>
        </p>
        <p>
          <a class="dark-grey-text" href="footer/rights_obligation.pdf">Rights and Duties</a>
        </p>
        <p>
          <a class="dark-grey-text" href="footer/cookies.pdf">Cookies</a>
        </p>
        <p>
          <a class="dark-grey-text" href="footer/CGV.pdf">CGV</a>
        </p>
        

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> Toulouse ,TLS 31470 , France</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> PubliSimple@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> 07 82 82 07 19</p>
        <p>
          <i class="fas fa-print mr-3"></i> 05 61 08 53 90</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center text-black-50 py-3">Copyright © 2020 Publisimple</div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>
