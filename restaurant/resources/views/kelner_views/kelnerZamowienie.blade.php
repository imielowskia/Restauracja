<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>KELNER</title>

    <link href="../css/style_kelner.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
    <link rel="icon" href="waiter.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
@php $zamowienie=\App\Models\Zamowienie::all();@endphp

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
                <li class="nav-item"><a class="nav-link text-light" href="kelner">Nowe zamówienie</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="kelnermenu">Wyloguj </a></li>

            </ul>
        </div>
    </div>
</nav>

<div id="main" class="container-fluid ">

    <div class="row ">
        <div class="col-sm-2"></div>
                       <div class="col-sm-7 text-center align-items-sm-center ">
                           <div class="list-group mt-4 ">
                               <table class="table table-bordered table-dark bg-dark mt-4 ">

                                   <thead>
                                   <tr>
                                       <th scope="col">ID zamówienia</th>
                                       <th scope="col">Status</th>
                                       <th scope="col">Numer stolika</th>
                                       <th scope="col">Czas</th>
                                       <th scope="col">Akcja</th>
                                   </tr>


                                   </thead>
                                   <!--zawartosc tabeli-->
                                   <tbody>

                                   @foreach($zamowienie as $Zamowienia)

                                   <tr>
                                       <th scope="row">{{$Zamowienia->id}}</th>
                                       <td>{{$Zamowienia->status}}</td>
                                       <td>{{ $Zamowienia->stolik_id }}</td>
                                       <td>{{ $Zamowienia->updated_at }}</td>
                                       <td><button type="button" onclick="" class="btn btn-danger">Odbierz</button>
                                       </td>

                                    @endforeach
                                   </tr>


                               </table>

                          </div>
        </div>
            <div class="col-sm-3 mt-4">
{{--                <a class="text-light"  href=""><h2 class="ml-5 mt-5">Przejdź do stolików</h2></a>--}}
            </div>
    </div>

</div>
<!-- Bootstrap core JS-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="../../js/scripts.js"></script>

</body>
</html>
