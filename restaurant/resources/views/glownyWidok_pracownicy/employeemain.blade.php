<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pracownik</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
{{--    linki--}}
    <link href="{{ asset('/mainpagestyles/css/styleproblems.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ asset('/mainpagestyles/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/mainpagestyles/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/mainpagestyles/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/mainpagestyles/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/mainpagestyles/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('/mainpagestyles/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('/mainpagestyles/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{asset('mainpagestyles/assets/css/style.css')}}" rel="stylesheet">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtR48fo07tFOljlalJbpzz4nStduiATr1gcPEx_My6rgN3474omfpW5wjXZLLGa9RaXy8&usqp=CAU">

</head>
<body>


  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="employeemain.blade.php">Restauracja<span>.</span></a></h1>

      <nav class="nav-menu d-none d-lg-block nav-bar-overflow">
        <ul>
          <li><a href="#">Strona dla klientów</a></li>
          <li><a href="#menurestauracji">Menu</a></li>
        </ul>
      </nav>
    </div>
  </header>



  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Nazwa restauracji<span>.</span></h1>
          <h2>Wspólnie jesteśmy zgranym zespołem</h2>
        </div>
      </div>

      <div class="row mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4 col-6">
          <div class="icon-box">
            <i class="ri-slice-fill"></i>
            <h3><a href="log-in-form">Zaloguj się do kuchni</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 ">
          <div class="icon-box">
            <i class="ri-shirt-fill"></i>
            <h3><a href="log-in-form">Zaloguj się jako kelner</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-shopping-basket-2-fill"></i>
            <h3><a href="log-in-form">Zaloguj się do kasy</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-xl-0">
          <div class="icon-box">
            <i class="ri-question-mark"></i>
            <h3><a href="problems">Zgłoś problem</a></h3>
          </div>
        </div>

      </div>
    </div>
  </section>
  <div id="preloader"></div>

  <!-- Skrypty JS bootstrap -->
  <script src="{{ asset('/mainpagestyles/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('/mainpagestyles/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/mainpagestyles/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('/mainpagestyles/assets/vendor/php-email-form/valdiate.js') }}"></script>
  <script src="{{ asset('/mainpagestyles/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/mainpagestyles/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/mainpagestyles/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('/mainpagestyles/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('/mainpagestyles/assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('/mainpagestyles/assets/vendor/aos/aos.js') }}"></script>

  <!-- Skrypt głównej templatki bootstrap -->
  <script src="{{ asset('/mainpagestyles/assets/js/main.js') }}"></script>

</body>
</html>
