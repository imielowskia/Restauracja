<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>KELNER</title>

    <link href="{{asset('css/style_kelner.css')}}" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <link rel="icon" href="waiter.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
@php $stolik=\App\Models\Stoliki::all();@endphp
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand text-light btn disabled" href="#!">Kelner</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-light" href="/">
                        Strona główna
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link text-light" href="kelnermenu">Menu </a></li>
                <li class="nav-item"><a class="nav-link  text-light" href="kelner-zamowienia">Przejdź do widoku początkowego</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="welcome">Wyloguj</a></li>

            </ul>
        </div>
    </div>
</nav>

<div id="main" class="container-fluid ">

    <div class="row ">
        <div class="col-sm-2"></div>
                       <div class="col-sm-7 text-center align-items-sm-center ">
                           <div class="list-group mt-4 ">
                             <a href="#" class="list-group-item list-group-item-action bg-light disabled text-dark">
                                  Wybierz stolik</a>
                               @foreach($stolik as $stoliki)
                              <a href="kelnermenu"  class="list-group-item list-group-item-action bg-dark text-light">Stolik {{$stoliki->id}}</a>
                               @endforeach

                          </div>
        </div>
            <div class="col-sm-3">
            </div>
    </div>
    <div class="row" style="width:25%!important;">
        <div class="col-sm-8"><button>Cofnij do zamówień</button></div>
    </div>

</div>
<!-- Bootstrap core JS-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="../../js/scripts.js"></script>

</body>
</html>
