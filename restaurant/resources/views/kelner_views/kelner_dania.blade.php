
@include('kelner_views/header')

<!-- Page content-->
<div id="main" class="container-fluid">
    <div class="row push-up">
        <div class="col-sm-2"></div>
            <div id="menu-wybor" class="col-sm-7 text-center align-self-center bg-dark">

{{--                <h3 class="text-light mt-4">Dania</h3>--}}

                    <div class="row mt-4">
                        @foreach($dania->menu as $danie)

                             @if ($danie->dostepnosc==1)
                                <div class="col-sm-4 mt-5">
                                     <a href="../dodaj_danie/{{$danie->id}}"><button type="button"  class="btn btn-light btn-block custom-button" >{{$danie->nazwa}}</button></a>
                                </div>
                            @endif
                        @endforeach
                </div>

                    <div class="container">
                        <div class="row">

                            <div class="col-sm-12 mt-2 p-3 d-flex justify-flex-end">
                                <a href="{{route('kelnermenu')}}"> <button type="button" class="btn btn-danger mt-2 ml-2 ">Cofnij</button></a>
                            </div>
                        </div>
                    </div>


            </div>
        {{--            zamowienie--}}
        @include('kelner_views/zamowienieTabelka')
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
