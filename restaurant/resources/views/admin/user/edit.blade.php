@extends('admin.common')

@section('title', 'Edit ' . $user->nazwa)

@section('content')

<div class="container">
    <div class="row">
        <form action="/admin/users/edit" method="POST">
            @csrf
            <input type="hidden" value="{{$user->id}}" name="id">
            <input type="text" value="{{$user->logowanie}}" name="logowanie" placeholder="Login"><br>
            <input type="password" value="{{$user->haslo}}" name="haslo" placeholder="Haslo"><br>
            <input type="text" value="{{$user->imie}}" name="imie" placeholder="Imie"><br>
            <input type="text" value="{{$user->nazwisko}}" name="nazwisko" placeholder="Nazwisko"><br>
            <input type="text" value="{{$user->stanowisko}}" name="stanowisko" placeholder="Stanowisko"><br>
            <button class="btn btn-primary">Update!</button>
        </form>
    </div>
</div>

@endsection
