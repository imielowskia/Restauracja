<?php include_once('../public/functions/header.php'); ?>


<!-- Page content-->
<div id="main" class="container-fluid">
    <div class="row push-up">
        <div class="col-sm-2"></div>

        <div id="menu-wybor" class="col-sm-7 text-center align-self-center bg-dark">

            <h3 class="text-light mt-4">Dania</h3>

                <div class="row mt-4 ">
                    @foreach($dania->menu as $danie)

                        @if ($danie->dostepnosc==1)
                            <div class="col-sm-4 mt-5">
                                <a href="{{route('usun.dostepnosc',['id'=>$danie->id])}}"><button type="button"  class="btn btn-light btn-block custom-button" >{{$danie->nazwa}}</button></a>
                            </div>
                        @endif


                    @endforeach
            </div>
{{--
           <div class="row mt-4 ">

               <div class="col-sm-1"></div>
               <div class="col-sm-2  choice-menu offset-sm-1 text-dark bg-light truncate_text "><a class="text-decoration-none" href="">Pizza Caprisciosa<p>28/32/38zł</p></a></div>
               <div class="col-sm-2  choice-menu offset-sm-1 text-dark bg-light truncate_text "><a class="text-decoration-none" href="">Pizza Peperoni<p>28/32/38zł</p></a></div>
               <div class="col-sm-2  choice-menu offset-sm-1 text-dark bg-light truncate_text "><a class="text-decoration-none" href="">Pizza Włoska<p>28/32/38zł</p></a></div>
               <div class="col-sm-1"></div>
           </div>
             <div class="row mt-4">
                 <div class="col-sm-1"></div>
                 <div class="col-sm-2  choice-menu offset-sm-1 text-dark bg-light truncate_text "><a class="text-decoration-none" href="">Połówka z kurczaka<p>20zł</p></a></div>
                 <div class="col-sm-2  choice-menu offset-sm-1 text-dark bg-light truncate_text "><a class="text-decoration-none" href="">Nuggets 9x + frytki<p>12zl</p></a></div>
                 <div class="col-sm-2  choice-menu offset-sm-1 text-dark bg-light truncate_text "><a class="text-decoration-none" href="">Duże frytki<p>12zł</p></a></div>
                  <div class="col-sm-1"></div>
                </div>
           <div class="row mt-4">
               <div class="col-sm-1"></div>
               <div class="col-sm-2  choice-menu offset-sm-1 text-dark bg-light truncate_text "><a class="text-decoration-none" href="">Kurczak w sosie<p>23zł</p></a></div>
               <div class="col-sm-2  choice-menu offset-sm-1 text-dark bg-light truncate_text "><a class="text-decoration-none" href="">Burger<p>28zł</p></a></div>
               <div class="col-sm-2  choice-menu offset-sm-1 text-dark bg-light truncate_text "><a class="text-decoration-none" href="">Zapiekanka<p>12zł</p></a></div>
                <div class="col-sm-1"></div>
            </div>

            <div class="row mt-4">
               <div class="col-sm-1"></div>
                <div class="col-sm-2  choice-menu offset-sm-1 text-dark bg-light truncate_text "><a class="text-decoration-none" href="">Spaghetti Carbonara<p>28zł</p></a></div>
                <div class="col-sm-2  choice-menu offset-sm-1 text-dark bg-light truncate_text "><a class="text-decoration-none" href="">Lasagne<p>23zł</p></a></div>
                <div class="col-sm-2  choice-menu offset-sm-1 text-dark bg-light truncate_text "><a class="text-decoration-none" href="">Risotto<p>18zł</p></a></div>
                <div class="col-sm-1"></div>
            </div>
--}}



                <div class="container">
                    <div class="row">

                        <div class="col-sm-12 mt-2 p-3 d-flex justify-flex-end">
                            <a href="kelnermenu"> <button type="button" class="btn btn-success mt-2">Dodaj</button></a>
                            <a href="{{route('kelnermenu')}}"> <button type="button" class="btn btn-danger mt-2 ml-2 ">Cofnij</button></a>
                        </div>
                    </div>
                </div>


        </div>
        {{--            zamowienie--}}
        <div class="col-sm-3">

            <table class="table table-bordered table-dark bg-dark mt-4">
                <thead>
                <tr>
                    <th class="text-center" colspan="3" scope="row">Zamówienie</th>

                </tr>
                </thead>
                <thead>
                <tr>
                    <th scope="col">Nazwa</th>
                    <th scope="col">Cena</th>
                    <th scope="col">Akcja</th>
                </tr>
                </thead>
                <!--zawartosc tabeli-->
                <tbody>
                <tr>
                    <th scope="row">Produkt 1</th>
                    <td>Cena Produkt 1</td>
                    <td><button type="button" class="btn btn-danger">Usuń</button>

                    </td>

                </tr>

                <tr>
                    <th scope="row">Produkt 2</th>
                    <td>Cena Produkt 2</td>
                    <td><button type="button" class="btn btn-danger">Usuń</button>

                </tr>
                <tr>
                    <th scope="row">Produkt 3</th>
                    <td> Cena produkt 3</td>
                    <td><button type="button" class="btn btn-danger">Usuń</button>

                </tr>

                </tbody>
                <thead>
                <tr>
                    <th scope="row">Suma</th>
                    <td colspan="2">Suma</td>
                </tr>
                </thead>
            </table>
            <div class="d-flex justify-content-sm-end">
                <button type="button" class="btn btn-success ml-4">Zatwierdź</button>
                <button type="button" class="btn btn-danger ml-2">Anuluj</button></div>
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
