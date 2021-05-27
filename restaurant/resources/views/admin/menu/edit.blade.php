@extends('admin.common')

@section('title', 'Edit ' . $menu->nazwa)

@section('content')

<div class="container">
  <div class="row">
    <div class="col-4 offset-4">
      <form action="../edit" method="POST">
        @csrf
        <input type="hidden" value="{{$menu->id}}" name="id">
        <input class="btn-block" disabled value="{{$menu->id}}">
        <input class="btn-block" type="text" value="{{$menu->nazwa}}" name="nazwa" placeholder="Nazwa">
        <input class="btn-block" type="text" value="{{$menu->opis}}" name="opis" placeholder="Opis">
        <select class="btn-block custom-select" name="kategoria_id">
          @foreach($categories as $row)
            @if ($menu->kategoria_id == $row->id)
              <option selected value="{{$row->id}}">{{$row->nazwa}}</option>
            @else
              <option value="{{$row->id}}">{{$row->nazwa}}</option>
            @endif
          @endforeach
        </select>
        <input class="btn-block" type="text" value="{{$menu->cena}}" name="cena" placeholder="Cena"><br>
        <button class="btn-block btn btn-primary">Aktualizuj!</button>
      </form>
    </div>
  </div>
</div>

@endsection