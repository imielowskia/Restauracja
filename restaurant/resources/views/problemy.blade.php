<!doctype html>
<html lang="en">
<head>
    <title>Zgłoś problem</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="https://iconarchive.com/download/i91933/icons8/windows-8/User-Interface-Login.ico">
    <link href="{{ asset('/problemy/css/styleproblems.css') }}" rel="stylesheet">

</head>
<body class="img js-fullheight" style="background-image: url(https://static.vecteezy.com/system/resources/previews/001/959/920/large_2x/blurred-busy-restaurant-background-free-photo.JPG)">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Zgłoś problem</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center">Na czym polega problem?</h3>
                    <form action="#" class="signin-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Przedmiot problemu" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Krótki opis" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Zgłaszający" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Wyślij</button>
                        </div>

                    </form>

                    <div class=" d-flex text-center text-light">
                        <a class="text-light" href="/pracownik" style="margin-left: calc(25%)">Wróć do strony głównej</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--skrypty js--}}
<script src="{{ asset('problemy/js/jquery.min.js') }}"></script>
<script src="{{ asset('problemy/js/popper.js') }}"></script>
<script src="{{ asset('problemy/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('problemy/js/main.js') }}"></script>
</body>
</html>

