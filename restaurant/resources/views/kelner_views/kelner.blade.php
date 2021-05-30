@include('kelner_views/header')
@php $stolik=\App\Models\stoliki::all();@endphp
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
                        <div class="col-sm-3"></div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-2"></div>
        <div class="col-sm-7 text-center align-items-sm-center ">
            <div class="list-group mt-4 ">
                <a href="kelner-zamowienia" class="list-group-item list-group-item-action bg-dark text-light">
                    Cofnij do widoku zamówień</a>


            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>



</div>
<!-- Bootstrap core JS-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="../../js/scripts.js"></script>

</body>
</html>
