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
                <th>numer</th>
                <th>do zaplaty</th>
                <th>czy zarchiwizowane</th>
                <th>akcje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stoliki as $stolik)
                <tr>
                    <td>{{$stolik['numer']}}</td>
                    <td>{{$stolik['suma']}} zl</td>
                    <td>{{$stolik['zarchiwizowane']}}</td>
                    <td>
                        <form action="{{ url("/kasa/zarchiwizuj") }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$stolik['numer']}}">
                            <input type="submit" class="btn btn-warning" value="zarchiwizuj">
                        </form>
                        <form action="{{ url("/kasa/zaplac") }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$stolik['numer']}}">
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
