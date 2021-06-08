@include('kuchnia/header_kuchnia')
<div class="container">

    <h1 class="text-white">Zamówienia kelnera:</h1>
    <h1 class="text-white">{{$kelner->imie}} {{$kelner->nazwisko}}</h1>
    <h1 class="text-white">{{$data}}</h1>
    <table class="table table-dark">
        <thead>
        <tr>
            <th>numer stolika</th>
            <th>numer zamowienia</th>
            <th>Kelner</th>
            <th>Godzina</th>
            <th>Zawartość</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($zamowienia as $zamowienie)
        <tr>
            <td>{{$zamowienie->stolik['numer']}}</td> <!-- nr stolika-->
            <td>{{$zamowienie['id']}} </td> <!--nr zam-->
            <td>{{$zamowienie->uzytkownik->imie}} {{$zamowienie->uzytkownik->nazwisko}}</td>
            <td>{{$zamowienie['created_at']}}</td><!--godz-->
            <td>@foreach ($zamowienie->menu as $danie){{$danie->nazwa}}, @endforeach</td> <!--zawartosc-->
                          <td>{{$zamowienie->status->nazwa}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <form action="{{ route('kuchnia_zestawienie_kelner') }}" mothod="get">
        <div class="text-white">Wybierz dzień:</div>
        <input type="date" name="data" value="{{\Carbon\Carbon::today()->toDateString()}}">
        <div class="text-white">Wybierz kelnera:</div>
        <select name="id">
            <option value="wszystkie">Wszystkie</option>
            @foreach(\App\Models\uzytkownicy::all() as $user)
                @if($user->pozycja->id==1)
                    <option value="{{$user->id}}">
                        {{$user->imie}} {{$user->nazwisko}}
                    </option>
                @endif
            @endforeach()
        </select>
        <button type="submit">Wyświetl</button>
    </form>
</div>

</body>
</html>
