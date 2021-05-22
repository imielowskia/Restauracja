@extends('admin.common')

@section('title', 'Add new user')

@section('content')

<div class="container">
    <div class="row">
        <form action="/admin/users/new" method="POST">
            @csrf
            <input type="text" name="logowanie" placeholder="Login"><br>
            <input type="password" name="haslo" placeholder="Haslo"><br>
            <input type="text" name="imie" placeholder="Imie"><br>
            <input type="text" name="nazwisko" placeholder="Nazwisko"><br>
            <input type="text" name="stanowisko" placeholder="Stanowisko"><br>
            <button class="btn btn-primary">Add!</button>
        </form>
    </div>
</div>

@endsection
