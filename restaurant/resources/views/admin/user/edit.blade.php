@extends('admin.common')

@section('title', 'Edit ' . $user->nazwa)

@section('content')

<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
            <form action="../edit" method="POST">
                @csrf
                <input type="hidden" value="{{$user->id}}" name="id">
                <input class="btn-block" disabled value="{{$user->id}}">
                <input class="btn-block" type="text" value="{{$user->login}}" name="login">
                <input class="btn-block" type="password" name="haslo" placeholder="Haslo">
                <input class="btn-block" type="text" value="{{$user->imie}}" name="imie" placeholder="Imie">
                <input class="btn-block" type="text" value="{{$user->nazwisko}}" name="nazwisko" placeholder="Nazwisko">
                <select class="btn-block custom-select" name="pozycja_id">
                @foreach($roles as $row)
                    @if ($user->pozycja_id == $row->id)
                        <option selected value="{{$row->id}}">{{$row->nazwa}}</option>
                    @else
                    <option value="{{$row->id}}">{{$row->nazwa}}</option>
                    @endif
                @endforeach
                </select><br><br>
                <button class="btn-block btn btn-primary">Update!</button>
            </form>
        </div>
    </div>
</div>

@endsection
