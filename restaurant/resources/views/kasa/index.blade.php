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
                <th>numer stolika</th>
                <th>numer zamowienia</th>
                <th>Godzina</th>
                <th>Zawartość</th>
                <th></th>
                <th>akcje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($zamowienia as $zamowienie)
                <tr>
                    <td>{{$zamowienie->stolik['numer']}}</td> <!-- nr stolika-->
                    <td>{{$zamowienie['id']}} </td> <!--nr zam-->
                    <td>{{$zamowienie['created_at']}}</td><!--godz-->
                    <td>@foreach ($zamowienie->menu as $danie){{$danie->nazwa}}, @endforeach</td> <!--zawartosc-->
                    <td>{{$zamowienie['zaplac']}}</td> <!--akcja-->
                    <td>
                     <!--  <form action="{{ url("/kasa/zarchiwizuj") }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$zamowienie['numers']}}">
                            <input type="submit" class="btn btn-warning" value="zarchiwizuj">
                        </form>
-->
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

</div>

</body>
</html>
