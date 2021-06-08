@include('kelner_views/header')

<!-- Page content-->
<div id="main" class="container-fluid ">
@php $kategorie=\App\Models\kategorie::all();

@endphp
    <div class="row">
        <div class="col-sm-2"></div>
        <div id="menu-wybor" class="col-sm-7 text-center align-self-center bg-dark">
                       <h3 class="text-light mt-4">MENU</h3>
                       <div class="row mt-4 mb-4">

@foreach($kategorie as $kategoria)
                           <div class="col-sm-4 mt-5">
                               <a href="../kelner_dania/{{$kategoria->id}}"><button type="button"  class="btn btn-light btn-block custom-button" >
                                   {{$kategoria->nazwa}}</button></a>
                           </div>
                           @endforeach

{{--                           <div class="col-sm-4 mt-2">
                               <a href="napoje"><button type="button"  class="btn btn-light btn-block custom-button">Napoje</button></a>
                           </div>
                           <div class="col-sm-4 mt-2">
                               <a href="alkohole"><button type="button" class="btn btn-light btn-block custom-button">Alkohole</button></a>
                            </div>--}}
                            <div class="container">
                                <div class="row mt-4">

                                    <div class="col-sm-12 mt-2 p-3 d-flex justify-flex-end">
                                        <a href="kelner"> <button type="button" class="btn btn-danger mt-2 ">Cofnij</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

        </div>
{{--            zamowienie--}}
        <div class="col-sm-3 ">

            <table class="table table-bordered table-dark bg-dark mt-4 ">
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
                <button type="button" class="btn btn-success">Zatwierdź</button>
                <button type="button" class="btn btn-danger ml-2">Anuluj</button></div>
        </div>
    </div>



</div>
<!-- Bootstrap core JS-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="../../js/scripts.js"></script>


</div>
</div>
</body>
</html>
