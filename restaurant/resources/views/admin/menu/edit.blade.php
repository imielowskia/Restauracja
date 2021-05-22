@extends('admin.common')

@section('title', 'Edit ' . $menu->nazwa)

@section('content')

<div class="container">
  <div class="row">
    <form action="/admin/menu/edit" method="POST">
      @csrf
      <input type="hidden" value="{{$menu->id}}" name="id">
      <input type="text" value="{{$menu->nazwa}}" name="nazwa" placeholder="Nazwa"><br>
      <input type="text" value="{{$menu->opis}}" name="opis" placeholder="Opis"><br>
      <input type="text" value="{{$menu->kategoria}}" name="kategoria" placeholder="Kategoria"><br>
      <input type="text" value="{{$menu->cena}}" name="cena" placeholder="Cena"><br>
      <button class="btn btn-primary">Update!</button>
    </form>
  </div>
</div>

@endsection