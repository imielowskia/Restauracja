<?php include_once('../public/functions/header.php'); ?>
@php $zamowienie=\App\Models\Zamowienie::all();@endphp
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
                                       @if ($Zamowienia->status=='Do wydania')
                                       <td><a href="{{route('kelner_zmien',['id'=>$Zamowienia->id])}}"> <button type="button" onclick="" class="btn btn-danger">Odbierz</button></a>
                                           @endif


                                       </td>@endforeach
                                   </tr>
                               </table>

                          </div>
        </div>
            <div class="col-sm-3 mt-4"></div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-2"></div>
        <div class="col-sm-7 text-center align-items-sm-center ">
            <div class="list-group mt-4 ">
                <a href="kelner" class="list-group-item list-group-item-action bg-dark text-light">
                    Nowe zamówienie</a>


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
