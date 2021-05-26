@extends('admin.common')

@section('title', 'Edit ' . $menu->nazwa)

@section('content')

<div class="container">
  <div class="row">
    <form action="../edit" method="POST">
      @csrf
      <input type="hidden" value="{{$menu->id}}" name="id">
      <input type="text" value="{{$menu->nazwa}}" name="nazwa" placeholder="Nazwa"><br>
      <input type="text" value="{{$menu->opis}}" name="opis" placeholder="Opis"><br>
      <select class="custom-select" name="kategoria_id">
        @foreach($categories as $row)
          @if ($menu->kategoria_id == $row->id)
            <option selected value="{{$row->id}}">{{$row->nazwa}}</option>
          @else
            <option value="{{$row->id}}">{{$row->nazwa}}</option>
          @endif
        @endforeach
      </select><br>
      <input type="text" value="{{$menu->cena}}" name="cena" placeholder="Cena"><br>
      <button class="btn btn-primary">Update!</button>
    </form>
  </div>
</div>

@endsection