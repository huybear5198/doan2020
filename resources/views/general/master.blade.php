<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Chợ mới</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('browse/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('browse/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('browse/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('browse/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('browse/css/owl.carousel.min.cs') }}s">
    <link rel="stylesheet" href="{{ asset('browse/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('browse/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('browse/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('browse/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('browse/css/rangeslider.css') }}">

    <link rel="stylesheet" href="{{ asset('browse/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/js/swiper.min.js"></script>
  </head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

  @include('general.header')

  @include('general.cover')


  @yield('content')

  @include('general.footer')
  </div>

  <script src="{{ asset('browse/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('browse/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('browse/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('browse/js/popper.min.js') }}"></script>
  <script src="{{ asset('browse/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('browse/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('browse/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('browse/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('browse/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('browse/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('browse/js/aos.js') }}"></script>
  <script src="{{ asset('browse/js/rangeslider.min.js') }}"></script>


  <script src="{{ asset('browse/js/typed.js') }}"></script>
  <script>
    var typed = new Typed('.typed-words', {
                          strings: ["Đồ điện tử"," Đồ ăn"," Thực phẩm", " Xe cộ", "..."],
                          typeSpeed: 80,
                          backSpeed: 80,
                          backDelay: 4000,
                          startDelay: 1000,
                          loop: true,
                          showCursor: true
    });
  </script>

  <script src="{{ asset('browse/js/main.js') }}"></script>

  </body>
</html>
