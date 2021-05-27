@extends('admin.common')

@section('title', 'Add new user')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
            <form action="new" method="POST">
                @csrf
                <input class="btn-block" type="text" name="login" placeholder="Login">
                <input class="btn-block" type="password" name="haslo" placeholder="Haslo">
                <input class="btn-block" type="text" name="imie" placeholder="Imie">
                <input class="btn-block" type="text" name="nazwisko" placeholder="Nazwisko">
                <select class="btn-block custom-select" name="pozycja_id">
                @foreach($roles as $row)
                    <option value="{{$row->id}}">{{$row->nazwa}}</option>
                @endforeach
                </select><br><br>
                <button class="btn-block btn btn-primary">Dodaj!</button>
            </form>
        </div>
    </div>
</div>

@endsection
