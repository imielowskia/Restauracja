@include('kuchnia/header_kuchnia')
    <!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style_kuchnia.css')}}">
</head>

<!-- Page content-->
<div id="main" class="container-fluid ">
    @php $kategorie=\App\Models\kategorie::all();

    @endphp
    <div class="row">
        <div class="col-sm-1"></div>
        <div id="menu-wybor" class="col-sm-10 text-center align-self-center bg-dark" style="margin-top: 2%;">
            <h3 class="text-light mt-4">MENU</h3>
            <div class="row mt-4 mb-4">

                @foreach($kategorie as $kategoria)
                <div class="col-sm-4 mt-5 ">
                    <a href="{{route('dania_dostepnosc',['id'=>$kategoria->id])}}"><button type="button"  class="btn btn-light btn-block custom-button" >
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
                            <a href="{{route('kuchnia')}}"> <button type="button" class="btn btn-danger mt-2 ">Cofnij</button></a>
                        </div>
                    </div>
                </div>
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
