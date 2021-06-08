
<div class="col-sm-3 ">

    <table class="table table-bordered table-dark bg-dark mt-4 ">
        <thead>
        <tr>
            <th class="text-center" colspan="3" scope="row">Zamówienie numer stolika -  {{session()->get('idStolik','.')}}</th>
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

        @if(Session()->has('idDania'))
       @foreach(Session()->get('idDania','Dania') as $iddania)

        <tr>
            <th scope="row">{{App\Models\Menu::find($iddania)->nazwa}}</th>
            <td>{{App\Models\Menu::find($iddania)->cena}}</td>

            <td><a href="{{route('usunDanie',['id'=>$iddania])}}"><button type="button" onclick="" class="btn btn-danger">Usuń</button></a></td>
        </tr>

      @endforeach
@endif

        </tbody>
        <thead>
        <tr>
            <th scope="row">Suma</th>
            <td colspan="2">Suma</td>
        </tr>
        </thead>
    </table>

    <div class="d-flex justify-content-sm-end">
        @if(Session()->has('idDania'))
        <a href="{{route('dodajZamowienie')}}"><button type="button" class="btn btn-success">Zatwierdź</button></a>
        <a href="{{route('usunZamowienie')}}"><button type="button" class="btn btn-danger ml-2">Anuluj</button></a></div>
    @endif
</div>
