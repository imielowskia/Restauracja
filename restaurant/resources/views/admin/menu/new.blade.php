@extends('admin.common')

@section('title', 'Add new menu element')

@section('content')

<div class="container">
  <div class="row">
    <div class="offset-4 col-4">
      <form action="new" method="POST">
        @csrf
        <input class="btn-block" type="text" name="nazwa" placeholder="Nazwa">
        <input class="btn-block" type="text" name="opis" placeholder="Opis">
        <select class="custom-select btn-block" name="kategoria_id">
          @foreach($categories as $row)
            <option value="{{$row->id}}">{{$row->nazwa}}</option>
          @endforeach
        </select>
        <input class="btn-block" type="text" name="cena" placeholder="Cena"><br><br>
        <button class="btn-block btn btn-primary">Dodaj!</button>
      </form>
    </div>
  </div>
</div>

@endsection