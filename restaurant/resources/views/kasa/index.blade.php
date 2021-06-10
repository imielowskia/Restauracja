<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasa</title>
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">

</head>
<body>

<div class="container">

    <h1>Kasa</h1>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>nr zamówienia</th>
                <th>nr stolika</th>
                <th>kelner</th>
                <th>Godzina wydania</th>
                <th>Zawartość</th>
                <th>Cena</th>
                <th></th>
                <th>akcje</th>
            </tr>
        </thead>
        <tbody>

            @foreach($zamowienia as $zamowienie)
                <tr>
                    <td>{{$zamowienie['id']}} </td> <!--nr zam-->
                    <td>{{$zamowienie->stolik['numer']}}</td> <!-- nr stolika-->
                    <td>{{$zamowienie->uzytkownik['imie']}}</td>
                    <td>{{$zamowienie['created_at']}}</td>
                    <td>@foreach($zamowienie->menu as $danie){{$danie->nazwa}}, @endforeach</td> <!--zawartosc-->
                    <td>{{$zamowienie->menu->sum('cena')}}</td>  <!--cena-->
                    <td>{{$zamowienie['zaplac']}} zł</td> <!--akcja-->

                    <td>
                        <form action="{{ url("/kasa/zaplac") }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$zamowienie['id']}}">
                            <input type="submit" class="btn btn-success" value="zaplac">
                        </form>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
    <h1><small>Dzisiejszy zarobek: {{$todayTotal}} zł</small></h1>

</div>

</body>
</html>
