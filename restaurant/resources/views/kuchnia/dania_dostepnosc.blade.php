@include('kuchnia/header_kuchnia')
<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style_kuchnia.css')}}">
</head>
<!-- Page content-->
<div id="main" class="container-fluid ">
    @php $kategoria=\App\Models\kategorie::find($dania->id);

    @endphp
    <div class="row">
        <div class="col-sm-1"></div>
        <div id="menu-wybor" class="col-sm-10 text-center align-self-center bg-dark" style="margin-top: 2%;">
            <h3 class="text-light mt-4">{{$kategoria->nazwa}}</h3>
            <div class="row mt-4 mb-4">

                @php $i=0;
                @endphp
                @foreach($dania->menu as $danie)
                    @if ($i==0)
                            @endif
                            @php $i=$i+1;
                            @endphp
                            @if ($danie->dostepnosc==1)
                                <div class="col-sm-4 mt-2">
                                <a href="{{route('usun.dostepnosc',['id'=>$danie->id])}}"><button type="button"  class="btn btn-light btn-block custom-button" >{{$danie->nazwa}}</button></a>
                                </div>
                                    @endif
                            @if ($danie->dostepnosc==0)
                                <div class="col-sm-4 mt-2">
                                <a href="{{route('dodaj.dostepnosc',['id'=>$danie->id])}}"><button type="button"  class="btn btn-light btn-block custom-button" style="background-color: #f00" >{{$danie->nazwa}}</button></a>
                                </div>
                                    @endif
                            @if ($i==3)
                        </div>
                        @php $i=0;
                        @endphp
                    @endif
                @endforeach
                <div class="container">
                    <div class="row mt-4">

                        <div class="col-sm-12 mt-2 p-3 d-flex justify-flex-end">
                            <a href="{{route('dostepne_dania')}}"> <button type="button" class="btn btn-danger mt-2 ">Cofnij</button></a>
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

