<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Chợ mới</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="../public/browse/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../public/browse/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/browse/css/magnific-popup.css">
    <link rel="stylesheet" href="../public/browse/css/jquery-ui.css">
    <link rel="stylesheet" href="../public/browse/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../public/browse/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../public/browse/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../public/browse/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../public/browse/css/aos.css">
    <link rel="stylesheet" href="../public/browse/css/rangeslider.css">

    <link rel="stylesheet" href="../public/browse/css/style.css">
    
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

  <script src="../public/browse/js/jquery-3.3.1.min.js"></script>
  <script src="../public/browse/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../public/browse/js/jquery-ui.js"></script>
  <script src="../public/browse/js/popper.min.js"></script>
  <script src="../public/browse/js/bootstrap.min.js"></script>
  <script src="../public/browse/js/owl.carousel.min.js"></script>
  <script src="../public/browse/js/jquery.stellar.min.js"></script>
  <script src="../public/browse/js/jquery.countdown.min.js"></script>
  <script src="../public/browse/js/jquery.magnific-popup.min.js"></script>
  <script src="../public/browse/js/bootstrap-datepicker.min.js"></script>
  <script src="../public/browse/js/aos.js"></script>
  <script src="../public/browse/js/rangeslider.min.js"></script>
  

  <script src="../public/browse/js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Attractions"," Events"," Hotels", " Restaurants"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>

  <script src="../public/browse/js/main.js"></script>
  
  </body>
</html>