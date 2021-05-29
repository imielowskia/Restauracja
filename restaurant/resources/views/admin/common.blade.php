<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
<body style="overflow-y: auto;">

  @if($errors->any())
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    @foreach($errors->all() as $e)
      <li>{{$e}}</li>
    @endforeach
  </div>
  @endif

    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
          @yield('content')
        </div>
    </section>

    <!-- <div id="preloader"></div> -->

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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="{{ asset('/mainpagestyles/assets/js/main.js') }}"></script>

</body>
</html>

