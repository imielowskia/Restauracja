@extends('admin.common')

@section('title', 'Add new user')

@section('content')

<div class="container">
    <div class="row">
        <form action="/admin/users/new" method="POST">
            @csrf
            <input type="text" name="login" placeholder="Login"><br>
            <input type="password" name="haslo" placeholder="Haslo"><br>
            <input type="text" name="imie" placeholder="Imie"><br>
            <input type="text" name="nazwisko" placeholder="Nazwisko"><br>
            <select class="custom-select" name="pozycja_id">
            @foreach($roles as $row)
                <option value="{{$row->id}}">{{$row->nazwa}}</option>
            @endforeach
            </select><br>
            <button class="btn btn-primary">Add!</button>
        </form>
    </div>
</div>

@endsection
