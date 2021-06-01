<!doctype html>
<html lang="en">
	<head>
		<title>Logowanie</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="icon" href="https://iconarchive.com/download/i91933/icons8/windows-8/User-Interface-Login.ico">
			<link href="{{ asset('/logowanie/css/stylelogin.css') }}" rel="stylesheet">

	</head>
	<body class="img js-fullheight" style="background-image: url(https://static.vecteezy.com/system/resources/previews/001/959/920/large_2x/blurred-busy-restaurant-background-free-photo.JPG)">
{{--    sekcja--}}
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section" style="margin-right: 18px;">Logowanie</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">

			@if(isset($error))
				<div class="alert alert-{{$error['color']}} alert-dismissible fade show" role="alert">
				<strong>Holy guacamole!</strong> {{$error['message']}}
				</div>
			@endif

						<h3 class="mb-4 justify-content-center text-center">Masz konto?</h3>
						<form action="log-in-form" method="POST" class="signin-form">
						@csrf
							<div class="form-group">
								<input type="text" class="form-control" name="login" placeholder="Login" required>
							</div>
							<div class="form-group">
								<input id="password-field" type="password" name="haslo" class="form-control" placeholder="Hasło" required>
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Zaloguj</button>
							</div>
						</form>

						<div class=" d-flex text-center text-light ">
							<button type="submit" class="form-control btn btn-primary submit px-3"><a href="{{url('/')}}" style="color:black;">Wróć do strony głównej</a></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
{{--skrypty js--}}
	<script src="{{ asset('logowanie/js/jquery.min.js') }}"></script>
		<script src="{{ asset('logowanie/js/popper.js') }}"></script>
		<script src="{{ asset('logowanie/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('logowanie/js/main.js') }}"></script>
	</body>
</html>

