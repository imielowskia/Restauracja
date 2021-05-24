@extends('admin.common')

@section('title', 'Edit ' . $user->nazwa)

@section('content')

<div class="container">
    <div class="row">
        <form action="edit" method="POST">
            @csrf
            <input type="hidden" value="{{$user->id}}" name="id">
            <input type="text" value="{{$user->login}}" name="login" placeholder="Login"><br>
            <input type="password" value="{{$user->haslo}}" name="haslo" placeholder="Haslo"><br>
            <input type="text" value="{{$user->imie}}" name="imie" placeholder="Imie"><br>
            <input type="text" value="{{$user->nazwisko}}" name="nazwisko" placeholder="Nazwisko"><br>
            <select class="custom-select" name="pozycja_id">
            @foreach($roles as $row)
                @if ($user->pozycja_id == $row->id)
                    <option selected value="{{$row->id}}">{{$row->nazwa}}</option>
                @else
                <option value="{{$row->id}}">{{$row->nazwa}}</option>
                @endif
            @endforeach
            </select><br>
            <button class="btn btn-primary">Update!</button>
        </form>
    </div>
</div>

@endsection
